<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.genders')->truncate();

        DB::table('directories.genders')->insert([
            [
                "gender_guid_self" => "06df8bc3-58db-4679-82a1-7b0751d300e6",
                "gender_name" => "Самец",
                "gender_value_horriot" => "MALE",
                "gender_selex_code" => "1",
                "gender_status" => "enabled",
                "gender_status_delete" => "active",
            ],
            [
                "gender_guid_self" => "99a21591-338d-4bef-9ae1-e214fb0da8ec",
                "gender_name" => "Самка",
                "gender_value_horriot" => "FEMALE",
                "gender_selex_code" => "2",
                "gender_status" => "enabled",
                "gender_status_delete" => "active",
            ],
            [
                "gender_guid_self" => "9ff4e2da-0219-4652-8966-a0f3a5e8fbfd",
                "gender_name" => "Самец",
                "gender_value_horriot" => "MALE",
                "gender_selex_code" => "3",
                "gender_status" => "disabled",
                "gender_status_delete" => "active",
            ],
            [
                "gender_guid_self" => "c71f941b-acdf-4907-9ab8-5fa5f8c3adc4",
                "gender_name" => "Самка",
                "gender_value_horriot" => "FEMALE",
                "gender_selex_code" => "4",
                "gender_status" => "disabled",
                "gender_status_delete" => "active",
            ]
        ]);
        DB::statement("SELECT setval('system.genders_gender_id_seq', (SELECT MAX(gender_id) from directories.genders))");
    }
}
