<?php namespace Waka\Crsm\Models;

use Model;

/**
 * Client Model
 */
class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \Waka\Cloudis\Classes\Traits\CloudiTrait;
    public $cloudiSlug = 'slug';
    public $cloudiImages = ['logo_c'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'waka_crsm_clients';

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
        'name' => 'required|between:3,32',
        'slug' => 'required|unique:waka_crsm_clients',
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
    protected $hidden = ['id', 'country_id', 'sector_id', 'type_id', 'deleted_at'];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'users' => 'Rainlab\User\Models\User',
        'contacts' => 'Waka\Crsm\Models\Contact',
        'projects' => 'Waka\Crsm\Models\Project',
    ];
    public $belongsTo = [
        'sector' => 'Waka\Crsm\Models\Sector',
        'country' => 'Waka\Crsm\Models\Country',
        'type' => 'Waka\Crsm\Models\Type',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [
        'cloudis_files' => [
            'Waka\Cloudis\Models\CloudisFile',
            'name' => 'cloudeable',
        ],
    ];
    public $morphToMany = [
        'montages' => [
            'Waka\Cloudis\Models\Montage',
            'name' => 'montageable',
            'table' => 'waka_cloudis_montageables',
        ],
    ];
    public $attachOne = [
        'logo_c' => 'System\Models\File',
    ];
    public $attachMany = [];

    /**
     * SCOPES
     */
    public function scopeSectorFilter($query, $filtered)
    {
        return $query->whereHas('sector', function ($q) use ($filtered) {
            $q->whereIn('id', $filtered);
        });
    }

    /**
     *
     */
    public function afterSave()
    {
        $this->checkModelCloudisFilesChanges();
        $this->updateCloudiRelations('attach');
    }
    public function afterDelete()
    {
        $this->clouderDeleteAll();
    }
    /**
     * Attribute
     */
    public function getCloudiThumbAttribute()
    {
        if ($this->getCloudiExiste('logo_c')) {
            return '<img src="' . $this->getCloudiBaseUrl('logo_c') . '">';
        } else {
            return "Pas d'image";
        }

    }
    public function getDefaultCountryAttribute()
    {
        return Settings::get('country');
    }
    public function getDefaultTypesAttribute()
    {
        return Settings::get('type');
    }
    public function getDefaultSectorAttribute()
    {
        return Settings::get('sector');
    }

}
