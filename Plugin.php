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
        'Toughdeveloper.Imageresizer'
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
        UserModel::extend(function($model) {
            $model->belongsTo['client'] = ['Waka\Crsm\Models\Client'];
        });

        UsersController::extend(function($controller) {

            // Implement behavior if not already implemented
            if (!$controller->isClassExtendedWith('Backend.Behaviors.RelationController')) {
                $controller->implement[] = 'Backend.Behaviors.RelationController';
            }
        
            // Define property if not already defined
            if (!isset($controller->relationConfig)) {
                $controller->addDynamicProperty('relationConfig');
            }
        
            // Splice in configuration safely
            $myConfigPath = '$/waka/crsm/controllers/users/config_relation.yaml';
        
            $controller->relationConfig = $controller->mergeConfig(
                $controller->relationConfig,
                $myConfigPath
            );
        
        });

        Event::listen('backend.form.extendFields', function($widget) {

            // Only for the User controller
            if (!$widget->getController() instanceof UsersController) {
                return;
            }

            // Only for the User model
            if (!$widget->model instanceof UserModel) {
                return;
            }

            // Add an extra birthday field
            $widget->addTabFields([
                'client' => [
                    'label'   => 'Client',
                    'path' => '$/waka/crsm/controllers/users/_field_client.htm',
                    'type'    => 'partial',
                    'tab' => 'Client'
                ]
            ]);
        });

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
                'label' => 'CRM',
                'url' => Backend::url('waka/crsm/clients'),
                'icon' => 'icon-leaf',
                'permissions' => ['waka.crsm.*'],
                'order' => 001,
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
