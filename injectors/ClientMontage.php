<?php namespace Waka\Crsm\Injectors;

use Event;

use Waka\Cloudis\Controllers\Montages as MontagesController;
use Waka\Cloudis\Models\Montage as MontageModel;

class ClientMontage
{

    static function inject()
    {

        MontageModel::extend(function ($model) {
            $model->morphedByMany['clients'] = ['Waka\Crsm\Models\Client', 'table' => 'waka_cloudis_montageables'];
            $model->morphedByMany['contacts'] = ['Waka\Crsm\Models\Contact', 'table' => 'waka_cloudis_montageables'];
        });

        // MontagesController::extend(function ($controller) {

        //     // Implement behavior if not already implemented
        //     if (!$controller->isClassExtendedWith('Backend.Behaviors.RelationController')) {
        //         $controller->implement[] = 'Backend.Behaviors.RelationController';
        //     }

        //     // Define property if not already defined
        //     if (!isset($controller->relationConfig)) {
        //         $controller->addDynamicProperty('relationConfig');
        //     }

        //     // Splice in configuration safely
        //     $myConfigPath = '$/waka/crsm/controllers/injectors/montage/config_relation.yaml';

        //     $controller->relationConfig = $controller->mergeConfig(
        //         $controller->relationConfig,
        //         $myConfigPath
        //     );

        // });

        // Event::listen('backend.form.extendFields', function ($widget) {

        //     // Only for the User controller
        //     if (!$widget->getController() instanceof montagesController) {
        //         return;
        //     }

        //     // Only for the User model
        //     if (!$widget->model instanceof MontageModel) {
        //         return;
        //     }

        //     // Add an extra birthday field
        //     $widget->addTabFields([
        //         'clientmontage' => [
        //             'label' => 'ClientMontage',
        //             'path' => '$/waka/crsm/controllers/injectors/montage/_field_clientmontage.htm',
        //             'type' => 'partial',
        //             'tab' => 'ClientMontage',
        //         ],
        //     ]);
        // });

    }

}
