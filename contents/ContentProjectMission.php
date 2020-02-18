<?php namespace Waka\Crsm\Contents;

use Backend\Classes\ControllerBehavior;

class ContentProjectMission extends ControllerBehavior
{
    public $contentProjectMissionFormWidget;
    public function __construct($controller)
    {
        parent::__construct($controller);
        $this->contentProjectMissionFormWidget = $this->createContentProjectMissionFormWidget();
    }

    public function onLoadCreateProjectMissionForm()
    {
        $bloc = $this->controller->getBlocModel();

        $this->contentProjectMissionFormWidget->context = post('context');

        $this->vars['behaviorWidget'] = $this->contentProjectMissionFormWidget;
        $this->vars['orderId'] = post('manage_id');
        $this->vars['update'] = false;

        return [
            '#popupCompilatorContent' => $this->makePartial('$/waka/publisher/contents/form/_content_create_form.htm'),
        ];
    }
    //
    public function onLoadUpdateProjectMissionForm()
    {
        $bloc = $this->controller->getBlocModel();
        //
        $recordId = post('record_id');
        $sk = post('_session_key');

        $this->contentProjectMissionFormWidget = $this->createContentProjectMissionFormWidget($recordId);
        $this->contentProjectMissionFormWidget->context = post('context');

        //
        $this->vars['behaviorWidget'] = $this->contentProjectMissionFormWidget;
        //
        $this->vars['orderId'] = post('manage_id');
        $this->vars['recordId'] = $recordId;
        $this->vars['update'] = true;
        //
        return [
            '#popupCompilatorContent' => $this->makePartial('$/waka/publisher/contents/form/_content_create_form.htm'),
        ];
    }

    protected function createContentProjectMissionFormWidget($recordId = null)
    {
        $config = $this->makeConfig('$/waka/crsm/contents/compilers/projectmission.yaml');
        $config->alias = 'contentProjectMissionForm';
        $config->arrayName = 'ProjectMissionForm';

        if (!$recordId) {
            $config->model = new \Waka\Compilator\Models\Content;
        } else {
            $config->model = \Waka\Compilator\Models\Content::find($recordId);
        }

        $widget = $this->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController();

        return $widget;
    }

}
