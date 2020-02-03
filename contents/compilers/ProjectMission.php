<?php namespace Waka\Crsm\Contents\Compilers;

use stdClass;

class ProjectMission
{


    public static function proceed($contents, $dataSourceModel) {
        trace_log($contents);
        $datas= [];
        foreach($contents as $content ) {
            $missions = $dataSourceModel->missions;
            foreach($missions as $mission) {
                $obj = [
                    'row.ProjectMission.name' => $mission->name,
                    'row.value.qty' => $mission->qty,
                    'row.value.amount' => $mission->amount,
                ];
                array_push($datas, $obj);
            }   
        }
        return $datas;
    }
}