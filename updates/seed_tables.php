<?php namespace Waka\Crsm\Updates;

use Excel;
use Seeder;
use DB;
use Waka\Crsm\Classes\CountryImport;
use Waka\Crsm\Models\Sector;
use Waka\Crsm\Models\Type;
use Waka\Crsm\Models\State;
use Waka\Crsm\Models\Mission;
use Waka\Crsm\Models\ProjectState;
use Backend\Models\User;


class SeedAllTable extends Seeder
{
    public function run()
    {
        $this->call('Waka\Crsm\Updates\Seeders\SeedSettings');

        $this->call('Waka\Crsm\Updates\Seeders\SeedDataSources');

        $this->call('Waka\Crsm\Updates\Seeders\SeedPublishers');

        $this->call('Waka\Crsm\Updates\Seeders\SeedProjectsMissions');

        $this->call('Waka\Crsm\Updates\Seeders\SeedImportExport');

        $this->call('Waka\Crsm\Updates\Seeders\SeedContactsClients');

    }
}
