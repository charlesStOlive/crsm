<?php namespace Waka\Crsm\Updates;

use Seeder;

class SeedBases extends Seeder
{
    public function run()
    {
        echo 'Chargement des setings' . PHP_EOL;
        $this->call('Waka\Crsm\Updates\Seeders\SeedSettings');

        echo 'Chargement des Data Sources' . PHP_EOL;
        $this->call('Waka\Crsm\Updates\Seeders\SeedDataSources');

        echo 'Chargement des Data Publishers' . PHP_EOL;
        $this->call('Waka\Crsm\Updates\Seeders\SeedPublishers');

        echo 'Chargement des Data Seed Import Export' . PHP_EOL;
        $this->call('Waka\Crsm\Updates\Seeders\SeedImportExport');

    }
}
