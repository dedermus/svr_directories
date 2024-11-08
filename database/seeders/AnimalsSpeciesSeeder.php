<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalsSpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.animals_species')->truncate();

        DB::table('directories.animals_species')->insert([
            [
                "specie_id" => "1",
                "specie_guid_self" => "05b4d310-441f-44be-b1fa-6611a094945c",
                "specie_guid_horriot" => "07ecd293-2c30-40a9-9956-cb4d29bb1390",
                "specie_uuid_horriot" => "07ecd293-2c30-40a9-9956-cb4d29bb1390",
                "specie_name" => "Пушные звери (хорьки)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "2",
                "specie_guid_self" => "e76e6d3f-cbb5-468e-8b80-39887e38a438",
                "specie_guid_horriot" => "0bdb07bb-6c72-4876-9779-7e4ec82d1033",
                "specie_uuid_horriot" => "0bdb07bb-6c72-4876-9779-7e4ec82d1033",
                "specie_name" => "Пушные звери (песцы)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "3",
                "specie_guid_self" => "0e9ec82e-2ab4-4af5-9255-58aa4d664d5c",
                "specie_guid_horriot" => "0ee5b7f3-bba2-420e-ab8c-7b00ccde66b7",
                "specie_uuid_horriot" => "0ee5b7f3-bba2-420e-ab8c-7b00ccde66b7",
                "specie_name" => "Лошаки",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "4",
                "specie_guid_self" => "297c4986-edb4-4013-bd1e-4254f5dcf89c",
                "specie_guid_horriot" => "0fe06acf-5ddb-4a0f-a51d-5cbb5bd48f49",
                "specie_uuid_horriot" => "0fe06acf-5ddb-4a0f-a51d-5cbb5bd48f49",
                "specie_name" => "Домашняя птица (утки)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "5",
                "specie_guid_self" => "ca09dda8-eaf9-4887-b907-521ff81eea94",
                "specie_guid_horriot" => "19fe3d65-baf6-46bc-b2ba-b806da739c3c",
                "specie_uuid_horriot" => "19fe3d65-baf6-46bc-b2ba-b806da739c3c",
                "specie_name" => "Иные водные животные",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "6",
                "specie_guid_self" => "efc72825-4b7e-4eda-b83f-4f0a66239494",
                "specie_guid_horriot" => "1dcc0260-d57e-4b45-bd6f-94242b587141",
                "specie_uuid_horriot" => "1dcc0260-d57e-4b45-bd6f-94242b587141",
                "specie_name" => "Домашняя птица (индейки)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "7",
                "specie_guid_self" => "13a70658-de70-4a6d-a186-263bb10327a1",
                "specie_guid_horriot" => "1e1afcf8-4153-42c7-ad91-c5bb33789ae1",
                "specie_uuid_horriot" => "1e1afcf8-4153-42c7-ad91-c5bb33789ae1",
                "specie_name" => "Пушные звери (лисицы)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "8",
                "specie_guid_self" => "9fc2460e-01ad-41f5-90dc-fa2283296389",
                "specie_guid_horriot" => "238027d7-f1fc-4a02-aa04-4675bab307c1",
                "specie_uuid_horriot" => "238027d7-f1fc-4a02-aa04-4675bab307c1",
                "specie_name" => "Пушные звери (нутрии)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "9",
                "specie_guid_self" => "c0617d6b-b50e-4d19-87a6-b05659288f99",
                "specie_guid_horriot" => "2eedad1b-88f9-4064-a2fd-af8a7ad24281",
                "specie_uuid_horriot" => "2eedad1b-88f9-4064-a2fd-af8a7ad24281",
                "specie_name" => "Свиньи",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "10",
                "specie_guid_self" => "e39cdeab-5015-4c9f-ad7a-f119968180a9",
                "specie_guid_horriot" => "31b2059d-150d-42c7-987f-a8ca4de6db9d",
                "specie_uuid_horriot" => "31b2059d-150d-42c7-987f-a8ca4de6db9d",
                "specie_name" => "Яки",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "11",
                "specie_guid_self" => "db88abb8-e364-49df-a034-f5373b3941a2",
                "specie_guid_horriot" => "35b646fb-67f4-4ceb-ba6e-a93d3394e508",
                "specie_uuid_horriot" => "35b646fb-67f4-4ceb-ba6e-a93d3394e508",
                "specie_name" => "Пушные звери (норки)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "12",
                "specie_guid_self" => "c8b81835-029b-4636-a9cc-df418c144209",
                "specie_guid_horriot" => "375aefcc-3da0-477b-887a-298883031b33",
                "specie_uuid_horriot" => "375aefcc-3da0-477b-887a-298883031b33",
                "specie_name" => "Домашняя птица (перепела)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "13",
                "specie_guid_self" => "fc870ade-422d-4c0f-a8b3-d1f4e1fbe924",
                "specie_guid_horriot" => "3c9d29e3-7088-4bfd-886b-86ca3908f68b",
                "specie_uuid_horriot" => "3c9d29e3-7088-4bfd-886b-86ca3908f68b",
                "specie_name" => "Зебу",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "14",
                "specie_guid_self" => "7f2fde4b-b3e2-422f-a8c6-ad0f104ba6a4",
                "specie_guid_horriot" => "40149dc0-1a5e-19ad-d234-b27ecf2af514",
                "specie_uuid_horriot" => "40149dc0-1a5e-19ad-d234-b27ecf2af514",
                "specie_name" => "Бизоны",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "15",
                "specie_guid_self" => "692a825e-6244-468f-9293-2d0828db805d",
                "specie_guid_horriot" => "48f1f39a-afe0-45ea-abb3-2de83ada1269",
                "specie_uuid_horriot" => "48f1f39a-afe0-45ea-abb3-2de83ada1269",
                "specie_name" => "Буйволы ",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "16",
                "specie_guid_self" => "75824240-d561-4d76-8e4a-63eeaa574328",
                "specie_guid_horriot" => "4c04835a-9881-4b76-92f2-a2b6fd49cb8f",
                "specie_uuid_horriot" => "4c04835a-9881-4b76-92f2-a2b6fd49cb8f",
                "specie_name" => "Мулы",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "17",
                "specie_guid_self" => "5311f4c0-3a8f-414a-914f-f0bdc8fb07be",
                "specie_guid_horriot" => "5697a698-f714-44b6-be08-9d49140e380e",
                "specie_uuid_horriot" => "5697a698-f714-44b6-be08-9d49140e380e",
                "specie_name" => "Мелкий рогатый скот (овцы)",
                "specie_selex_code" => "17",
                "specie_status" => "enabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "18",
                "specie_guid_self" => "37c4b091-63bd-4e76-a583-f8b319a3f556",
                "specie_guid_horriot" => "59ae71e0-6bdb-4e6c-be91-def2ea80af1a",
                "specie_uuid_horriot" => "59ae71e0-6bdb-4e6c-be91-def2ea80af1a",
                "specie_name" => "Домашняя птица (цесарки)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "19",
                "specie_guid_self" => "f8b88ca7-b6a9-4254-bc4b-1c345e40426f",
                "specie_guid_horriot" => "6bf377b7-f9f8-46e3-a508-ef5cea1b3b9f",
                "specie_uuid_horriot" => "6bf377b7-f9f8-46e3-a508-ef5cea1b3b9f",
                "specie_name" => "Кошки",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "20",
                "specie_guid_self" => "aa4e7ae7-e132-4474-b659-e47b9e902a28",
                "specie_guid_horriot" => "6c238151-b3fd-4f88-a7fc-f55853ab3852",
                "specie_uuid_horriot" => "6c238151-b3fd-4f88-a7fc-f55853ab3852",
                "specie_name" => "Пушные звери (соболя)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "21",
                "specie_guid_self" => "35427b6f-e8b7-41a6-b80c-6c2422d28926",
                "specie_guid_horriot" => "6c54baa2-0530-4dc7-b09a-2840d88fbddf",
                "specie_uuid_horriot" => "6c54baa2-0530-4dc7-b09a-2840d88fbddf",
                "specie_name" => "Пушные звери (енотовидные собаки)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "22",
                "specie_guid_self" => "dd8ceed1-0d66-4c71-905d-f77d01834278",
                "specie_guid_horriot" => "8b12827f-aadd-44c7-ba99-755e75a978ed",
                "specie_uuid_horriot" => "8b12827f-aadd-44c7-ba99-755e75a978ed",
                "specie_name" => "Домашняя птица (страусы)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "23",
                "specie_guid_self" => "82516754-c5f8-4d14-9993-dcfa8b2c4cbf",
                "specie_guid_horriot" => "8e7f1bc2-33c2-443d-9c9b-c2119e15ae6d",
                "specie_uuid_horriot" => "8e7f1bc2-33c2-443d-9c9b-c2119e15ae6d",
                "specie_name" => "Домашняя птица (гуси)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "24",
                "specie_guid_self" => "000e4280-ebd0-4eb3-b5a3-811a52db24b9",
                "specie_guid_horriot" => "9c021b16-4f89-4dd8-af50-cf74fb5c032e",
                "specie_uuid_horriot" => "9c021b16-4f89-4dd8-af50-cf74fb5c032e",
                "specie_name" => "Ослы",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "25",
                "specie_guid_self" => "1c2c97cf-81d9-4880-8a52-0d33c06bab75",
                "specie_guid_horriot" => "9e9d1118-31d0-4bff-ae45-0aa5d4159614",
                "specie_uuid_horriot" => "9e9d1118-31d0-4bff-ae45-0aa5d4159614",
                "specie_name" => "Олени",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "26",
                "specie_guid_self" => "d4e5003c-dc96-407e-8587-6cc45bdf7500",
                "specie_guid_horriot" => "a4588321-f300-4c85-840b-9414c371addd",
                "specie_uuid_horriot" => "a4588321-f300-4c85-840b-9414c371addd",
                "specie_name" => "Крупный рогатый скот",
                "specie_selex_code" => "26",
                "specie_status" => "enabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "27",
                "specie_guid_self" => "130e809f-1c10-4c68-a64f-59484d416273",
                "specie_guid_horriot" => "a5991681-09a5-4c09-93a4-a9bf228c7f2e",
                "specie_uuid_horriot" => "a5991681-09a5-4c09-93a4-a9bf228c7f2e",
                "specie_name" => "Сурки",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "28",
                "specie_guid_self" => "c6528d6e-d655-495d-969e-de40524a2ad7",
                "specie_guid_horriot" => "aa6e902d-81d0-4077-9631-662c16d1628f",
                "specie_uuid_horriot" => "aa6e902d-81d0-4077-9631-662c16d1628f",
                "specie_name" => "Домашняя птица (куры)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "29",
                "specie_guid_self" => "09da71b8-c98e-4891-9578-21397376a80a",
                "specie_guid_horriot" => "b6e51bb7-cbed-46e3-8313-5e53c03c4573",
                "specie_uuid_horriot" => "b6e51bb7-cbed-46e3-8313-5e53c03c4573",
                "specie_name" => "Собаки",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "30",
                "specie_guid_self" => "cb61d51f-edba-48b4-b161-e63c5063a7a5",
                "specie_guid_horriot" => "c3783d29-f78d-4481-8510-deab8cbc8d23",
                "specie_uuid_horriot" => "c3783d29-f78d-4481-8510-deab8cbc8d23",
                "specie_name" => "Лошади",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "31",
                "specie_guid_self" => "dee4a9a3-cd56-4faf-92f0-e15bf41c800d",
                "specie_guid_horriot" => "dc48b582-479f-4a6c-b6bc-d42ad955b775",
                "specie_uuid_horriot" => "dc48b582-479f-4a6c-b6bc-d42ad955b775",
                "specie_name" => "Кролики",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "32",
                "specie_guid_self" => "ee14ad02-0971-4b32-b05a-129f32facbfd",
                "specie_guid_horriot" => "de7a7633-99dd-78f3-1d4f-9fb2617f10f4",
                "specie_uuid_horriot" => "de7a7633-99dd-78f3-1d4f-9fb2617f10f4",
                "specie_name" => "Маралы",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "33",
                "specie_guid_self" => "8af98983-d24f-4e8c-98d4-da2b199d2887",
                "specie_guid_horriot" => "e276478f-cc7b-4e09-a467-e3bfd36857c6",
                "specie_uuid_horriot" => "e276478f-cc7b-4e09-a467-e3bfd36857c6",
                "specie_name" => "Рыбы",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "34",
                "specie_guid_self" => "4a2d880c-3930-4283-9877-182f80ccaeb3",
                "specie_guid_horriot" => "e637730d-2d45-4dec-b27a-712a1fc23f76",
                "specie_uuid_horriot" => "e637730d-2d45-4dec-b27a-712a1fc23f76",
                "specie_name" => "Верблюды",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "35",
                "specie_guid_self" => "c27110d1-6518-48e5-8486-19e023b0b73f",
                "specie_guid_horriot" => "edad5102-d134-4240-84f6-eea748ae2e76",
                "specie_uuid_horriot" => "edad5102-d134-4240-84f6-eea748ae2e76",
                "specie_name" => "Мелкий рогатый скот (козы)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "36",
                "specie_guid_self" => "58008df9-cfb2-49d8-be4f-f7cf7da94281",
                "specie_guid_horriot" => "fb8dc12a-a3ed-42e7-a012-5bf91d35aaa4",
                "specie_uuid_horriot" => "fb8dc12a-a3ed-42e7-a012-5bf91d35aaa4",
                "specie_name" => "Пчелы (пчелосемьи)",
                "specie_selex_code" => null,
                "specie_status" => "disabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "37",
                "specie_guid_self" => "372102da-c4c9-4da9-8904-147352f99128",
                "specie_guid_horriot" => "02110506-f4f7-46aa-8b39-a1bf38874353",
                "specie_uuid_horriot" => "5dc33ddc-7108-4dd5-af1a-4f3d42f03288",
                "specie_name" => "Антилопы",
                "specie_selex_code" => null,
                "specie_status" => "enabled",
                "specie_status_delete" => "active",
            ],
            [
                "specie_id" => "38",
                "specie_guid_self" => "7afc6e39-4ace-4573-87d8-2c7d4c8c8130",
                "specie_guid_horriot" => "f0833cef-c240-4fff-8d9b-e62d8f40940b",
                "specie_uuid_horriot" => "af62e5d1-1e54-497c-a5f1-3a12b8d30141",
                "specie_name" => "Альпаки",
                "specie_selex_code" => null,
                "specie_status" => "enabled",
                "specie_status_delete" => "active",
            ]
        ]);
        DB::statement("SELECT setval('system.animals_species_specie_id_seq', (SELECT MAX(specie_id) from directories.animals_species))");
    }
}
