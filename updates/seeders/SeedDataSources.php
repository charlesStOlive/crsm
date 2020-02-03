<?php namespace Waka\Crsm\Updates\Seeders;

use Excel;
use Seeder;
use DB;

class SeedDataSources extends Seeder
{
    public function run()
    {
    /**
     * CONFIGURATION DES FICHIERS DATA SOURCE
    */
    Db::table('waka_utils_data_sources')->truncate();
    DB::unprepared("INSERT INTO `wakaari`.`waka_utils_data_sources` (`id`, `name`, `author`, `plugin`, `model`, `sector_access`, `controller`, `test_id`, `specific_list`, `specific_update`, `specific_create`, `media_files`, `relations_list`, `attributes_list`) VALUES ('1', 'Contact Crsm', 'Waka', 'Crsm', 'Contact', 'client.sector', 'Contacts', '1', '', '', '', 'logo_c:\r\n    label: Logo client\r\n    type: file\r\n    from: client\r\nmontages_client:\r\n    label: Montage client\r\n    type: montages\r\n    from: client\r\nmontages_contact:\r\n    label: Montage contact\r\n    type: montages', '[{\"name\":\"client\"},{\"name\":\"client.country\"},{\"name\":\"client.sector\"}]', '[]')");

    DB::unprepared("INSERT INTO `wakaari`.`waka_utils_data_sources` (`id`, `name`, `author`, `plugin`, `model`, `sector_access`, `controller`, `test_id`, `specific_list`, `specific_update`, `specific_create`, `media_files`, `relations_list`, `attributes_list`) VALUES ('2', 'Client Crsm', 'Waka', 'Crsm', 'Client', 'sector', 'Clients', '1', '', '', '', 'logo_c:\r\n    label: Logo client\r\n    type: file\r\nmontages_client:\r\n    label: Montage client\r\n    type: montages', '[{\"name\":\"country\"}]', '[]')");

    DB::unprepared("INSERT INTO `wakaari`.`waka_utils_data_sources` (`id`, `name`, `author`, `plugin`, `model`, `sector_access`, `controller`, `test_id`, `specific_list`, `specific_update`, `specific_create`, `media_files`, `relations_list`, `attributes_list`) VALUES ('3', 'Projet ( Crsm )', 'Waka', 'Crsm', 'Project', 'client.sector', 'Projects', '1', '', '', '', 'logo_c:\r\n    label: Logo client\r\n    type: file\r\n    from: client\r\nmontages_client:\r\n    label: Montage client\r\n    type: montages\r\n    from: client', '[{\"name\":\"client\"},{\"name\":\"client.country\"},{\"name\":\"cp\"},{\"name\":\"contact\"}]', '[]')");
    // $sql = plugins_path('waka\publisher\updates\sql\waka_publisher_bloc_types.sql');
    // DB::unprepared(file_get_contents($sql));
    }

}