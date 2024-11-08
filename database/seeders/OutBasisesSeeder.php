<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OutBasisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.out_basises')->truncate();

        DB::table('directories.out_basises')->insert([
            [
                "out_basis_guid_self" => "9e5e814d-873b-4992-b0ee-b553d37ddb41",
                "out_basis_name" => "Падёж/убой животного, у которого выявлена заразная болезнь",
                "out_basis_value_horriot" => "IDENTIFIED_CONTAGIOUS_DISEASE",
                "out_basis_selex_code" => "4",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                 "out_basis_guid_self" => "2b21364f-ba8c-48b3-a55f-15d581752da3",
                "out_basis_name" => "Падёж/убой животного, у которого выявлена заразная болезнь",
                "out_basis_value_horriot" => "IDENTIFIED_CONTAGIOUS_DISEASE",
                "out_basis_selex_code" => "5",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                 "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                 "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "fc21a9d0-9f84-4d27-81f9-3c528d6cfbbe",
                "out_basis_name" => "Падёж/убой животного, у которого выявлена заразная болезнь",
                "out_basis_value_horriot" => "IDENTIFIED_CONTAGIOUS_DISEASE",
                "out_basis_selex_code" => "6",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "60ddd121-0f66-45ac-bebd-201ecd1e1f77",
                "out_basis_name" => "Падёж/убой животного, у которого выявлена незаразная болезнь",
                "out_basis_value_horriot" => "IDENTIFIED_NON_CONTAGIOUS_DISEASE",
                "out_basis_selex_code" => "1",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "6d7abe03-727b-4d17-a381-7ff93e7ce9a3",
                "out_basis_name" => "Падёж/убой животного, у которого выявлена незаразная болезнь",
                "out_basis_value_horriot" => "IDENTIFIED_NON_CONTAGIOUS_DISEASE",
                "out_basis_selex_code" => "2",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "87f2aa03-1a78-44ae-bad7-353397a754c2",
                "out_basis_name" => "Падёж/убой животного, у которого выявлена незаразная болезнь",
                "out_basis_value_horriot" => "IDENTIFIED_NON_CONTAGIOUS_DISEASE",
                "out_basis_selex_code" => "4",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "2423c930-0d74-405d-a18a-c43829f78d7c",
                "out_basis_name" => "Падёж/убой животного, у которого выявлена незаразная болезнь",
                "out_basis_value_horriot" => "IDENTIFIED_NON_CONTAGIOUS_DISEASE",
                "out_basis_selex_code" => "5",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "b65dca87-8e57-4fc0-8180-504bf5b0d021",
                "out_basis_name" => "Падёж/убой животного, у которого выявлена незаразная болезнь",
                "out_basis_value_horriot" => "IDENTIFIED_NON_CONTAGIOUS_DISEASE",
                "out_basis_selex_code" => "6",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "0b3193a3-b075-4f41-86d9-0cb119c4332c",
                "out_basis_name" => "Убой здорового животного в рамках ликвидации болезни",
                "out_basis_value_horriot" => "DISEASE_ERADICATION",
                "out_basis_selex_code" => "4",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "a2e14532-dbad-482c-9052-8a9e00b9d986",
                "out_basis_name" => "Убой здорового животного в рамках ликвидации болезни",
                "out_basis_value_horriot" => "DISEASE_ERADICATION",
                "out_basis_selex_code" => "5",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "cd20af15-9d29-42ae-90d7-fc7da5539ec7",
                "out_basis_name" => "Убой здорового животного в рамках ликвидации болезни",
                "out_basis_value_horriot" => "DISEASE_ERADICATION",
                "out_basis_selex_code" => "6",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "5fb868cb-4e25-4d39-bbd4-7e76bc54ab89",
                "out_basis_name" => "Убой животного в научно-исследовательских целях",
                "out_basis_value_horriot" => "RESEARCH_OBJECTIVES",
                "out_basis_selex_code" => null,
                "out_basis_status" => "disabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "55c3371c-675b-4ddb-b380-d242513fd453",
                "out_basis_name" => "Убой животного за ненадобностью в будущем (лабораторные животные, непродуктивные и т.п.)",
                "out_basis_value_horriot" => "USELESSNESS",
                "out_basis_selex_code" => "1",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "84c11f85-de6d-4f46-bc70-bf9417253dc6",
                "out_basis_name" => "Убой животного за ненадобностью в будущем (лабораторные животные, непродуктивные и т.п.)",
                "out_basis_value_horriot" => "USELESSNESS",
                "out_basis_selex_code" => "2",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "e293ebd5-71c1-40b3-8e98-eb1a533ac23f",
                "out_basis_name" => "Убой животного за ненадобностью в будущем (лабораторные животные, непродуктивные и т.п.)",
                "out_basis_value_horriot" => "USELESSNESS",
                "out_basis_selex_code" => "4",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "823571d0-6999-475f-8415-ebc251c7249d",
                "out_basis_name" => "Убой животного за ненадобностью в будущем (лабораторные животные, непродуктивные и т.п.)",
                "out_basis_value_horriot" => "USELESSNESS",
                "out_basis_selex_code" => "6",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "out_basis_guid_self" => "16b2dd2a-3237-4d52-9f8a-1c3db660ff4a",
                "out_basis_name" => "Падёж/убой животного, у которого не выявлено заразных или незаразных болезней",
                "out_basis_value_horriot" => "WITHOUT_DISEASES",
                "out_basis_selex_code" => "5",
                "out_basis_status" => "enabled",
                "out_basis_status_delete" => "active",
                "created_at"             => Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"             => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
        DB::statement("SELECT setval('system.out_basises_out_basis_id_seq', (SELECT MAX(out_basis_id) from directories.out_basises))");
    }
}
