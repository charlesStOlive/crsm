<?php namespace Waka\Crsm\Models;

use Model;
<<<<<<< HEAD
use Config;
use \ToughDeveloper\ImageResizer\Classes\Image;
=======

>>>>>>> master
/**
 * Client Model
 */
class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;
<<<<<<< HEAD
    use \October\Rain\Database\Traits\SoftDelete;
=======
>>>>>>> master

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
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
<<<<<<< HEAD
    public $rules = [
        'name' => 'required|between:4,16',
        'slug' => 'required|unique:waka_crsm_clients',
    ];
=======
    public $rules = [];
>>>>>>> master

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
<<<<<<< HEAD
        'updated_at',
        'deleted_at',
=======
        'updated_at'
>>>>>>> master
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
<<<<<<< HEAD
    public $hasMany = [
        'users' => 'Rainlab\User\Models\User',
    ];
    public $belongsTo = [
        'sector' => 'waka\crsm\Models\Sector',
        'country' => 'waka\crsm\Models\Country',
        'type' => 'waka\crsm\Models\Type',
    ];
=======
    public $hasMany = [];
    public $belongsTo = [];
>>>>>>> master
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
<<<<<<< HEAD

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
=======
>>>>>>> master
}
