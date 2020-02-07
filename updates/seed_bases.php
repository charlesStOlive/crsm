<?php namespace Waka\Crsm\Updates;

use Seeder;

class SeedBases extends Seeder
{
    public function run()
    {
        $this->call('Waka\Crsm\Updates\Seeders\SeedSettings');

        $this->call('Waka\Crsm\Updates\Seeders\SeedDataSources');

        $this->call('Waka\Crsm\Updates\Seeders\SeedPublishers');

        $this->call('Waka\Crsm\Updates\Seeders\SeedImportExport');

    }
}
