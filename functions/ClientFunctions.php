<?php

namespace Waka\Crsm\Functions;

use Waka\Utils\Classes\BaseFunction;

class ClientFunctions extends BaseFunction
{
    public $model;

    public function listFunctionAttributes()
    {
        return [
            'ProjectActifsOrClosed' => [
                'name' => "Tous les projet actifs OU fermés",
                'attributes' => [
                    'active' => [
                        'label' => "Active",
                        'type' => "checkbox",
                    ],
                ],
            ],
            'ProjectByState' => [
                'name' => "Tous les projet filtré sur un état",
                'attributes' => [
                    'project_state' => [
                        'label' => "Etat d'un projet",
                        'type' => "dropdown",
                        'options' => ['fuck', 'fiesta'],
                    ],
                ],
            ],
            'ProjectByStateByDate' => [
                'name' => "Tous les projet filtré sur un état sur une période",
                'attributes' => [
                    'project_state' => [
                        'label' => "Etat d'un projet",
                        'type' => "dropdown",
                        'options' => ['fuck', 'fiesta'],
                    ],
                    'start_date' => [
                        'label' => "Date de debut",
                        'type' => "dropdown",
                        'options' => ['fuck', 'fiesta'],
                    ],
                    'end_date' => [
                        'label' => "date de fin",
                        'type' => "dropdown",
                        'options' => ['fuck', 'fiesta'],
                    ],
                ],
            ],
        ];
    }

    public function ProjectActifsOrClosed($item)
    {
        return $this->model->projects()->whereHas('project_state', function ($query) use ($item) {
            $query->where('is_running', boolval($item['v1']));
        })->with('project_state')->get()->toArray();
    }

    public function projectByState($item)
    {
        return $this->model->projects()->whereHas('project_state', function ($query) use ($item) {
            $query->where('slug', $item['v1']);
        })->with('project_state')->get()->toArray();
    }

    public function projectByStateByDate($item)
    {
        return $this->model->projects->width('project_state')->get()->toArray();
    }

}
