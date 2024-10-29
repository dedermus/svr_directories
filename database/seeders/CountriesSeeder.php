<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.countries')->truncate();

        DB::table('directories.countries')->insert([

        ]);

    }
}
