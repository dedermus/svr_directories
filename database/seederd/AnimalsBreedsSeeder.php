<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalsBreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.animals_breeds')->truncate();

        DB::table('directories.animals_breeds')->insert([
            [
                "specie_id" => "35",
                "breed_guid_self" => "ab9580f3-d50f-422c-ba4b-126ee12a1a7c",
                "breed_guid_horriot" => "481ae492-8a41-43ce-9dfb-f2d0c6111d98",
                "breed_uuid_horriot" => "68dc9570-0e6e-4590-9b51-2536f35dfd81",
                "breed_name" => "Битал",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "139b04f1-bb34-48ce-86a3-df8a649d70d5",
                "breed_guid_horriot" => "20c3ee7d-5f81-47b0-ad9d-a5e760ba895a",
                "breed_uuid_horriot" => "80a7ae73-fdca-4700-b68a-38745c27fa20",
                "breed_name" => "Аппалуза",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "437f174f-9ed0-4679-9216-b6ca5ab213e6",
                "breed_guid_horriot" => "5bf6b973-13ff-4666-a1e2-4ad8f848ffa0",
                "breed_uuid_horriot" => "0090cf88-e9ab-4999-9d27-7091c876db28",
                "breed_name" => "Американская рысистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "64d5a549-9981-41ce-9fd4-7637ccde98fb",
                "breed_guid_horriot" => "6bc72bc0-0e5c-495e-9bd5-f192b179cf8f",
                "breed_uuid_horriot" => "01e3f1a8-a5ad-4a34-a729-c859fec82be5",
                "breed_name" => "Алеутская стальная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "823bb07e-18ec-462b-b91e-adca7b9e3311",
                "breed_guid_horriot" => "95a17bab-d5ad-4e2b-a3f3-c953461ad57b",
                "breed_uuid_horriot" => "07882149-976c-438f-984b-b56a1f242828",
                "breed_name" => "Альбинопастель",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "9158a1cf-12ee-402d-9baf-3e4f02739a29",
                "breed_guid_horriot" => "325649e3-9d31-445a-a5b7-c0358051a4b6",
                "breed_uuid_horriot" => "07cf7667-1f5c-4bbb-be34-f316e97aa848",
                "breed_name" => "Ангорская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "44a3c948-26b3-4233-9aec-34c8486ab74a",
                "breed_guid_horriot" => "949fa611-7a8e-4e4f-b0c2-78c82244a606",
                "breed_uuid_horriot" => "13cbd4bb-cb35-4e74-8f6c-909458d0d534",
                "breed_name" => "Андалузская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "bea6f1bf-ef32-4786-a06c-4c981da1a24a",
                "breed_guid_horriot" => "ee6f5174-83d9-41f1-8ac6-8f5ce4822964",
                "breed_uuid_horriot" => "1b7bba6b-5b85-40fc-8bd5-30cc40ae7fd2",
                "breed_name" => "Авасси",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "a5b3f94f-91c8-4081-b454-9f081b590253",
                "breed_guid_horriot" => "8d52fee8-590f-44d3-bd86-5a7e9c99e266",
                "breed_uuid_horriot" => "1fa3ab21-ba6e-4ae2-9a51-7f88e934f330",
                "breed_name" => "Аксарайская",
                "breed_selex_code" => "73",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "002c411e-09ff-4166-8ed9-0b6dd8f84de7",
                "breed_guid_horriot" => "4d6864f2-08a0-4969-8fea-bdb9b1f03e01",
                "breed_uuid_horriot" => "23ef875e-9f94-495e-a5da-9f7677dda09f",
                "breed_name" => "Айрширская",
                "breed_selex_code" => "70",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "b4d3c17c-6994-48b4-9a49-d86cee066762",
                "breed_guid_horriot" => "4d6864f2-08a0-4969-8fea-bdb9b1f03e01",
                "breed_uuid_horriot" => "23ef875e-9f94-495e-a5da-9f7677dda09f",
                "breed_name" => "Айрширская",
                "breed_selex_code" => "1",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "9cf360f1-305c-4282-9b08-b58e8e2d0af6",
                "breed_guid_horriot" => "4d6864f2-08a0-4969-8fea-bdb9b1f03e01",
                "breed_uuid_horriot" => "23ef875e-9f94-495e-a5da-9f7677dda09f",
                "breed_name" => "Айрширская",
                "breed_selex_code" => "90",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "0370599a-6fa3-469d-a35e-c42501d3b9e7",
                "breed_guid_horriot" => "0009e518-b9b2-4def-a7e8-158654b7eefd",
                "breed_uuid_horriot" => "24129b1e-b8e2-4837-8e85-1a63a79d7b00",
                "breed_name" => "Ангора",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "25",
                "breed_guid_self" => "540f227f-dcb8-42d1-b794-a0b14475d771",
                "breed_guid_horriot" => "f165e050-4e57-4052-bb01-f7018ee7cb7c",
                "breed_uuid_horriot" => "289eb4dc-16ad-462b-8e7d-3b463c4d5829",
                "breed_name" => "Алтае-уссурийская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "fbc9231c-8be1-4bd1-a4df-3a9294d85012",
                "breed_guid_horriot" => "6391b1d8-cd91-4f55-be2e-9f6feb89f28f",
                "breed_uuid_horriot" => "30cd7d6b-6aa9-49d0-9074-af385fa788a2",
                "breed_name" => "Анишская зеркальная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "655ce2dd-996d-4276-9ce5-c45800340053",
                "breed_guid_horriot" => "f3aaec46-acc6-4f4d-958c-d81f5de0245d",
                "breed_uuid_horriot" => "33c17071-5eac-433f-8c6f-4c0f29b5e17e",
                "breed_name" => "Австралийский меринос",
                "breed_selex_code" => "53",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "153c9514-62a3-4342-ac29-490d6a18742a",
                "breed_guid_horriot" => "b59b5f6b-c8c8-474e-9eb6-9e29d7061e74",
                "breed_uuid_horriot" => "349b9c0e-7e29-47d3-a5bb-398c4e095a55",
                "breed_name" => "Адлер",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "f54ce434-c988-4859-91c5-c40f9195af3d",
                "breed_guid_horriot" => "70edaf0a-20de-40d8-a977-9f432e12fe84",
                "breed_uuid_horriot" => "3552b335-6f63-472d-84fe-5228b80fe187",
                "breed_name" => "Алатуаская",
                "breed_selex_code" => "3",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "cd335e27-6ced-47a7-8540-d8a44fc75f45",
                "breed_guid_horriot" => "e4c54ed2-23e4-4dd2-bf1b-209a0c556eea",
                "breed_uuid_horriot" => "3a1df8b0-b119-4767-a19c-7f58cc68813d",
                "breed_name" => "Англерская",
                "breed_selex_code" => "2",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "a471edfd-ca8a-42e0-87c4-a7c05c380cfd",
                "breed_guid_horriot" => "c1d450c9-168d-439b-bc84-e20334530f73",
                "breed_uuid_horriot" => "3e89135d-be82-4bff-8912-58be7232b77b",
                "breed_name" => "Агинская",
                "breed_selex_code" => "82",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "016e30bc-26fc-4e30-9fbc-2484fcd9d1e2",
                "breed_guid_horriot" => "eee803ca-be51-4961-a95b-a928e3b147e2",
                "breed_uuid_horriot" => "49d216e0-bde4-4786-91c3-1fd0acef0cb5",
                "breed_name" => "Адлерская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "89514f37-13ef-4cfa-9c9f-2402ad34f3cc",
                "breed_guid_horriot" => "bd67da0d-a132-4645-9729-2f03ac3df0d5",
                "breed_uuid_horriot" => "608f09f0-66c2-40e0-aaa6-4d3c1347c6fd",
                "breed_name" => "Алтайская зеркальная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "d1150f14-519d-4e10-8148-846b10c3f136",
                "breed_guid_horriot" => "c4d384e0-8f41-4153-ba9c-94db15a9abb4",
                "breed_uuid_horriot" => "69253ff6-1043-4535-947a-12dda580e8f7",
                "breed_name" => "Англо-нубийская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "a6436765-670b-441c-8af9-5f07c4389949",
                "breed_guid_horriot" => "0b101eda-41a3-48d6-8c11-6cc6c726c29a",
                "breed_uuid_horriot" => "6c85a03c-9035-48fd-99ee-29ab3e4df35b",
                "breed_name" => "Алтайская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "70c5c993-e3d3-4090-a730-8ed034e52ef8",
                "breed_guid_horriot" => "0ff9d7f7-7fe8-4daa-b6aa-400ac102bbfa",
                "breed_uuid_horriot" => "71fe5523-467c-4dfa-af8d-5e06e59a6d53",
                "breed_name" => "Андалузская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "7929afd6-9d7f-46d1-8bbf-e8c62aa2fe7e",
                "breed_guid_horriot" => "52dd6c76-5477-453d-9632-ca74a457116c",
                "breed_uuid_horriot" => "7c55e7d7-cd58-41ed-89b9-615a2c1a4308",
                "breed_name" => "Андийская",
                "breed_selex_code" => "89",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "7b68af82-bd89-4dbe-9b73-42e9e80eeb33",
                "breed_guid_horriot" => "87316c43-aef6-4ab7-b8df-a16d488aba51",
                "breed_uuid_horriot" => "9441cd0d-fb79-4f50-b217-d1cc99b6fcbb",
                "breed_name" => "Ангелинская чешуйчатая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "d8f10fac-2de3-431d-8760-ad007d8d6499",
                "breed_guid_horriot" => "67b2ae13-8f8a-42ac-9da3-fe18571eb91a",
                "breed_uuid_horriot" => "a18e3c78-b347-41fb-a51f-b842b3deea56",
                "breed_name" => "Американская миниатюрная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "437584ba-67b9-45ab-bf38-6aed9a953f40",
                "breed_guid_horriot" => "722e9aab-4210-41d2-9484-227c5af721f3",
                "breed_uuid_horriot" => "a1e010c6-cb94-4660-bc55-b51c35f9e32b",
                "breed_name" => "Альпийская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "3319fcf2-5cd1-4e55-a668-3166067920d1",
                "breed_guid_horriot" => "0991e791-5be1-4e6b-b412-d95e0bdec618",
                "breed_uuid_horriot" => "baf09b68-9295-46f0-a39a-2bdc92fa2349",
                "breed_name" => "Ангелинская зеркальная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "f7b31306-1981-4886-a6d8-c822db7173bc",
                "breed_guid_horriot" => "eb8a0f90-eb41-4c29-94d8-68632393d2d5",
                "breed_uuid_horriot" => "bdcece9b-7f4b-4872-bb5a-d46e4659a70d",
                "breed_name" => "Аксайская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "223cb1d9-eacb-45e5-895f-181c4a13d1d2",
                "breed_guid_horriot" => "1524c89a-70e8-4142-9578-fe20f528d272",
                "breed_uuid_horriot" => "c75e98cc-a847-4d19-9a6c-a01e9eb32b72",
                "breed_name" => "Алтайская",
                "breed_selex_code" => "1",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "99f67533-8b8b-42ca-b18d-da2689b505ec",
                "breed_guid_horriot" => "4e723cf9-21d3-4bda-83f5-234faf953e14",
                "breed_uuid_horriot" => "c8b05a4a-17d2-40bb-a761-b24427f91468",
                "breed_name" => "Алеутская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "2ba4b07b-31d4-4ca5-a1d8-48c3d120adc5",
                "breed_guid_horriot" => "749cb5e1-a41c-4a97-be9b-126b098a2468",
                "breed_uuid_horriot" => "cc8b2a5f-ebc3-4726-a828-7960aee66a19",
                "breed_name" => "Амрокс",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "89f38f48-f8a4-4d97-a71f-0c2da7306616",
                "breed_guid_horriot" => "f0b9660e-f221-4551-9b08-eb4b2aaa598c",
                "breed_uuid_horriot" => "e19a5e22-7e16-45cf-9a39-3d3777cace70",
                "breed_name" => "Абердин ангусская",
                "breed_selex_code" => "76",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "17e85a2c-d640-41b7-9722-e109a5c57f29",
                "breed_guid_horriot" => "d04e648c-77c3-4e44-979e-57e949846ad6",
                "breed_uuid_horriot" => "e77a0ac5-5ed9-4c28-a1dd-caaaf7cdc7c3",
                "breed_name" => "Австралорп черный",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "25ee7daf-f5f6-4661-afdb-e22af6ae7e98",
                "breed_guid_horriot" => "b7203576-212d-4910-963d-6aae14950e2a",
                "breed_uuid_horriot" => "f3b425eb-a919-40e9-a804-8aded2ce9882",
                "breed_name" => "Андриановская",
                "breed_selex_code" => "125",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "3df37332-df87-465f-8867-42ba53aa3c90",
                "breed_guid_horriot" => "5dee8970-f83c-4769-a758-783487caf3fc",
                "breed_uuid_horriot" => "fa222fce-308e-4829-8180-f909fdae072e",
                "breed_name" => "Ампалосапфир",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "ff78c9e2-b059-4002-8b2b-ea413f73a593",
                "breed_guid_horriot" => "70291726-1870-47be-aed6-13e19ca045d8",
                "breed_uuid_horriot" => "ffe1f49b-d6e1-4d81-b330-5f6928d39dad",
                "breed_name" => "Американская верховая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "d2e6dfdb-7fa3-49ab-9373-68228ad24a5c",
                "breed_guid_horriot" => "0572f955-c153-4e84-8118-1ee992fc8966",
                "breed_uuid_horriot" => "0f7d65f5-0bc0-4ff3-9744-0912df542532",
                "breed_name" => "Бентамка ситцевая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "c8889ce7-4705-4efe-bb31-5782c515075c",
                "breed_guid_horriot" => "bc60ad5a-b470-42c6-9a9c-96da2e49641e",
                "breed_uuid_horriot" => "1104758a-cafe-474e-9250-9327e35c5033",
                "breed_name" => "Ассаф",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "aa6f27ab-98b6-4944-ba32-193330469367",
                "breed_guid_horriot" => "d486d062-eca2-4f95-8e91-06342d2c13ac",
                "breed_uuid_horriot" => "1e36f032-6693-498a-a070-c43467ac77d1",
                "breed_name" => "Бурая швицкая",
                "breed_selex_code" => "50",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "ebbd440e-7116-4856-84a2-a42d72f0aaa5",
                "breed_guid_horriot" => "1569701f-9a4c-4a06-8e00-db4d76666f4d",
                "breed_uuid_horriot" => "21cfc843-fa59-43cf-878c-4e9abb35a135",
                "breed_name" => "Баганская мясная",
                "breed_selex_code" => "120",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "727779d6-9883-4e15-a812-3c269e32cdb7",
                "breed_guid_horriot" => "48a7da7c-06e4-4d2b-8dea-be6cf65efe3d",
                "breed_uuid_horriot" => "4476ac6a-206f-4ae5-a713-2a167390c39c",
                "breed_name" => "Аулиекольская",
                "breed_selex_code" => "58",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "59eff1e3-111a-43c1-865b-72fad465a622",
                "breed_guid_horriot" => "21122c35-5200-485c-9ba7-f5c8d8c1ce33",
                "breed_uuid_horriot" => "49258459-fa3e-4f01-9982-b3e91af5efd2",
                "breed_name" => "Белая немецкая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "060da868-d446-47a1-af8d-89a8ce22dade",
                "breed_guid_horriot" => "6798092e-56a2-47d4-8193-1f0984ecbc0e",
                "breed_uuid_horriot" => "49fd5fbd-5f2c-4153-aa63-b538c87ca03d",
                "breed_name" => "Баттерфляй",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "1cd516a1-36bf-4061-bf0e-acae745b5369",
                "breed_guid_horriot" => "939f443d-43a7-4de2-b35d-083ffc2921d5",
                "breed_uuid_horriot" => "4b9a1009-b0b0-4b45-a398-dc9cf735a90a",
                "breed_name" => "Ачинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "9ce2fda0-25ca-4f24-8ac3-0d02d6e4ed2b",
                "breed_guid_horriot" => "f580f4f3-fa37-44cd-bfed-7c8e3ea8effa",
                "breed_uuid_horriot" => "4f5c2a98-9338-45db-8ebe-74e389b039b5",
                "breed_name" => "Бестужевская",
                "breed_selex_code" => "5",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "537bf5d3-52a5-46f1-9ed8-30f514191ef4",
                "breed_guid_horriot" => "db867a7f-6fe8-4080-89b7-38d506af0c0c",
                "breed_uuid_horriot" => "5f1efd56-0c21-4dd9-a024-8a2a74f2606b",
                "breed_name" => "Бородинская",
                "breed_selex_code" => "94",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "9c5a997b-43ec-4194-8081-99f62eff5f19",
                "breed_guid_horriot" => "32320d4a-6c82-407a-b9ad-b54dde4128e2",
                "breed_uuid_horriot" => "67a4f9e4-4571-47f7-a2df-f76ae5773030",
                "breed_name" => "Башкирская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "6",
                "breed_guid_self" => "96315ce4-0ae2-43dd-a819-8f2c9dc92caa",
                "breed_guid_horriot" => "8abfad94-fb23-4d4b-8832-f92c6439d790",
                "breed_uuid_horriot" => "69ac8bfd-7aed-47b6-ae23-09f8c8006c83",
                "breed_name" => "Белая широкогрудая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "dd82ea17-513b-4db4-9daf-0a71f25eeefb",
                "breed_guid_horriot" => "0519937a-9b89-48cc-b06f-a78af88cbc2b",
                "breed_uuid_horriot" => "6b3fe7bf-5f2f-4582-80d7-1e06e2226808",
                "breed_name" => "Белорусская крупная белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "1b8181f4-eaf4-4e07-b75e-07ad07ff06c2",
                "breed_guid_horriot" => "713991f5-405c-4b6f-a3c7-0b077f6d940a",
                "breed_uuid_horriot" => "6cb8b9ba-ec6b-4fc8-81d8-435a43f79698",
                "breed_name" => "Бурая карпатская",
                "breed_selex_code" => "7",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "8aac6ebc-cb7a-4e77-af60-9e3eaf7254d5",
                "breed_guid_horriot" => "fef56f2e-86f8-4d5a-a360-8f45d4638974",
                "breed_uuid_horriot" => "7d428977-da08-4ca8-b461-4a01935e20eb",
                "breed_name" => "Будёновская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "340b84b9-141e-4293-a9cf-0d4cae387902",
                "breed_guid_horriot" => "881cfb7b-17d0-4f11-b78e-c89939e73bc1",
                "breed_uuid_horriot" => "7f6574aa-d1bc-4b88-9f66-98bea2258186",
                "breed_name" => "Бежевая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "2d416b4d-92ae-4873-a524-8025e312c479",
                "breed_guid_horriot" => "964764b8-ac15-4deb-8879-c4b786659b7f",
                "breed_uuid_horriot" => "84b638a0-7f78-401d-9538-f494842087de",
                "breed_name" => "Белорусская мясная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "5c75f348-45b2-4af3-9b4a-99d52f87bd78",
                "breed_guid_horriot" => "2461df5f-4e85-49e1-8675-813ca00917eb",
                "breed_uuid_horriot" => "88e2f0b4-828c-4b6e-bec5-5e0cebfa48db",
                "breed_name" => "Аргунская",
                "breed_selex_code" => "55",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "0e0de2d5-f42f-4d7a-bfd5-0a7a3b458011",
                "breed_guid_horriot" => "6aa8e384-b5da-4eb7-8b55-200762c01965",
                "breed_uuid_horriot" => "8b330c43-aae6-40b0-ac2c-392853ddb2bb",
                "breed_name" => "Ахалтекинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "3fd23910-9401-4155-b9fd-9ef80616c07e",
                "breed_guid_horriot" => "5aa5445a-31ee-4afd-9a13-97ff18166119",
                "breed_uuid_horriot" => "95c39369-c398-4a18-9429-33c3f1a24a26",
                "breed_name" => "Белорусская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "02585393-a826-4203-80d7-322178c356f4",
                "breed_guid_horriot" => "4e589ccc-320d-48ce-865e-1387fa330225",
                "breed_uuid_horriot" => "9d792341-5711-4bb4-a53e-4253be8329fe",
                "breed_name" => "Белая итальянская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "b9585abc-96fe-4320-bc31-256c0bdd81b8",
                "breed_guid_horriot" => "2bb235da-3be9-408a-b9b6-33a9f3e199aa",
                "breed_uuid_horriot" => "a8ddfb9e-0b15-4d67-a591-0c58dc2da450",
                "breed_name" => "Бланк-блю бельж",
                "breed_selex_code" => "112",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "980911b4-ea9e-4f68-86cf-8a6fff11405a",
                "breed_guid_horriot" => "d93b8cc7-ad49-43b9-980c-3aeadfa99d91",
                "breed_uuid_horriot" => "ae749af5-f38f-4add-9c9d-ed36c99673ad",
                "breed_name" => "Брединская мясная",
                "breed_selex_code" => "118",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "66b1d4d4-e258-4f77-afb1-45a8c117d884",
                "breed_guid_horriot" => "bc8103cd-aa0e-4321-8be7-ba53d628b02f",
                "breed_uuid_horriot" => "b1cd2545-f520-4d22-b854-2f7b150dbcdb",
                "breed_name" => "Аппенцеллер",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "a038ccae-c8dd-4684-bf1f-bf86fd9a35b6",
                "breed_guid_horriot" => "d04ea32a-a4a1-428c-9f22-6a178fde4591",
                "breed_uuid_horriot" => "b4b0a921-3d01-42e9-b11c-5598286d82c5",
                "breed_name" => "Белая пуховая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "1eadfa25-1f92-4dae-9307-4d7122aecba9",
                "breed_guid_horriot" => "95a6eb29-46cc-4229-9ab4-38b2f036d11c",
                "breed_uuid_horriot" => "bb03af87-5f11-419d-bb9c-22068ebf368d",
                "breed_name" => "Бордер лейстер",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "4593acd7-1b98-4974-864a-fad78679172b",
                "breed_guid_horriot" => "f7fd8678-5c9f-47e5-a1ea-6ed200df99fc",
                "breed_uuid_horriot" => "c48d12df-9f47-4c59-8aee-9d95cf6ea5de",
                "breed_name" => "Арабская чистокровная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "979c71a3-beba-4f1b-a41d-8f0fbb31126e",
                "breed_guid_horriot" => "835e7d90-4833-4772-aa89-94c71d1e96f9",
                "breed_uuid_horriot" => "c87a7f98-9731-4be6-83b3-65f44c125df5",
                "breed_name" => "Белые хедлунд",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "a5a6b59b-728e-4b9b-9e02-cc90bd35d5f2",
                "breed_guid_horriot" => "9fcd26aa-918c-4e71-958e-07d991fcb07e",
                "breed_uuid_horriot" => "c9972a9b-8b10-4604-9bf0-ece148c4a6b0",
                "breed_name" => "Арзамасская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "e1c3e2b4-0ff2-40be-8b2c-c75498ea645f",
                "breed_guid_horriot" => "7bb2eb27-9cac-495b-89f3-4d2e959b7c80",
                "breed_uuid_horriot" => "cf8072a9-d7d6-4869-a659-8b56b21d58ba",
                "breed_name" => "Богородская",
                "breed_selex_code" => "67",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "82edf72d-be34-493d-a7a2-f597049b4f1e",
                "breed_guid_horriot" => "38dec619-edda-415b-bb9a-e9d639c2f569",
                "breed_uuid_horriot" => "d330e788-8583-4497-a6e1-9a97a473dd91",
                "breed_name" => "Арктический мрамор",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "34",
                "breed_guid_self" => "dc59f6b8-0c64-4032-a1f6-db3508ea54ba",
                "breed_guid_horriot" => "0662f870-4a83-4c7b-b458-da7c6f5b0a2a",
                "breed_uuid_horriot" => "dd388dfc-475f-4af6-a27a-f4e3999eb4fb",
                "breed_name" => "Астраханская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "61ef5012-6268-4a0b-8a03-6af399c25bd6",
                "breed_guid_horriot" => "285d7896-575c-4b67-9ef7-603519fc94cc",
                "breed_uuid_horriot" => "dd9fe732-a384-422f-8bc1-87fa3b5eb893",
                "breed_name" => "Бабочка",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "8b83b33d-d750-4d3b-8b20-de1b158527b1",
                "breed_guid_horriot" => "f4144d95-d07a-4709-951d-81659eddabd7",
                "breed_uuid_horriot" => "e20ce3a0-97ca-4560-b51f-c37f5c12731a",
                "breed_name" => "Брабансон",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "5014fbc6-7ff9-4caa-a010-81e3c332c681",
                "breed_guid_horriot" => "3ff8a302-ea9c-4347-a352-86c8e6585607",
                "breed_uuid_horriot" => "f07f1b9f-5581-40cc-9343-24ef4a04fa11",
                "breed_name" => "Белтекс",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "36",
                "breed_guid_self" => "c5e5e1ab-91aa-43b6-a114-c9e8bc114964",
                "breed_guid_horriot" => "485328ed-1693-49c2-a004-89de572fb9eb",
                "breed_uuid_horriot" => "f5eba67f-e37c-44d7-ac66-596e7aeab974",
                "breed_name" => "Бакфаст",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "7484b7e1-4773-4297-92db-e0a28e757287",
                "breed_guid_horriot" => "b0ea640a-ce77-488f-9b6d-0b63b0e17419",
                "breed_uuid_horriot" => "fd40c897-791a-4d02-939f-1ef4397a9b46",
                "breed_name" => "Белорусская упряжная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "45faf3fc-ec9e-48c2-aa01-24c9fc4284af",
                "breed_guid_horriot" => "cf7cd32e-9a7d-4707-85c5-77a3912926dc",
                "breed_uuid_horriot" => "0784c00b-160d-4b70-9223-3749f025bcec",
                "breed_name" => "Венгерская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "f539ba40-ad96-4da2-a6cc-8616dc35c0d6",
                "breed_guid_horriot" => "cbe2d424-6db7-4c6b-a1e3-db1b1b40166a",
                "breed_uuid_horriot" => "12166118-9aa6-43dc-b5ca-8d39170070db",
                "breed_name" => "Виштинес",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "2ca016da-735b-48f3-bcab-ae115e1d71cf",
                "breed_guid_horriot" => "28c2c597-01f0-4478-bd16-39e7cbd7a690",
                "breed_uuid_horriot" => "1927e5bf-4dfe-4857-aff0-43e5ed83413a",
                "breed_name" => "Бурцевская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "9c7571ba-5fe9-42fa-a4ca-7435f119a4e8",
                "breed_guid_horriot" => "501d0f5d-8cad-491f-9bc7-eec925ae31b3",
                "breed_uuid_horriot" => "1d0e8750-a126-48d9-8b00-2a4741e34f93",
                "breed_name" => "Вестфальская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "d5166fdd-885d-49ac-af41-79a28ebdb263",
                "breed_guid_horriot" => "799f67d1-a3bf-4d8c-9e5e-7d656f5df31f",
                "breed_uuid_horriot" => "1d848a8c-4915-48b7-b1be-c6f62177d417",
                "breed_name" => "Волжский рамчатый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "94481e98-807a-4dfd-a7c4-6f81d836013e",
                "breed_guid_horriot" => "d486d062-eca2-4f95-8e91-06342d2c13ac",
                "breed_uuid_horriot" => "1e36f032-6693-498a-a070-c43467ac77d1",
                "breed_name" => "Бурая швицкая",
                "breed_selex_code" => "36",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "2d9f9ab7-6764-42cf-8251-4691382eeb91",
                "breed_guid_horriot" => "bbb5ca63-a166-49fb-a925-91c9bc7cc8fa",
                "breed_uuid_horriot" => "2613026a-5b1b-4460-bbe7-b1081d2c020d",
                "breed_name" => "Гемпширская",
                "breed_selex_code" => "32",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "5506099c-9c0a-441f-8df3-05d7d38370bf",
                "breed_guid_horriot" => "f7608dfa-3ccb-4e50-a972-08c388955356",
                "breed_uuid_horriot" => "2bff47f9-2c6e-4b57-bedd-88974083f23e",
                "breed_name" => "Гашунская",
                "breed_selex_code" => "63",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "af89eac6-840a-4dfe-96b7-1ad78af89e04",
                "breed_guid_horriot" => "eb10ebcb-1a21-4396-9185-ca50f071511f",
                "breed_uuid_horriot" => "2c38e5d2-d026-41b7-a137-249a32cbf526",
                "breed_name" => "Вьетнамская вислобрюхая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "63a893e6-a089-47db-9f62-d49b7af1e894",
                "breed_guid_horriot" => "9a0cd0f8-5b4c-4e09-ac78-f23bd6b0a454",
                "breed_uuid_horriot" => "30f7e322-8754-4d7b-8051-830da6a14363",
                "breed_name" => "Венгерская мангалица",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "5f41d04e-3636-47b1-b74b-0ccfb0a9613b",
                "breed_guid_horriot" => "c0cedd70-7e21-422c-8f38-fd756e16fb66",
                "breed_uuid_horriot" => "375d05d7-5180-47e1-82c8-bb9fc3f8030e",
                "breed_name" => "Бурятская",
                "breed_selex_code" => "51",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "f616c79e-390b-40f3-99cb-b36b69c9164f",
                "breed_guid_horriot" => "5f728373-fd08-40ef-a285-906e6e3a25ad",
                "breed_uuid_horriot" => "3b92140f-1f54-4f31-b8cb-622d5d81eed2",
                "breed_name" => "Восточно-манычская",
                "breed_selex_code" => "102",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "97460a75-18ef-4211-bcd9-1f062e09b974",
                "breed_guid_horriot" => "744e5f61-a72f-496f-9caa-aeb6e73dce6f",
                "breed_uuid_horriot" => "3d797d35-ed03-4d68-98c8-0f22af40e85e",
                "breed_name" => "Вельзумер",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "72ff6b7f-e5d2-4492-8f24-6a3ef53ed325",
                "breed_guid_horriot" => "8e9b4420-d8c4-40d0-b89e-2d69e61a52f8",
                "breed_uuid_horriot" => "4ed7de7c-0af6-41b6-b329-969a56038e2a",
                "breed_name" => "Восточно-фризская (Остфризская)",
                "breed_selex_code" => "105",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "881cf72f-a17a-49ae-bf32-69c304d059bc",
                "breed_guid_horriot" => "57dab24e-d0f8-40bc-a4bc-cab1663268c7",
                "breed_uuid_horriot" => "4f65672b-79d5-4763-982a-a790dd3f2696",
                "breed_name" => "Венская голубая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "6112ded4-3674-45c3-a134-4f7def6affde",
                "breed_guid_horriot" => "24ca74dc-6474-4cbb-84c4-1811496882bc",
                "breed_uuid_horriot" => "5258dc5e-c2c9-4aaf-ada9-8eb4bfa0bc93",
                "breed_name" => "Вагю",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "c4518f27-c9a8-4a14-9f07-633adabd6386",
                "breed_guid_horriot" => "abde99b9-4371-43cb-9bf5-8906ab7ddf5b",
                "breed_uuid_horriot" => "5a7b6419-747d-4cc9-ae88-c72c5fdf2941",
                "breed_name" => "Венгерская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "08c9645f-0f38-4db4-a560-6018e925553f",
                "breed_guid_horriot" => "b8534112-958b-4aa5-ab42-0b3a61e9e441",
                "breed_uuid_horriot" => "60d24afa-658b-40c0-bd83-ae93db7d9c73",
                "breed_name" => "Вернеенисейская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "f8784d3e-bf8d-4960-b513-42af6b711fcb",
                "breed_guid_horriot" => "8fd66398-39f4-4b19-b44a-1b2b730e67a6",
                "breed_uuid_horriot" => "6500882c-2c13-4464-a3c2-c5142d70da6b",
                "breed_name" => "Волошская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "2",
                "breed_guid_self" => "bf21866b-51e6-4d23-8d6d-b8bce7160256",
                "breed_guid_horriot" => "6211b6d3-01fe-432c-8a89-be88dbc760ca",
                "breed_uuid_horriot" => "6736e6bf-d6b7-41bb-bf6b-d5aefa6f2589",
                "breed_name" => "Вуалевая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "c6717f55-85e5-4f7c-94ac-c257d047bf7e",
                "breed_guid_horriot" => "bf492d61-9a8d-47df-bd78-f545233189f3",
                "breed_uuid_horriot" => "68049e64-0441-4ec9-ac09-48d157bddc60",
                "breed_name" => "Вологодская",
                "breed_selex_code" => "106",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "132692fd-6791-40c3-9c55-9a4dafa5f864",
                "breed_guid_horriot" => "1d9d0b3a-ecaf-48d6-a2e3-28aba7c09847",
                "breed_uuid_horriot" => "73e3dad3-8b88-42c2-ac38-de4584d73ece",
                "breed_name" => "Галловейская",
                "breed_selex_code" => "78",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "a4145deb-5c98-44c0-a0e3-7a0a5f15d209",
                "breed_guid_horriot" => "ed85dd76-1fba-4912-9d58-ebaa711740e8",
                "breed_uuid_horriot" => "90fb616b-505c-4c53-8ca3-03af298b10d7",
                "breed_name" => "Владимирская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "dfc07816-61ff-4905-8468-44e8c5f4f957",
                "breed_guid_horriot" => "896c6660-dfbf-4026-a2d8-5402aea8f723",
                "breed_uuid_horriot" => "a9d64f9c-38b7-4c15-812c-293e29597141",
                "breed_name" => "Вознесеновская",
                "breed_selex_code" => "115",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "9f648e05-99cd-4591-a388-cf318622bc60",
                "breed_guid_horriot" => "c1c36750-8239-4e22-84b8-1adb019b02b1",
                "breed_uuid_horriot" => "b324aa6f-46a4-4d9c-ba55-d77b536ee105",
                "breed_name" => "Бурятская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "272edd00-93fe-460f-877a-23addfcaec71",
                "breed_guid_horriot" => "2f87ce3d-0920-4a78-83c2-28242e1c484f",
                "breed_uuid_horriot" => "b8a2bcb7-3ecf-4ee1-a1d6-60c33ab990f2",
                "breed_name" => "Валийская черноносая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "f97b945e-ca28-4f19-9a27-c7c5b13def62",
                "breed_guid_horriot" => "39c6fee4-a76c-416a-84f3-be7bd33a1d6e",
                "breed_uuid_horriot" => "be7db4fa-4785-452d-a772-e89fefe4714d",
                "breed_name" => "Владимирская глинистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "207ac51d-bce5-4919-990c-8b7b33618a48",
                "breed_guid_horriot" => "3611beda-3f84-4f5e-a324-bd4f309c141d",
                "breed_uuid_horriot" => "c31adb84-53bd-4dee-bef3-22145499d88d",
                "breed_name" => "Бурская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "88df1cc9-d24b-4a5c-bd0b-2466ab62d38b",
                "breed_guid_horriot" => "0d1054dd-11ae-47a2-b634-810c89076af9",
                "breed_uuid_horriot" => "c42e24fe-b1ca-4603-90c4-9c5e7a2e7005",
                "breed_name" => "Вятская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "5b68c357-cb05-4857-b4d2-98839c9f1078",
                "breed_guid_horriot" => "aaf32324-6000-4d41-bfb7-91027933afc1",
                "breed_uuid_horriot" => "d8a3b83b-d147-4c98-9e6c-794d17dc2773",
                "breed_name" => "Валийская черношейная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "8f44670c-0671-4c42-a2d0-3d9065544527",
                "breed_guid_horriot" => "ee02ac26-a7fd-45f8-b601-13a4185fb93e",
                "breed_uuid_horriot" => "d9a06f68-5954-4b3d-bc79-412c7155760c",
                "breed_name" => "Волгоградская",
                "breed_selex_code" => "116",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "6668b139-27d1-40cc-bd84-6b3503fdb8c5",
                "breed_guid_horriot" => "eb2f8656-b25b-42ea-a695-618b9999a5e7",
                "breed_uuid_horriot" => "dc819970-fd12-421e-822f-95fe00b90cb9",
                "breed_name" => "Восточная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "4ec0e249-b290-44d9-a566-b461745ed66f",
                "breed_guid_horriot" => "2bfec8d7-0784-43e1-89a8-e00f5c7a7eb6",
                "breed_uuid_horriot" => "e83e5133-bada-4584-80d6-77124169c01e",
                "breed_name" => "Волгоградская",
                "breed_selex_code" => "14",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "6a94bbe4-72ef-435b-a93b-de150f3199d9",
                "breed_guid_horriot" => "e9d23609-8db5-4bf9-a95e-e2c4b0bb8724",
                "breed_uuid_horriot" => "f026b0e4-91e4-4b54-80b1-9a568d72a0a5",
                "breed_name" => "Ганноверская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "00b79020-96a6-4897-b65d-4b66c8736861",
                "breed_guid_horriot" => "ebb4b12f-94d5-4e85-9f74-43ee443c3f00",
                "breed_uuid_horriot" => "f244e99b-e17b-416f-a7dc-2c7510c3b7e3",
                "breed_name" => "Воронежская",
                "breed_selex_code" => "64",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "2dc1b3ed-9d74-4527-8031-1659f403a8bc",
                "breed_guid_horriot" => "54053ffe-9190-4228-8de5-6b7fcd6798bd",
                "breed_uuid_horriot" => "f9f8f6cd-8125-420c-9492-f804752f5e2a",
                "breed_name" => "Венцовская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "d8d99981-dd01-4ba5-9ab5-e02ca956f379",
                "breed_guid_horriot" => "929f74db-bcdf-41f3-80c5-4e4c63f1be7c",
                "breed_uuid_horriot" => "f9fb6b12-150c-496e-916a-11de4ac61ab0",
                "breed_name" => "Внировская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "6da07469-d6f7-444c-bea4-fd5ccaaaab6c",
                "breed_guid_horriot" => "e60135f6-ab39-4d36-84bc-c236cc42e757",
                "breed_uuid_horriot" => "10786263-5ec9-4a64-b302-802c1facaeae",
                "breed_name" => "Заволжская",
                "breed_selex_code" => "75",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "4188b854-f681-4d84-9229-30ca705993a7",
                "breed_guid_horriot" => "e4ff09d3-e890-492b-995c-d18093f974e5",
                "breed_uuid_horriot" => "170758dd-db53-4cd8-a318-56bce5d1812a",
                "breed_name" => "Зааненская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "347d97b0-fb6e-409a-84ad-db74a7e63e56",
                "breed_guid_horriot" => "8c9b1927-56bb-44b6-bbf6-9d39eb41808f",
                "breed_uuid_horriot" => "1bb0f83b-1b33-4f13-9200-31325a57cbf4",
                "breed_name" => "Донская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "65a250b4-b7ed-4baf-96df-8466a57aad43",
                "breed_guid_horriot" => "81e236bc-a4da-488a-813f-7d99ca70c899",
                "breed_uuid_horriot" => "c5c36a21-807f-433d-bf85-2971c356c045",
                "breed_name" => "Енисейская",
                "breed_selex_code" => "73",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "be7a93b6-59d3-43a8-86e0-07405e31b983",
                "breed_guid_horriot" => "ab5687e1-d1ef-447e-9018-891755ecf397",
                "breed_uuid_horriot" => "3443ce34-239f-4d76-b8ba-ee249eea8f43",
                "breed_name" => "Голштинская черно-пестрая",
                "breed_selex_code" => "32",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "4dc93671-8532-4afb-942b-eef69f631115",
                "breed_guid_horriot" => "06e60b57-3879-40dc-8053-1bd94d18ba72",
                "breed_uuid_horriot" => "3d8d344c-f844-4049-855f-e74751cf6bd7",
                "breed_name" => "Голошейная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "56ee754b-f506-4f9f-ae07-7586b937e7ad",
                "breed_guid_horriot" => "ccb744de-5a99-40c6-b432-603af65fbcc2",
                "breed_uuid_horriot" => "3e570b35-453e-4adf-a833-0e0b4d369b9a",
                "breed_name" => "Дюрок",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "e800b59a-8b8b-41e5-ba6e-ff44163908b2",
                "breed_guid_horriot" => "73330b65-c7c1-4e8d-8823-073853c6282b",
                "breed_uuid_horriot" => "9d6521dd-f02f-4972-9573-a3224c7ab38c",
                "breed_name" => "Григорополисская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "f2580ffb-78b4-4f95-bda3-6e4531e39f14",
                "breed_guid_horriot" => "c0621290-f3bb-4fa6-b528-3273ca0e927a",
                "breed_uuid_horriot" => "4cdaf843-6472-44b9-ae84-1b4f61119692",
                "breed_name" => "Дмитриевская",
                "breed_selex_code" => "126",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "86defed6-d01a-4410-8420-25b2d82a0360",
                "breed_guid_horriot" => "c0524053-eff1-4597-bf20-dea87018bb87",
                "breed_uuid_horriot" => "4f39eac5-1aad-4c7c-bcc3-b497608de725",
                "breed_name" => "Голландская белохохлая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "f94cb917-4f4c-46ec-88f5-85b3b4a92866",
                "breed_guid_horriot" => "2b32822f-397a-44d7-8205-5f3f53d4f225",
                "breed_uuid_horriot" => "56dac32f-8820-4cbc-949f-4e308338e857",
                "breed_name" => "Е-лайн",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "823dcaca-8f63-4c1e-9372-89d068c12b8f",
                "breed_guid_horriot" => "373b19d9-52fb-43b3-9b08-c7664fdde128",
                "breed_uuid_horriot" => "5b1f6544-9820-47b8-be0e-d480aca6632b",
                "breed_name" => "Джерсейская",
                "breed_selex_code" => "91",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "3d92c72c-f8f7-4fb2-b87c-c13695bbfdcf",
                "breed_guid_horriot" => "7e0ff6e0-b9d3-4c0c-a40e-6ee58d0b08e9",
                "breed_uuid_horriot" => "6d40359b-a0bf-4a8e-b649-00abd5bbcb27",
                "breed_name" => "Догойская",
                "breed_selex_code" => "56",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "770f7ae6-c715-43f0-95bb-7b5a76cb61cc",
                "breed_guid_horriot" => "af3b5d27-64c6-4d1a-b4f5-57d91bc68034",
                "breed_uuid_horriot" => "7ba1ed06-b333-4d97-9a80-e989b85ebdf8",
                "breed_name" => "Жемчужная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "0aa5090d-ac94-41b5-a36f-28fb26455b6a",
                "breed_guid_horriot" => "185568b8-617f-4d7f-8f76-ea63f789b9e1",
                "breed_uuid_horriot" => "7f2b4df4-9fca-4128-a37f-6a27d332f330",
                "breed_name" => "Гулькевичская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "4516db78-4f3a-4661-b15e-b82f9383d5d5",
                "breed_guid_horriot" => "4c919de3-59de-4237-bff8-3160412c6fac",
                "breed_uuid_horriot" => "7f6beb78-cff8-4614-8ce9-5165337f2097",
                "breed_name" => "Джет черные",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "69e6d405-44c7-40a5-9545-b96d7847aed5",
                "breed_guid_horriot" => "f23464f7-29ab-453a-adf1-df255c3af7b2",
                "breed_uuid_horriot" => "821bfa37-7213-45d9-9f26-f6a08eb7238a",
                "breed_name" => "Голштинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "73660809-bbf8-490e-bbfb-8b606f2fcf3f",
                "breed_guid_horriot" => "65c244c1-d9f6-47a3-bde2-1415e3d08247",
                "breed_uuid_horriot" => "8c96357e-358d-4c79-aa46-2b67b9d7d8f6",
                "breed_name" => "Грозненская",
                "breed_selex_code" => "10",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "6770be84-d5eb-4b5a-8439-2bf4cf9b50b4",
                "breed_guid_horriot" => "63a1430d-d50f-45b3-9728-0d4097939443",
                "breed_uuid_horriot" => "92caa078-d37c-4e79-8196-8cf611d3ef7f",
                "breed_name" => "Голштинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "c8c5cdaa-f1fe-48e2-b24f-1fa3734ce15d",
                "breed_guid_horriot" => "bac58549-7eaf-4e6c-9310-66529b13bbb0",
                "breed_uuid_horriot" => "938559f8-a3a5-44c8-8aee-9d9c34ccb983",
                "breed_name" => "Горноалтайская",
                "breed_selex_code" => "94",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "2fa2c5d1-9be2-415e-83ea-60390e079492",
                "breed_guid_horriot" => "37e690b8-74a7-4f9e-b28f-7a4e67a88e19",
                "breed_uuid_horriot" => "a1fcfcce-7223-4674-9415-efef9f3fdbbb",
                "breed_name" => "Гулаби",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "49448bd5-2aed-4537-a642-e92faf0273eb",
                "breed_guid_horriot" => "88e3fbcd-27a1-4105-91dc-a266f8a8f286",
                "breed_uuid_horriot" => "aaf8f61e-bc75-4780-9d18-8a88b5a868e3",
                "breed_name" => "Дорсет",
                "breed_selex_code" => "30",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "4f702b2d-e657-48cf-9384-f0a194449142",
                "breed_guid_horriot" => "f9f934e3-2118-47b6-b978-f1385e3434d0",
                "breed_uuid_horriot" => "b154c29e-df7e-4854-9a24-8e640c22128e",
                "breed_name" => "Дагестанская горная",
                "breed_selex_code" => "16",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "2becb35a-1420-48b5-b590-d63669ecc0f0",
                "breed_guid_horriot" => "be8838ff-871e-464a-87f4-828c6ef1b8e1",
                "breed_uuid_horriot" => "b15b0b0c-106c-48a5-bd7d-5ec57daf0139",
                "breed_name" => "Голштинская красно-пестрая",
                "breed_selex_code" => "49",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "023493ed-5c69-4099-8585-090ce10bf065",
                "breed_guid_horriot" => "4cd9d3a7-1b69-4b4f-ad7e-c7d7e70d990a",
                "breed_uuid_horriot" => "c64d6d93-520d-4e5f-8c19-45eab57baf39",
                "breed_name" => "Дорпер",
                "breed_selex_code" => "116",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "14e7c6ab-fa3b-4a8c-be9f-5012bd3c0ced",
                "breed_guid_horriot" => "89fc54d0-6848-4c9f-80c0-1027ee0f3944",
                "breed_uuid_horriot" => "c7a24208-a2c5-40fc-823a-282fce4cff22",
                "breed_name" => "Дональдсона",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "1c67b1dc-a07e-46b3-a895-f778c6fec5f3",
                "breed_guid_horriot" => "3275ce7b-fe65-43b1-a513-dddcb9abf148",
                "breed_uuid_horriot" => "cef76d0a-c53b-4329-8b24-d9e812791a06",
                "breed_name" => "Джалгинский меринос",
                "breed_selex_code" => "97",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "f015f118-961f-4b06-86b4-dccdb6abbe4d",
                "breed_guid_horriot" => "f7353fc2-de25-45c9-abaa-8450281af5e7",
                "breed_uuid_horriot" => "d38623fa-393f-4525-8386-b84ace61f53b",
                "breed_name" => "Заволжская",
                "breed_selex_code" => "119",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "2349f26a-0595-4e2c-99ff-0a69036b821c",
                "breed_guid_horriot" => "68403c70-8760-4165-9af0-dfc246b28234",
                "breed_uuid_horriot" => "e3a26eda-8ab1-403f-b442-5814ebfe4cfa",
                "breed_name" => "Горная",
                "breed_selex_code" => "113",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "9a777b3a-28f5-4705-b4d4-4fc72318b6fc",
                "breed_guid_horriot" => "22bae8de-c9e8-4a9b-809f-760f715ed64d",
                "breed_uuid_horriot" => "ed72f4ea-32b2-47e6-b024-a72b7592583a",
                "breed_name" => "Губернаторская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "d46fbfca-531c-43a4-b363-691f4b26acf2",
                "breed_guid_horriot" => "102ab27c-50a0-4cd8-b6e5-6e9f0794fd77",
                "breed_uuid_horriot" => "f0fdd449-49eb-4958-bd1c-a995caaba6c2",
                "breed_name" => "Донская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "ccbd7e57-172e-4dbf-ac56-3870f77c8ff9",
                "breed_guid_horriot" => "2036405e-b8b9-4264-91e6-cafc2c155d80",
                "breed_uuid_horriot" => "fa412856-b8af-46d4-b28d-9feff25e92cd",
                "breed_name" => "Дороничевская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "97a960be-3d26-4e3d-9a13-9e9498d58560",
                "breed_guid_horriot" => "e04d419c-e167-45b3-83c6-c55edbf181ba",
                "breed_uuid_horriot" => "fb279b98-21b8-4716-9d0e-d0997e57e192",
                "breed_name" => "Ереванская красная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "0159c537-0677-4e43-8d08-82f93197682c",
                "breed_guid_horriot" => "33af990d-aa53-44de-b8dd-d8cb82841882",
                "breed_uuid_horriot" => "fbc7cd39-7308-4423-b5bc-6bfee550a71e",
                "breed_name" => "Заволжская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "e10fbab7-abef-4a1b-8ccb-c88a00b5ede3",
                "breed_guid_horriot" => "5e34be1c-d46c-45c2-aa64-b4930db83a85",
                "breed_uuid_horriot" => "fd9ad960-ddad-4daa-b32e-b8a97acebd4f",
                "breed_name" => "Герефордская",
                "breed_selex_code" => "79",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "9b8cdccf-5ad8-4f5e-8f8b-7390e2bcc4cf",
                "breed_guid_horriot" => "31ec3934-988a-4911-9c23-868e721b478e",
                "breed_uuid_horriot" => "05864284-351c-4f08-88a2-94be2093017a",
                "breed_name" => "Италмас",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "201fbd8c-8db4-43a3-91a1-9cc511a76d45",
                "breed_guid_horriot" => "ed481963-f04a-48bb-8b8f-7d8723429280",
                "breed_uuid_horriot" => "b66f8f00-a31b-4c7c-b27d-74c5eafe3c13",
                "breed_name" => "Ирменская",
                "breed_selex_code" => "101",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "a3fa6697-9f76-40d5-93ed-33486a9dfc3c",
                "breed_guid_horriot" => "310ca9e1-e13b-4fe3-b789-a05f02d4b9b9",
                "breed_uuid_horriot" => "0958c5a6-6fc0-4cfe-8d01-d930c7dfc2e8",
                "breed_name" => "Карачаевская",
                "breed_selex_code" => "44",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "7488e584-e983-43b2-8a35-19244b620168",
                "breed_guid_horriot" => "5c934b1b-bb6a-40fc-a1c1-bb0252b14a0a",
                "breed_uuid_horriot" => "12ddbe54-d5fe-42c0-9f6f-8f6bdbe0c294",
                "breed_name" => "Киргизская полосатая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "7ecfe054-a36f-4d46-b396-319bbab38e49",
                "breed_guid_horriot" => "2f380fb2-3922-4623-9a7d-742fc7016210",
                "breed_uuid_horriot" => "182b4928-f16b-4cab-ad05-d8ec052f1f09",
                "breed_name" => "Загорская лососевая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "46654f07-be74-4d9a-bd24-b84dc03093bb",
                "breed_guid_horriot" => "9fdfadb7-f396-48f9-a549-597b3feccb47",
                "breed_uuid_horriot" => "5cac0af4-c56d-4029-88dd-271ce8edec8d",
                "breed_name" => "Забайкальская",
                "breed_selex_code" => "5",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "1b0ca29d-c0c6-479b-a4d5-20fe3ad864e3",
                "breed_guid_horriot" => "611f988c-26b1-4ca5-9654-494de79f5549",
                "breed_uuid_horriot" => "966c9ad9-13e0-4f00-8e73-c95a0eeb3268",
                "breed_name" => "Забайкальская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "9d56159d-4d13-468d-9a67-cc3fc8c0b03e",
                "breed_guid_horriot" => "fa549d5b-0be8-4847-9f74-65269817bc49",
                "breed_uuid_horriot" => "2b72612b-9f68-458a-bbfb-1904ad863c37",
                "breed_name" => "Кавказская бурая",
                "breed_selex_code" => "12",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "43d11844-900f-4852-873a-62b89a17a791",
                "breed_guid_horriot" => "bf7c9318-4b7f-4337-a0cc-fa3c847bd076",
                "breed_uuid_horriot" => "31606105-12cd-4583-aff9-256cccb0e386",
                "breed_name" => "Итальянская куропатчатая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "f8515779-814a-459e-888d-0e096ca5ed51",
                "breed_guid_horriot" => "a18a5ba7-c276-44f8-bece-44bfd2219b22",
                "breed_uuid_horriot" => "31d7d4fd-8877-495c-8230-d6d4aab0f374",
                "breed_name" => "Камерунская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "574e8e6d-4898-46fa-bdd0-3ce5cc30ca4c",
                "breed_guid_horriot" => "0c92b9b2-9e79-4e33-a87b-b795db8cc9f5",
                "breed_uuid_horriot" => "410c3816-179e-46bf-9a64-b093ab8411f6",
                "breed_name" => "Казахская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "0df18123-7e0f-413d-b162-9dbdb9bb7a4a",
                "breed_guid_horriot" => "e5327c9f-b8ad-47dc-b477-ccd1ea5bd6b8",
                "breed_uuid_horriot" => "4439669f-a42b-4ecc-aad3-2cec0ad08cf1",
                "breed_name" => "Йоркшир",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "77a8d2f3-e7fe-42f6-b2c3-09534ae9de09",
                "breed_guid_horriot" => "45a26797-9681-4d70-8271-7a6954d7e319",
                "breed_uuid_horriot" => "4ee4b4e9-ed7c-4096-81f1-3bac9b3b03cc",
                "breed_name" => "Калифорнийская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "cbfe1483-13da-49a7-a985-4ed5f8454cdd",
                "breed_guid_horriot" => "6ee7b098-27f0-4884-9d55-55cdcf3f70c8",
                "breed_uuid_horriot" => "5df80d4d-93dd-4990-9681-7db63d84af34",
                "breed_name" => "Кабардинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "18",
                "breed_guid_self" => "46fa2c5d-d689-4b1d-96ba-64a723074b76",
                "breed_guid_horriot" => "a6da3a20-a879-40b8-ae5f-4964a13ed3d7",
                "breed_uuid_horriot" => "65e89fca-4f1d-41f3-8cbc-abd376c116c6",
                "breed_name" => "Загорская белогрудая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "34",
                "breed_guid_self" => "e9a8cac4-2295-4b65-a4a0-7fffb75100e5",
                "breed_guid_horriot" => "6a881ab9-e36c-4117-9b69-0909c71a8e89",
                "breed_uuid_horriot" => "72229b9a-39b2-4fc4-a05a-e67c0f033ab2",
                "breed_name" => "Калмыцкая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "6a768d78-3e24-4a16-a696-6a7d5f3ba151",
                "breed_guid_horriot" => "a970d687-b4f4-4c28-8f71-28774de52aab",
                "breed_uuid_horriot" => "7c6c06b5-981e-4f2a-9548-b45bc041c017",
                "breed_name" => "Истобенская",
                "breed_selex_code" => "11",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "1b2dd369-1016-433e-bcc2-c78b87f414c2",
                "breed_guid_horriot" => "49f170a8-0740-4f1f-b199-7778973482dd",
                "breed_uuid_horriot" => "86a724ad-b134-477f-b5b7-c59fe4bac5d5",
                "breed_name" => "Камори",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "283ad19e-2444-49ba-87af-4cfcc58ef8c8",
                "breed_guid_horriot" => "37bfc669-3a24-408e-afab-c0542af8c687",
                "breed_uuid_horriot" => "8cf35a12-58ff-4976-ba46-e5e8727130ab",
                "breed_name" => "Кианская",
                "breed_selex_code" => "82",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "90ab041e-3cb1-476d-885d-246e240f8102",
                "breed_guid_horriot" => "e7f43695-8412-45ed-8af5-6b32d0fb63aa",
                "breed_uuid_horriot" => "8e222630-4bdb-44d9-b729-7e5195d6990f",
                "breed_name" => "Китайская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "5d20b792-08ee-4764-990b-12ccfa3b7391",
                "breed_guid_horriot" => "0b54dd77-11a2-4315-ac2e-a045615be13e",
                "breed_uuid_horriot" => "8f6845c1-9e2b-480c-b35d-1c8fe8ae5347",
                "breed_name" => "Кайла",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "f4344bf8-1c98-4156-9458-1684edb4c914",
                "breed_guid_horriot" => "543221d4-1ea3-4479-8625-019da6f9f8b8",
                "breed_uuid_horriot" => "90653953-8c17-40e4-97cd-c96406cf591b",
                "breed_name" => "Кировская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "956d95ba-81f0-4387-ae83-e1fdde2f5359",
                "breed_guid_horriot" => "85918bc8-08b2-408f-95c1-9c97f0b499c5",
                "breed_uuid_horriot" => "98248412-039a-4682-82bb-b9d008b734e9",
                "breed_name" => "Иль-де-Франс",
                "breed_selex_code" => "110",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "54efd9ad-5288-48f0-ae0b-7e083795c44f",
                "breed_guid_horriot" => "15911208-c386-484d-9cbf-b974165699f4",
                "breed_uuid_horriot" => "ab7ccc87-2cb0-47d9-89bd-05f241f2f258",
                "breed_name" => "Калахарская красная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "c3aed031-f067-4e5b-b699-2c6fb948e194",
                "breed_guid_horriot" => "54ae3720-1ba2-44af-a573-799ec0f5c820",
                "breed_uuid_horriot" => "b0072f0a-8594-442f-afab-d80041397e8b",
                "breed_name" => "Катуньская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "acd22b66-b0f6-414e-959e-1b2dc0778556",
                "breed_guid_horriot" => "df2967b8-5770-4fe5-85dd-be639c43023f",
                "breed_uuid_horriot" => "b1ae55e2-fab0-42c2-93c9-345aa8a54aae",
                "breed_name" => "КБВ",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "8b6960f5-fa37-4fa0-946c-79b831232b14",
                "breed_guid_horriot" => "b5217294-4778-43ea-a416-6886e93ec826",
                "breed_uuid_horriot" => "b56e8816-3b56-4c43-b45f-49709dbdd5a0",
                "breed_name" => "Катумская",
                "breed_selex_code" => "101",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "5fe491b5-5ca1-43bc-a7ab-34f3979c0eef",
                "breed_guid_horriot" => "4cae9373-8a99-4916-8107-8a1a6523c452",
                "breed_uuid_horriot" => "c0b37878-d857-4c63-a560-8fca52809f39",
                "breed_name" => "Казахская белоголовая",
                "breed_selex_code" => "80",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "1bb9ce27-7189-4268-b420-a199f06d3a03",
                "breed_guid_horriot" => "c8db4d05-8bef-42cf-8782-0742a2ecc1ad",
                "breed_uuid_horriot" => "c9b366c6-c4cf-4088-842d-1c1770de7f42",
                "breed_name" => "Калифорнийская серая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "ec2e2c73-348a-41f2-abe0-539b2544044c",
                "breed_guid_horriot" => "fde934fe-85dd-468b-96af-187f3089bc29",
                "breed_uuid_horriot" => "d4d54e4c-de2f-41cf-ba57-f9c776f02da6",
                "breed_name" => "Кемеровская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "5a2b449a-32bd-431c-a462-1ac50d02d14e",
                "breed_guid_horriot" => "9e8cef89-3dd3-4476-8bec-2dd4647bf149",
                "breed_uuid_horriot" => "d7d798a6-21df-4508-8c5e-2a1332f21d60",
                "breed_name" => "Завьяловская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "5953c995-2b89-4791-829e-cb8fde92d53e",
                "breed_guid_horriot" => "8030e078-b0bc-4682-aa7a-4330e00c2d8a",
                "breed_uuid_horriot" => "ddc4960c-ba91-44c6-b9bd-045937e97ecd",
                "breed_name" => "Каракульская",
                "breed_selex_code" => "37",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "86c22bac-c66a-4fda-a200-254b9b31fb2a",
                "breed_guid_horriot" => "9275d39a-9b7c-478a-a4b0-15bbd7000281",
                "breed_uuid_horriot" => "df77dccb-025a-4b2e-87d6-67927e66e455",
                "breed_name" => "Карельская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "c94a9081-9de4-4b11-bb28-b988f3a71144",
                "breed_guid_horriot" => "9feae877-1e4a-4e55-b361-c093aadecfc6",
                "breed_uuid_horriot" => "e35a124c-b912-443b-a409-96dc8ff37a13",
                "breed_name" => "Ирандыкская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "10ae7cbd-af6f-4279-8db1-4367aa7ae096",
                "breed_guid_horriot" => "5d15cc05-8d41-4707-98d7-3eb0b3b56929",
                "breed_uuid_horriot" => "e6f38892-04d4-4683-b117-02075e06f065",
                "breed_name" => "Калмыцкая",
                "breed_selex_code" => "81",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "391c95fb-8f84-4a22-b556-c1ddc02d5f54",
                "breed_guid_horriot" => "1b66290e-1882-44f9-b536-5b27332c3e83",
                "breed_uuid_horriot" => "ea49f887-7327-4140-97a9-59b77d28470c",
                "breed_name" => "Камлоопс",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "aeb7dc2f-182f-4cb0-a79b-585e29c4d28b",
                "breed_guid_horriot" => "2a736aa9-af48-4528-8047-fa35f1ee0f01",
                "breed_uuid_horriot" => "f10b4e4c-8013-405b-b720-5a78e4be4d0e",
                "breed_name" => "КБ",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "bbee54f0-3897-46d5-a6f3-e250b9afe6cd",
                "breed_guid_horriot" => "c5c2843c-166b-48f8-ba74-2916dc86ef84",
                "breed_uuid_horriot" => "f43bfbb2-f416-4495-9f46-df69cea35167",
                "breed_name" => "Золотистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "56040892-8749-40cb-9d52-abac47eb0fe1",
                "breed_guid_horriot" => "39d0791a-4406-490a-a3ee-413100dc722e",
                "breed_uuid_horriot" => "f78ad9fd-ca31-481b-a57b-4f151db393f4",
                "breed_name" => "Зимовниковская",
                "breed_selex_code" => "117",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "61979a7d-413e-4c95-b304-0fe122bb1fba",
                "breed_guid_horriot" => "194393dc-be2e-4246-a0b1-8cb547c278eb",
                "breed_uuid_horriot" => "156ab233-dcb0-44b0-b798-e22f2dcdc6bb",
                "breed_name" => "Коричневая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "a96b5c20-f069-43fc-bf3d-b576710c2054",
                "breed_guid_horriot" => "40867e92-9896-40c7-83a3-aeae889f37bc",
                "breed_uuid_horriot" => "1749c6b6-0557-4d76-bcbc-1c017b693f44",
                "breed_name" => "Кохинхин голубой",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "69a1464b-b5dd-4489-b319-1a12dfc6fa27",
                "breed_guid_horriot" => "86c7b5b2-5801-4d5f-a945-41ee15d80832",
                "breed_uuid_horriot" => "17ca62ca-018f-4faf-bc81-ee185580539b",
                "breed_name" => "Куменская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "16a319a6-6828-44a0-91f1-1eea137ca285",
                "breed_guid_horriot" => "84c03488-c53f-4eda-ab49-26cbe68d5b15",
                "breed_uuid_horriot" => "1cbea5e9-bef0-4aa7-8f98-34025be40b6c",
                "breed_name" => "Крупная серая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "0e0cec6e-5f77-4930-b04a-09a758fbd2b0",
                "breed_guid_horriot" => "59672d19-abba-40ab-ae37-d3b3ae7be5eb",
                "breed_uuid_horriot" => "1f253dc6-5d16-4fe4-ae4a-ad47ba4ba707",
                "breed_name" => "Котляревская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "96d8c247-1945-445b-879d-ca6c2ef6989b",
                "breed_guid_horriot" => "35e9a4e4-8e6e-4ede-bc90-fc197dc24775",
                "breed_uuid_horriot" => "20f9dbd9-a6b0-4b82-9b02-e516122dc9a4",
                "breed_name" => "Краснозерская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "4bffc6c2-1738-4eca-96c6-0c4773b87ae8",
                "breed_guid_horriot" => "e8624def-4dec-4f5a-acc2-7156525597e8",
                "breed_uuid_horriot" => "2132ead6-fc77-495d-a6a4-dd771253f2a6",
                "breed_name" => "Красноярская",
                "breed_selex_code" => "109",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "6f8a587a-4cdb-4fe7-8e51-04959abbe1db",
                "breed_guid_horriot" => "b58f8c45-e1ec-455c-825e-a4721c12632a",
                "breed_uuid_horriot" => "26907a48-6d05-463e-9ed4-0de0bfec3f79",
                "breed_name" => "Красная эстонская",
                "breed_selex_code" => "20",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "211cc41a-acd1-4af7-a567-6b1573a53c1b",
                "breed_guid_horriot" => "d9833bcc-7cd6-4bbf-a462-68161ef67c79",
                "breed_uuid_horriot" => "462b3a68-2368-40bb-af32-61f0e9e7b81a",
                "breed_name" => "Красная датская",
                "breed_selex_code" => "15",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "e2d5b5d5-f348-404a-8d7b-833b3d472bc8",
                "breed_guid_horriot" => "693099e5-17b0-4188-b30f-986cb74ef016",
                "breed_uuid_horriot" => "54827249-a27e-4590-b87a-46a344b683ce",
                "breed_name" => "Крупная белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "02cabb9a-54d3-4363-b110-b01edcadb6c1",
                "breed_guid_horriot" => "0a77744d-caa7-430d-839c-d88e8d324962",
                "breed_uuid_horriot" => "645be222-db22-4258-b6a2-473d742cd31c",
                "breed_name" => "Кучинская юбилейная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "fd57209c-3ff8-4f0f-8c27-d3152cf612ba",
                "breed_guid_horriot" => "f238cdc2-2c6b-4dd6-8dd6-5fe3849e995e",
                "breed_uuid_horriot" => "6cce9473-d7c0-4c70-b364-e127a33187d5",
                "breed_name" => "Куланги",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "4dc894db-4f23-4e03-b5f2-34d4656d9571",
                "breed_guid_horriot" => "584e3d46-4166-4e55-8fd5-ce556aa281b8",
                "breed_uuid_horriot" => "fefa954a-b94d-4bbc-95ef-a47dffa28b2e",
                "breed_name" => "Красная степная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "2b68d22d-5e09-46e4-9dc2-d62e16262366",
                "breed_guid_horriot" => "0f1e3596-d832-4210-8b15-0b6d4f8fea4d",
                "breed_uuid_horriot" => "7a7db0e9-0511-4b31-a7cb-055329e85cf1",
                "breed_name" => "Костанайская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "de5b0260-be49-4a08-b1c9-5d57cf62dfb1",
                "breed_guid_horriot" => "0d4797ad-a71a-4970-80b0-826bc0c18563",
                "breed_uuid_horriot" => "7b84af0a-8ec1-4538-8a4f-fdbeb5f1c699",
                "breed_name" => "Коликотт",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "4e8d952f-692c-4926-800c-9712c4c277c3",
                "breed_guid_horriot" => "f8d40a16-5895-4e60-84fb-67a7c7a0e6c9",
                "breed_uuid_horriot" => "7ba224ae-35d5-4013-8abc-acef7e5d5c39",
                "breed_name" => "Красная белохвостая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "7ce8dbf4-18df-426f-b3a3-187d255b5ba7",
                "breed_guid_horriot" => "7f32ac33-2512-4ccc-8e43-c56e1dd39ead",
                "breed_uuid_horriot" => "84c5dbd7-5cd3-48b2-8d57-7abaf368f86a",
                "breed_name" => "Колосовская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "bdebaaa6-add2-45b0-a1cb-db6ff73013b3",
                "breed_guid_horriot" => "06ce0197-c885-48fc-a3c6-8a9787a23fbf",
                "breed_uuid_horriot" => "86a22d4f-c5e3-4407-a9c3-fa099db0ed3b",
                "breed_name" => "Кушумская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "cf8ddf2c-c6a2-40ea-aafe-3a9331a1bddf",
                "breed_guid_horriot" => "bc42a183-fe8b-40df-83b8-42ccd2f6b686",
                "breed_uuid_horriot" => "8918e8da-dcb1-46e0-a95b-6457df4160b7",
                "breed_name" => "Кузнецкая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "a0178fe7-c1ca-40a1-b58b-2dda44fb5775",
                "breed_guid_horriot" => "bb86d9c0-cf5d-4144-bb62-3c477faba22c",
                "breed_uuid_horriot" => "8bb147da-af9d-42cb-a280-ece082ec9650",
                "breed_name" => "Куйбышевская",
                "breed_selex_code" => "24",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "40b7d0b2-0f94-403a-98f8-7ee1385740fd",
                "breed_guid_horriot" => "8c7c99c3-146b-4d3a-980d-cdbca509b6a2",
                "breed_uuid_horriot" => "9073b7ef-3d8e-405d-9ed1-733f20241e3e",
                "breed_name" => "Корниш белый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "3091be01-40a1-4696-a064-9adae5b49438",
                "breed_guid_horriot" => "bf7d1b1e-cf12-4cad-acaf-a47f72dda29a",
                "breed_uuid_horriot" => "a40f5a38-05c3-4567-9c76-25b65e754d0b",
                "breed_name" => "Красная тамбовская",
                "breed_selex_code" => "19",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "81ea4723-895f-4f27-9fd2-7e7cadbb3541",
                "breed_guid_horriot" => "8ecad9dd-3b4b-4074-9dc6-86009ecba685",
                "breed_uuid_horriot" => "a7a55426-f7ec-4cc3-afaf-0d47539d2e22",
                "breed_name" => "Крестовка",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "dc88b3d4-71d8-4290-807d-8d7e4cf6ea88",
                "breed_guid_horriot" => "8e6f1719-de89-4eec-b049-11204f8e6016",
                "breed_uuid_horriot" => "b18f174e-9ced-49cb-9089-9f80eb1d929b",
                "breed_name" => "Кубанская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "c87d6bde-416c-4a4a-8900-b89b188d23f8",
                "breed_guid_horriot" => "e7b39bf0-69e1-4414-bbff-ab2eb9a1fb2a",
                "breed_uuid_horriot" => "b70d7234-d76b-4747-bd57-892c88d47ebe",
                "breed_name" => "Курганская",
                "breed_selex_code" => "22",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "18",
                "breed_guid_self" => "335ae2aa-629a-4834-ac89-5ac56109c7cb",
                "breed_guid_horriot" => "f6190c61-9aea-4a1c-adf3-3b009a5deb55",
                "breed_uuid_horriot" => "b9914d6d-c35d-485d-a27f-e5905e055413",
                "breed_name" => "Кремовая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "cee33af9-6b6f-4741-b610-8b3998312a4a",
                "breed_guid_horriot" => "37ba1a93-9986-4558-bff8-aea37e32e948",
                "breed_uuid_horriot" => "bd3fcea6-cf32-41ae-bcb9-abe66dc014e1",
                "breed_name" => "Колымская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "566f2b8c-f660-4875-8c56-e46219854c2a",
                "breed_guid_horriot" => "0149180f-0787-465b-b0db-cce4f929d97b",
                "breed_uuid_horriot" => "bdf689d2-5933-46ab-bbf6-984e816ee5a5",
                "breed_name" => "Красноярская",
                "breed_selex_code" => "7",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "e8f0ddfb-588f-4d25-8b1d-19f289981a1a",
                "breed_guid_horriot" => "e8c4a1d2-8d0d-4273-ad00-3bb4bcbc2d1e",
                "breed_uuid_horriot" => "c1a7dd5b-809a-46e4-8705-3c550fd2e100",
                "breed_name" => "Красно-пёстрая",
                "breed_selex_code" => "25",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "5784a8e6-40ee-4796-93a9-7a7a2a97cccc",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "6",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "64a899c4-bee8-4ad8-9d93-70e265e7584c",
                "breed_guid_horriot" => "58ba4983-a78e-492e-bb08-01e3b2df8a25",
                "breed_uuid_horriot" => "d03d045e-5098-43da-b9be-8b6532cb11c5",
                "breed_name" => "Красная степная",
                "breed_selex_code" => "18",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "8fae7fdb-717e-4c55-9d26-570908c9c91b",
                "breed_guid_horriot" => "e8b34755-6b79-4a89-816b-910143d53487",
                "breed_uuid_horriot" => "d2aecb9d-57e3-4c6f-b43a-fd9b7d15875d",
                "breed_name" => "Краснозерская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "20186499-0c2e-4a93-b66d-2ab52ae4b09d",
                "breed_guid_horriot" => "f8549b07-ff0f-47eb-9477-4e28ebc402ff",
                "breed_uuid_horriot" => "d2f50c21-a378-4e65-959a-5ad12e843fb7",
                "breed_name" => "Короткоухая белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "9dc0475a-f38c-4400-93e4-abde0843c711",
                "breed_guid_horriot" => "95cb718b-931c-415c-adca-865c748fade6",
                "breed_uuid_horriot" => "d6946c58-1a62-46eb-a762-db0504c6aea4",
                "breed_name" => "Костромская",
                "breed_selex_code" => "13",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "575bab5f-3d91-4ec9-916c-102af6d2007d",
                "breed_guid_horriot" => "3f52c9b0-0a8f-495d-aa08-73069671995e",
                "breed_uuid_horriot" => "e8acfa06-3265-4ffe-ae10-582b8e719fbf",
                "breed_name" => "Красная рощинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "2004ac80-90ca-4c42-a44a-f7a743474bee",
                "breed_guid_horriot" => "378f2f98-275e-4c5d-a95a-f2b1fe837ac7",
                "breed_uuid_horriot" => "f1ef9da1-5ce9-4142-878b-2ceaa944e3cb",
                "breed_name" => "Лакон",
                "breed_selex_code" => "104",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "ccda08f1-b660-4009-aca7-4daa2cd258d8",
                "breed_guid_horriot" => "6f271c39-2e44-4bd1-be7a-2b9288c5f88a",
                "breed_uuid_horriot" => "f4b5a037-4bef-4b85-ae3f-2b42becf1440",
                "breed_name" => "Крупная черная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "d4649477-853f-4a87-aaea-1b7b73bc5c3a",
                "breed_guid_horriot" => "d2208307-0335-41ad-a38e-8069429f05e8",
                "breed_uuid_horriot" => "1d49d10b-3f48-49c0-80be-effc5d1baedd",
                "breed_name" => "Мериноландшаф",
                "breed_selex_code" => "109",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "d1a263f4-23de-4962-a9da-d1cc43b39cc6",
                "breed_guid_horriot" => "8fa2bed2-43fc-4068-8cfa-36d84e31d968",
                "breed_uuid_horriot" => "1fea1b2b-ec59-48ac-9bbf-04b8917f66d2",
                "breed_name" => "Мандалонг спешилс",
                "breed_selex_code" => "99",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "e60076bc-0d8f-4926-a001-32a3766b7411",
                "breed_guid_horriot" => "9b2e4a2a-5526-43d0-84d8-d4f4c43c9584",
                "breed_uuid_horriot" => "20282f67-132d-435c-8ba6-530b345d4f05",
                "breed_name" => "Малайская бойцовая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "604e7b45-69cf-420d-97ae-8eec91d6828c",
                "breed_guid_horriot" => "e1aa6b27-aff5-41b8-b038-1561067a77f2",
                "breed_uuid_horriot" => "2dba0375-ae22-4a4b-808a-18b8c6c8621c",
                "breed_name" => "Меринос",
                "breed_selex_code" => "4",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "db4072c5-e73a-466d-b3e5-03949f93121a",
                "breed_guid_horriot" => "600e922a-0490-4cea-b6e7-2bc967727a5c",
                "breed_uuid_horriot" => "3225b1c9-c4b4-49c6-96ca-fcb50c7f2a25",
                "breed_name" => "Леггорн",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "bef2e4f7-3369-47a0-aa71-b8f6d7d6f21e",
                "breed_guid_horriot" => "26ab3c15-1037-4492-8445-503cc5fbf55a",
                "breed_uuid_horriot" => "35fda96f-f682-45ff-8b9d-a0e9401817f8",
                "breed_name" => "Лафлеш",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "aa5dd80e-87b2-4f2a-98c4-7c58b5eb371e",
                "breed_guid_horriot" => "5fe6d503-06b3-459e-9efb-eda1910aea27",
                "breed_uuid_horriot" => "3f84de7a-f38f-4b9f-8585-ad88c3652628",
                "breed_name" => "Мезенская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "ad3dd1ef-c03c-4931-a308-df6040b2f27b",
                "breed_guid_horriot" => "f0ddfa5e-c78a-4c7a-b8fb-b38e3d871f0c",
                "breed_uuid_horriot" => "46b48cb2-c5cc-43b3-9ce8-d77bebf60900",
                "breed_name" => "Ливенская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "cfcfdaca-e79e-4abf-bb82-cf09f97a50d4",
                "breed_guid_horriot" => "d30dceb3-df99-40dc-9fa7-63b066906783",
                "breed_uuid_horriot" => "4e0ee14b-2c5a-4cd8-b2f7-c4d6528a768c",
                "breed_name" => "Ландрас",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "dfd422a9-6fae-4a74-af71-b315455fb3d9",
                "breed_guid_horriot" => "51db972c-09a8-49b1-8cec-d991f2816552",
                "breed_uuid_horriot" => "556aa1cd-7d85-4cf6-ba95-8d795fe34723",
                "breed_name" => "Майская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "c3c480a4-9333-4f69-8296-de5727c68b02",
                "breed_guid_horriot" => "86a242df-807b-4f3a-a5f4-dac807eca1c2",
                "breed_uuid_horriot" => "61a51439-a6a0-48fb-bc0c-7ff24aff9631",
                "breed_name" => "Лохи",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "410486d2-ffd6-42cd-80e9-70daabeb32ee",
                "breed_guid_horriot" => "924c5fc3-7895-4ac4-92da-152b1ee601f7",
                "breed_uuid_horriot" => "6827a86b-dca1-4aa7-a527-00fd56dd6fda",
                "breed_name" => "Литовская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "e1d0c7c5-32a2-4d29-a0b4-80c2131bdc97",
                "breed_guid_horriot" => "f1932716-a838-4ee9-919f-8f33fa34e4dc",
                "breed_uuid_horriot" => "68b27439-a48c-41a7-a104-a9778fe78500",
                "breed_name" => "Мен-анжу",
                "breed_selex_code" => "85",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "55295e16-e84b-48d4-87ca-9a25b2bb5ec3",
                "breed_guid_horriot" => "3744c63f-571e-465b-8bf0-bc23c33c0f4a",
                "breed_uuid_horriot" => "6916e369-5372-42f9-88a6-f29a67278d5e",
                "breed_name" => "Марийская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "24fec1a7-ef1e-40a4-ae5b-fa1f66870a4d",
                "breed_guid_horriot" => "7d97956a-71fc-42d9-b9d2-b94a727dfb4b",
                "breed_uuid_horriot" => "88d51492-a7ae-4dce-ba4e-37c1cd627be2",
                "breed_name" => "Метис",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "217b7c71-ad46-41d5-84d7-3e76acc29abd",
                "breed_guid_horriot" => "dd2ed8eb-bb9f-4d93-aee5-93cd5bf0e9fd",
                "breed_uuid_horriot" => "88fa8e5b-736a-48ee-83f7-2bd7d557d5e7",
                "breed_name" => "Лосось стольноголовый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "d9b06acd-da95-48f3-bbd7-bae9ea7fdac6",
                "breed_guid_horriot" => "0e7298a7-e449-4bb6-afae-f7be751542ce",
                "breed_uuid_horriot" => "9044ce87-a619-4ec6-bc98-5dc1f9bd7ca3",
                "breed_name" => "Лангшан черный",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "67fd1c54-ee3c-4d7d-8665-6cfcc24b1129",
                "breed_guid_horriot" => "815b046c-4756-4f57-8704-0f3ecff161a0",
                "breed_uuid_horriot" => "9bf00888-8e51-4f9e-b09d-b8a23d456da7",
                "breed_name" => "Лезгинская",
                "breed_selex_code" => "46",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "f87b253d-2673-47d1-90ee-98783be636f7",
                "breed_guid_horriot" => "ae7b3d9b-1a56-4f5f-a6fd-a55de41243c4",
                "breed_uuid_horriot" => "9eeff884-a68a-4fd3-8afa-d42ac97e15b5",
                "breed_name" => "Литовская тяжеловозная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "13b58a0f-05ce-45c7-bb58-aae4b878e4c5",
                "breed_guid_horriot" => "de1c439d-02b5-4ef9-ad86-7c8fc07c0524",
                "breed_uuid_horriot" => "9fdaad2e-f190-4246-9916-171893d5894c",
                "breed_name" => "Мегежекская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "f19ea6e5-0135-4a5a-9179-f86fac182d03",
                "breed_guid_horriot" => "7d9285ed-76bd-4cc0-a9ae-8de02682d77f",
                "breed_uuid_horriot" => "bd273508-4727-4656-bdbd-a8f7b41b9763",
                "breed_name" => "Лена 1",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "7dd6615b-e752-42b6-8de8-c801453fc244",
                "breed_guid_horriot" => "d11a8ad9-2929-4343-a2d4-cbf5eecebcdb",
                "breed_uuid_horriot" => "c3d252ea-2a89-4d2d-ac21-28f45298f213",
                "breed_name" => "Манычский меринос",
                "breed_selex_code" => "93",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "9d9c67ad-0c70-49f1-abf0-093818883bc2",
                "breed_guid_horriot" => "599dfeae-279f-4cec-9063-79e255a81019",
                "breed_uuid_horriot" => "c6ba3bb9-c698-41fc-ad96-5879828c9e5e",
                "breed_name" => "Малагуэнья",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "cc73368f-d6a6-4ed2-96c1-12c285dac0e2",
                "breed_guid_horriot" => "67676eca-378c-4098-a524-3f3791a7a3a0",
                "breed_uuid_horriot" => "dcba9cce-99d1-4b21-bdf2-bf2821c6087d",
                "breed_name" => "Леггорн полосатопестрый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "11ea46c2-f43b-4c89-a695-baf77b0cf438",
                "breed_guid_horriot" => "a4e9bd85-7e29-406b-b395-11eeac571d2d",
                "breed_uuid_horriot" => "e89f882f-ad60-4bdd-82e4-7e2f9a81521d",
                "breed_name" => "Лебединская",
                "breed_selex_code" => "23",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "65eeb39b-7021-416b-b092-f84e059d8702",
                "breed_guid_horriot" => "1fc22f2d-33bb-4dc0-b57b-50b92028a6d0",
                "breed_uuid_horriot" => "e966c2e4-0b0e-4f48-8c1d-357d948aca12",
                "breed_name" => "Линдовская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "b0d8fe83-446e-416d-8780-b0d53e67a4d3",
                "breed_guid_horriot" => "971394b9-1fb0-4b14-befb-b3574a08f112",
                "breed_uuid_horriot" => "f438b522-a0e1-45b1-925a-800b16b8c08f",
                "breed_name" => "Мегрула",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "38fd7aa3-ba8b-4a73-9492-317e109e25b0",
                "breed_guid_horriot" => "5efc656c-87a2-4493-a51f-66a91063f717",
                "breed_uuid_horriot" => "ff4d37dd-4ff4-4042-90b3-6f2f01df841d",
                "breed_name" => "Литовская черноголовая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "d21ad611-c98f-4ade-9f03-661b9eabed11",
                "breed_guid_horriot" => "6dc3767a-e3f5-48ca-aefd-7cc8364c1307",
                "breed_uuid_horriot" => "0a7f16b9-4f14-49e4-9073-4a7e9a2d871a",
                "breed_name" => "Новосибирская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "4e3e7461-b338-4cfe-86e4-e3dd08138a32",
                "breed_guid_horriot" => "51e4cd20-5f7d-4587-9f74-398d8795ba6c",
                "breed_uuid_horriot" => "0fd8123d-2f8b-4bd9-880c-ac0ddfd90eab",
                "breed_name" => "Михновская",
                "breed_selex_code" => "87",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "b9b80b2f-3e3f-40d5-8efc-a25669079660",
                "breed_guid_horriot" => "2f5af6b0-1e71-40c2-8867-bd44ba8bc873",
                "breed_uuid_horriot" => "15e89274-7406-40a9-822b-a4029d0a4bba",
                "breed_name" => "Мойлалеутская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "b4dfec3c-4985-43c5-b720-b4c25d4b93cc",
                "breed_guid_horriot" => "5b7401b3-a682-4291-863f-b006cb23462f",
                "breed_uuid_horriot" => "2a00646e-7679-497a-926b-aaf2196925e9",
                "breed_name" => "Мясная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "98e65a2d-55a7-4744-9fb7-2c0acbe821a8",
                "breed_guid_horriot" => "f4273e65-27f5-4a9f-9d9f-3874cac81fae",
                "breed_uuid_horriot" => "36fe6dce-3c03-425b-a657-56b95d70e283",
                "breed_name" => "Непецинская",
                "breed_selex_code" => "65",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "a2c4d9ca-9e6a-4433-ab16-ced7ef402ded",
                "breed_guid_horriot" => "b2ecee0d-7d8e-46f2-9488-4020e3a5fe2b",
                "breed_uuid_horriot" => "50bfaa22-4c76-4bf2-a3e8-5e9495512d48",
                "breed_name" => "Николаевская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "05a12068-59ca-46a9-8b90-afa51c3c59c0",
                "breed_guid_horriot" => "93882316-4908-47e3-988b-1a3454dd9a5a",
                "breed_uuid_horriot" => "5157174b-9b70-4cbb-aa9b-ce07c735c9dc",
                "breed_name" => "Новозеландская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "a0819ed4-062a-4b4f-9c0c-e3c867dc67e9",
                "breed_guid_horriot" => "0b832deb-ba28-4f8d-a872-b2046df226bb",
                "breed_uuid_horriot" => "62460e58-3136-4ed0-9ed3-006015f66d2e",
                "breed_name" => "Новоалтайская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "25",
                "breed_guid_self" => "183282ef-37e1-466f-93b6-da8a9a07bfbf",
                "breed_guid_horriot" => "f63d1bf3-8107-40f6-b766-22c55fbeb3cb",
                "breed_uuid_horriot" => "69e56cb1-be94-4ac1-972a-c6878245099e",
                "breed_name" => "Ненецкая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "4745ef28-54fa-49c7-9f5d-3dc6a7aa3bdd",
                "breed_guid_horriot" => "85f64fdc-6069-4c5e-a2b7-19a3ca8483fe",
                "breed_uuid_horriot" => "86863b5f-b05d-4805-ae16-aa880b5d0ab2",
                "breed_name" => "Новоладожская",
                "breed_selex_code" => "108",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "52a835ba-706e-4b68-af49-a7752e21c513",
                "breed_guid_horriot" => "bcd13024-5b1d-41df-b33c-26b21a0d4f31",
                "breed_uuid_horriot" => "877370c6-a323-41c5-be6e-40127d2f5685",
                "breed_name" => "Мойлсапфир",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "218f6879-3768-4fcb-a288-b1374476fd6c",
                "breed_guid_horriot" => "792d317e-f925-4bc4-989f-8af993c1b040",
                "breed_uuid_horriot" => "8b7c6b93-7139-4133-ae14-e7c55de11d2f",
                "breed_name" => "Новозеландская красная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "34",
                "breed_guid_self" => "9a717961-c911-4eb5-8c69-1f973b31a940",
                "breed_guid_horriot" => "ed967af7-f4e7-4b84-b4f9-ae7eb6780289",
                "breed_uuid_horriot" => "917f067e-389b-4f38-9690-1608ce282d06",
                "breed_name" => "Монгольская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "cc8cbfe4-5b5e-47cd-8cb7-40a29e169f0b",
                "breed_guid_horriot" => "3f542ff9-9124-44ec-9e2a-dd02304aa21c",
                "breed_uuid_horriot" => "95877bbb-5dfd-49ea-af12-691811891a61",
                "breed_name" => "Метис",
                "breed_selex_code" => "2",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "a844a786-e6fc-4117-b760-3f15dc65cdb4",
                "breed_guid_horriot" => "67c8c1d8-5f3d-4dd6-846a-04f410759ce1",
                "breed_uuid_horriot" => "ad7ff4a6-9629-44e8-9e60-9ed90f8281c2",
                "breed_name" => "Нерчинская",
                "breed_selex_code" => "58",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "821712b7-da4c-4906-b495-7431342d7cc2",
                "breed_guid_horriot" => "644fc85c-3d25-4e30-be72-46028fcbb7cd",
                "breed_uuid_horriot" => "b14439bb-4a64-4825-990e-1e5c286c81c9",
                "breed_name" => "Московская",
                "breed_selex_code" => "103",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "263b7900-6422-45a7-b902-87acac3e788b",
                "breed_guid_horriot" => "d440018d-3577-4ad8-a823-54223213522d",
                "breed_uuid_horriot" => "b931197e-df4d-41a5-9476-1d53e1ebf0be",
                "breed_name" => "Михайловская",
                "breed_selex_code" => "66",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "d8a0fe21-a07d-448d-b7ff-8dfec30b66f9",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "4",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "1078dfcb-e67b-4db9-90d6-2cc076df94c1",
                "breed_guid_horriot" => "bf9ece07-a7b1-4100-a079-3d66ec7dcc4c",
                "breed_uuid_horriot" => "c9b0b546-4bc9-4005-849b-91e8685345e4",
                "breed_name" => "Новопавловская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "7883e842-c7f3-4e9b-b0a1-17d7ee5f6434",
                "breed_guid_horriot" => "2937fbd4-080c-43fe-bc0a-85100dce09b2",
                "breed_uuid_horriot" => "cbfa7047-aaf1-4a0e-94a1-ed9e6363d709",
                "breed_name" => "Метис",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "bd55a640-b6f9-4ea7-9d10-ff0cff98894b",
                "breed_guid_horriot" => "49340090-8d76-435a-b47a-997f4f67f741",
                "breed_uuid_horriot" => "d3a90cca-6efc-4186-8845-a444269d06c8",
                "breed_name" => "Минорка черная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "06137dbe-d1ec-4525-89fb-d5dcc09a693a",
                "breed_guid_horriot" => "98c24fa8-008c-4b1e-a0f7-0494f3e91fcf",
                "breed_uuid_horriot" => "d4a4ecd8-e0dc-4690-ab4a-ae84359b5c66",
                "breed_name" => "Мурсиано гранадина",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "5cf95cac-5e1b-4c9a-beac-601d12c74e80",
                "breed_guid_horriot" => "bc60c7d1-2b00-4abe-a3c3-f62f9ba9024f",
                "breed_uuid_horriot" => "e4b25a53-7ce2-42eb-8c60-2de06ebcbf5b",
                "breed_name" => "Мойлпастельсеребристая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "1d9b7c63-81d1-427a-9a0b-5dc14ebcdb05",
                "breed_guid_horriot" => "cec0cdd5-c611-496a-b8b3-04ca835524ec",
                "breed_uuid_horriot" => "f23e826d-db28-44b3-b917-48b599b678fa",
                "breed_name" => "Московская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "537bb922-29c8-4742-af1e-2b632cfaa0fd",
                "breed_guid_horriot" => "3c3757d8-9e05-4677-8c36-b04be037880b",
                "breed_uuid_horriot" => "fb87cf24-9c72-4c96-9e4d-e38d99979a8d",
                "breed_name" => "Ногайская",
                "breed_selex_code" => "62",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "4",
                "breed_guid_self" => "a826d75b-ad13-4d38-adec-1430aa372329",
                "breed_guid_horriot" => "61f079bd-6c9d-484f-be05-ab00dba4a8ac",
                "breed_uuid_horriot" => "0340db30-f0e8-4600-b7f9-bce42c868b54",
                "breed_name" => "Пекинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "51584462-bb69-49f2-8c7f-e0c0c1e265ad",
                "breed_guid_horriot" => "7ee63b6c-468b-4c19-a1f9-cb919470b03c",
                "breed_uuid_horriot" => "0613a9d5-4e73-4406-9a5e-456ce3200535",
                "breed_name" => "Падуан",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "132fa0fd-1647-4140-8176-6b501e52c072",
                "breed_guid_horriot" => "5e29153d-ab77-4984-ba03-fcc110e7daa5",
                "breed_uuid_horriot" => "0779d8f0-3a1e-45b0-b2fe-64a850339921",
                "breed_name" => "Огневка вятская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "d17ff9dc-b356-497c-a0ec-680a82e62258",
                "breed_guid_horriot" => "b57d6b66-312a-4e6b-a51d-54e03d9cad83",
                "breed_uuid_horriot" => "0f0e002c-eb23-4f9f-a2bc-87f667148675",
                "breed_name" => "Рамбулье",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "f0a2f5cc-754f-4244-81ee-a1f836b67e55",
                "breed_guid_horriot" => "4d676046-9d6c-49e2-bdbd-619b7ba8a2da",
                "breed_uuid_horriot" => "1a5ea8dc-089a-4b8a-9ab0-16cc2b81b197",
                "breed_name" => "Приленская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "0f216550-484e-4070-834b-6aac9d3e66e4",
                "breed_guid_horriot" => "2d746274-44c8-43e1-b040-c3c11f1532c1",
                "breed_uuid_horriot" => "29e8c3d6-3536-4ce7-8b5a-ecc9669596fa",
                "breed_name" => "Приобская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "e384ea50-f4a4-41d5-bf0a-648e4801fa33",
                "breed_guid_horriot" => "337935c1-2414-4547-9652-a777fc01b9b8",
                "breed_uuid_horriot" => "2af8d7b3-c03c-403f-a5d1-3cf52f798fdc",
                "breed_name" => "Пастель",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "00c3f75e-a2f7-4306-b92b-2d1aa6b3f7a9",
                "breed_guid_horriot" => "e3eb22d1-2a18-43df-9d3d-83b682f3b3b1",
                "breed_uuid_horriot" => "2f64ede2-5fc9-429a-9a88-dc3ef37a50a8",
                "breed_name" => "Полтавская глинистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "9e46773b-00e3-47bd-b13f-deb60af7d589",
                "breed_guid_horriot" => "af4eec1a-8b62-41b8-98d7-a5a3fab03f60",
                "breed_uuid_horriot" => "32117a98-1868-4e9f-8520-61de5a2ae208",
                "breed_name" => "Орхидпастель",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "12",
                "breed_guid_self" => "5460352f-f742-4c11-bd61-aefbb43850d5",
                "breed_guid_horriot" => "731859a6-fc96-4206-8640-c4fbcc4afe39",
                "breed_uuid_horriot" => "322e7040-58b8-481c-8a0b-09e28b828199",
                "breed_name" => "Омская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "3e22ff61-f65b-431e-897b-f24cd3cb466c",
                "breed_guid_horriot" => "0304f6ac-a221-4d51-aba4-a839aa300e9c",
                "breed_uuid_horriot" => "3cf6d5fb-8f71-4757-9f9d-24f79464ba42",
                "breed_name" => "Платиновая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "ccd60869-74c9-4265-a5f7-4e09e82a8e63",
                "breed_guid_horriot" => "645beb92-4095-431f-a806-4aa96c88726a",
                "breed_uuid_horriot" => "3decd3b2-0058-475f-88fa-83387740b179",
                "breed_name" => "Оброшинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "a62c9cab-b27a-43d1-b6bf-6313f9064fc7",
                "breed_guid_horriot" => "45b9074e-e65f-4c07-a623-a0e4d6a9dbd5",
                "breed_uuid_horriot" => "4041cd8d-eeca-4c8b-958a-a460e3373010",
                "breed_name" => "Оксфорд Даун",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "12",
                "breed_guid_self" => "b4436b20-1029-40e1-b77d-f78c34a56bbf",
                "breed_guid_horriot" => "c831775b-d2f2-470a-a167-bfec12eb19e7",
                "breed_uuid_horriot" => "4d0e292b-4ff1-4ae2-bb6b-6f3b345a41c3",
                "breed_name" => "Радонежская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "982f6b94-a900-4ec0-b5fb-13826973da60",
                "breed_guid_horriot" => "ced3d813-bc62-4ca9-b6b5-9869d6ec6dfb",
                "breed_uuid_horriot" => "4e902d13-11e0-4445-be97-9efcac9bf417",
                "breed_name" => "Пьетрен",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "3f3d1946-2fd3-4397-a3af-0713b29de643",
                "breed_guid_horriot" => "8075298d-51e5-40ac-bd8e-e17955908137",
                "breed_uuid_horriot" => "55bc6c82-1073-49ff-8b79-c177705807e2",
                "breed_name" => "Прекос",
                "breed_selex_code" => "19",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "c7078b68-2966-49b0-8e52-b65d8c9a33d3",
                "breed_guid_horriot" => "5c884da8-3329-4adc-b911-60c15e98040f",
                "breed_uuid_horriot" => "614b8a7f-9a8c-4618-a1ea-ca5ac1b76ec2",
                "breed_name" => "Плимутрок белый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "dbbcf892-8fbf-4c49-87eb-2e4e8dda5470",
                "breed_guid_horriot" => "73c3c92e-6539-44aa-9c03-ecca0a56b048",
                "breed_uuid_horriot" => "63b5b28a-27e8-4f9c-a20b-16bef511e1fc",
                "breed_name" => "Обрак",
                "breed_selex_code" => "77",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "1e25f363-31f0-45ee-bd28-c4fccf649ae0",
                "breed_guid_horriot" => "6f8ee299-d73e-495d-9523-b7cc53ae1da5",
                "breed_uuid_horriot" => "693ea48e-dee7-44a2-ac59-5ee18c5c8965",
                "breed_name" => "Придонская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "df1d2fea-d317-4f17-9ccd-52f797db05b7",
                "breed_guid_horriot" => "0cdbf7d1-013a-4dd3-8174-96b07a5c765e",
                "breed_uuid_horriot" => "77ecd709-e21f-43d2-ab3a-778ca8334612",
                "breed_name" => "Нью-гемпшир",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "f5bb1f45-05b8-4cc3-a72f-7484dcadc3d7",
                "breed_guid_horriot" => "74ac2e31-4410-4637-98b7-7fcdce03288a",
                "breed_uuid_horriot" => "78198ad5-54d8-41d4-b784-7c6a05addd52",
                "breed_name" => "Печорская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "27aaec7f-6f98-4c6a-ba7a-0d511735804e",
                "breed_guid_horriot" => "96c5d8da-a79a-4907-b723-d090406a0397",
                "breed_uuid_horriot" => "7a08d376-80c6-4376-b9ac-64aee8780448",
                "breed_name" => "Орловская ситцевая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "368ea6ec-6e0e-40f7-9b3c-ee936ebd5307",
                "breed_guid_horriot" => "9da07338-3d20-43d2-8dae-a58deffe7bd8",
                "breed_uuid_horriot" => "7bee0b8f-1eb8-45c8-ac48-74d8ee102acb",
                "breed_name" => "Першеронская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "37bffbc1-376d-49cc-8b16-85b54855774b",
                "breed_guid_horriot" => "bd5f295a-42c8-4fa9-beb7-187a8c1d58a5",
                "breed_uuid_horriot" => "7dbf55f3-ec52-4ac9-8524-938295082d68",
                "breed_name" => "Псковская лысая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "4dbb5b52-deec-4339-9ba3-70666947e473",
                "breed_guid_horriot" => "d15457b4-8c9a-42ee-b86e-e8a555e9a459",
                "breed_uuid_horriot" => "825912f2-1f83-4a0c-b9c2-510ce61024a6",
                "breed_name" => "Орловская рысистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "7911c154-b82e-4be6-af0a-4ae074cdaa45",
                "breed_guid_horriot" => "803bdf2e-9f77-40e9-a1e4-adc4c56d12f5",
                "breed_uuid_horriot" => "8817368d-088a-4041-bd6a-0ebdf3017f16",
                "breed_name" => "Прикатунская",
                "breed_selex_code" => "77",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "545ff8b0-0ef5-40db-b6fd-09716cb33446",
                "breed_guid_horriot" => "2c4787e1-4d97-44c1-a494-a2f75be77846",
                "breed_uuid_horriot" => "8fbaa7b7-96ea-4979-a8ec-e1b03adc4281",
                "breed_name" => "Пятнистая куйтежская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "541f8e42-4174-4126-ba37-2dd4b25d782a",
                "breed_guid_horriot" => "2e0b7b11-d784-4122-bdc3-fb8e0846c0a0",
                "breed_uuid_horriot" => "9167d716-d824-42e1-9ad2-89998b13c04a",
                "breed_name" => "Перламутровая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "749c6677-fc23-4c62-96a2-5b34668a47a9",
                "breed_guid_horriot" => "45d36ace-f5e5-4e7a-88fe-af6fafa40612",
                "breed_uuid_horriot" => "9826d73c-d63f-46a1-9acc-c6c562a8c44e",
                "breed_name" => "Осетинская",
                "breed_selex_code" => "90",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "606ace66-ad76-43a6-97c2-f7c7d71764b3",
                "breed_guid_horriot" => "8c0b3962-9023-455a-a32b-518734bfede8",
                "breed_uuid_horriot" => "b39ee583-7f3a-42fe-ab9a-ad0b633f321d",
                "breed_name" => "Паломино американское",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "aa2df957-b129-401c-ba26-3e3d743f81dd",
                "breed_guid_horriot" => "19b537e6-6fc6-46a2-9fcb-24be8767426c",
                "breed_uuid_horriot" => "bc70e407-beed-47f9-ba7f-696f2d3a2407",
                "breed_name" => "Панциревская черная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "25",
                "breed_guid_self" => "e7f85efc-b47c-4dc5-81d9-f7a097886e5c",
                "breed_guid_horriot" => "54d446db-15a5-4aac-b157-8000efcb1f89",
                "breed_uuid_horriot" => "bf3a2c81-5fb8-4011-aa65-4ce70d64616c",
                "breed_name" => "Одомашненная форма",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "fd67b287-e7e5-4faa-ae7a-9d5229dc6869",
                "breed_guid_horriot" => "0b2389e0-7461-4ff0-a829-d7adb98a12ba",
                "breed_uuid_horriot" => "c0782224-fd70-43ed-9c1c-ddb3555677a5",
                "breed_name" => "Панциревская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "a3489f5e-7379-4019-abbc-4f7366089d8b",
                "breed_guid_horriot" => "21671a9b-5714-4546-a3f7-256b7c4e938a",
                "breed_uuid_horriot" => "c7b26959-4883-4f4e-a506-6114eb2688e2",
                "breed_name" => "Пастелевая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "a08ff7e2-4df5-4160-9a49-c8291a98ce3c",
                "breed_guid_horriot" => "5fb2e4c5-5c7f-4ad4-b2c9-297d4ef974fd",
                "breed_uuid_horriot" => "cdc29a51-037b-4587-bb40-b25721cdb668",
                "breed_name" => "Оренбургская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "f75fa4ac-9fca-49d4-833a-143afe8f77d9",
                "breed_guid_horriot" => "cb4295cc-d831-4415-a181-596384267cb6",
                "breed_uuid_horriot" => "df14eff0-bcaa-458a-b689-42ea81e2218e",
                "breed_name" => "Рацка",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "530a3b5f-4bec-4c6a-9979-0a4a7212cffd",
                "breed_guid_horriot" => "1cfc04ed-cc70-4d06-86f8-3d77f002d306",
                "breed_uuid_horriot" => "e192a43d-23ae-435e-a8f8-20926fde6550",
                "breed_name" => "Приангарская",
                "breed_selex_code" => "59",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "4a3704b8-3392-4ae1-8822-34160a8455b3",
                "breed_guid_horriot" => "68933db6-3045-40a9-b4f0-7cfd76b34b0d",
                "breed_uuid_horriot" => "1155cd61-ac77-463f-9d11-56fe108262ef",
                "breed_name" => "Росталь",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "6e8d96f5-b065-4b17-9b2c-edf5cfd86521",
                "breed_guid_horriot" => "07429947-bbb2-4839-8317-798891fbf7db",
                "breed_uuid_horriot" => "1ea9c234-9f68-4f06-8f72-b694497b4895",
                "breed_name" => "Свифтер",
                "breed_selex_code" => "118",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "d429ea55-b869-4dfb-bc93-d32f77d47cf3",
                "breed_guid_horriot" => "34ba3667-cf7a-406f-815d-b31f5c46c0de",
                "breed_uuid_horriot" => "202fc60f-d730-4a06-8210-b3168bc1965f",
                "breed_name" => "Романовская",
                "breed_selex_code" => "36",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "e18d8f14-775c-48b4-ac83-89136ee53f02",
                "breed_guid_horriot" => "3c79b6c5-989d-48b4-81e7-b29ddbe7d401",
                "breed_uuid_horriot" => "22c38a34-5caa-4fa1-8f18-85c246210569",
                "breed_name" => "Русская хохлатая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "20",
                "breed_guid_self" => "cd64a47b-8dcd-49a2-a711-0ab2f11fe7ec",
                "breed_guid_horriot" => "9ba7b94f-d2a6-40d4-8c48-bde39cfceab8",
                "breed_uuid_horriot" => "43144ee8-70b3-4f58-b699-a799f304a574",
                "breed_name" => "Салтыковская-1",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "54112662-84d2-4361-83c8-fa22c48b8bf0",
                "breed_guid_horriot" => "042c7f1b-8fa6-4ef2-b305-fc8339494f57",
                "breed_uuid_horriot" => "5878e412-07bd-4dc5-a8dc-3bee7bd12ad8",
                "breed_name" => "Саванна",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "cfe5b47c-56c1-4039-a917-9dab1a04326d",
                "breed_guid_horriot" => "edd6374e-3306-4b42-9d02-421fbae29527",
                "breed_uuid_horriot" => "59392201-a5c6-4d1e-8c19-c62a6a2a5d23",
                "breed_name" => "Российский мясной меринос",
                "breed_selex_code" => "106",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "3f3ea717-ea6c-4c0c-81df-e58b1e24f39e",
                "breed_guid_horriot" => "d7ea6f76-3daf-408d-ba7d-8a2e06bf9847",
                "breed_uuid_horriot" => "5d32603c-fd29-4d9b-a5a9-6ff996a370e8",
                "breed_name" => "Сальская",
                "breed_selex_code" => "11",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "ff6c88b9-74f1-4b50-ba0e-105b981353a0",
                "breed_guid_horriot" => "dc67c398-40df-4363-bbf5-e3326f6ee854",
                "breed_uuid_horriot" => "7cbe5c56-935b-4ede-a670-340860e65a90",
                "breed_name" => "Русская рысистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "36",
                "breed_guid_self" => "30fba74f-fd68-4952-93ec-2e737b7a43d3",
                "breed_guid_horriot" => "5090750d-aab1-48bf-99e9-2b978c1f7c53",
                "breed_uuid_horriot" => "75c53741-661b-414a-ba90-4f5883b0cf70",
                "breed_name" => "Серая кавказская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "20",
                "breed_guid_self" => "5aef05a5-bf93-4381-b2e2-12e7d8208d9e",
                "breed_guid_horriot" => "6c76b68e-0494-4405-92d0-3b44f976c85e",
                "breed_uuid_horriot" => "76438fb8-81f3-4186-beab-0fb0f82416d6",
                "breed_name" => "Салтыковская серебристая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "6eba31ec-497a-4f4b-ab40-d410695b1c0a",
                "breed_guid_horriot" => "5a7615fe-ced5-4bd8-946e-2df11d447987",
                "breed_uuid_horriot" => "825d99f1-1e3c-43bb-b578-b9511a3ad951",
                "breed_name" => "Русская комолая",
                "breed_selex_code" => "111",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "dfdaf063-ada5-4355-8e25-6c39f4b5ee22",
                "breed_guid_horriot" => "8b4f5155-f4c8-4c74-aeee-306f01fe396e",
                "breed_uuid_horriot" => "8b78536c-8f39-4508-ab7d-0115794171c4",
                "breed_name" => "Решитиловская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "9306a408-888d-417a-9cc0-58dc4aa7f673",
                "breed_guid_horriot" => "08bdb304-0107-4a03-9d31-0833f5883298",
                "breed_uuid_horriot" => "8b9a4e5b-9b46-4c06-b468-8151044241d4",
                "breed_name" => "Семинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "f55cddb2-1293-4c4d-93d9-1bb98fe89ac6",
                "breed_guid_horriot" => "ba55db08-fced-4bf6-8075-296e2a240911",
                "breed_uuid_horriot" => "8dfaa0fa-b1bc-4d49-afce-b3ddeecd1d5d",
                "breed_name" => "Русская карликова",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "11373408-5891-4277-9851-bc940aaf44d0",
                "breed_guid_horriot" => "751ab827-1111-4ee6-8707-f6cf27e96b08",
                "breed_uuid_horriot" => "9ee9775a-9d6d-4c0a-8a24-f8b5c99af054",
                "breed_name" => "Сапфир",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "e3cead0d-5e7c-43d0-bac0-b7ce89ff6471",
                "breed_guid_horriot" => "433560f8-d22e-4c15-aa6f-b9ef3b42eb4b",
                "breed_uuid_horriot" => "a4960939-bf56-483b-9c6e-5a686756a29c",
                "breed_name" => "Салерс",
                "breed_selex_code" => "86",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "14530ca9-de43-4472-96ce-d81fe0948cc2",
                "breed_guid_horriot" => "9d9d31a4-e5bc-47cd-945c-e0e4a941e162",
                "breed_uuid_horriot" => "ae56f284-207b-48c3-86d6-68c438a9e73c",
                "breed_name" => "Сарбоянская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "cf18f35d-0901-48e0-aa57-1851652ed246",
                "breed_guid_horriot" => "d5e3d4c4-4491-4df8-8976-2d8f0c4828dd",
                "breed_uuid_horriot" => "aeadb581-ffb6-4caa-8e0c-8f105548c0f9",
                "breed_name" => "Рощинская пестрая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "da27452b-d720-49df-8234-2d06de08c702",
                "breed_guid_horriot" => "7ee644ec-45f9-48bf-b906-9f9d06209dda",
                "breed_uuid_horriot" => "b2861f14-1b34-4c8a-8da0-54582e76ab53",
                "breed_name" => "Свободовская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "4d178f16-6606-4808-8728-4444cbf82d93",
                "breed_guid_horriot" => "2fd6553f-79a9-4df1-a13c-d0cbe9ef6adb",
                "breed_uuid_horriot" => "c235414f-e980-4e2d-a821-0554dfa93e24",
                "breed_name" => "Северокавказская мясо-шерстная",
                "breed_selex_code" => "25",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "7140f48f-eb26-4ff2-b51e-11ec632c22b6",
                "breed_guid_horriot" => "dd40cbcc-487b-4da3-8186-a85f36b71954",
                "breed_uuid_horriot" => "c3bb2350-4a1b-4ad4-8e89-94de03f427f3",
                "breed_name" => "Ромни-марш",
                "breed_selex_code" => "22",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "6",
                "breed_guid_self" => "b48e0785-b21f-4612-ad18-99ca231929de",
                "breed_guid_horriot" => "fee8ce32-7d01-4771-9e33-258077ed65ef",
                "breed_uuid_horriot" => "c4af6b9c-df44-4c1b-bc64-bcc792cebcf9",
                "breed_name" => "Северокавказская серебристая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "f7ba77ab-3959-4c0e-b96a-2d509d008b4e",
                "breed_guid_horriot" => "de3d107c-b82a-45c0-bb07-2d32507811cd",
                "breed_uuid_horriot" => "c5edba6e-3833-4436-896f-745feff20c7a",
                "breed_name" => "Сарпинская",
                "breed_selex_code" => "127",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "6",
                "breed_guid_self" => "739e9832-5755-4d5e-896f-d211eca53fa0",
                "breed_guid_horriot" => "9ff898fb-981c-4020-b450-e6ce68021489",
                "breed_uuid_horriot" => "cd6017ae-fdb5-49bf-880f-a2c891fd0833",
                "breed_name" => "Северокавказская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "9399e931-86ae-49fd-b7b6-44bfca8167ac",
                "breed_guid_horriot" => "1638925a-f28b-4ae2-afbc-3bd1fad04fc1",
                "breed_uuid_horriot" => "d6a0ef24-bc4c-498a-af57-5867c18214c0",
                "breed_name" => "Севастопольская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "fd76d465-8a10-4d87-aa38-6b487bca417c",
                "breed_guid_horriot" => "f0281762-67fc-4417-bb69-30e6a7e76f07",
                "breed_uuid_horriot" => "d86a9c11-4ad9-4beb-85dd-c801d2df9762",
                "breed_name" => "Серебристая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "4db4dc01-8a9b-4d43-a9a0-8ef53b638731",
                "breed_guid_horriot" => "3e43822a-bc0f-4b73-85a0-c4dc590cb555",
                "breed_uuid_horriot" => "d89cb8e8-0509-41fe-b4b2-8afc7f0b6121",
                "breed_name" => "Рофор",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "4fe4bd8e-1953-4758-bd55-05fc5b7bb173",
                "breed_guid_horriot" => "a8fa53e9-4961-4421-86c5-7ffd5fa633e0",
                "breed_uuid_horriot" => "e4051686-9a9c-47f3-a62f-9c4e8ff39ec3",
                "breed_name" => "Русская белая коза",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "5f41fbf0-6990-4063-aa8a-22a9f4ec8209",
                "breed_guid_horriot" => "0e98a584-5798-473e-aac2-5b188ac8e8f6",
                "breed_uuid_horriot" => "ebb9201a-d0cf-4e93-b2f4-03b9226386c1",
                "breed_name" => "Роменская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "1fe2cef6-f4c3-44e6-b09a-972a06f26329",
                "breed_guid_horriot" => "276e4206-a037-4050-8d8d-b9b49e252175",
                "breed_uuid_horriot" => "f24820e8-4c14-494d-b19c-0b3284e3a158",
                "breed_name" => "Янская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "10",
                "breed_guid_self" => "5ffd824e-7323-4277-8df8-cccf2b949bf7",
                "breed_guid_horriot" => "e7141777-7173-461c-b3df-cba536d3eedf",
                "breed_uuid_horriot" => "f3becb93-9df0-4484-91a2-9b5fcb0a25e0",
                "breed_name" => "Сарлыки",
                "breed_selex_code" => "75",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "69092674-e2ce-4e4c-a952-217d184920a9",
                "breed_guid_horriot" => "d33b6044-1b49-4ef1-8cc9-20246033bcb8",
                "breed_uuid_horriot" => "f6145074-e9fb-4603-b49b-da434f3d464d",
                "breed_name" => "Самарская",
                "breed_selex_code" => "68",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "00a6d2d5-4f90-44f6-9db2-a366fe51cf7f",
                "breed_guid_horriot" => "addac680-e97b-4af5-b419-dce4a9fbb5a2",
                "breed_uuid_horriot" => "f74e5736-efa0-4e51-9ce8-9fbae4c2ca6f",
                "breed_name" => "Санта-гертруда",
                "breed_selex_code" => "87",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "8ed128c1-ef80-4edc-b1e7-0ad94e499b3e",
                "breed_guid_horriot" => "8b18d3a7-e56e-4176-91a2-ff042359ca2a",
                "breed_uuid_horriot" => "f86d6fac-d723-4c75-8051-c2fdbc2f601b",
                "breed_name" => "Росс 308",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "187cae2d-5b24-4567-91b4-d33246f1fbee",
                "breed_guid_horriot" => "226708ec-6d75-4cb3-89c3-9fbb9bdc3e04",
                "breed_uuid_horriot" => "fc56c1ed-1cab-4fc7-9608-41ca7089f18e",
                "breed_name" => "Род-айланд красный",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "bcab53af-b483-423e-987f-c61821a89a04",
                "breed_guid_horriot" => "4fb4e668-8fdf-40e8-a575-0ff28e505302",
                "breed_uuid_horriot" => "03cea530-4167-41c0-b66f-6da54b518078",
                "breed_name" => "Советская шиншилла",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "5183c928-7663-4372-b624-5e57fe380da8",
                "breed_guid_horriot" => "51da54de-e14a-4914-91ff-76d5ee130326",
                "breed_uuid_horriot" => "063ed2ac-786e-40d6-b9db-e0e9398f8628",
                "breed_name" => "Татайская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "e1cf7705-30b3-4b4f-a4a1-ac149d90edf7",
                "breed_guid_horriot" => "addea2dd-38ac-43f8-a2ff-5646ac64a2ff",
                "breed_uuid_horriot" => "11d5a643-84bd-4afa-9cb5-7572bb8215db",
                "breed_name" => "Суссекс",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "b50ab43e-8311-4d0b-9431-1b9b3f48c32d",
                "breed_guid_horriot" => "8f2fd5ca-43ee-4051-a7c4-89ebc3105414",
                "breed_uuid_horriot" => "143df17f-833f-4189-bfff-882ceb03d460",
                "breed_name" => "Снежная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "d06ea1da-000b-4196-95a2-c5c32be4a7e5",
                "breed_guid_horriot" => "b20afd9b-0ebb-4e78-8bb3-f67781d38ccb",
                "breed_uuid_horriot" => "2e915ecd-de30-405a-989d-2d570e060e98",
                "breed_name" => "Соклотпастель",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "c89c3d52-8e39-42cf-b8c4-f0af1b91bc31",
                "breed_guid_horriot" => "689f8870-d343-40a3-9048-e182dc7ef452",
                "breed_uuid_horriot" => "4954bc50-8348-4563-a243-2326ea09e4eb",
                "breed_name" => "Терская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "6d351421-0d93-483b-8e3a-a4bafc27b545",
                "breed_guid_horriot" => "7def33b7-5b1e-4ea7-8676-f1f99b439ba6",
                "breed_uuid_horriot" => "5b7ddec9-f8e5-47b9-8d17-b50ac1f0c52d",
                "breed_name" => "Торийская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "93bd736c-0b04-439b-8788-783e9fc05eb7",
                "breed_guid_horriot" => "afb3bb0c-202f-4e9c-9a97-ba3ef871524a",
                "breed_uuid_horriot" => "5c92ea16-89bb-45f6-a074-1017eb0ae469",
                "breed_name" => "Тоггенбургская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "e4542541-a0e2-4866-ba3c-e30b71c7e371",
                "breed_guid_horriot" => "25201b99-5076-4ad5-b2dc-8859eb13a817",
                "breed_uuid_horriot" => "5e14b878-db24-41f8-96d1-bc3c8a4ef8b8",
                "breed_name" => "Тимирязевская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "303478c8-8395-420f-873a-faa2d5641da0",
                "breed_guid_horriot" => "733ec95d-2fe4-425f-a066-42acef0689ff",
                "breed_uuid_horriot" => "6187b4ea-19d1-4c96-bee7-9af8ae2f9476",
                "breed_name" => "Тувинская",
                "breed_selex_code" => "92",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "3824a7f5-a43d-417a-8650-bfa8c654f9d7",
                "breed_guid_horriot" => "dc5ae8df-a999-4a41-8d96-e548298d1142",
                "breed_uuid_horriot" => "62a76b03-5446-43c6-b10b-c8fb8c01e6ce",
                "breed_name" => "Стандратная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "05c529a1-cff8-45ef-a294-7333e85cb15c",
                "breed_guid_horriot" => "404a3daf-d6f9-55fb-cadb-06413f9ed712",
                "breed_uuid_horriot" => "66227d71-335b-19cd-b116-fb0c0eab7e57",
                "breed_name" => "Симментальская",
                "breed_selex_code" => "71",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "01fb3a60-d4ec-45cf-a848-b70059940efc",
                "breed_guid_horriot" => "25b9d29f-e928-4110-ac41-a78f6dee0ec4",
                "breed_uuid_horriot" => "7601bd3a-e124-446e-ac87-230af0b54f58",
                "breed_name" => "Серый великан",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "b99c6f99-fb70-4d5b-8aac-ae32f20293b6",
                "breed_guid_horriot" => "f553cc8c-89bd-4d89-be96-96d6f49f717b",
                "breed_uuid_horriot" => "76577c8a-260c-4e48-b709-1abfd3d9b06b",
                "breed_name" => "Серебристо-черная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "06a33f53-ce33-4a45-9a6a-668f1c2dc38c",
                "breed_guid_horriot" => "83dc6973-c20b-4700-9964-e457fccb7dd5",
                "breed_uuid_horriot" => "8e39d276-8189-418e-b815-7d6b97702f28",
                "breed_name" => "Татарстанская",
                "breed_selex_code" => "108",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "ee1694bd-76b8-40c8-98c9-19e5bdef474b",
                "breed_guid_horriot" => "4c3bf6ff-a601-425d-b8e9-2689d1611466",
                "breed_uuid_horriot" => "908ab984-9eb5-4bd2-84bc-67b297dca2b5",
                "breed_name" => "Советская мясо-шерстная",
                "breed_selex_code" => "70",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "d4640cf1-a671-4e9a-924c-3b2bf9c8049d",
                "breed_guid_horriot" => "19231ffe-9e01-445f-b904-5d7cfb63917b",
                "breed_uuid_horriot" => "92ef61f2-2a4a-4d1a-9952-d1da99af1a2c",
                "breed_name" => "Степная",
                "breed_selex_code" => "114",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "ef9e57b2-d54e-4b30-a450-3bffa7ea916f",
                "breed_guid_horriot" => "ed8506e4-9d1c-49f1-a476-cc2e5d5711b5",
                "breed_uuid_horriot" => "94a6bee3-1e84-4740-87cf-020652236693",
                "breed_name" => "Суксунская",
                "breed_selex_code" => "47",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "de918e9a-56d6-4913-a0cd-262a98ffad04",
                "breed_guid_horriot" => "516b247c-93e3-4fdc-822c-c98f65de7e6b",
                "breed_uuid_horriot" => "97639829-372b-4ef8-b280-c99cb31bfbe4",
                "breed_name" => "Ставропольская",
                "breed_selex_code" => "13",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "f3722363-7172-412e-8101-bdaf40a40814",
                "breed_guid_horriot" => "6a462c36-1890-4ab2-8ba7-0a8559687033",
                "breed_uuid_horriot" => "a2640cf4-44d9-4e9d-a257-3cc7e1811821",
                "breed_name" => "Татарская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "18",
                "breed_guid_self" => "c7293ce3-228c-4082-b1e7-be064a58dbc2",
                "breed_guid_horriot" => "2865835b-5b91-4cf6-aeff-3b0a3c33123c",
                "breed_uuid_horriot" => "adc9614f-ff1d-45c9-8087-342e7778548d",
                "breed_name" => "Серо-крапчатая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "c281b890-63e6-4fc8-a5a2-633123723a71",
                "breed_guid_horriot" => "8c8e6aca-ce33-4abd-b192-90835e6fa13b",
                "breed_uuid_horriot" => "b606c954-06ca-4cbb-b319-4c6195fa89be",
                "breed_name" => "Тексель",
                "breed_selex_code" => "33",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "cdaae4e9-6919-40b8-b34b-fb6e3dcd845e",
                "breed_guid_horriot" => "6f9e6232-7819-4774-9475-a53a9063227f",
                "breed_uuid_horriot" => "bdad4151-4929-45f2-af7a-a03636307f50",
                "breed_name" => "Темно-коричневая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "83239492-c27e-4b91-95d5-2bad5b0ab558",
                "breed_guid_horriot" => "bd420f79-077d-4644-b240-0a7717d32d61",
                "breed_uuid_horriot" => "c6a5a639-cf84-4f0e-a941-c815d5b9a8fc",
                "breed_name" => "Сибирская",
                "breed_selex_code" => "72",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "17d35f18-c1de-46a3-9823-cfbbad211159",
                "breed_guid_horriot" => "2f5be70f-7e0c-49e2-824f-c9f28dbadb81",
                "breed_uuid_horriot" => "c72ef8f9-9dbf-4afe-be9f-84d0041559f4",
                "breed_name" => "Серебристо-голубая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "4d41d727-ec12-401e-94d6-be8f8c150d94",
                "breed_guid_horriot" => "96856fd0-9761-4954-a455-06e954bbcdf2",
                "breed_uuid_horriot" => "c7dacaf8-efd0-43ba-9f48-8ddf429d49ac",
                "breed_name" => "Ташлинская",
                "breed_selex_code" => "52",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "4f10cf53-e71d-4d43-9a3e-616b0d3853f5",
                "breed_guid_horriot" => "4a232c2b-33a3-4444-ba8f-0e65d35d1aab",
                "breed_uuid_horriot" => "cd62edc1-480e-449c-828b-18209769d0ad",
                "breed_name" => "Солнечная",
                "breed_selex_code" => "27",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "598f7914-e22d-4600-8eff-b62f605efca5",
                "breed_guid_horriot" => "f5c18ec3-dead-45a0-879a-030c8c62b5a4",
                "breed_uuid_horriot" => "ce4db95d-36c1-4125-8513-d98c81d9a243",
                "breed_name" => "Тувинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "22931b9f-66ed-4098-b8b1-b831004586c8",
                "breed_guid_horriot" => "83a5f740-e668-48b3-bab9-28a9720a8b1f",
                "breed_uuid_horriot" => "d4edf0d7-9a6a-45ac-bff4-d9ce55d2f01c",
                "breed_name" => "Снежный топаз",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "f9e0897e-3b5a-49c8-abdc-dac844ec1c85",
                "breed_guid_horriot" => "c95ae11c-0ec0-4ad1-9a92-cc4647d772bf",
                "breed_uuid_horriot" => "d63f6fb7-db25-40cd-bd1c-4979a32731af",
                "breed_name" => "Советская  шерстная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "0f19a14e-043e-4790-acfa-c6d1377223cf",
                "breed_guid_horriot" => "727df857-669f-4fbc-af55-1d344d1b10a1",
                "breed_uuid_horriot" => "df4c1d94-d016-4224-9ccd-0bcf7592bf91",
                "breed_name" => "Советский меринос",
                "breed_selex_code" => "12",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "769d6f29-cb57-42e5-92d4-635adc506df2",
                "breed_guid_horriot" => "d7637f07-2e5f-4603-927c-31c1b875e0f1",
                "breed_uuid_horriot" => "e7e2f325-ceaf-43ce-8d4a-659856e8c8d6",
                "breed_name" => "Соклотпастельсеребристая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "1",
                "breed_guid_self" => "3a5b0960-460d-43c1-9041-97068679caf9",
                "breed_guid_horriot" => "3205103d-16de-4f66-91ac-ae6f2bb0f085",
                "breed_uuid_horriot" => "ec8aa4a1-1607-461a-9987-d2c4c0f9b20e",
                "breed_name" => "Тверская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "425e4b5b-02f4-4a10-b6fb-39019624f6ff",
                "breed_guid_horriot" => "5cf9b403-9ee5-4604-b991-77a681b3ae3d",
                "breed_uuid_horriot" => "f8a84beb-718d-468f-8f01-176788189ab6",
                "breed_name" => "Тагильская",
                "breed_selex_code" => "28",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "1",
                "breed_guid_self" => "49be37e0-7ace-4612-a74c-dcc77e70085d",
                "breed_guid_horriot" => "c64a84c5-28a0-44ac-b438-1ba2b7798091",
                "breed_uuid_horriot" => "f93e2321-2353-4d18-9d40-fcca5c22876f",
                "breed_name" => "Тверская пастелевая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "f428a480-8d11-45f8-b6a0-2a940aa1ed58",
                "breed_guid_horriot" => "6c2b86d0-18b5-49a8-80d6-b310324381d5",
                "breed_uuid_horriot" => "fa2d43a7-0918-4df8-bed7-8a987e580a47",
                "breed_name" => "Тракененская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "34cbba1e-2cb0-4898-8985-f7be5860f69c",
                "breed_guid_horriot" => "ecf6f84d-409d-4e45-8098-0eb9d8cd89a6",
                "breed_uuid_horriot" => "fbb493a2-e291-4068-a202-d8967aece5ff",
                "breed_name" => "Стандартная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "76c4913c-7faf-4552-9427-e80561f9b169",
                "breed_guid_horriot" => "835bd869-f7c5-420b-8410-6a2bcc1754c7",
                "breed_uuid_horriot" => "fecfffa2-4de7-4776-8f81-4b3ede3b92f8",
                "breed_name" => "Суффолк",
                "breed_selex_code" => "31",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "fa18c054-6341-409d-93ae-63501e259802",
                "breed_guid_horriot" => "cfc16097-0f65-4907-9f1c-12e4f6c3fcb2",
                "breed_uuid_horriot" => "0f58a216-d265-4fb7-a1d7-f60545c1a9ab",
                "breed_name" => "Тюррингская лесная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "bd44e785-e8be-4a31-9c17-ba26ab492a80",
                "breed_guid_horriot" => "1e7b5a0d-9e20-4043-b406-7cce59488387",
                "breed_uuid_horriot" => "14674c17-fcf4-4630-b25f-b7b292f0a95d",
                "breed_name" => "Черный хрусталь",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "f292dca1-b973-4c6b-9798-6fe11c918e48",
                "breed_guid_horriot" => "3276ba8d-6563-48b4-ac94-04724409ce9b",
                "breed_uuid_horriot" => "167714a2-f060-4263-ac25-351947af258e",
                "breed_name" => "Целинная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "6375c88f-7efb-49d2-9d63-1574a5620e53",
                "breed_guid_horriot" => "56994a74-d3d7-4a74-b101-dd95cfe999ae",
                "breed_uuid_horriot" => "196ef157-34c2-453f-8859-c6e310025040",
                "breed_name" => "Ульдургинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "1ba09077-d3c4-4dd3-ab84-6d5dd1c64b24",
                "breed_guid_horriot" => "aba3854d-06d2-4fc6-8cb8-fecfe669afdf",
                "breed_uuid_horriot" => "1f801bbf-af49-4b98-bbc7-fa11f2373695",
                "breed_name" => "Уржумская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "9d0360ad-799f-4859-bb2c-226b15ba581b",
                "breed_guid_horriot" => "a1431f33-ffdf-4258-8172-8565f7eac483",
                "breed_uuid_horriot" => "3d61a64d-c4e6-4a86-b6a8-23dc69e7fcf8",
                "breed_name" => "Цигайская",
                "breed_selex_code" => "34",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "6",
                "breed_guid_self" => "a4fb6b16-fc81-47ec-b068-2da56d21b748",
                "breed_guid_horriot" => "0d6bc594-e02e-4d61-b651-a3fb00274940",
                "breed_uuid_horriot" => "3e6e5f7a-fa1b-4115-9468-0c0d3e310018",
                "breed_name" => "Узбекская палевая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "be55087b-7b14-4071-ad57-a2f96a70adb4",
                "breed_guid_horriot" => "583e6254-f857-4213-9a95-a286d4affd40",
                "breed_uuid_horriot" => "421aebba-96cb-4d88-aba9-7037f6365d0c",
                "breed_name" => "Туклинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "f9ec5450-6a8b-4385-a91b-28443fc5cafa",
                "breed_guid_horriot" => "aa0b31cd-7fc0-4a3f-bff6-4ce5d61dcf83",
                "breed_uuid_horriot" => "5c496f54-d5db-4e1c-b985-d895a6684bf9",
                "breed_name" => "Фелл пони",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "f35a78ff-18c7-40f2-863c-023fc9e3cd91",
                "breed_guid_horriot" => "2bc0979b-cb23-4b3d-9ae9-b89f4509ba68",
                "breed_uuid_horriot" => "63a6cbfa-6112-43b0-be2e-f3b427eb1e0a",
                "breed_name" => "Цивильская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "fb26d40b-8606-49d7-bc7d-b3c630dbca99",
                "breed_guid_horriot" => "701cf802-684a-406b-a5a1-68078f21cd1e",
                "breed_uuid_horriot" => "6b0f9c5a-3a91-4cf1-a2d1-cc53a1a70fa3",
                "breed_name" => "Цвартблес",
                "breed_selex_code" => "117",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "d4f11c5b-896e-452d-93c4-0d56d1588147",
                "breed_guid_horriot" => "8109c081-d634-49dc-8ef8-de5d1060ebd2",
                "breed_uuid_horriot" => "72791561-080a-47f7-aeb5-15c60a965f6a",
                "breed_name" => "Тульская бойцовая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "2cbc1e51-1cf8-472f-ae5e-2a41e3278b78",
                "breed_guid_horriot" => "f9eb5802-6baa-434d-86b9-609e6bee9f8c",
                "breed_uuid_horriot" => "73523f0d-de40-4d3e-9299-c787188f9e8f",
                "breed_name" => "Узбекская бойцовая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "afebe025-3af0-49b4-9c3a-5a286970eb6e",
                "breed_guid_horriot" => "b7f0b5bd-46ce-4fba-a30d-0929d3ecf351",
                "breed_uuid_horriot" => "740faea3-27fc-4e32-90ac-240de88f7d92",
                "breed_name" => "Французская рысистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "a8d36826-b930-4a73-9fe1-c7040db60352",
                "breed_guid_horriot" => "8b280234-ff2d-4961-950d-f57437e02fe9",
                "breed_uuid_horriot" => "7836316c-3c32-4674-90a4-f822181f617c",
                "breed_name" => "Удмуртская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "727eb8ad-f288-420f-911b-3326491fdf48",
                "breed_guid_horriot" => "cfdf0814-b530-43bb-981e-609e3258d2f7",
                "breed_uuid_horriot" => "92f1ce1b-0add-466b-94ef-932724e9022d",
                "breed_name" => "Уральская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "279983ea-b00b-4c5a-92f7-0c2f35b16dbd",
                "breed_guid_horriot" => "284a3586-9aa2-41f6-bbab-b02cd2d9278e",
                "breed_uuid_horriot" => "9322c7e2-87f9-4461-8a17-87d98ff0b319",
                "breed_name" => "Украинская ушанка",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "ab4ba261-25dd-432e-810b-2a47e084b761",
                "breed_guid_horriot" => "faef1b75-ad98-4663-9d26-7120eeaeea55",
                "breed_uuid_horriot" => "97631f94-da47-4745-9b12-ecb642ce4081",
                "breed_name" => "Холмогорская",
                "breed_selex_code" => "61",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "f15c03be-a117-4109-abb0-67d641953a69",
                "breed_guid_horriot" => "cb322ae7-9322-4a26-ad68-b6a0cad620a0",
                "breed_uuid_horriot" => "99d15df3-b5a0-4fbd-97fa-8b92ffa36689",
                "breed_name" => "Черноземельский меринос",
                "breed_selex_code" => "111",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "1a0f405d-156e-421f-8ac9-9b70a28b6e1f",
                "breed_guid_horriot" => "8d3c38a0-6a91-4fc5-bc94-2e84c861a899",
                "breed_uuid_horriot" => "9c2e7a43-09c3-4fee-b1da-1de7c941339c",
                "breed_name" => "Фавероль",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "9380c162-52fc-46fc-8e2a-e2a5a9030c00",
                "breed_guid_horriot" => "8a955e95-06b8-42e5-bc09-1ac59da2ae55",
                "breed_uuid_horriot" => "a1320295-9b1b-4f4a-ae87-892b8abf6f57",
                "breed_name" => "Чешская золотистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "1fee14c1-d7fe-454a-bb14-aec4c8556bf5",
                "breed_guid_horriot" => "b45f455e-2d28-496e-a59d-b2ca18ad13c0",
                "breed_uuid_horriot" => "a16ccad1-2596-4020-bcb5-358fe2f623e3",
                "breed_name" => "Французский сель",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "2ec200ab-e088-44d0-8950-cae4ce7f68d1",
                "breed_guid_horriot" => "f4d01595-3129-41cc-ab9c-20c52686c820",
                "breed_uuid_horriot" => "a81abfb3-8a33-4ca4-90ba-a11ab29caf27",
                "breed_name" => "Уральская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "48dbbfb4-210b-4487-ab07-6b30d0746680",
                "breed_guid_horriot" => "45b6bbfb-6ecf-4f30-813e-1da345b43534",
                "breed_uuid_horriot" => "ac921fe8-9927-429b-8e27-80bb73252198",
                "breed_name" => "Украинская верховая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "6934e6c5-655a-4d86-ad19-54cd14b69fed",
                "breed_guid_horriot" => "faf5c467-7e02-4385-b02b-869e5f59566e",
                "breed_uuid_horriot" => "aebac33b-0266-4a5d-93c2-4d9ab3c496ef",
                "breed_name" => "Черная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "71060789-3f69-4ed8-a4bb-59eaa7537379",
                "breed_guid_horriot" => "e5771722-4429-416f-8425-ea0d51d0b20d",
                "breed_uuid_horriot" => "b266bee8-cfe6-44be-bcf7-ffa7bced65ea",
                "breed_name" => "Тулузская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "20",
                "breed_guid_self" => "6053fd06-4a35-4b66-bd67-079b3be9c068",
                "breed_guid_horriot" => "94eca8a6-f2a6-4244-9594-b87b0385fd6a",
                "breed_uuid_horriot" => "c93b65a9-9282-4118-9f14-549afb947237",
                "breed_name" => "Черная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "94b9f6e2-e2e8-4ee2-a280-73513bf5f001",
                "breed_guid_horriot" => "89607bf7-4eb5-471a-ae00-bb32ef49ca98",
                "breed_uuid_horriot" => "d19541bc-82e0-4e11-bb1e-46ca767b816e",
                "breed_name" => "Уэльский пони",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "5dcdb378-7d40-4516-87a5-2ab3540676ab",
                "breed_guid_horriot" => "2676dbe7-439d-41bd-8834-3b7932815c65",
                "breed_uuid_horriot" => "d5729576-5d32-41d9-8e75-dfee98f99133",
                "breed_name" => "Черепетская рамчатая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "f8e792db-49c8-4f78-9f65-f1d2414d0e40",
                "breed_guid_horriot" => "6d7e4580-8b5e-465f-9396-29b5aada480e",
                "breed_uuid_horriot" => "da224328-7281-4fb8-b2e9-2db058d17ce0",
                "breed_name" => "Хангильская",
                "breed_selex_code" => "50",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "6",
                "breed_guid_self" => "53409bfa-2d8c-4e63-b572-dc8e0578c77e",
                "breed_guid_horriot" => "7955f331-5442-4057-8571-7d77a02bb79f",
                "breed_uuid_horriot" => "e0768b47-a6d2-4c88-bc92-c1ddcc094f9b",
                "breed_name" => "Черная тихорецкая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "2a953db4-f35a-43d0-94f3-250e207608c2",
                "breed_guid_horriot" => "8db427b6-dbee-45f0-a622-31b39213b4c7",
                "breed_uuid_horriot" => "e7b5ea64-c98a-4e78-8e7e-10e446c9dcac",
                "breed_name" => "Черная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "16828e54-b1d0-478a-9b76-dc2642b764bc",
                "breed_guid_horriot" => "527498d0-ff2d-4039-8053-27ec54134bca",
                "breed_uuid_horriot" => "e8e34407-fb0f-44e9-ad1c-2b17dfb3b73b",
                "breed_name" => "Хайленд",
                "breed_selex_code" => "128",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "bb84e6e2-13c3-4b5c-9ccd-59ed7b857d1f",
                "breed_guid_horriot" => "877a3335-077f-4117-a918-883e9512a8f9",
                "breed_uuid_horriot" => "eab4b97e-fc7c-4989-bf24-fb1ebe1f9c89",
                "breed_name" => "Учалинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "a8ec3ced-62e6-4142-a2ba-fc95bbe47a4c",
                "breed_guid_horriot" => "5029911c-eb29-48c6-966d-53e80fb3d72c",
                "breed_uuid_horriot" => "f085c29a-454f-4151-96f2-521e1f50e3a2",
                "breed_name" => "Чешская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "143b11af-6913-4d46-ac6d-9b11366ca593",
                "breed_guid_horriot" => "4b190bb2-2a46-4011-b4bf-aa9b316f2628",
                "breed_uuid_horriot" => "fa15e2e5-d3a2-43a3-91bd-32c1ae249662",
                "breed_name" => "Удмуртская",
                "breed_selex_code" => "74",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "91c082ef-7d6d-413e-8102-a2b598cb417b",
                "breed_guid_horriot" => "7178b1e5-f8af-4970-957f-9e49dd115158",
                "breed_uuid_horriot" => "fefdaf8e-43d1-417f-bd94-a12872605261",
                "breed_name" => "Чистогорская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "e613419c-a76c-4752-9668-072365964c4d",
                "breed_guid_horriot" => "dfe2579e-d044-4e5d-9c66-cdd46cfbd162",
                "breed_uuid_horriot" => "011dd850-219e-421a-8944-324ed449bff7",
                "breed_name" => "Плимутрок полосатый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "f77b9b4c-e49a-43ac-811c-90b7e547cd13",
                "breed_guid_horriot" => "0e55dbeb-cd35-4aa8-8dc4-0ca0d12872cf",
                "breed_uuid_horriot" => "012dfff8-4097-4d6f-8287-e27f5586aa15",
                "breed_name" => "Монбельярд",
                "breed_selex_code" => "42",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "2d389456-a2ef-49a6-8b81-e0bb4904f266",
                "breed_guid_horriot" => "05cae149-22d5-4561-9cf2-6ea558db077d",
                "breed_uuid_horriot" => "016772d8-9e72-4fa7-a2c3-8384583979e9",
                "breed_name" => "Скороспелая мясная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "1bd7d9d8-c728-49e1-87f2-b541a9bfcfa6",
                "breed_guid_horriot" => "9c4d4493-7474-4a44-9d58-a5c5da8c1f87",
                "breed_uuid_horriot" => "01981213-5bd9-40c8-b221-6e61847220a3",
                "breed_name" => "Ламанча",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "b8ec9c13-b1ce-49c6-b930-9ac35674c79f",
                "breed_guid_horriot" => "21a71ffc-11a9-404c-ab93-210b98843816",
                "breed_uuid_horriot" => "01e7b1a5-d659-4c61-998d-df69b157aaf9",
                "breed_name" => "Кавказская",
                "breed_selex_code" => "3",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "bae73b00-7f01-432b-b888-695c14ce176e",
                "breed_guid_horriot" => "cdd7c34a-3f5c-4cf1-ac02-691f6a95fd72",
                "breed_uuid_horriot" => "02429f55-f4c1-41b8-962b-69cb92ffc112",
                "breed_name" => "Селинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "18",
                "breed_guid_self" => "487f4572-94b6-4081-a499-e8e2c5711511",
                "breed_guid_horriot" => "5b7e8613-e036-4538-9ef2-f79965c9d188",
                "breed_uuid_horriot" => "066aae84-a798-40d9-bdee-2e837068bab6",
                "breed_name" => "Волжская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "6",
                "breed_guid_self" => "2c16841f-dd68-41bd-ba80-22a651b47b4f",
                "breed_guid_horriot" => "6af06ada-0428-48a4-8794-02704f5e6777",
                "breed_uuid_horriot" => "06ab9abd-5f7c-4015-a537-1a8dc09c1086",
                "breed_name" => "Московская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "29",
                "breed_guid_self" => "ec8fefe8-601c-476e-914e-64abb7aac2d9",
                "breed_guid_horriot" => "af0e8cd4-153f-4630-807a-1d16dcbb5978",
                "breed_uuid_horriot" => "077765b8-6a8c-495d-b3db-ed1ea5868796",
                "breed_name" => "Шотландский терьер",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "7d8b2eb7-f13b-4d91-99d1-4f49d38d2813",
                "breed_guid_horriot" => "889a97d3-d594-4a89-a9ac-ec59d06e6448",
                "breed_uuid_horriot" => "07eed253-ebe6-4a66-9745-2aacabe8a36f",
                "breed_name" => "Холмогорская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "22",
                "breed_guid_self" => "f4a85703-27f7-43c3-9a7c-148f5e3e3f82",
                "breed_guid_horriot" => "327b6405-3ace-448d-b354-e681281498c7",
                "breed_uuid_horriot" => "082dff06-5228-4419-a437-67b73ec93033",
                "breed_name" => "Африканская черная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "f9ee713f-ad7b-4fac-a62a-627e06484188",
                "breed_guid_horriot" => "a63641e1-cd79-4702-a814-67f3a3078777",
                "breed_uuid_horriot" => "0961f96d-4f78-421b-9df2-ef80ba09492a",
                "breed_name" => "Ярославская",
                "breed_selex_code" => "40",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "b8459a80-0bd9-4adc-9cdc-cfbac560fa94",
                "breed_guid_horriot" => "f3feb1cd-0322-4c2a-9057-585c79756603",
                "breed_uuid_horriot" => "0b8ba65c-b3d8-4ca8-8b01-eb94e56eabe0",
                "breed_name" => "Переяславская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "fae4e6f0-70ef-4d50-8baa-21a3a0bacd42",
                "breed_guid_horriot" => "8df9e879-a5f7-47a8-bea6-eb054b39bcb6",
                "breed_uuid_horriot" => "0c0fa945-698a-44b5-897e-196ae9a78da3",
                "breed_name" => "Линкольн",
                "breed_selex_code" => "20",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "73998b70-9b53-4358-88c6-f28a76fa7571",
                "breed_guid_horriot" => "e6c68cf1-99fa-40a7-8232-c93d4253bf6f",
                "breed_uuid_horriot" => "0c7666c5-ec43-4b75-8946-b600e6bf748f",
                "breed_name" => "Шадринская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "2960790b-7878-421b-a040-27301325e0ea",
                "breed_guid_horriot" => "f082a200-0ec2-41ee-adce-6f915c0dec58",
                "breed_uuid_horriot" => "0dd09254-ac1b-4aec-819b-e287f3728d8f",
                "breed_name" => "Сибирячка",
                "breed_selex_code" => "113",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "38011198-a60a-41c0-a4bd-93f375b2108d",
                "breed_guid_horriot" => "4d93e9e8-4add-490f-ab30-cc51d147009d",
                "breed_uuid_horriot" => "0eea611b-e052-47fb-8f91-65faf100d9d7",
                "breed_name" => "Курчавая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "294d2453-522c-4ea2-8763-1ace07b131bf",
                "breed_guid_horriot" => "a1cb5b92-1ecc-408d-81bf-b212e43963cf",
                "breed_uuid_horriot" => "2a4ba02c-8511-4acb-a512-b3b9560d7220",
                "breed_name" => "Чумышская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "643362de-1c14-40a7-9ce0-eabd7982a5de",
                "breed_guid_horriot" => "5ca731c9-3545-4a4a-809b-6978b8441cca",
                "breed_uuid_horriot" => "4363b4e5-7c07-41fb-88ac-6290c277ccfc",
                "breed_name" => "Чуйская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "c5236759-d751-4a2b-96d3-a8923cb4379f",
                "breed_guid_horriot" => "99355104-39bc-4263-929d-e2051400dfef",
                "breed_uuid_horriot" => "5988d867-04e4-4cb0-8c39-242faad68a3d",
                "breed_name" => "Эстонская беконная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "36",
                "breed_guid_self" => "52135702-87c4-4273-815a-d8958696fee2",
                "breed_guid_horriot" => "4da2e9d0-f326-4ee6-a49a-438190804120",
                "breed_uuid_horriot" => "5ea4f589-1c96-4c63-a79b-12f72bedb54e",
                "breed_name" => "краинская (карника)",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "128cafa3-296d-4a93-bb3e-4936cf313aa8",
                "breed_guid_horriot" => "8ee169cf-36f7-4570-8a21-e969dc28884d",
                "breed_uuid_horriot" => "6e9402a2-3675-47b2-b029-919b0ff240af",
                "breed_name" => "Юринская",
                "breed_selex_code" => "39",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "25",
                "breed_guid_self" => "10da3273-3843-4533-9a26-700c937eabc8",
                "breed_guid_horriot" => "0119ebe0-709a-4921-abb4-06a3c1e25c19",
                "breed_uuid_horriot" => "81216806-2899-4626-8e62-1b0f78d788ad",
                "breed_name" => "Эвенкийская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "12",
                "breed_guid_self" => "57bd6358-c497-48d2-a422-989fa7d93009",
                "breed_guid_horriot" => "baae265a-3950-42d7-ab70-f5c42cdd051a",
                "breed_uuid_horriot" => "8c999eac-bf1b-47db-9cb9-bb4c1fc008ff",
                "breed_name" => "Японская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "f9adba73-839f-432f-8ccc-6b5a58d0ddfc",
                "breed_guid_horriot" => "3bba9e86-559e-4f54-ba38-0a398a4c053d",
                "breed_uuid_horriot" => "8f22ab7b-fe5f-4db1-aead-316e4aab759d",
                "breed_name" => "Южная мясная",
                "breed_selex_code" => "78",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "1adb8a42-77d4-4af1-90a3-ecd9f4d64a45",
                "breed_guid_horriot" => "b0ee3712-6f0d-48d6-a543-4e414be9d289",
                "breed_uuid_horriot" => "9c38f84b-2f9b-4dab-832b-cf56f6b45fb2",
                "breed_name" => "Шами (Дамасская коза)",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "6336be7a-5d3d-48aa-b80e-ef33c309b0d1",
                "breed_guid_horriot" => "a4f78a09-507e-0364-fd99-8b592869b2be",
                "breed_uuid_horriot" => "ac243a1e-83b5-2b32-227a-3108c52a8d8c",
                "breed_name" => "Чёрно-пёстрая",
                "breed_selex_code" => "30",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "8918a514-29c8-4438-855b-a9f7f28f5265",
                "breed_guid_horriot" => "495af453-e11c-42cd-8d0e-efb1c265a9bb",
                "breed_uuid_horriot" => "ae52e1bf-1279-4905-9657-7657d802376d",
                "breed_name" => "Эдильбаевская",
                "breed_selex_code" => "40",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "a349c100-44ca-48a0-86a4-b5194fee27cc",
                "breed_guid_horriot" => "0c88bff2-acdd-419d-ad55-20226d5f1ba1",
                "breed_uuid_horriot" => "b326fb73-904a-435f-88e2-ca4f33bf9dd9",
                "breed_name" => "Шортгорнская",
                "breed_selex_code" => "38",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "8e4686a1-81fc-4222-acc3-fc5378b2919c",
                "breed_guid_horriot" => "ae43328e-6864-4bc2-aea3-fb3d11ef8217",
                "breed_uuid_horriot" => "b3e1dc5f-3b47-43a5-bcf4-e1a78a8b5c54",
                "breed_name" => "Шетлендские пони",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "6616d202-a255-4740-aeb2-b1fd34b9ccb5",
                "breed_guid_horriot" => "397f06e0-0152-436c-8c76-9d6d2661523a",
                "breed_uuid_horriot" => "b71e741c-9226-4e01-ba4a-8ce74461a88f",
                "breed_name" => "Шропшир",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "db2990ca-2219-4cc5-a09b-d352aa7dbdb4",
                "breed_guid_horriot" => "1827391b-2215-43c4-8792-b5dea794e291",
                "breed_uuid_horriot" => "c4c166eb-2224-491a-8939-98c06eb703d4",
                "breed_name" => "Якутская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "62460300-debb-4212-8601-97e7090e32ab",
                "breed_guid_horriot" => "475c628c-d2ea-44a2-b24a-6f5e8e3b4dcb",
                "breed_uuid_horriot" => "c621c891-d83b-4644-bc40-e3006395b58a",
                "breed_name" => "Чистокровная верховая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "ede1962f-da73-4703-8579-d3718087f289",
                "breed_guid_horriot" => "aa65edeb-9fa0-4c77-baa8-07a47ffa633f",
                "breed_uuid_horriot" => "dde3d467-b4f8-4c6b-8c68-6bdfff8f58c7",
                "breed_name" => "Чувашский чешуйчатый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "30664b3c-7be5-49ff-a5d8-9164ac0c7a89",
                "breed_guid_horriot" => "842ee8dc-7fd0-4d05-8741-530ba2fe6670",
                "breed_uuid_horriot" => "ee3999b0-880d-4052-8622-ead5e563958f",
                "breed_name" => "Южноуральская",
                "breed_selex_code" => "8",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "12",
                "breed_guid_self" => "339ff17a-fcb6-4a8b-a843-26ca1f3ef4cb",
                "breed_guid_horriot" => "2d73dc94-f99e-4232-a62e-c117d267fcd7",
                "breed_uuid_horriot" => "ef25a533-eb75-4ebc-a8a4-8ff87ffafa9e",
                "breed_name" => "Эстонская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "00bb9242-77c2-4165-aff8-5b233c16d43a",
                "breed_guid_horriot" => "61a305cb-f57f-49c6-bb41-9666e8d0576e",
                "breed_uuid_horriot" => "f789bc9f-1901-4a68-9d47-75a5ed5fd868",
                "breed_name" => "Шароле",
                "breed_selex_code" => "88",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "4a2c9914-d6cf-4872-818d-b74e7070f0d6",
                "breed_guid_horriot" => "9476a257-3cc9-4ff0-b309-8ac6b18de3bd",
                "breed_uuid_horriot" => "f8563c1f-8aa5-4472-ad6d-e152a8a71003",
                "breed_name" => "Юрловская голосистая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "631609fe-dcbc-4a6b-98a0-14b859b57700",
                "breed_guid_horriot" => "93127c0e-b7fb-4730-9fe5-b9fb7a681e9d",
                "breed_uuid_horriot" => "0f3c100b-d3cb-451b-8cb1-95f69e15cc3a",
                "breed_name" => "Голландская теплокровная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "989e1b9c-0fa4-40e0-8ea4-88ed3396e5cf",
                "breed_guid_horriot" => "c3bb8887-2d64-4e63-98a7-8ce25258ca72",
                "breed_uuid_horriot" => "0f77a0bb-d91d-4368-b757-7f2c11aa0e82",
                "breed_name" => "Шайр",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "8afa8f3a-dd7b-413c-bab2-22aba8e74212",
                "breed_guid_horriot" => "53041e5c-1aa4-4e4c-98d4-563123daa5c4",
                "breed_uuid_horriot" => "117d1ea0-4075-4d3f-9ba3-af1c30f63fc7",
                "breed_name" => "Черно-бурая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "ab3821d8-6ce6-46e1-9fba-ca679a9cbe43",
                "breed_guid_horriot" => "35fc4ae4-5905-4fb4-b90d-b7b13864de85",
                "breed_uuid_horriot" => "169b29da-8ce9-43c5-a313-1d2ed1443e02",
                "breed_name" => "Верхнестепновская",
                "breed_selex_code" => "69",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "fb86cd5d-bc75-4547-beb9-fbefdefbc34d",
                "breed_guid_horriot" => "414ff23e-1471-4f3a-9403-e51966590272",
                "breed_uuid_horriot" => "18b0e465-dffb-406f-b3b5-3d96066deef7",
                "breed_name" => "Латвийская упряжная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "618598d3-87a3-4e2c-adcc-0fc625fc1cb1",
                "breed_guid_horriot" => "edb03d99-ec31-4b5b-bb84-5132cec23746",
                "breed_uuid_horriot" => "1bd28502-02c0-4bd0-970e-a8583194d7f4",
                "breed_name" => "Гиссарская",
                "breed_selex_code" => "39",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "4eda8006-3e05-420a-8887-ac0e461938d6",
                "breed_guid_horriot" => "49be3b12-a66e-46b7-8271-fbb058d3f263",
                "breed_uuid_horriot" => "1da3922b-61c5-4d82-872b-3d7c5375e441",
                "breed_name" => "Барыбинская",
                "breed_selex_code" => "105",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "a0f5216f-0bf6-49c6-b069-283c405dc32c",
                "breed_guid_horriot" => "b07578c7-68f7-487e-b82b-488378cecc7d",
                "breed_uuid_horriot" => "1edd08cf-17ee-4197-b1ca-c54f491b878a",
                "breed_name" => "Красная Шведская",
                "breed_selex_code" => "21",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "5dc45b3b-e363-4ceb-8035-d4c067a6731c",
                "breed_guid_horriot" => "7cf8ab14-8f83-4968-a40d-749b0d47a485",
                "breed_uuid_horriot" => "23231a42-6808-416c-a1fe-2813163ac014",
                "breed_name" => "Черная бородатая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "b4781088-c5ba-42da-9500-866155ca2eb2",
                "breed_guid_horriot" => "6187934f-5b04-43b1-b33c-37fea042a50e",
                "breed_uuid_horriot" => "26daa0e1-df22-4371-bcf8-f5df0ac58d72",
                "breed_name" => "Виандот полосатый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "67ef5092-fef5-4463-9ab2-cd9fa01f89bb",
                "breed_guid_horriot" => "ba24ad89-784e-4a80-8b4c-4a7f75d0dc17",
                "breed_uuid_horriot" => "2da4b944-8d91-4580-a465-99e3f4239284",
                "breed_name" => "Китайская серая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "2676584a-d547-45d0-a31b-f6bf08b6b1fc",
                "breed_guid_horriot" => "2433ad12-816e-4b22-a00c-6e562eb1fb0b",
                "breed_uuid_horriot" => "2e6b7a77-9c9d-4c77-b92b-0c598eb7d845",
                "breed_name" => "Ольденбургская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "97ebb211-e91a-46a6-9d93-9b8633e55135",
                "breed_guid_horriot" => "45056575-62bb-4569-ae73-7eebabc008ae",
                "breed_uuid_horriot" => "2f2b31bd-8d8b-4ba6-b4fb-017d68262f68",
                "breed_name" => "Советская тяжеловозная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "0e836c63-8950-4234-9a58-5a801d0a3e05",
                "breed_guid_horriot" => "c7fd9f0a-7ae5-4c99-be6d-9da3d768bafd",
                "breed_uuid_horriot" => "32ba1451-6a57-41ec-be61-d5b27bfccbf9",
                "breed_name" => "Ропшинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "fd86f4eb-1fb9-4277-9927-1946c91f7ce7",
                "breed_guid_horriot" => "3f000f5f-b06c-4000-81c5-90bf2fe1488e",
                "breed_uuid_horriot" => "3b063f1d-e5cf-40d2-9187-25c52d09a6ae",
                "breed_name" => "Бургундская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "0e273181-6e71-498c-b2a2-a9753f835197",
                "breed_guid_horriot" => "be940b07-2243-438f-8763-b48b55911811",
                "breed_uuid_horriot" => "3cbe8640-d10c-46e4-b7c1-1bb3ae016949",
                "breed_name" => "Лейстер голубомордый",
                "breed_selex_code" => "119",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "d83e2d74-dfb9-4a0b-b84c-4e5dbd146567",
                "breed_guid_horriot" => "df62fdc9-dec0-46f9-922a-439c6ddf1d39",
                "breed_uuid_horriot" => "3de7028a-c16b-4aa5-a943-cf723f6f8980",
                "breed_name" => "Караваевская",
                "breed_selex_code" => "92",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "66cc2306-094e-48df-9ed6-e6be6d6d91bc",
                "breed_guid_horriot" => "2b2e3914-9918-4b6e-83e8-6d3abc448e28",
                "breed_uuid_horriot" => "3ec19630-16a3-41c3-b5b9-671282500b6c",
                "breed_name" => "Ампалосеребристая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "9cc141c1-bca3-4a98-b17d-56535156f6ca",
                "breed_guid_horriot" => "c9ad9bfe-3452-4799-83b5-e6a7e1813202",
                "breed_uuid_horriot" => "4035beca-ff7a-4c86-9e76-88d286d13032",
                "breed_name" => "Монгольская",
                "breed_selex_code" => "98",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "12aadbd9-69f1-4794-bdf1-17786b0d0abc",
                "breed_guid_horriot" => "2618b5cf-dbf5-4dd9-a7ed-6deb90e39e4b",
                "breed_uuid_horriot" => "42a2a062-f2b7-4338-aee6-30128e339a4d",
                "breed_name" => "Приобская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "cac2b478-e1b1-4cae-8c02-63c5109fdf8d",
                "breed_guid_horriot" => "29647f52-c559-45b6-82c6-6832fb45aaeb",
                "breed_uuid_horriot" => "43f5a9eb-9a87-4c56-b132-ad98bf4f6800",
                "breed_name" => "Декалб Уайт",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "8a2fed68-6a57-42e9-a5e1-dfa86a6a29ed",
                "breed_guid_horriot" => "b2d9e0f0-23e6-4165-b4b5-a51e812c4993",
                "breed_uuid_horriot" => "45c4b652-3e8d-492d-b570-6e4c775aad1a",
                "breed_name" => "Бирюлинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "1cbe8a94-fa86-45e7-a81a-2d73e1fa7dc8",
                "breed_guid_horriot" => "6ae07eb7-acae-4232-ae1b-2971656d8981",
                "breed_uuid_horriot" => "53af5eb3-e7cc-408d-b71b-4c1d76b40f6f",
                "breed_name" => "Вазузская",
                "breed_selex_code" => "63",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "765a58e0-e117-4760-b088-f128da46fb48",
                "breed_guid_horriot" => "804554aa-d1d9-42bb-89ff-4cfa0d43149e",
                "breed_uuid_horriot" => "5515677f-97c6-45c4-b4c2-dbaa3598d4f1",
                "breed_name" => "Эмденская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "5279947f-8562-443d-8592-c3ef53007422",
                "breed_guid_horriot" => "7b652add-c001-423e-b4eb-52c3e63fdc60",
                "breed_uuid_horriot" => "5545c630-6571-4e8d-9550-c250545f5dcc",
                "breed_name" => "Голландская белая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "2534e28e-7db3-49d7-87da-3505a18a0937",
                "breed_guid_horriot" => "07248604-f535-432d-b534-17ca480890b3",
                "breed_uuid_horriot" => "584798d6-19d3-4640-85a4-a886bff1f6c9",
                "breed_name" => "Лимузинская",
                "breed_selex_code" => "84",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "bd9743ed-5808-42ec-8196-be35e721e435",
                "breed_guid_horriot" => "3868e038-33c8-4192-af40-14f83f7b55f5",
                "breed_uuid_horriot" => "58a8ebc9-f318-4d8f-8430-4e4fbbeabd75",
                "breed_name" => "Бессоновская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "e9c3ac9b-8536-4f5f-ab67-7f600730343c",
                "breed_guid_horriot" => "373b19d9-52fb-43b3-9b08-c7664fdde128",
                "breed_uuid_horriot" => "5b1f6544-9820-47b8-be0e-d480aca6632b",
                "breed_name" => "Джерсейская",
                "breed_selex_code" => "10",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "74e4ca3f-196f-4bd6-9969-42c4b33c0870",
                "breed_guid_horriot" => "c627d07c-5c95-4739-a68d-a5901450df8c",
                "breed_uuid_horriot" => "5cef6178-7708-4907-a482-ecbf5b2bbf92",
                "breed_name" => "Черепетская чешуйчатая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "d0b8e3b0-2908-48ac-ae2f-74e091980dee",
                "breed_guid_horriot" => "f4f6ea19-416a-4d78-8368-f90a4481fe76",
                "breed_uuid_horriot" => "5dd4e494-f07f-4f39-9c77-921332495976",
                "breed_name" => "Северная комолая",
                "breed_selex_code" => "60",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "025a2e72-60ab-41ce-9a13-0314e135a675",
                "breed_guid_horriot" => "7d9fe189-667a-4182-8df3-ae85ccab0d62",
                "breed_uuid_horriot" => "6263df6f-dbec-4b46-b770-6b9e2a01dcc7",
                "breed_name" => "Рейнская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "8",
                "breed_guid_self" => "8df44446-a638-47c2-adf8-08f339e2e00b",
                "breed_guid_horriot" => "9e2cad8a-8cae-47eb-b8b1-d01f80d83683",
                "breed_uuid_horriot" => "645e6881-58a0-4f2a-b041-5e4684928f45",
                "breed_name" => "Снежная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "1656f553-5c43-432f-a64a-1e6fe50dded1",
                "breed_guid_horriot" => "aa13dc80-9621-478f-bd00-3647927c1fe6",
                "breed_uuid_horriot" => "6556ab86-1cf6-464f-9a7a-366ef964e947",
                "breed_name" => "Калмыцкая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "51e7368e-5472-4ebd-b591-ee4cd90778bc",
                "breed_guid_horriot" => "404a3daf-d6f9-55fb-cadb-06413f9ed712",
                "breed_uuid_horriot" => "66227d71-335b-19cd-b116-fb0c0eab7e57",
                "breed_name" => "Симментальская",
                "breed_selex_code" => "26",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "6bf148b7-bbc1-4a70-b7fa-4073bdc3aac3",
                "breed_guid_horriot" => "315de402-bf58-4f2e-8f92-5f590be0ad0b",
                "breed_uuid_horriot" => "675585f0-0c34-4e73-bd67-7ec39205575a",
                "breed_name" => "Буубэй",
                "breed_selex_code" => "88",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "edd5217f-f2d0-4e72-a544-8e780f74d9a0",
                "breed_guid_horriot" => "2f10276f-5464-4037-b89d-6818f1f06a4a",
                "breed_uuid_horriot" => "6a2a3b52-eea5-4b64-8204-a8ee45f8a689",
                "breed_name" => "Ленинградская",
                "breed_selex_code" => "102",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "687614d4-f242-447b-afc8-c95d7f9254f7",
                "breed_guid_horriot" => "c765da8b-6dad-4c16-8b39-20b125e0ee80",
                "breed_uuid_horriot" => "6ef9b376-e5d5-4028-8266-cd411e9a3607",
                "breed_name" => "Кубанская",
                "breed_selex_code" => "100",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "9b78053f-06c2-4855-8e15-3fe338c03b12",
                "breed_guid_horriot" => "289b9453-345d-4e9c-8590-99c1d3b903b0",
                "breed_uuid_horriot" => "6fd9460d-ddbd-46db-920c-081f7bd0a45f",
                "breed_name" => "Бельгийская теплокровная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "b0d97d4a-9871-4839-a9b1-b528e06a869f",
                "breed_guid_horriot" => "9e0b7fbd-321b-4e16-9daa-c58e8b063d79",
                "breed_uuid_horriot" => "744bcaf0-3549-4a5f-85f5-8c85dc619913",
                "breed_name" => "Адлерская янтарная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "5c72d261-e414-457e-a85e-420637851022",
                "breed_guid_horriot" => "a0ca4a0d-d49a-4cf6-9a2b-ff3e97d231b2",
                "breed_uuid_horriot" => "7480b383-42cd-48a2-b441-fb5c6ef93ba4",
                "breed_name" => "Немецкая пестрая благородная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "a67aff93-8821-48b6-b48a-9f6a7d2a6afc",
                "breed_guid_horriot" => "ca96629e-12b4-4490-a4e8-f66b32a76a8a",
                "breed_uuid_horriot" => "79db7a4c-ed84-44c5-8402-329320fdde0c",
                "breed_name" => "Пронская",
                "breed_selex_code" => "115",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "36",
                "breed_guid_self" => "79e2150d-e62e-45c0-b328-9ab9740cdfd9",
                "breed_guid_horriot" => "cd3231c3-b6c7-433f-a060-33d91be0bbee",
                "breed_uuid_horriot" => "7b6547df-d97f-4c19-95cf-8f72cde64cff",
                "breed_name" => "карпатская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "55e533ae-7eb5-4949-a24b-410eab6f30be",
                "breed_guid_horriot" => "c15c0593-f8c5-417b-8945-2682536aae48",
                "breed_uuid_horriot" => "8199318a-5074-4c07-bb54-85119e527bf6",
                "breed_name" => "Короткожирнохвостая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "59269079-e487-4c76-ba15-6752f67ee958",
                "breed_guid_horriot" => "7c056836-4f41-44f2-ba43-89b04ad2018c",
                "breed_uuid_horriot" => "82bd14d6-d124-4d94-a521-1c7b3339aafa",
                "breed_name" => "Дагестанская шерстная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "34dd738d-878d-43fc-a8aa-4ca8200bb615",
                "breed_guid_horriot" => "2bea4f9f-927f-4bab-a09b-d23951669ba6",
                "breed_uuid_horriot" => "88140386-2558-48b1-8079-4ffcd872a91c",
                "breed_name" => "Оберхазли",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "40924399-5764-45cb-b641-8b8d78c9fa8a",
                "breed_guid_horriot" => "da79cb62-980b-4e4c-a050-7cf06ea26555",
                "breed_uuid_horriot" => "893e215b-9bfa-4baf-8ba5-7ab2d35aae6e",
                "breed_name" => "Санта-инес",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "89dbd2b8-2fd7-4635-a1b6-c893a7c5699e",
                "breed_guid_horriot" => "473e5cf4-8e4c-48dd-ac89-4df456cf0235",
                "breed_uuid_horriot" => "8a1d4585-4f6d-4236-bf4c-8ba18ded1d49",
                "breed_name" => "Тушинская",
                "breed_selex_code" => "42",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "da63650b-8e3a-4a1d-a601-09a016a01b7f",
                "breed_guid_horriot" => "f28a2345-cbd6-4276-8293-680089efeff3",
                "breed_uuid_horriot" => "8a910e86-4032-4fcc-96b0-8201a62dc9ed",
                "breed_name" => "Каргалинская мясная",
                "breed_selex_code" => "124",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "c76aa846-2e0c-4762-85de-4d0fd19b08bd",
                "breed_guid_horriot" => "409605f3-d8d4-4c2a-8038-1429d60c1467",
                "breed_uuid_horriot" => "8d2002f8-8372-4297-aa8b-d839898e523c",
                "breed_name" => "Белый великан",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "efe40935-954f-4bf4-9f8c-a96940b182f0",
                "breed_guid_horriot" => "faef1b75-ad98-4663-9d26-7120eeaeea55",
                "breed_uuid_horriot" => "97631f94-da47-4745-9b12-ecb642ce4081",
                "breed_name" => "Холмогорская",
                "breed_selex_code" => "72",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "703c232a-5d73-4d45-9f7b-6e65fee9789d",
                "breed_guid_horriot" => "faef1b75-ad98-4663-9d26-7120eeaeea55",
                "breed_uuid_horriot" => "97631f94-da47-4745-9b12-ecb642ce4081",
                "breed_name" => "Холмогорская",
                "breed_selex_code" => "95",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "c58ddda5-1236-451b-b53b-18b40e9aba86",
                "breed_guid_horriot" => "faef1b75-ad98-4663-9d26-7120eeaeea55",
                "breed_uuid_horriot" => "97631f94-da47-4745-9b12-ecb642ce4081",
                "breed_name" => "Холмогорская",
                "breed_selex_code" => "43",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "4cd94086-aead-4882-b040-09d36b46f15a",
                "breed_guid_horriot" => "faef1b75-ad98-4663-9d26-7120eeaeea55",
                "breed_uuid_horriot" => "97631f94-da47-4745-9b12-ecb642ce4081",
                "breed_name" => "Холмогорская",
                "breed_selex_code" => "29",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "332bec76-1cb1-4459-b523-4188722f88af",
                "breed_guid_horriot" => "a9fb1f37-d573-4a8a-baeb-8ed93b070110",
                "breed_uuid_horriot" => "999f0996-f3e1-4104-9f58-fe59c31b63f0",
                "breed_name" => "Русская верховая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "b023b50b-945c-4bd7-8b13-c9a9fbad8903",
                "breed_guid_horriot" => "a5d1b14b-0006-4087-a9f5-dcc33d32e6e9",
                "breed_uuid_horriot" => "9a08275c-15de-4ddf-886c-02212106c52a",
                "breed_name" => "Московская бойцовая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "0a72fdb7-c2dc-4bea-9341-1f77b8feb9ef",
                "breed_guid_horriot" => "100f6ee0-e225-42de-b210-0e2122f453e7",
                "breed_uuid_horriot" => "9cd6e034-53b8-4114-a40d-7d16ca10d090",
                "breed_name" => "Ландская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "07398594-83e7-430c-aa02-d1dba9e9e0e5",
                "breed_guid_horriot" => "7d3dd6ff-509a-45db-a4af-5a795a26fb84",
                "breed_uuid_horriot" => "9db805ed-2592-4a28-a46d-a68ad76e176c",
                "breed_name" => "Сычевская",
                "breed_selex_code" => "27",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "cbdab739-2e30-403b-8409-720c82ca231d",
                "breed_guid_horriot" => "e4b899ca-6a88-46a0-89f1-ff208c3fc4a5",
                "breed_uuid_horriot" => "a10f35a2-dc14-43d6-bcb5-8ed5b25a443f",
                "breed_name" => "Кубанская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "25",
                "breed_guid_self" => "ee11b383-43c8-4a48-aca8-c4258434a0ab",
                "breed_guid_horriot" => "e6469d6e-fe49-43d1-a8fa-b017d5e5061a",
                "breed_uuid_horriot" => "a83bd9e1-80b6-4b69-9473-f4e5bc128f9e",
                "breed_name" => "Эвенкская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "8e1ac2c9-a173-4d7e-8099-9f91436a93f5",
                "breed_guid_horriot" => "b3af7b15-466a-45f9-83e4-b5c288348491",
                "breed_uuid_horriot" => "a90efa8a-3b35-4bdc-a7e6-2f2c5fcbb5a8",
                "breed_name" => "Первомайская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "fe9462f8-4317-448d-8e0c-b5e38ddd0c62",
                "breed_guid_horriot" => "13c0a12a-6c09-46b6-ba6b-3a67a474a6d9",
                "breed_uuid_horriot" => "aaa5e311-b007-4c38-b1e2-54571519348e",
                "breed_name" => "Верхнеенисейская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "36",
                "breed_guid_self" => "995476b8-f8b8-4e5c-9330-9797873ba635",
                "breed_guid_horriot" => "d786e612-7706-4e20-9645-7971ec0eed36",
                "breed_uuid_horriot" => "ac32b901-965d-4319-9661-e7ddc2d2ae00",
                "breed_name" => "Дальневосточная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "de300282-0b44-4dc3-b6b8-f0b28e7022a4",
                "breed_guid_horriot" => "a63f3e13-8ed0-4ff8-be8a-081d22bf8295",
                "breed_uuid_horriot" => "adfffce3-e106-4900-940a-74a625bff775",
                "breed_name" => "Адлерская серебристая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "dfcedbe9-e686-4673-bcea-94d45c59d3ed",
                "breed_guid_horriot" => "a9560d83-9f76-42f5-babb-373eaa1dac55",
                "breed_uuid_horriot" => "af9a81f5-c6ae-4ced-accb-0a2b5e84d836",
                "breed_name" => "Брама",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "7bfccc02-ac01-4ef1-9ce4-273dfe9f2170",
                "breed_guid_horriot" => "0c88bff2-acdd-419d-ad55-20226d5f1ba1",
                "breed_uuid_horriot" => "b326fb73-904a-435f-88e2-ca4f33bf9dd9",
                "breed_name" => "Шортгорнская",
                "breed_selex_code" => "89",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "c3fe44d0-5d1a-4bf5-8796-aa2834c5cb61",
                "breed_guid_horriot" => "e7b39bf0-69e1-4414-bbff-ab2eb9a1fb2a",
                "breed_uuid_horriot" => "b70d7234-d76b-4747-bd57-892c88d47ebe",
                "breed_name" => "Курганская",
                "breed_selex_code" => "83",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "767699c5-da36-46cc-8b0c-c654f2bcfe0d",
                "breed_guid_horriot" => "2bd57ddb-5640-4a6e-890f-ad2b404465f5",
                "breed_uuid_horriot" => "bb41d83e-db37-4f76-94cf-92e51bbfbcc9",
                "breed_name" => "Русская длинношерстная",
                "breed_selex_code" => "21",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "b9e91359-42f2-4c55-aec6-bf1edf418bd3",
                "breed_guid_horriot" => "daf90d0a-b37d-4bdd-a99c-78bead668dda",
                "breed_uuid_horriot" => "bb57578a-2884-4dbf-8891-cbc44ba9d34c",
                "breed_name" => "Карачаевская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "7cccfdf6-53d0-4008-bdf5-2bf7f5d56141",
                "breed_guid_horriot" => "a5ef9c98-6a88-49dd-8e9d-cf1b57afba68",
                "breed_uuid_horriot" => "bd7ae7cc-516c-4073-9ad4-75c8cd937a79",
                "breed_name" => "Артлухский меринос",
                "breed_selex_code" => "126",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "a1aca368-cac7-49aa-9db0-77bce6d3cf10",
                "breed_guid_horriot" => "383f5550-be5d-48d5-bbce-018e6a9c20a4",
                "breed_uuid_horriot" => "c0b21f49-0053-44ce-8960-6567e8beec82",
                "breed_name" => "Тирольский бергсшаф",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "7",
                "breed_guid_self" => "d9cfc441-c07d-4eff-91a7-536d4971f2f0",
                "breed_guid_horriot" => "2c4e4eda-9371-47a4-a51c-082e341fcb54",
                "breed_uuid_horriot" => "c2a487ad-926e-452e-98f5-e68ddb64ea6f",
                "breed_name" => "Пушкинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "b0f751a7-dc84-487a-afa6-3b2c3e24872b",
                "breed_guid_horriot" => "edd63c13-b075-454a-87d1-fc9c14a062bd",
                "breed_uuid_horriot" => "c4b257fe-7309-425c-b7a0-1dbd4fbcde91",
                "breed_name" => "Красная горбатовская",
                "breed_selex_code" => "14",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "8be436f4-3d80-4cf0-974b-4cecb4bc8623",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "122",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "78e6bced-2a52-4959-9ecc-be54ccd0f5fd",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "34",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "3d9e7eab-6862-4800-8c02-d83dae65aa50",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "33",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "a7bc53a1-4e73-42dc-8ea1-c317c9b04881",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "31",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "b3958e22-14c5-4937-9f4c-9ffc80b963de",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "35",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "a492c7c1-5e6c-4ece-b73d-60a87423279d",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "24",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "55433ac5-3925-4729-81ab-42eaa340721f",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "17",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "adf1dc8b-2745-4296-899f-2257ffa481cb",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "16",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "3e726e85-b125-4a99-8f78-75570169d371",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "37",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "40211f25-b226-4262-9403-2ae9d07e940c",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "41",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "8460919e-ffe8-4a13-a8f3-de43e3c3b312",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "44",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "8f1f00ad-6c85-4899-8ff4-93f1859986c9",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "9",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "5f7a8e97-d62a-4af5-9c24-1738a57ea1c4",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "45",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "5c4a09d8-b5ce-4ddb-965d-d928516319bb",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "46",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "1a4cd3d7-ee87-4eff-9f54-1052bb7dc464",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "8",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "5b5db9d4-a216-440c-8bfe-b4736f86b583",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "48",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "7ba33502-b094-4c22-b5f0-7df8070edcbf",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "51",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "f4f61cc3-81ca-4b81-8526-587a492ec01a",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "52",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "9115ca3b-fa38-4d23-bc2b-4314e4937721",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "53",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "88c29dae-03ee-4361-ba06-78c33bd7f222",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "54",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "c3a65bb3-84a0-4418-9e24-40dadfa8af17",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "55",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "d948d3c1-1b2d-42d4-ab5e-4155b3694bbf",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "56",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "8a87ad51-d718-47b4-9a87-b7814610c52f",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "57",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "8ddcc675-7553-4398-a62f-ba4be0fae75a",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "68",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "6a8badd0-8afb-4ddc-9836-4bc25ee0eec9",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "69",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "5fd215ca-d0e6-4613-8b9b-e5442997a06e",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "74",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "6bd14bcd-59d8-45fc-99de-1489f59a129e",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "93",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "03124eb8-c524-45bf-8cc9-02ca700d02dc",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "96",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "e62d465d-d4b7-4c7e-9381-30c2407bc5a6",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "97",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "1e1c3d0a-d1b9-4935-b2d3-88ef153f4a18",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "98",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "a34ba4d2-dedd-4e1b-8ded-74f6dae7813d",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "104",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "af35b308-54d0-4a77-a63c-eaeb525946b6",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "110",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "cace0783-3e82-4141-88a9-7783b4004fd6",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "114",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "06f4117d-e7a6-423c-8bfb-64867bbf33df",
                "breed_guid_horriot" => "828bc6ca-209f-4471-9a9c-71e8aeba074a",
                "breed_uuid_horriot" => "c679f866-54ca-4417-a069-ae9e2c2448f2",
                "breed_name" => "Метис",
                "breed_selex_code" => "121",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "84720ab0-e4ed-4339-8511-b956dffe0494",
                "breed_guid_horriot" => "4acaca9d-f640-441a-9d4d-f3ec37bcc456",
                "breed_uuid_horriot" => "c7994d8c-2a6e-4289-be46-f5134ea54412",
                "breed_name" => "Вятская",
                "breed_selex_code" => "107",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "c2439160-80d4-4e1c-9f42-a3db7021054b",
                "breed_guid_horriot" => "92d3e0dc-9873-49c4-bd4c-9a99decbd65f",
                "breed_uuid_horriot" => "c7fc7653-6c5f-420d-8428-5c15dfbccd39",
                "breed_name" => "Горноалтайская пуховая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "74eef4dd-f7a8-4d72-9818-99513301d88b",
                "breed_guid_horriot" => "50d9db09-84ab-4c56-a53b-5e764adae3e1",
                "breed_uuid_horriot" => "ce5a89be-d254-4ae5-9393-0b3e147104ee",
                "breed_name" => "Серая украинская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "36",
                "breed_guid_self" => "c4194c3b-ccbb-43e1-8130-434cc40a5c92",
                "breed_guid_horriot" => "a96bfdc9-d8d9-42d6-a38b-a4e25d2339e6",
                "breed_uuid_horriot" => "d2b66ce5-f358-4931-bddb-ecddd74c70fd",
                "breed_name" => "Среднерусская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "4",
                "breed_guid_self" => "f13e203b-a674-4edb-95a4-1491e3796042",
                "breed_guid_horriot" => "24a86c4c-f8fb-453b-bd88-dd4b12231e9f",
                "breed_uuid_horriot" => "d7d9a977-7de1-4e4f-8730-7a624f8086fc",
                "breed_name" => "Башкирская цветная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "f06242c1-48c1-40bb-9500-c9100b9da5d2",
                "breed_guid_horriot" => "79712107-8016-4e60-ac67-1e9a512ffaa2",
                "breed_uuid_horriot" => "d908362b-efd7-4a53-8ca0-8fe76fc53422",
                "breed_name" => "Айта",
                "breed_selex_code" => "127",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "47799385-4315-4fe8-89f9-13b50c1bc487",
                "breed_guid_horriot" => "e8af1679-9a32-45d4-abb8-0edfd829e925",
                "breed_uuid_horriot" => "da815f45-e8c1-4975-890e-d84f9db55cb7",
                "breed_name" => "Кулундийская",
                "breed_selex_code" => "62",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "554e0abd-31fa-4562-9859-c9658a714ed5",
                "breed_guid_horriot" => "0c7bb201-e763-4ead-9caf-21f20a441aea",
                "breed_uuid_horriot" => "dd6a3d78-5de3-4850-a5e4-f0969b550653",
                "breed_name" => "Итальянская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "25",
                "breed_guid_self" => "f351a3e4-fc7d-4ceb-aaed-b38f7c9f9a18",
                "breed_guid_horriot" => "01be976c-dc5a-4669-8168-a6ca5e22d991",
                "breed_uuid_horriot" => "dfc5032e-76c8-4ea4-9a3b-166c206aca47",
                "breed_name" => "Чукотская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "8c709e13-f1f2-4d74-b5ed-8e13b879e337",
                "breed_guid_horriot" => "d657a081-145b-47e6-b312-dbd161c9d42d",
                "breed_uuid_horriot" => "e1f92c23-86b5-4cb8-b31c-eb45f873f832",
                "breed_name" => "Восточно-фризская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "11",
                "breed_guid_self" => "827c482b-a354-48dc-be16-8c4815cef2c7",
                "breed_guid_horriot" => "672bffda-90c4-4e48-b9cf-819a49253260",
                "breed_uuid_horriot" => "e502b77d-0bae-44b5-ab23-f91a1ddaf817",
                "breed_name" => "Соболинская темно-коричневая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "9383011d-fcd4-410a-97f4-c35765a3d9dd",
                "breed_guid_horriot" => "1f993591-4f01-4244-9502-daefed698625",
                "breed_uuid_horriot" => "ea8896b5-a8a5-4019-b2df-d4393eba425c",
                "breed_name" => "Заря",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "33",
                "breed_guid_self" => "72a4ab6d-a0b6-4aa0-9237-b6190fd42c43",
                "breed_guid_horriot" => "a21d3a6e-e3a3-4573-b178-8d9c820c53f4",
                "breed_uuid_horriot" => "eeb490b7-88c4-4764-ae46-8d56313050a7",
                "breed_name" => "Парская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "f3333815-074a-44ff-a9b3-9b69c0d45639",
                "breed_guid_horriot" => "083d2897-20b6-401e-88d8-e0bbed3fbe89",
                "breed_uuid_horriot" => "f4d48efd-374d-451b-8210-cfce0e217f6f",
                "breed_name" => "Брейтовская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "23",
                "breed_guid_self" => "ea696377-208e-4354-afa8-7389adcc35db",
                "breed_guid_horriot" => "ffccb05b-2aba-405f-8c90-632d65436b3f",
                "breed_uuid_horriot" => "f651228c-14d4-4d4a-bcc7-2a1a7996c369",
                "breed_name" => "Уральская серая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "6",
                "breed_guid_self" => "ae7c78f6-9bdb-4f7f-80fd-825a8b8a026d",
                "breed_guid_horriot" => "0f872c0a-c854-4ed2-9100-fdc94e75a360",
                "breed_uuid_horriot" => "f7311c40-6630-4f4e-aaea-6a9885837a14",
                "breed_name" => "Северокавказская бронзовая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "63abcae6-f74f-4242-87e4-a824ead81343",
                "breed_guid_horriot" => "8697d164-603b-4fe0-932a-3c8be1453a51",
                "breed_uuid_horriot" => "f7da52c7-0f1b-4eff-b8ba-1119191c7854",
                "breed_name" => "Дагестанская пуховая",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "5bc1b487-be12-48f7-9486-e0ad4f7e28c3",
                "breed_guid_horriot" => "5e34be1c-d46c-45c2-aa64-b4930db83a85",
                "breed_uuid_horriot" => "fd9ad960-ddad-4daa-b32e-b8a97acebd4f",
                "breed_name" => "Герефордская",
                "breed_selex_code" => "123",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "ff73358d-0195-42f6-81ac-dfbc16d5309d",
                "breed_guid_horriot" => "6df48eca-10e0-4759-a640-f21f7487d9c9",
                "breed_uuid_horriot" => "fe1c4fed-2cbb-407d-ad9a-e18dffa829ff",
                "breed_name" => "Алтайская мясная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "4ef71e09-4ad7-4151-9daf-c14dc45a7517",
                "breed_guid_horriot" => "d5408115-2e82-4d10-a040-e9dc0992cc2d",
                "breed_uuid_horriot" => "bd75b859-a1f9-4501-8426-eb2a85501bcb",
                "breed_name" => "Калмыцкая курдючная",
                "breed_selex_code" => "99",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "26",
                "breed_guid_self" => "2290aff7-7bbd-447a-8062-035ea7991329",
                "breed_guid_horriot" => "b2eb93ab-4cd0-4491-ab13-e5bc0506f13f",
                "breed_uuid_horriot" => "c11f4fe7-3e65-4324-92ed-1b5ac18c494b",
                "breed_name" => "Горный скот Дагестана",
                "breed_selex_code" => "59",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "9",
                "breed_guid_self" => "6068a736-ef21-4e52-87f4-c2cb72bb52f9",
                "breed_guid_horriot" => "38eed559-fa82-4480-8e2d-6e12f21af79a",
                "breed_uuid_horriot" => "fff72d22-40de-4820-b996-35ff5307a336",
                "breed_name" => "Северокавказская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "392815db-3876-44ef-a97c-2287b8e52b32",
                "breed_guid_horriot" => "3987abb2-e2d0-478a-ba27-31d41419e91d",
                "breed_uuid_horriot" => "0717fed1-45fe-4244-942c-dc0edc2cf71d",
                "breed_name" => "Калмыцкая",
                "breed_selex_code" => "61",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "64378143-4e6a-4587-a1da-fee6b3e395d5",
                "breed_guid_horriot" => "bc1a4464-9ba7-43aa-a7a1-5b70edd67a3e",
                "breed_uuid_horriot" => "26f513fe-8421-49de-81e8-d66a3142970b",
                "breed_name" => "Сатин",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "dffd9e6b-d53b-41cc-b856-6f93403a32ad",
                "breed_guid_horriot" => "47b47b07-b4f5-406c-9c98-50a45cfcaf9e",
                "breed_uuid_horriot" => "2dfafc44-6230-47cc-a5d7-3df222380e74",
                "breed_name" => "Арбор",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "37d40a1b-0959-4107-bab6-2ec958253fc4",
                "breed_guid_horriot" => "3ebbba3d-4cf4-4258-941a-ef8139349a1d",
                "breed_uuid_horriot" => "3151e888-474e-4ea7-acb7-b0f5bdaeaa63",
                "breed_name" => "Карликовый",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "36",
                "breed_guid_self" => "4ff78a8d-4aa7-4d25-9c55-1419ec9f9271",
                "breed_guid_horriot" => "42425b27-d217-4a5c-8575-60b576f3bef9",
                "breed_uuid_horriot" => "73888d76-015e-45d9-9315-4fab98be3961",
                "breed_name" => "Украинская степная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "dfdbfa5a-1011-44a5-8940-6ab5bb250b83",
                "breed_guid_horriot" => "8ca57181-ea70-4f26-a794-838ebf6aa8eb",
                "breed_uuid_horriot" => "749456dd-00f2-48f2-a878-7254ae52b59d",
                "breed_name" => "Кулундинская",
                "breed_selex_code" => "60",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "23c3eb82-baf1-4a01-891b-3af0381d106d",
                "breed_guid_horriot" => "aa9025c5-8d42-44a5-9f5b-3b397d5995c2",
                "breed_uuid_horriot" => "a7c4bd3b-d0ec-424d-ba72-91250a592df0",
                "breed_name" => "Шиншилла",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "5c6eb895-844a-434b-ba58-60fcebc7dca4",
                "breed_guid_horriot" => "4aedd19b-92f0-4fe6-8391-b4d2d4b175bd",
                "breed_uuid_horriot" => "c4e65276-07c7-47f2-8bb1-023b54cca339",
                "breed_name" => "Рекс",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "31",
                "breed_guid_self" => "015aaafa-a4b8-4a2a-be6c-3d554b868858",
                "breed_guid_horriot" => "afff3969-c5ac-4a84-9dbb-9f194135fa4d",
                "breed_uuid_horriot" => "84f9f723-cbef-4a1c-8ed1-6a91a54f7f0e",
                "breed_name" => "Французский баран",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "952d8a5b-1ed1-4fea-8007-2c455cef9ce0",
                "breed_guid_horriot" => "eda4b9ba-ca75-4988-8cc0-af22555f06db",
                "breed_uuid_horriot" => "def177b2-47ee-4f91-8f84-eb5b7d0c7d71",
                "breed_name" => "Вятская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "49c27f54-3de3-440b-aebb-b2d42baece70",
                "breed_guid_horriot" => "19786b21-501c-4ed6-a16b-5f2a9e89f67e",
                "breed_uuid_horriot" => "1b586055-783a-4f1a-b6ae-8986508f9da6",
                "breed_name" => "Западно-сибирская мясная",
                "breed_selex_code" => "81",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "17",
                "breed_guid_self" => "b9815729-3241-4b42-b2a0-dc0c9547c772",
                "breed_guid_horriot" => "657d0229-ad2c-448a-8b6d-c03e21c6585e",
                "breed_uuid_horriot" => "e8e7408d-55b2-443b-a6dd-9e21a20803c0",
                "breed_name" => "Горьковская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "527e0469-6f31-4f64-91f9-d6a2300ac204",
                "breed_guid_horriot" => "2b4c73a7-060d-4b45-88c1-d029a4177101",
                "breed_uuid_horriot" => "29062793-295c-4752-a569-7cf549ce9748",
                "breed_name" => "Хайсекс Браун",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "cbc1e075-363a-48e7-917e-4447179e1345",
                "breed_guid_horriot" => "e3a1ce38-f22e-4fe6-988a-ea1bf677da18",
                "breed_uuid_horriot" => "79c34737-b145-4efd-8ce6-6a31a4f628a8",
                "breed_name" => "Русская тяжеловозная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "b90d94c1-8aca-4e51-afa5-af70d111441c",
                "breed_guid_horriot" => "1e4e9e6e-9ac3-49c5-b273-b6eb16f99672",
                "breed_uuid_horriot" => "990fa23f-1ebb-40ac-9376-2a1558a06072",
                "breed_name" => "Орловская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "20b2a2dd-983c-4f19-83b4-87eb80d0a483",
                "breed_guid_horriot" => "a9a2b7e6-dd05-4bfd-9e04-9e16be6ffa40",
                "breed_uuid_horriot" => "b88e3721-4643-4e10-b029-140830e571b5",
                "breed_name" => "Полукровная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "e0ea424c-10e0-40f3-827f-3037c70a0485",
                "breed_guid_horriot" => "2009d6b7-12a6-4483-b409-fc1e263a900c",
                "breed_uuid_horriot" => "cb84d8e2-83c5-4316-9148-94b8c3f5aa5a",
                "breed_name" => "Каспийская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "9f1aa4c0-badf-4f3c-9418-ff43927ad0b9",
                "breed_guid_horriot" => "0b786327-4c08-4cf2-8b41-f0bbba658404",
                "breed_uuid_horriot" => "d0a39019-2d9a-49d0-8eeb-dec2a2c912d1",
                "breed_name" => "Ломан Браун",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "35",
                "breed_guid_self" => "ba919f58-d3ce-44da-a58f-fe4e46a7b2ce",
                "breed_guid_horriot" => "5b92fbb0-b7e2-4c7d-a8ba-d5e298fcf128",
                "breed_uuid_horriot" => "302fa04a-3c0e-49dc-8b1d-2d302b37bc6e",
                "breed_name" => "Горьковская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "b7087a28-3bce-43f8-af0a-859d130690df",
                "breed_guid_horriot" => "c0709c1b-40be-4e78-bd8a-45256a519eb3",
                "breed_uuid_horriot" => "4e176fd1-2fae-42a3-a2ec-92c23b5307b2",
                "breed_name" => "Голландская полукровная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "3513c896-a5dd-4ecc-b37c-1392025f3442",
                "breed_guid_horriot" => "95bde860-edf8-4b21-8f6d-e090046962a5",
                "breed_uuid_horriot" => "5d244b79-4b7c-4e8f-a220-6e2e2428869e",
                "breed_name" => "Клейдесдаль",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "8d63dc89-3b8a-4c5d-a85f-7ffab7ac2e80",
                "breed_guid_horriot" => "9199ae1c-50e8-4942-b39f-db64e784fae6",
                "breed_uuid_horriot" => "6ecd8811-6576-46d7-92c2-4f9a6b7f9339",
                "breed_name" => "Баварская теплокровная",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "30",
                "breed_guid_self" => "7a0f042d-d142-4a24-83b5-f582bb9b5a4f",
                "breed_guid_horriot" => "7c119ce2-8de9-42d5-8b64-dee783e1fc03",
                "breed_uuid_horriot" => "f566ad57-20cd-410a-8231-d2ae80756be8",
                "breed_name" => "Фризская",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ],
            [
                "specie_id" => "28",
                "breed_guid_self" => "61e2e0c1-3486-4ce4-9c84-40ac394edaa0",
                "breed_guid_horriot" => "a138ecc6-c9b2-48ca-93a7-33087dbda39d",
                "breed_uuid_horriot" => "0ba1ae17-57d8-4612-9370-30e66b2bd423",
                "breed_name" => "Кобб 500",
                "breed_status" => "enabled",
                "breed_status_delete" => "active"
            ]
        ]);

    }
}
