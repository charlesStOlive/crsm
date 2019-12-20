<?php namespace Waka\Crsm\Models;

use Model;
use Config;
use \ToughDeveloper\ImageResizer\Classes\Image;
/**
 * Client Model
 */
class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'waka_crsm_clients';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [''];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'name' => 'required|between:4,16',
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
        'deleted_at',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'users' => 'Rainlab\User\Models\User',
    ];
    public $belongsTo = [
        'sector' => 'Waka\Crsm\Models\Sector',
        'country' => 'Waka\Crsm\Models\Country',
        'type' => 'Waka\Crsm\Models\Type',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * Attribute
     */
    public function getLogoAfficheAttribute()
    {
        $mediaUrl = url(Config::get('cms.storage.media.path'));
        $image = new Image($mediaUrl . '/' . $this->logo);
        return '<img src="' . $image->resize(50, 50, ['mode' => 'auto']) . '">';
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
