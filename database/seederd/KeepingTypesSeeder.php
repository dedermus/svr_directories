<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeepingTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.keeping_types')->truncate();

        DB::table('directories.keeping_types')->insert([
            [
                "specie_id" => "26",
                "keeping_type_guid_self" => "32de192d-c29f-4e7a-9dfa-0cb20bd0d931",
                "keeping_type_guid_horriot" => "83918b46-849e-433a-bdc7-6ddb52bc0635",
                "keeping_type_uuid_horriot" => "83918b46-849e-433a-bdc7-6ddb52bc0635",
                "keeping_type_name" => "Содержание в закрытом помещении с выпасом",
                "keeping_type_selex_code" => "1",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "26",
                "keeping_type_guid_self" => "32de192d-c29f-4e7a-9dfa-0cb20bd0d931",
                "keeping_type_guid_horriot" => "83918b46-849e-433a-bdc7-6ddb52bc0635",
                "keeping_type_uuid_horriot" => "83918b46-849e-433a-bdc7-6ddb52bc0635",
                "keeping_type_name" => "Содержание в закрытом помещении с выпасом",
                "keeping_type_selex_code" => "2",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "26",
                "keeping_type_guid_self" => "4cbb24d5-f9f6-4fa9-aa0e-1d02e94622a4",
                "keeping_type_guid_horriot" => "99e904cc-a48c-438f-86b4-3f5e28dbd07c",
                "keeping_type_uuid_horriot" => "99e904cc-a48c-438f-86b4-3f5e28dbd07c",
                "keeping_type_name" => "Содержание в закрытом помещении с выгулом на ограниченной территории",
                "keeping_type_selex_code" => "1",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "26",
                "keeping_type_guid_self" => "4cbb24d5-f9f6-4fa9-aa0e-1d02e94622a4",
                "keeping_type_guid_horriot" => "99e904cc-a48c-438f-86b4-3f5e28dbd07c",
                "keeping_type_uuid_horriot" => "99e904cc-a48c-438f-86b4-3f5e28dbd07c",
                "keeping_type_name" => "Содержание в закрытом помещении с выгулом на ограниченной территории",
                "keeping_type_selex_code" => "2",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "26",
                "keeping_type_guid_self" => "bb9bf260-5b2e-4ca5-9fcb-00e99b611439",
                "keeping_type_guid_horriot" => "b3ba6d48-cea1-4b7b-b0ea-9d5f31663129",
                "keeping_type_uuid_horriot" => "b3ba6d48-cea1-4b7b-b0ea-9d5f31663129",
                "keeping_type_name" => "Отгонное содержание",
                "keeping_type_status" => "disabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "26",
                "keeping_type_guid_self" => "ad1299dd-49e8-4fbc-ba4b-7852eeb846d7",
                "keeping_type_guid_horriot" => "cdc80dd5-aefc-4053-9583-054f458cbd0b",
                "keeping_type_uuid_horriot" => "cdc80dd5-aefc-4053-9583-054f458cbd0b",
                "keeping_type_name" => "Содержание в закрытом помещении без выгула",
                "keeping_type_selex_code" => "1",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "26",
                "keeping_type_guid_self" => "ad1299dd-49e8-4fbc-ba4b-7852eeb846d7",
                "keeping_type_guid_horriot" => "cdc80dd5-aefc-4053-9583-054f458cbd0b",
                "keeping_type_uuid_horriot" => "cdc80dd5-aefc-4053-9583-054f458cbd0b",
                "keeping_type_name" => "Содержание в закрытом помещении без выгула",
                "keeping_type_selex_code" => "2",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
             ],
            [
                "specie_id" => "17",
                "keeping_type_guid_self" => "32de192d-c29f-4e7a-9dfa-0cb20bd0d931",
                "keeping_type_guid_horriot" => "83918b46-849e-433a-bdc7-6ddb52bc0635",
                "keeping_type_uuid_horriot" => "83918b46-849e-433a-bdc7-6ddb52bc0635",
                "keeping_type_name" => "Содержание в закрытом помещении с выпасом",
                "keeping_type_selex_code" => "2",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "17",
                "keeping_type_guid_self" => "32de192d-c29f-4e7a-9dfa-0cb20bd0d931",
                "keeping_type_guid_horriot" => "83918b46-849e-433a-bdc7-6ddb52bc0635",
                "keeping_type_uuid_horriot" => "83918b46-849e-433a-bdc7-6ddb52bc0635",
                "keeping_type_name" => "Содержание в закрытом помещении с выпасом",
                "keeping_type_selex_code" => "3",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "17",
                "keeping_type_guid_self" => "4cbb24d5-f9f6-4fa9-aa0e-1d02e94622a4",
                "keeping_type_guid_horriot" => "99e904cc-a48c-438f-86b4-3f5e28dbd07c",
                "keeping_type_uuid_horriot" => "99e904cc-a48c-438f-86b4-3f5e28dbd07c",
                "keeping_type_name" => "Содержание в закрытом помещении с выгулом на ограниченной территории",
                "keeping_type_selex_code" => "2",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "17",
                "keeping_type_guid_self" => "4cbb24d5-f9f6-4fa9-aa0e-1d02e94622a4",
                "keeping_type_guid_horriot" => "99e904cc-a48c-438f-86b4-3f5e28dbd07c",
                "keeping_type_uuid_horriot" => "99e904cc-a48c-438f-86b4-3f5e28dbd07c",
                "keeping_type_name" => "Содержание в закрытом помещении с выгулом на ограниченной территории",
                "keeping_type_selex_code" => "3",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "17",
                "keeping_type_guid_self" => "bb9bf260-5b2e-4ca5-9fcb-00e99b611439",
                "keeping_type_guid_horriot" => "b3ba6d48-cea1-4b7b-b0ea-9d5f31663129",
                "keeping_type_uuid_horriot" => "b3ba6d48-cea1-4b7b-b0ea-9d5f31663129",
                "keeping_type_name" => "Отгонное содержание",
                "keeping_type_selex_code" => "1",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "specie_id" => "17",
                "keeping_type_guid_self" => "ad1299dd-49e8-4fbc-ba4b-7852eeb846d7",
                "keeping_type_guid_horriot" => "cdc80dd5-aefc-4053-9583-054f458cbd0b",
                "keeping_type_uuid_horriot" => "cdc80dd5-aefc-4053-9583-054f458cbd0b",
                "keeping_type_name" => "Содержание в закрытом помещении без выгула",
                "keeping_type_selex_code" => "4",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "f4ba8f89-02e9-4a44-979e-18b26ec3b5f2",
                "keeping_type_guid_horriot" => "0c0ab80b-f1ef-7a6e-3e75-6b14d28035a8",
                "keeping_type_uuid_horriot" => "0c0ab80b-f1ef-7a6e-3e75-6b14d28035a8",
                "keeping_type_name" => "Клеточное содержание в закрытом помещении",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "4b330345-8ea0-4e5a-8003-398c67203937",
                "keeping_type_guid_horriot" => "1206b55d-7df0-005a-bdbe-24df2ead8421",
                "keeping_type_uuid_horriot" => "1206b55d-7df0-005a-bdbe-24df2ead8421",
                "keeping_type_name" => "Садковое содержание в марикультуре",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "a3fb36ba-1d83-47fe-a895-86c046333e36",
                "keeping_type_guid_horriot" => "22cc4d9a-157e-42bd-a258-dde7325ada36",
                "keeping_type_uuid_horriot" => "22cc4d9a-157e-42bd-a258-dde7325ada36",
                "keeping_type_name" => "Вольерное содержание",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "e6c99970-cc4a-4de5-8c62-d38dfb4af5bd",
                "keeping_type_guid_horriot" => "41b9c8ba-4cd7-82fe-a8ee-1978301957ca",
                "keeping_type_uuid_horriot" => "41b9c8ba-4cd7-82fe-a8ee-1978301957ca",
                "keeping_type_name" => "Содержание в искусственном водоеме в закрытом помещении",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "f77f63cc-54ae-4e69-b3fb-1d0728974396",
                "keeping_type_guid_horriot" => "6dbb9b32-04f1-d9c3-cb6c-cd0a979d3183",
                "keeping_type_uuid_horriot" => "6dbb9b32-04f1-d9c3-cb6c-cd0a979d3183",
                "keeping_type_name" => "Содержание на стационарной пасеке",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "d2d69fd5-3b1e-44cb-8fa3-3073d1b5e4ea",
                "keeping_type_guid_horriot" => "8066ce82-a75b-41f2-8293-db5c267ae17e",
                "keeping_type_uuid_horriot" => "8066ce82-a75b-41f2-8293-db5c267ae17e",
                "keeping_type_name" => "Клеточное содержание на открытом воздухе",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "e0f63b7e-a084-4142-9393-a09de3914ca6",
                "keeping_type_guid_horriot" => "a6ef9c63-3777-93af-33a0-fd6dce4bce2a",
                "keeping_type_uuid_horriot" => "a6ef9c63-3777-93af-33a0-fd6dce4bce2a",
                "keeping_type_name" => "Содержание в искусственном водоеме на открытом воздухе",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "338397f7-e9e8-4621-a698-9835bfa17b09",
                "keeping_type_guid_horriot" => "b7afb0c5-ca74-3440-6107-28dc08082656",
                "keeping_type_uuid_horriot" => "b7afb0c5-ca74-3440-6107-28dc08082656",
                "keeping_type_name" => "Содержание на перемещаемой пасеке",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "0ea045f1-ad0f-4e3d-80b9-332bf95b416a",
                "keeping_type_guid_horriot" => "f28c475a-78db-7d06-059b-3bc214d7b27b",
                "keeping_type_uuid_horriot" => "f28c475a-78db-7d06-059b-3bc214d7b27b",
                "keeping_type_name" => "Содержание в аквариумах, террариумах, инсектариумах",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ],
            [
                "keeping_type_guid_self" => "398296e0-795d-417c-af32-02f8cfd82bf3",
                "keeping_type_guid_horriot" => "fd763cde-3294-1feb-d453-d25affcddbdb",
                "keeping_type_uuid_horriot" => "fd763cde-3294-1feb-d453-d25affcddbdb",
                "keeping_type_name" => "Садковое содержание в естественном пресноводном водоеме",
                "keeping_type_status" => "enabled",
                "keeping_type_status_delete" => "active",
            ]
        ]);

    }
}