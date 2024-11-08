<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MarkTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.mark_types')->truncate();

        DB::table('directories.mark_types')->insert([
            [
                "mark_type_guid_self"     => "b38b28b8-7467-4b13-94f3-4d0e10b945ca",
                "mark_type_name"          => "Инвентарный номер",
                "mark_type_value_horriot" => "inv",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_type_guid_self"     => "6dd353cc-f279-4da1-94d6-441a44b49c65",
                "mark_type_name"          => "Правое ухо",
                "mark_type_value_horriot" => "right",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_type_guid_self"     => "85980a36-86c1-4abf-8557-8d1eed760c21",
                "mark_type_name"          => "Левое ухо",
                "mark_type_value_horriot" => "left",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_type_guid_self"     => "9a1f0d9a-c4e4-4190-96f8-0b66e61d1e73",
                "mark_type_name"          => "Номер в устройстве",
                "mark_type_value_horriot" => "device",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_type_guid_self"     => "3accff92-e25b-4e54-a726-7a340bea6c15",
                "mark_type_name"          => "Чип",
                "mark_type_value_horriot" => "chip",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_type_guid_self"     => "8402364e-c7c7-4689-9fe6-cf411f96558a",
                "mark_type_name"          => "Тату",
                "mark_type_value_horriot" => "tattoo",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_type_guid_self"     => "b9e16f00-bcb7-4b86-9cd7-f88b0fd2cc01",
                "mark_type_name"          => "Импортный номер",
                "mark_type_value_horriot" => "import",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_type_guid_self"     => "b4fc495a-b177-468f-a61b-17a61f46c075",
                "mark_type_name"          => "Кличка",
                "mark_type_value_horriot" => "name",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "mark_type_guid_self"     => "1e2a18f5-63e0-4e20-be10-8893f63165eb",
                "mark_type_name"          => "УНСМ",
                "mark_type_value_horriot" => "rshn",
                "mark_type_status"        => "enabled",
                "mark_type_status_delete" => "active",
                "created_at"              => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"              => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::statement("SELECT setval('system.mark_types_mark_type_id_seq', (SELECT MAX(mark_type_id) from directories.mark_types))");
    }
}
