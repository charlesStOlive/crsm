<?php namespace Waka\Crsm\Updates\Seeders;

use DB;
use Seeder;

class SeedImportExport extends Seeder
{
    public function run()
    {
        Db::table('waka_importexport_config_exports')->truncate();
        Db::table('waka_importexport_config_imports')->truncate();
        Db::table('waka_importexport_types')->truncate();

        echo 'Chargement du classeur CRSM configExport' . PHP_EOL;
        $sql = plugins_path('waka/crsm/updates/sql/waka_importexport_config_exports.sql');
        DB::unprepared(file_get_contents($sql));

        echo 'Chargement du classeur CRSM ConfigImport' . PHP_EOL;
        $sql = plugins_path('waka/crsm/updates/sql/waka_importexport_config_imports.sql');
        DB::unprepared(file_get_contents($sql));

        echo 'Chargement du classeur CRSM IImportExport types' . PHP_EOL;
        $sql = plugins_path('waka/crsm/updates/sql/waka_importexport_types.sql');
        DB::unprepared(file_get_contents($sql));
    }

}
