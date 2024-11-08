<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_status_guid_self" => "3b429dcf-8394-4b4c-9a42-b25ad187e428",
                "mark_status_name" => "Дополнительная",
                "mark_status_value_horriot" => "additional",
                "mark_status_status" => "enabled",
                "mark_status_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
        DB::statement("SELECT setval('system.mark_statuses_mark_status_id_seq', (SELECT MAX(mark_status_id) from directories.mark_statuses))");
    }
}
