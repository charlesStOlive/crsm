<?php namespace Waka\Crsm\Updates\Seeders;

use DB;
use Excel;
use Seeder;

class SeedImportExport extends Seeder
{
    public function run()
    {
        Db::table('waka_importexport_config_exports')->truncate();
        Db::table('waka_importexport_config_imports')->truncate();
        Db::table('waka_importexport_types')->truncate();

        $sql = plugins_path('waka/crsm/updates/sql/waka_importexport_config_exports.sql');
        DB::unprepared(file_get_contents($sql));

        $sql = plugins_path('waka/crsm/updates/sql/waka_importexport_config_imports.sql');
        DB::unprepared(file_get_contents($sql));

        $sql = plugins_path('waka/crsm/updates/sql/waka_importexport_types.sql');
        DB::unprepared(file_get_contents($sql));
    }

}
