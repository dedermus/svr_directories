<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.mark_statuses')->truncate();

        DB::table('directories.mark_statuses')->insert([
            [
                "mark_status_guid_self" => "21cedc20-7157-4963-bb90-f657ced0f273",
                "mark_status_name" => "Основная",
                "mark_status_value_horriot" => "main",
                "mark_status_status" => "enabled",
                "mark_status_status_delete" => "active",
            ],
            [
                "mark_status_guid_self" => "3b429dcf-8394-4b4c-9a42-b25ad187e428",
                "mark_status_name" => "Дополнительная",
                "mark_status_value_horriot" => "additional",
                "mark_status_status" => "enabled",
                "mark_status_status_delete" => "active",
            ]
        ]);

    }
}
