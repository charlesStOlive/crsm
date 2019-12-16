<?php namespace Waka\Crsm;

use Backend;
use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UsersController;
use Rainlab\User\Models\User as UserModel;
use Event;
use Lang;

/**
 * crsm Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    //
    public $require = [
        'Rainlab.User',
        'Toughdeveloper.Imageresizer',
        'Waka.Utils',
        ];
    //
    public function pluginDetails()
    {
        return [
            'name' => 'crsm',
            'description' => 'No description provided yet...',
            'author' => 'waka',
            'icon' => 'icon-leaf',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Waka\Crsm\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'waka.crsm.some_permission' => [
                'tab' => 'crsm',
                'label' => 'Some permission',
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'crsm' => [
                'label' => Lang::get('waka.crsm::lang.menu.title'),
                'url' => Backend::url('waka/crsm/clients'),
                'icon' => 'icon-leaf',
                'permissions' => ['waka.crsm.*'],
                'order' => 001,
                'sideMenu' => [
                    'side-menu-clients' => [
                        'label'       => Lang::get('waka.crsm::lang.menu.clients'),
                        'icon'        => 'icon-building',
                        'url'         => Backend::url('waka/crsm/clients'),
                    ],
                    'side-menu-contacts' => [
                        'label'       => Lang::get('waka.crsm::lang.menu.contacts'),
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('waka/crsm/contacts'),
                    ],
                    'side-menu-sectors' => [
                        'label'       => Lang::get('waka.crsm::lang.menu.sectors'),
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('waka/crsm/sectors'),
                    ],
                ],
            ],
        ];
    }
    public function registerSettings()
    {
        return [
            'crsm_settings' => [
                'label'       => Lang::get('waka.crsm::lang.settings.label'),
                'description' => Lang::get('waka.crsm::lang.settings.description'),
                'category'    => Lang::get('waka.crsm::lang.settings.category'),
                'icon'        => 'icon-cog',
                'class'       => 'Waka\Crsm\Models\Settings',
                'order'       => 1,
                'permissions' => ['waka.crsm.*'],
            ]
        ];
    }
}
