<?php namespace Waka\Crsm\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sluggable;
    protected $slugs = [
        'slug' => ['name', 'id'],
    ];

    use \Waka\Cloudis\Classes\Traits\CloudiTrait;
    public $cloudiSlug = 'slug';
    public $cloudiImages = ['picture_1', 'picture_2', 'picture_3'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'waka_crsm_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'closed_at',
        'closed_presvision_at',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        "missions" => "Waka\Crsm\Models\Mission"
    ];
    public $belongsTo = [
        'contact' => 'Waka\Crsm\Models\Contact',
        'client' => 'Waka\Crsm\Models\Client',
        'cp' => ['\Backend\Models\User', 'key' => 'cp_id'],
        'project_state' => 'Waka\Crsm\Models\ProjectState',
    ];
    public $belongsToMany = [
        // 'missions' => [
        //     'Waka\Crsm\Models\Mission',
        //     'table' => 'waka_crsm_missions_projects',
        //     'pivot' => ['amount', 'description', 'qty'],
        // ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $morphToMany = [
        'montages' => [
            'Waka\Cloudis\Models\Montage',
            'name' => 'montageable',
            'table' => 'waka_cloudis_montageables',
        ],
    ];
    public $attachOne = [
        'picture_1' => 'System\Models\File',
        'picture_2' => 'System\Models\File',
        'picture_3' => 'System\Models\File',
    ];
    public $attachMany = [];

    /**
     * EVENT
     */
    public function beforeSave() {
        $calcul = new \Waka\Utils\Classes\Aggregator();
        $rowAmount = $this->missions->lists('amount') ?? null;
        $rowQty = $this->missions->lists('qty') ?? null;
        if($rowAmount && $rowQty) $this->total = $calcul->operate2Rows($rowAmount, $rowQty);
        //

    }
    public function afterSave() {
        $this->checkModelCloudisFilesChanges();
        $this->updateCloudiRelations('attach');
    }
    public function afterDelete() {
        $this->clouderDeleteAll();
    }

    /**
     * LISTS
     */
    public function listContacts()
    {
       //trace_log(\Backend\Models\User::lists('first_name', 'id'));
        if ($this->client_id) {
           //trace_log($this->client_id);
            return Contact::where('client_id', '=', $this->client_id)->lists('name', 'id');
        } else {
            return Contact::lists('name', 'id');
        }

    }
    public function listProjectState()
    {
        return ProjectState::lists('name', 'id');

    }
    public function listBU()
    {
        return \Backend\Models\User::lists('first_name', 'id');

    }
}
