<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OutTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.out_types')->truncate();

        DB::table('directories.out_types')->insert([
            [
                "out_type_guid_self"     => "ec9ff022-19ed-465f-aaa7-c91659d02b6d",
                "out_type_name"          => "Плановый убой животного",
                "out_type_value_horriot" => "APS",
                "out_type_selex_code"    => "1",
                "out_type_status"        => "enabled",
                "out_type_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_type_guid_self"     => "a0d1405c-6a2b-453a-b058-a896fbf57087",
                "out_type_name"          => "Диагностический убой животного",
                "out_type_value_horriot" => "ADS",
                "out_type_selex_code"    => null,
                "out_type_status"        => "disabled",
                "out_type_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_type_guid_self"     => "7992feae-a8dc-45ff-97fa-5a928ddbd6d7",
                "out_type_name"          => "Вынужденный убой животного",
                "out_type_value_horriot" => "AFS",
                "out_type_selex_code"    => "4",
                "out_type_status"        => "enabled",
                "out_type_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_type_guid_self"     => "7969d823-3eb2-4054-ae1f-ffe2635e495d",
                "out_type_name"          => "Падеж животного",
                "out_type_value_horriot" => "DTH",
                "out_type_selex_code"    => "5",
                "out_type_status"        => "enabled",
                "out_type_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_type_guid_self"     => "4a38a4c9-a8b8-481b-9d2b-e65267c33498",
                "out_type_name"          => "Пропажа животного (сбежало, украдено и т.п.)",
                "out_type_value_horriot" => "LSS",
                "out_type_selex_code"    => null,
                "out_type_status"        => "disabled",
                "out_type_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_type_guid_self"     => "676adb6a-09d8-41b8-b668-3664dc04dd3b",
                "out_type_name"          => "Выпуск животного в среду обитания",
                "out_type_value_horriot" => "RLS",
                "out_type_selex_code"    => null,
                "out_type_status"        => "disabled",
                "out_type_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_type_guid_self"     => "e707add4-313b-4aa7-946c-d0316296158a",
                "out_type_name"          => "Экспорт животного",
                "out_type_value_horriot" => "EXP",
                "out_type_selex_code"    => "3",
                "out_type_status"        => "enabled",
                "out_type_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
