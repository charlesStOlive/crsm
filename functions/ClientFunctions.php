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
                    'v1' => 'Laisser vide pour false sinon : vrai',
                ],
            ],
            'ProjectByState' => [
                'name' => "Tous les projet filtré sur un état",
                'attributes' => [
                    'v1' => 'Etat attendu',
                ],
            ],
            'ProjectByStateByDate' => [
                'name' => "Tous les projet filtré sur un état sur une période",
                'attributes' => [
                    'v1' => 'Etat attendu',
                    'v2' => 'Date de départ',
                    'v3' => 'Date de fin',
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
