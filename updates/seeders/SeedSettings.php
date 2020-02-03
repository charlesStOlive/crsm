<?php namespace Waka\Crsm\Updates\Seeders;

use DB;
use Excel;
use Seeder;

class SeedSettings extends Seeder
{
    public function run()
    {
        Excel::import(new \Waka\Crsm\Classes\Imports\CountryImport, plugins_path('waka/crsm/updates/excels/country.xlsx'));
        //
        $sql = plugins_path('waka/crsm/updates/sql/settings.sql');
        DB::unprepared(file_get_contents($sql));
    }

}
