<?php

namespace Waka\Crsm\Functions;

use Waka\Crsm\Models\ProjectState;
use Waka\Utils\Classes\BaseFunction;
use Waka\Wcms\Models\Need;
use Waka\Wcms\Models\Solution;

class ContactFunctions extends BaseFunction
{
    public $model;

    public function listFunctionAttributes()
    {
        return [
            'linkedProjects' => [
                'name' => "Liste des projets du contact",
                'attributes' => [
                    'project_state' => [
                        'label' => "Choisissez une ou plusieurs mission",
                        'type' => "taglist",
                        'options' => ProjectState::lists('name', 'id'),
                    ],
                ],
            ],
            'solutionsFiltered' => [
                'name' => "Liste de besoins",
                'attributes' => [
                    'needs' => [
                        'label' => "Choisissez un ou plusieurs besoins",
                        'type' => "taglist",
                        'options' => Solution::lists('name', 'id'),
                    ],
                    'width' => [
                        'label' => "Largeur de l'image solution",
                        'type' => "text",
                    ],
                    'height' => [
                        'label' => "hauteur de l'image solution",
                        'type' => "text",
                    ],
                ],
            ],
            'needsFiltered' => [
                'name' => "Liste de solutions",
                'attributes' => [
                    'solutions' => [
                        'label' => "Choisissez une ou plusieurs solutions",
                        'type' => "taglist",
                        'options' => Need::lists('name', 'id'),
                    ],
                    'width' => [
                        'label' => "Largeur de l'image solution",
                        'type' => "text",
                    ],
                    'height' => [
                        'label' => "hauteur de l'image solution",
                        'type' => "text",
                    ],
                ],
            ],
        ];
    }

    public function linkedProjects($attributes)
    {
        $result = $this->model->projects()->whereHas('project_state', function ($query) use ($attributes) {
            $query->whereIn('id', $attributes['project_state']);
        })->with('project_state')->get()->toArray();
        //trace_log($result);
        return $result;
    }

    public function solutionsFiltered($attributes)
    {
        $results = Solution::whereIn('id', $attributes['solutions'])->with('main_image')->get();
        $finalResult;
        foreach ($results as $key => $result) {
            $finalResult[$key] = $result->toArray();
            $options = [
                'width' => $attributes['width'],
                'height' => $attributes['height'],
            ];
            $finalResult[$key]['main_image'] = [
                'path' => $result->main_image->getUrl($options),
                'width' => $attributes['width'],
                'height' => $attributes['height'],
            ];
        }
        return $finalResult;
    }

    public function needsFiltered($attributes)
    {
        $results = Need::whereIn('id', $attributes['needs'])->with('main_image')->get();
        $finalResult;
        foreach ($results as $key => $result) {
            $finalResult[$key] = $result->toArray();
            $options = [
                'width' => $attributes['width'],
                'height' => $attributes['height'],
            ];
            $finalResult[$key]['main_image'] = [
                'path' => $result->main_image->getUrl($options),
                'width' => $attributes['width'],
                'height' => $attributes['height'],
            ];
        }
        return $finalResult;
    }

    public function projectByStateByDate($attributes)
    {
        return $this->model->projects()->whereHas('project_state', function ($query) use ($attributes) {
            $query->whereIn('id', $attributes['project_state']);
        })->whereBetween('updated_at', [$attributes['start_date'], $attributes['end_date']])
            ->with('project_state')->get()->toArray();
    }

}
