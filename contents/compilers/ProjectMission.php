<?php namespace Waka\Crsm\Contents\Compilers;

use stdClass;

class ProjectMission
{


    public static function proceed($contents, $dataSourceModel) {
        $datas= [];
        foreach($contents as $content ) {
            $missions = $dataSourceModel->missions;
            foreach($missions as $mission) {
                $obj = [
                    'value.name' => $mission->name,
                    'value.qty' => $mission->qty,
                    'value.amount' => $mission->amount,
                    'value.description' => self::cleanMD($mission->description),
                ];
                array_push($datas, $obj);
            }   
        }
        return $datas;
    }
    public static function cleanMD($value) {
        $value = str_replace("**", "", $value);
        $value = str_replace("* ", "- ", $value);
        $value = str_replace("*", "", $value);
        $value = str_replace("  ", "", $value);
        return $value;
    }
}