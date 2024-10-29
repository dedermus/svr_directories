<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolsLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.tools_locations')->truncate();

        DB::table('directories.tools_locations')->insert([
            [
                "tool_location_guid_self" => "a7329a20-1614-4585-8f11-00e3b93e0eff",
                "tool_location_guid_horriot" => "0b4be251-5af9-8200-9b5d-6b5041fda402",
                "tool_location_uuid_horriot" => "0b4be251-5af9-8200-9b5d-6b5041fda402",
                "tool_location_name" => "корень хвоста",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "d753cd00-5cca-4b21-a455-eff0876fff44",
                "tool_location_guid_horriot" => "13afc403-0d19-f928-cd3d-4fdfd42ecd05",
                "tool_location_uuid_horriot" => "13afc403-0d19-f928-cd3d-4fdfd42ecd05",
                "tool_location_name" => "под чешуей в области спинного плавника",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "2cf155ca-2b5a-444d-a8ca-85831fbc10c8",
                "tool_location_guid_horriot" => "141fdac3-e2a1-5c8c-21a3-0b50065e50a1",
                "tool_location_uuid_horriot" => "141fdac3-e2a1-5c8c-21a3-0b50065e50a1",
                "tool_location_name" => "правая лапа",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "ee2f5f75-66aa-40ac-8e43-0898365a7a75",
                "tool_location_guid_horriot" => "16abcf9b-19e6-6a11-8945-54fa1a23b8e5",
                "tool_location_uuid_horriot" => "16abcf9b-19e6-6a11-8945-54fa1a23b8e5",
                "tool_location_name" => "левая лапа",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "cba8f984-0bc8-484d-bcb7-9384778c1b41",
                "tool_location_guid_horriot" => "19b45434-1c0c-a2dd-ade7-9e0cb767a28c",
                "tool_location_uuid_horriot" => "19b45434-1c0c-a2dd-ade7-9e0cb767a28c",
                "tool_location_name" => "середина внутренней стороны правого уха",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "f681ed98-db34-42cb-a23f-8066d112fd75",
                "tool_location_guid_horriot" => "3a0795d1-d5dd-6311-262b-8774ede6245d",
                "tool_location_uuid_horriot" => "3a0795d1-d5dd-6311-262b-8774ede6245d",
                "tool_location_name" => "внешняя стенка сооружения/помещения, в котором содержится группа животных",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "60c90228-c8f8-4452-a22e-5921bab00782",
                "tool_location_guid_horriot" => "3be7e283-0216-b506-aaf9-6f5db7e70861",
                "tool_location_uuid_horriot" => "3be7e283-0216-b506-aaf9-6f5db7e70861",
                "tool_location_name" => "левая лопатка",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "75d22953-e37e-4fc2-988e-8e9a720e6203",
                "tool_location_guid_horriot" => "3feb921d-e069-1ee5-7d62-b29815788b11",
                "tool_location_uuid_horriot" => "3feb921d-e069-1ee5-7d62-b29815788b11",
                "tool_location_name" => "правое крыло",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "bbe7b3e8-5973-40b3-9134-394117367253",
                "tool_location_guid_horriot" => "41e65730-8510-6a7d-6e45-17a2db410f41",
                "tool_location_uuid_horriot" => "41e65730-8510-6a7d-6e45-17a2db410f41",
                "tool_location_name" => "основание правого уха",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "45bddfbd-1a85-44c9-b03f-354520a66859",
                "tool_location_guid_horriot" => "44261576-e4d8-bb31-e131-1ce10e126543",
                "tool_location_uuid_horriot" => "44261576-e4d8-bb31-e131-1ce10e126543",
                "tool_location_name" => "середина внутренней части правого уха",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "b0db1d45-ee10-4609-813a-55e97074aef4",
                "tool_location_guid_horriot" => "4818d1b7-cff7-b58b-8471-92fa9af797bb",
                "tool_location_uuid_horriot" => "4818d1b7-cff7-b58b-8471-92fa9af797bb",
                "tool_location_name" => "холка",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "665f11ab-e71e-49d2-8408-262ce2ae0d69",
                "tool_location_guid_horriot" => "598f6149-039a-9598-2680-219daf09c1ea",
                "tool_location_uuid_horriot" => "598f6149-039a-9598-2680-219daf09c1ea",
                "tool_location_name" => "шея",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "b1c59fde-f022-4a93-aaf8-11a9ca17519c",
                "tool_location_guid_horriot" => "709244c9-76b3-5ba6-ee91-9cacd8942441",
                "tool_location_uuid_horriot" => "709244c9-76b3-5ba6-ee91-9cacd8942441",
                "tool_location_name" => "правая лопатка",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "f87e7e6e-f2dc-4fb6-81e9-13deca95fe2e",
                "tool_location_guid_horriot" => "7e7d6159-848b-bf63-3627-13a6f307d833",
                "tool_location_uuid_horriot" => "7e7d6159-848b-bf63-3627-13a6f307d833",
                "tool_location_name" => "правое бедро",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "1498606a-36ef-4d29-8001-31b0396da2bb",
                "tool_location_guid_horriot" => "896b4066-e6a1-92eb-dcbe-05f76c00aa24",
                "tool_location_uuid_horriot" => "896b4066-e6a1-92eb-dcbe-05f76c00aa24",
                "tool_location_name" => "плавник",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "0bf58009-67cf-4b7d-ad66-72a1611d01bd",
                "tool_location_guid_horriot" => "8981eddf-eb34-76ac-d0a1-944538fe285a",
                "tool_location_uuid_horriot" => "8981eddf-eb34-76ac-d0a1-944538fe285a",
                "tool_location_name" => "внутренняя сторона хвоста",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "0768c1b9-24ea-4454-aa38-e3f6258a378c",
                "tool_location_guid_horriot" => "946b8ba9-7cb6-9dc8-c6c3-88b4050a00b5",
                "tool_location_uuid_horriot" => "946b8ba9-7cb6-9dc8-c6c3-88b4050a00b5",
                "tool_location_name" => "под кожей в области груди",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "de785ea2-3954-4306-9c15-328dfb73f9ef",
                "tool_location_guid_horriot" => "9723cf35-5746-3e21-0d5a-d0cb78a1234d",
                "tool_location_uuid_horriot" => "9723cf35-5746-3e21-0d5a-d0cb78a1234d",
                "tool_location_name" => "выйная связка посередине между холкой и затылком",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "df62df8c-c857-48b2-bb59-6034c7a7b852",
                "tool_location_guid_horriot" => "a28dc5b8-c739-1c7a-6285-fd9a1c678274",
                "tool_location_uuid_horriot" => "a28dc5b8-c739-1c7a-6285-fd9a1c678274",
                "tool_location_name" => "середина внутренней стороны левого уха",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "20a6d19f-3691-4de3-9192-a99d083bd3b8",
                "tool_location_guid_horriot" => "ae155873-ed1b-9f1e-1c14-2856146d905d",
                "tool_location_uuid_horriot" => "ae155873-ed1b-9f1e-1c14-2856146d905d",
                "tool_location_name" => "основание левого уха",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                  "tool_location_guid_self" => "b4faefd9-8727-4bd4-8d75-b3942b8eee6b",
                "tool_location_guid_horriot" => "b307f67c-7548-3454-f216-6143ebe16fdd",
                "tool_location_uuid_horriot" => "b307f67c-7548-3454-f216-6143ebe16fdd",
                "tool_location_name" => "грудной мускул",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "2921888b-ff2e-49b1-8446-03f0123bdf2c",
                "tool_location_guid_horriot" => "b4605a56-4845-a2f1-d43d-e305a36bff39",
                "tool_location_uuid_horriot" => "b4605a56-4845-a2f1-d43d-e305a36bff39",
                "tool_location_name" => "внутренняя часть правого уха",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "9ad408c1-0bc9-4ea2-91d8-b7f91e91ad60",
                "tool_location_guid_horriot" => "ca878fa9-a995-019e-22b9-7bb0e4b5aa90",
                "tool_location_uuid_horriot" => "ca878fa9-a995-019e-22b9-7bb0e4b5aa90",
                "tool_location_name" => "внутренняя часть левого уха",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "fd443ca7-8a50-4b30-831f-f1315d2fe883",
                "tool_location_guid_horriot" => "cf692926-86d0-7fc6-e3b5-8aaec2db99e2",
                "tool_location_uuid_horriot" => "cf692926-86d0-7fc6-e3b5-8aaec2db99e2",
                "tool_location_name" => "левое бедро",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "41d33c78-d2b6-446c-acdc-76b40e598c8d",
                "tool_location_guid_horriot" => "e20e053e-0ceb-4a1a-41bd-9f1cffc9073e",
                "tool_location_uuid_horriot" => "e20e053e-0ceb-4a1a-41bd-9f1cffc9073e",
                "tool_location_name" => "левое крыло",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "c7b5d7d1-eee4-4f3d-a1bd-fb3127db8e1f",
                "tool_location_guid_horriot" => "e3992142-09a4-e414-a3f3-b04b0405870b",
                "tool_location_uuid_horriot" => "e3992142-09a4-e414-a3f3-b04b0405870b",
                "tool_location_name" => "преджелудок",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
            ],
            [
                "tool_location_guid_self" => "c303cb3d-5b1f-4dc8-a1ea-f646a973e26d",
                "tool_location_guid_horriot" => "ffada363-75f5-995f-d4da-af280a07b0e3",
                "tool_location_uuid_horriot" => "ffada363-75f5-995f-d4da-af280a07b0e3",
                "tool_location_name" => "середина внутренней части левого уха",
                "tool_location_status" => "enabled",
                "tool_location_status_delete" => "active",
             ]
        ]);

    }
}