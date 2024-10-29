<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Svr\Directories\Seeders;

class DirectoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Seeders\MarkTypesSeeder())->run();
        (new Seeders\ToolsLocationsSeeder())->run();
        (new Seeders\OutTypesSeeder())->run();
        (new Seeders\OutBasisesSeeder())->run();
        (new Seeders\KeepingPurposesSeeder())->run();
        (new Seeders\MarkToolTypesSeeder())->run();
        (new Seeders\MarkStatusesSeeder())->run();
        (new Seeders\GendersSeeder())->run();
        (new Seeders\AnimalsSpeciesSeeder())->run();
        (new Seeders\KeepingTypesSeeder())->run();
        (new Seeders\AnimalsBreedsSeeder())->run();
        (new Seeders\CountriesSeeder())->run();
        (new Seeders\CountriesRegionsSeeder())->run();
        (new Seeders\CountriesRegionsDistrictsSeeder())->run();
    }

}
