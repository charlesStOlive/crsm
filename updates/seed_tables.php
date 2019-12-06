<?php namespace Waka\Crsm\Updates;

use Excel;
use Seeder;
use Waka\Crsm\Classes\CountryImport;
use Waka\Crsm\Models\Sector;
use Waka\Crsm\Models\Type;
use Waka\Crsm\Models\strate;


class SeedAllTable extends Seeder
{
    public function run()
    {
        Excel::import(new CountryImport, plugins_path('waka/crsm/updates/excels/country.xlsx'));
        $sector = Sector::create([
            'name'                 => 'Défaut',
            'slug'                 => 'defaut'
        ]);
        $type = Type::create([
            'name'                 => 'Prospect',
            'slug'                 => 'prospet'
        ]);
        $type = Type::create([
            'name'                 => 'Client',
            'slug'                 => 'client'
        ]);
        //
        //$sql = plugins_path('waka/crsm/updates/sql/settings.xlsx');
        //DB::unprepared(file_get_contents($sql));
        
    }
}
