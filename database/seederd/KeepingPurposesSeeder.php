<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeepingPurposesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.keeping_purposes')->truncate();

        DB::table('directories.keeping_purposes')->insert([
            [
                "keeping_purpose_guid_self" => "300c0b30-b9ab-444e-8452-7626b599a695",
                "keeping_purpose_guid_horriot" => "1568992d-a330-628a-6dae-166054172353",
                "keeping_purpose_uuid_horriot" => "1568992d-a330-628a-6dae-166054172353",
                "keeping_purpose_name" => "Для использования в рыбалке",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "aa55490a-fc8a-408b-851d-db980e21622e",
                "keeping_purpose_guid_horriot" => "168b1a9c-0068-7d49-bf78-8628c0668ad0",
                "keeping_purpose_uuid_horriot" => "168b1a9c-0068-7d49-bf78-8628c0668ad0",
                "keeping_purpose_name" => "Для участия в культурно-зрелищных мероприятиях",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "6092a8cd-d1e0-4016-b21d-21d69156516b",
                "keeping_purpose_guid_horriot" => "2c24448a-e814-f1ff-defd-fcee6189aa85",
                "keeping_purpose_uuid_horriot" => "2c24448a-e814-f1ff-defd-fcee6189aa85",
                "keeping_purpose_name" => "Для улучшения почвы",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "0d8b7946-d38c-4e3a-8d63-9c455d174bca",
                "keeping_purpose_guid_horriot" => "3ada3ad6-d881-9722-a5e3-a6cc3422a0b2",
                "keeping_purpose_uuid_horriot" => "3ada3ad6-d881-9722-a5e3-a6cc3422a0b2",
                "keeping_purpose_name" => "Для служебных целей: служба специального назначения",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "bed444ea-3567-43c1-93be-a4baa87cbbb0",
                "keeping_purpose_guid_horriot" => "5433f16c-48c2-0901-6739-64af6c44fc94",
                "keeping_purpose_uuid_horriot" => "5433f16c-48c2-0901-6739-64af6c44fc94",
                "keeping_purpose_name" => "Для служебных целей: ездовое и/или тягловое животное",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "f0fa65c6-5e02-4afe-b129-70e0e8a89ed4",
                "keeping_purpose_guid_horriot" => "69a49097-cf1e-9eff-4bda-201a7f3db325",
                "keeping_purpose_uuid_horriot" => "69a49097-cf1e-9eff-4bda-201a7f3db325",
                "keeping_purpose_name" => "Для получения генетического материала",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "31d1770e-bfae-4bc3-bf53-9f1934dedc38",
                "keeping_purpose_guid_horriot" => "74dcb936-460d-4eee-b803-aa40e7a88033",
                "keeping_purpose_uuid_horriot" => "74dcb936-460d-4eee-b803-aa40e7a88033",
                "keeping_purpose_name" => "Для получения потомства",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "2999d427-035f-4cdd-866e-d71d1adbbb60",
                "keeping_purpose_guid_horriot" => "793aa5a4-3765-4df2-b024-e92b4636b551",
                "keeping_purpose_uuid_horriot" => "793aa5a4-3765-4df2-b024-e92b4636b551",
                "keeping_purpose_name" => "Для получения подконтрольных госветнадзору товаров, не предназначенных в пищу",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "cde9aade-021a-4211-9079-8f6b564d7113",
                "keeping_purpose_guid_horriot" => "8052cfaa-7785-46fc-f948-dcaf7cd3f0d3",
                "keeping_purpose_uuid_horriot" => "8052cfaa-7785-46fc-f948-dcaf7cd3f0d3",
                "keeping_purpose_name" => "Для опыления растений",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "9b9b4c7b-588d-45cd-ba1f-093cd8a130f3",
                "keeping_purpose_guid_horriot" => "81f7f26f-7f4b-0e27-c930-9f3f8b1f2420",
                "keeping_purpose_uuid_horriot" => "81f7f26f-7f4b-0e27-c930-9f3f8b1f2420",
                "keeping_purpose_name" => "Для использования в охоте",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "0c2ab6a9-3fa3-43a4-b04e-e18d95d00376",
                "keeping_purpose_guid_horriot" => "8bf4ace6-f8ae-4478-9102-ea264c2ec464",
                "keeping_purpose_uuid_horriot" => "8bf4ace6-f8ae-4478-9102-ea264c2ec464",
                "keeping_purpose_name" => "Животное-компаньон",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "05935db3-3d83-4b0c-be52-032012e6f31e",
                "keeping_purpose_guid_horriot" => "8c23274d-a1ac-4777-a118-876585d9e3bd",
                "keeping_purpose_uuid_horriot" => "8c23274d-a1ac-4777-a118-876585d9e3bd",
                "keeping_purpose_name" => "Для участия в спортивных соревнованиях",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "e79963dc-085c-40b9-8fd3-d4aca35cffd5",
                "keeping_purpose_guid_horriot" => "95840367-1f1d-4f29-a47d-9b680c4bbf7a",
                "keeping_purpose_uuid_horriot" => "95840367-1f1d-4f29-a47d-9b680c4bbf7a",
                "keeping_purpose_name" => "Для лабораторных и исследовательских целей",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "b891aa68-ae65-4826-8f6a-c15af38ab364",
                "keeping_purpose_guid_horriot" => "b2d9d471-b3dd-92d3-ce17-3f61be76bd47",
                "keeping_purpose_uuid_horriot" => "b2d9d471-b3dd-92d3-ce17-3f61be76bd47",
                "keeping_purpose_name" => "Для получения подконтрольных госветнадзору товаров, предназначенных в корм животным",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "f4ad7452-90e8-4e76-af7f-ce5d82fa6d8a",
                "keeping_purpose_guid_horriot" => "b8c2917d-dcc8-489a-803a-eeecb4822cb9",
                "keeping_purpose_uuid_horriot" => "b8c2917d-dcc8-489a-803a-eeecb4822cb9",
                "keeping_purpose_name" => "Для получения подконтрольных госветнадзору товаров, предназначенных в пищу",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "c08ee938-318e-49a0-a547-fc6545945e87",
                "keeping_purpose_guid_horriot" => "c90249bb-ffb4-4e50-bf2a-bcea2e87b204",
                "keeping_purpose_uuid_horriot" => "c90249bb-ffb4-4e50-bf2a-bcea2e87b204",
                "keeping_purpose_name" => "Для служебных целей: сторожевая служба",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "8a75c409-f0eb-40f6-87e9-2d33b2a186cf",
                "keeping_purpose_guid_horriot" => "cb38f460-dc0c-1148-9e50-1d39319c9f89",
                "keeping_purpose_uuid_horriot" => "cb38f460-dc0c-1148-9e50-1d39319c9f89",
                "keeping_purpose_name" => "Для использования в качестве корма",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "822e6273-4369-49aa-81c3-b9c9022881d9",
                "keeping_purpose_guid_horriot" => "ce2fbdfb-76d6-c4ac-c7a4-8bc24558abb9",
                "keeping_purpose_uuid_horriot" => "ce2fbdfb-76d6-c4ac-c7a4-8bc24558abb9",
                "keeping_purpose_name" => "Для служебных целей: защитно-караульная служба",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "e6415a7a-5dc9-4580-b3ad-4dba45e05c1c",
                "keeping_purpose_guid_horriot" => "d09a5520-ea3a-c558-1c8b-c2f5eee0b3f7",
                "keeping_purpose_uuid_horriot" => "d09a5520-ea3a-c558-1c8b-c2f5eee0b3f7",
                "keeping_purpose_name" => "Для защиты растений",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "6e4284c8-983e-454b-92a9-619170b6c75c",
                "keeping_purpose_guid_horriot" => "e4b48238-eaa7-ec83-effb-36c3381a8cda",
                "keeping_purpose_uuid_horriot" => "e4b48238-eaa7-ec83-effb-36c3381a8cda",
                "keeping_purpose_name" => "Для служебных целей: военная служба",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "829d1979-9e9a-4288-9a86-3f336e8144f6",
                "keeping_purpose_guid_horriot" => "e6e0e834-edc4-6b08-b819-4503750e9176",
                "keeping_purpose_uuid_horriot" => "e6e0e834-edc4-6b08-b819-4503750e9176",
                "keeping_purpose_name" => "Для служебных целей: розыскная служба",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "3cfce7b4-57fe-422b-add6-63897c782b73",
                "keeping_purpose_guid_horriot" => "f16c9fd8-99d3-b073-b8c5-ea8fc0d2bd0d",
                "keeping_purpose_uuid_horriot" => "f16c9fd8-99d3-b073-b8c5-ea8fc0d2bd0d",
                "keeping_purpose_name" => "Для зоотерапии",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ],
            [
                "keeping_purpose_guid_self" => "d4d90f44-4f31-4f8b-a1d1-1998c8404abb",
                "keeping_purpose_guid_horriot" => "f82dc155-eb0e-b678-4371-8554a20b1285",
                "keeping_purpose_uuid_horriot" => "f82dc155-eb0e-b678-4371-8554a20b1285",
                "keeping_purpose_name" => "Для служебных целей: собака-поводырь",
                "keeping_purpose_status" => "enabled",
                "keeping_purpose_status_delete" => "active",
            ]
        ]);
    }
}