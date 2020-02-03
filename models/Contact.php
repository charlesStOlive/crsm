<?php namespace Waka\Crsm\Models;

use Model;

/**
 * Contact Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    use \Waka\Cloudis\Classes\Traits\CloudiTrait;

    use \Waka\Informer\Classes\Traits\InformerTrait;

    public $cloudiSlug = 'slug';
    public $cloudiImages = [];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'waka_crsm_contacts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [''];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'name' => 'required',
        'surname' => 'required',
    ];

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
    protected $hidden = ['client_id', 'deleted_at'];

    /**
     * @var array Attributes to be removed from publication
     */
    //public $notPublishable = ['id','client_id', 'deleted_at'];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'client' => ['Waka\Crsm\Models\Client'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [
        'informs' => ['Waka\Informer\Models\Inform', 'name' => 'informeable'],
    ];
    public $morphToMany = [
        'montages' => [
            'Waka\Cloudis\Models\Montage',
            'name' => 'montageable',
            'table' => 'waka_cloudis_montageables',
        ],
    ];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * MODEL EVENT
     */
    public function beforeSave()
    {

        if (!$this->key) {
            $this->key = str_Random(15);
        }
    }
    public function afterSave() {
        $this->updateCloudiRelations('attach');
    }
    /**
     * GETTER
     */
    public function getCompleteNameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }
}
