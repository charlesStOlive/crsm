<?php

namespace Waka\Crsm\Functions;

use Waka\Crsm\Models\Mission;
use Waka\Crsm\Models\Sector;
use Waka\Utils\Classes\BaseFunction;
use Waka\Wcms\Models\Solution;

class ProjectFunctions extends BaseFunction
{
    public $model;

    public function getDataSource()
    {
        return \Waka\Utils\Models\DataSource::where('model', 'Project')->first();
    }

    public function listFunctionAttributes()
    {
        return [
            'allMissions' => [
                'name' => "Liste des missions du projet",
            ],
            'missionsTemplate' => [
                'name' => "Liste des missions template",
                'attributes' => [
                    'missions' => [
                        'label' => "Choisissez une ou plusieurs mission",
                        'type' => "taglist",
                        'options' => Mission::where('is_template', true)->lists('name', 'id'),
                    ],
                ],
            ],
            'solutionsFiltered' => [
                'name' => "Liste des solutions",
                'attributes' => [
                    'solutions' => [
                        'label' => "Choisissez une ou plusieurs solutions",
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

            'allContacts' => [
                'name' => "Tous les contacts du projet",
            ],
            'getCloudiImage' => [
                'name' => "Choisissez un montage",
                'attributes' => [
                    'cloudiId' => [
                        'label' => "Choisissez une image",
                        'type' => "dropdown",
                        'options' => $this->getCloudiList(),
                    ],
                    'width' => [
                        'label' => "Largeur",
                        'type' => "text",
                    ],
                    'height' => [
                        'label' => "hauteur",
                        'type' => "text",
                    ],
                ],
            ],
            'getSectorContent' => [
                'name' => "Prendre un bloc de contenu du secteur",
                'attributes' => [
                    'codes' => [
                        'label' => "Code du bloc à utilser",
                        'type' => "taglist",
                        'options' => Sector::first()->contentCodeList(),
                    ],
                ],
            ],
        ];
    }

    public function allMissions($attributes)
    {
        $result = $this->model->missions()->get()->toArray();
        return $result;
    }
    public function missionsTemplate($attributes)
    {
        $result = Mission::whereIn('id', $attributes['missions'])->get()->toArray();
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

    public function allContacts($attributes)
    {
        $result = $this->model->client->contacts->get()->toArray();
        $result['cp'] = $this->model->cp;
        $result['main'] = $this->model->contact;
        return $result;
    }

    public function getSectorContent($attributes)
    {
        $contents = $this->model->client->sector->content;
        $result = [];
        foreach ($contents as $content) {
            if (in_array($content['code'], $attributes['codes'])) {
                array_push($result, $content);
            }
        }
        return $result;
    }

    public function getCloudiList()
    {
        $dataSource = $this->getDataSource();
        return $dataSource->getImagesList();

    }

    // public function getCloudiImage($attributes)
    // {
    //     $result = "";
    //     return $result;
    // }

}
