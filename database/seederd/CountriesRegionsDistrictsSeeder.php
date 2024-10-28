<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesRegionsDistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.countries_regions_districts')->truncate();

        DB::table('directories.countries_regions_districts')->insert([

        ]);

    }
}
