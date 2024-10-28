<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkToolTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.mark_tool_types')->truncate();

        DB::table('directories.mark_tool_types')->insert([
            [
                "mark_tool_type_guid_self" => "92e4bf10-1b65-49d5-915b-f4ee1cb30869",
                "mark_tool_type_name" => "Бирка",
                "mark_tool_type_value_horriot" => "label",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "4af4b4c1-2e2d-4dc7-8d2f-546195df3835",
                "mark_tool_type_name" => "Вживляемый микрочип",
                "mark_tool_type_value_horriot" => "microchip",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "4880b6e7-db88-4088-b5d8-a4b56b3ccbf2",
                "mark_tool_type_name" => "Тавро/Клеймо",
                "mark_tool_type_value_horriot" => "brand",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "9fc07799-bfd6-4dc6-b25f-8f74819281da",
                "mark_tool_type_name" => "Татуировка",
                "mark_tool_type_value_horriot" => "tattoo",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "2eab411c-e01c-4b46-8cda-3816da3ccdc3",
                "mark_tool_type_name" => "Болюс",
                "mark_tool_type_value_horriot" => "bolus",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "e31cd52a-6a76-46d8-945d-a9508ab91b7c",
                "mark_tool_type_name" => "Кольцо",
                "mark_tool_type_value_horriot" => "ring",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "b2821fa1-08d6-4c73-a4ec-d41a8e452010",
                "mark_tool_type_name" => "Электронное кольцо",
                "mark_tool_type_value_horriot" => "electronic_ring",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "51260472-17c4-4fe3-a6d5-eca8f67e9126",
                "mark_tool_type_name" => "Ошейник",
                "mark_tool_type_value_horriot" => "collar",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "2ab9a2bf-1bd5-4b9d-a572-8c325a83e167",
                "mark_tool_type_name" => "Электронный ошейник",
                "mark_tool_type_value_horriot" => "electronic_colar",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "e4005d1f-7f85-4574-b321-8908029c8e32",
                "mark_tool_type_name" => "Крыло-метка",
                "mark_tool_type_value_horriot" => "wing_tag",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "8f8a109b-d71f-4044-97d7-286f92fb8afe",
                "mark_tool_type_name" => "Электронное крыло-метка",
                "mark_tool_type_value_horriot" => "electronic_wing_tag",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "66381833-ddcf-4365-bf38-c997a5ef7b69",
                "mark_tool_type_name" => "Электронная метка",
                "mark_tool_type_value_horriot" => "electronic_tag",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "148e3aa2-d93d-4163-bb94-4722fd8ab196",
                "mark_tool_type_name" => "Вырез тканей",
                "mark_tool_type_value_horriot" => "tissue_section",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ],
            [
                "mark_tool_type_guid_self" => "65e889dc-a01b-47e2-b867-2476573bb95d",
                "mark_tool_type_name" => "Табло",
                "mark_tool_type_value_horriot" => "nameplate",
                "mark_tool_type_status" => "enabled",
                "mark_tool_type_status_delete" => "active",
            ]
        ]);

    }
}
