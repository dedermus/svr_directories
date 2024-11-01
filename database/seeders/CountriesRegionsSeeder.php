<?php

namespace Svr\Directories\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesRegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directories.countries_regions')->truncate();

        DB::table('directories.countries_regions')->insert([
            [
                "region_id" => 87,
                "region_obl" => 89,
                "country_id" => 1,
                "region_name" => "Ямало-Ненецк.АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.079541"
            ],
            [
                "region_id" => 20,
                "region_obl" => 76,
                "country_id" => 1,
                "region_name" => "Ярославская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.081329"
            ],
            [
                "region_id" => 122,
                "region_obl" => 204,
                "country_id" => 43,
                "region_name" => "Донецкая ",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.083093"
            ],
            [
                "region_id" => 93,
                "region_obl" => 301,
                "country_id" => 2,
                "region_name" => "Брестская область",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.084747"
            ],
            [
                "region_id" => 304,
                "region_obl" => 302,
                "country_id" => 2,
                "region_name" => "Витебская область",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.086467"
            ],
            [
                "region_id" => 302,
                "region_obl" => 300,
                "country_id" => 2,
                "region_name" => "г.Минск",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.088129"
            ],
            [
                "region_id" => 89,
                "region_obl" => 303,
                "country_id" => 2,
                "region_name" => "Гомельская область",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.089881"
            ],
            [
                "region_id" => 94,
                "region_obl" => 304,
                "country_id" => 2,
                "region_name" => "Гродненская область",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.091602"
            ],
            [
                "region_id" => 303,
                "region_obl" => 305,
                "country_id" => 2,
                "region_name" => "Минская область",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.093412"
            ],
            [
                "region_id" => 301,
                "region_obl" => 306,
                "country_id" => 2,
                "region_name" => "Могилевская область",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.095328"
            ],
            [
                "region_id" => 145,
                "region_obl" => 13,
                "country_id" => 3,
                "region_name" => "г.Ташкент",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.097173"
            ],
            [
                "region_id" => 149,
                "region_obl" => 403,
                "country_id" => 3,
                "region_name" => "Джизакская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:45.940595",
                "updated_at" => "2024-09-19 00:50:02.099870"
            ],
            [
                "region_id" => 121,
                "region_obl" => 14,
                "country_id" => 3,
                "region_name" => "Респ.Каракалпакстан",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.101930"
            ],
            [
                "region_id" => 115,
                "region_obl" => 503,
                "country_id" => 44,
                "region_name" => "Акмолинская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.104171"
            ],
            [
                "region_id" => 120,
                "region_obl" => 504,
                "country_id" => 44,
                "region_name" => "Актюбинская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.106870"
            ],
            [
                "region_id" => 117,
                "region_obl" => 505,
                "country_id" => 44,
                "region_name" => "Алматинская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.108754"
            ],
            [
                "region_id" => 114,
                "region_obl" => 508,
                "country_id" => 44,
                "region_name" => "Восточно-Казахстанск",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.110712"
            ],
            [
                "region_id" => 146,
                "region_obl" => 509,
                "country_id" => 44,
                "region_name" => "Жамбылская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.113078"
            ],
            [
                "region_id" => 147,
                "region_obl" => 510,
                "country_id" => 44,
                "region_name" => "Карагандинская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.115492"
            ],
            [
                "region_id" => 119,
                "region_obl" => 511,
                "country_id" => 44,
                "region_name" => "Костанайская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.117534"
            ],
            [
                "region_id" => 150,
                "region_obl" => 515,
                "country_id" => 44,
                "region_name" => "Павлодарская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:45.974175",
                "updated_at" => "2024-09-19 00:50:02.119703"
            ],
            [
                "region_id" => 148,
                "region_obl" => 512,
                "country_id" => 44,
                "region_name" => "Северо-Казахстанская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.121570"
            ],
            [
                "region_id" => 98,
                "region_obl" => 702,
                "country_id" => 45,
                "region_name" => "Арагацотнская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.123575"
            ],
            [
                "region_id" => 100,
                "region_obl" => 703,
                "country_id" => 45,
                "region_name" => "Араратская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.125429"
            ],
            [
                "region_id" => 101,
                "region_obl" => 704,
                "country_id" => 45,
                "region_name" => "Армавирская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.127214"
            ],
            [
                "region_id" => 102,
                "region_obl" => 705,
                "country_id" => 45,
                "region_name" => "Вайоцдзорская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.129355"
            ],
            [
                "region_id" => 97,
                "region_obl" => 701,
                "country_id" => 45,
                "region_name" => "г.Ереван",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.131194"
            ],
            [
                "region_id" => 103,
                "region_obl" => 706,
                "country_id" => 45,
                "region_name" => "Гехаркуникская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.133338"
            ],
            [
                "region_id" => 104,
                "region_obl" => 707,
                "country_id" => 45,
                "region_name" => "Котайская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.135128"
            ],
            [
                "region_id" => 105,
                "region_obl" => 708,
                "country_id" => 45,
                "region_name" => "Лорийская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.137042"
            ],
            [
                "region_id" => 106,
                "region_obl" => 709,
                "country_id" => 45,
                "region_name" => "Сюникская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.139207"
            ],
            [
                "region_id" => 107,
                "region_obl" => 710,
                "country_id" => 45,
                "region_name" => "Тавушская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.141150"
            ],
            [
                "region_id" => 108,
                "region_obl" => 711,
                "country_id" => 45,
                "region_name" => "Ширакская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.143361"
            ],
            [
                "region_id" => 90,
                "region_obl" => 901,
                "country_id" => 46,
                "region_name" => "Азербайджан",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.145268"
            ],
            [
                "region_id" => 91,
                "region_obl" => 902,
                "country_id" => 46,
                "region_name" => "АО Нахичевань",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.147481"
            ],
            [
                "region_id" => 92,
                "region_obl" => 111,
                "country_id" => 32,
                "region_name" => "Нагорный Карабах",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.149805"
            ],
            [
                "region_id" => 109,
                "region_obl" => 132,
                "country_id" => 34,
                "region_name" => "Самегрело-В.Сванетия",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.151936"
            ],
            [
                "region_id" => 110,
                "region_obl" => 161,
                "country_id" => 36,
                "region_name" => "г.Душанбе",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.154220"
            ],
            [
                "region_id" => 111,
                "region_obl" => 162,
                "country_id" => 36,
                "region_name" => "Горно-БадахшанскаяАО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.156336"
            ],
            [
                "region_id" => 112,
                "region_obl" => 163,
                "country_id" => 36,
                "region_name" => "Согдийская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.158542"
            ],
            [
                "region_id" => 113,
                "region_obl" => 164,
                "country_id" => 36,
                "region_name" => "Хатлонская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.160962"
            ],
            [
                "region_id" => 116,
                "region_obl" => 172,
                "country_id" => 37,
                "region_name" => "Ахалский велаят",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.163231"
            ],
            [
                "region_id" => 138,
                "region_obl" => 965,
                "country_id" => 40,
                "region_name" => "Архангай",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.165417"
            ],
            [
                "region_id" => 142,
                "region_obl" => 983,
                "country_id" => 40,
                "region_name" => "Баян-улгий",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.167628"
            ],
            [
                "region_id" => 137,
                "region_obl" => 964,
                "country_id" => 40,
                "region_name" => "Баянхонгор",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.169820"
            ],
            [
                "region_id" => 136,
                "region_obl" => 963,
                "country_id" => 40,
                "region_name" => "Булган",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.171918"
            ],
            [
                "region_id" => 141,
                "region_obl" => 982,
                "country_id" => 40,
                "region_name" => "Говь-Алтай",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.173985"
            ],
            [
                "region_id" => 128,
                "region_obl" => 942,
                "country_id" => 40,
                "region_name" => "Говьсумбэр",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.176361"
            ],
            [
                "region_id" => 131,
                "region_obl" => 945,
                "country_id" => 40,
                "region_name" => "Дархан-Уул",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.178389"
            ],
            [
                "region_id" => 130,
                "region_obl" => 944,
                "country_id" => 40,
                "region_name" => "Дорноговь",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.180417"
            ],
            [
                "region_id" => 124,
                "region_obl" => 921,
                "country_id" => 40,
                "region_name" => "Дорнод",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.182534"
            ],
            [
                "region_id" => 140,
                "region_obl" => 981,
                "country_id" => 40,
                "region_name" => "Завхан",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.186572"
            ],
            [
                "region_id" => 134,
                "region_obl" => 961,
                "country_id" => 40,
                "region_name" => "Орхон",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.188778"
            ],
            [
                "region_id" => 125,
                "region_obl" => 922,
                "country_id" => 40,
                "region_name" => "Сухбаатар",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.191027"
            ],
            [
                "region_id" => 129,
                "region_obl" => 943,
                "country_id" => 40,
                "region_name" => "Сэлэнгэ",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.193489"
            ],
            [
                "region_id" => 127,
                "region_obl" => 941,
                "country_id" => 40,
                "region_name" => "Тув",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.195931"
            ],
            [
                "region_id" => 144,
                "region_obl" => 985,
                "country_id" => 40,
                "region_name" => "Увс",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.198102"
            ],
            [
                "region_id" => 123,
                "region_obl" => 911,
                "country_id" => 40,
                "region_name" => "Улаанбаатар",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.202797"
            ],
            [
                "region_id" => 132,
                "region_obl" => 946,
                "country_id" => 40,
                "region_name" => "Умнуговь",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.205365"
            ],
            [
                "region_id" => 143,
                "region_obl" => 984,
                "country_id" => 40,
                "region_name" => "Ховд",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.207676"
            ],
            [
                "region_id" => 139,
                "region_obl" => 967,
                "country_id" => 40,
                "region_name" => "Хувсгул",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.209919"
            ],
            [
                "region_id" => 126,
                "region_obl" => 923,
                "country_id" => 40,
                "region_name" => "Хэнтий",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.211968"
            ],
            [
                "region_id" => 151,
                "region_obl" => 1,
                "country_id" => 41,
                "region_name" => "Баткенская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.146126",
                "updated_at" => "2024-09-19 00:50:02.214057"
            ],
            [
                "region_id" => 158,
                "region_obl" => 8,
                "country_id" => 41,
                "region_name" => "г.Бишкек",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.150263",
                "updated_at" => "2024-09-19 00:50:02.216256"
            ],
            [
                "region_id" => 159,
                "region_obl" => 9,
                "country_id" => 41,
                "region_name" => "г.Ош",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.154330",
                "updated_at" => "2024-09-19 00:50:02.218410"
            ],
            [
                "region_id" => 152,
                "region_obl" => 2,
                "country_id" => 41,
                "region_name" => "Джалал-Абадская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.158287",
                "updated_at" => "2024-09-19 00:50:02.220575"
            ],
            [
                "region_id" => 153,
                "region_obl" => 3,
                "country_id" => 41,
                "region_name" => "Иссык-Кульская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.162194",
                "updated_at" => "2024-09-19 00:50:02.222703"
            ],
            [
                "region_id" => 154,
                "region_obl" => 4,
                "country_id" => 41,
                "region_name" => "Нарынская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.166227",
                "updated_at" => "2024-09-19 00:50:02.224897"
            ],
            [
                "region_id" => 155,
                "region_obl" => 5,
                "country_id" => 41,
                "region_name" => "Ошская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.170238",
                "updated_at" => "2024-09-19 00:50:02.227315"
            ],
            [
                "region_id" => 156,
                "region_obl" => 6,
                "country_id" => 41,
                "region_name" => "Таласская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.174328",
                "updated_at" => "2024-09-19 00:50:02.229606"
            ],
            [
                "region_id" => 157,
                "region_obl" => 7,
                "country_id" => 41,
                "region_name" => "Чуйская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.178320",
                "updated_at" => "2024-09-19 00:50:02.231905"
            ],
            [
                "region_id" => 166,
                "region_obl" => 550,
                "country_id" => 50,
                "region_name" => "Республика Абхазия",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.186350",
                "updated_at" => "2024-09-19 00:50:02.236451"
            ],
            [
                "region_id" => 79,
                "region_obl" => 80,
                "country_id" => 1,
                "region_name" => "Агинск.Бурят.АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.877782"
            ],
            [
                "region_id" => 72,
                "region_obl" => 1,
                "country_id" => 1,
                "region_name" => "Адыгея республ.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.880727"
            ],
            [
                "region_id" => 160,
                "region_obl" => 180,
                "country_id" => 1,
                "region_name" => "ДНР",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:45.602353",
                "updated_at" => "2024-09-19 00:50:01.906348"
            ],
            [
                "region_id" => 44,
                "region_obl" => 15,
                "country_id" => 1,
                "region_name" => "Респ.Сев.Осетия ",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.005614"
            ],
            [
                "region_id" => 81,
                "region_obl" => 91,
                "country_id" => 1,
                "region_name" => "Республика Крым",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.007687"
            ],
            [
                "region_id" => 38,
                "region_obl" => 16,
                "country_id" => 1,
                "region_name" => "Республика Татарстан",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.009507"
            ],
            [
                "region_id" => 41,
                "region_obl" => 61,
                "country_id" => 1,
                "region_name" => "Ростовская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.011429"
            ],
            [
                "region_id" => 17,
                "region_obl" => 62,
                "country_id" => 1,
                "region_name" => "Рязанская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.013263"
            ],
            [
                "region_id" => 33,
                "region_obl" => 63,
                "country_id" => 1,
                "region_name" => "Самарская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.015131"
            ],
            [
                "region_id" => 118,
                "region_obl" => 78,
                "country_id" => 1,
                "region_name" => "Санкт-Петербург",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.016941"
            ],
            [
                "region_id" => 35,
                "region_obl" => 64,
                "country_id" => 1,
                "region_name" => "Саратовская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.018782"
            ],
            [
                "region_id" => 69,
                "region_obl" => 65,
                "country_id" => 1,
                "region_name" => "Сахалинская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.020628"
            ],
            [
                "region_id" => 70,
                "region_obl" => 14,
                "country_id" => 1,
                "region_name" => "САХА республика",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.022573"
            ],
            [
                "region_id" => 49,
                "region_obl" => 66,
                "country_id" => 1,
                "region_name" => "Свердловская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.024304"
            ],
            [
                "region_id" => 95,
                "region_obl" => 92,
                "country_id" => 1,
                "region_name" => "Севастополь",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.026030"
            ],
            [
                "region_id" => 18,
                "region_obl" => 67,
                "country_id" => 1,
                "region_name" => "Смоленская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.028019"
            ],
            [
                "region_id" => 40,
                "region_obl" => 26,
                "country_id" => 1,
                "region_name" => "Ставропольский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.030006"
            ],
            [
                "region_id" => 83,
                "region_obl" => 84,
                "country_id" => 1,
                "region_name" => "Таймырский АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.031778"
            ],
            [
                "region_id" => 30,
                "region_obl" => 68,
                "country_id" => 1,
                "region_name" => "Тамбовская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.033489"
            ],
            [
                "region_id" => 12,
                "region_obl" => 69,
                "country_id" => 1,
                "region_name" => "Тверская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.035183"
            ],
            [
                "region_id" => 57,
                "region_obl" => 70,
                "country_id" => 1,
                "region_name" => "Томская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.037099"
            ],
            [
                "region_id" => 19,
                "region_obl" => 71,
                "country_id" => 1,
                "region_name" => "Тульская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.042445"
            ],
            [
                "region_id" => 63,
                "region_obl" => 17,
                "country_id" => 1,
                "region_name" => "Тыва республика",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.044138"
            ],
            [
                "region_id" => 58,
                "region_obl" => 72,
                "country_id" => 1,
                "region_name" => "Тюменская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.045832"
            ],
            [
                "region_id" => 52,
                "region_obl" => 18,
                "country_id" => 1,
                "region_name" => "Удмуртская респ",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.048164"
            ],
            [
                "region_id" => 36,
                "region_obl" => 73,
                "country_id" => 1,
                "region_name" => "Ульяновская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.050339"
            ],
            [
                "region_id" => 78,
                "region_obl" => 85,
                "country_id" => 1,
                "region_name" => "У-Орд.Бурят.АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.052188"
            ],
            [
                "region_id" => 165,
                "region_obl" => 99,
                "country_id" => 1,
                "region_name" => "Учебная обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:45.862842",
                "updated_at" => "2024-09-19 00:50:02.054444"
            ],
            [
                "region_id" => 65,
                "region_obl" => 27,
                "country_id" => 1,
                "region_name" => "Хабаровский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.056904"
            ],
            [
                "region_id" => 75,
                "region_obl" => 19,
                "country_id" => 1,
                "region_name" => "Хакасия республика",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.058801"
            ],
            [
                "region_id" => 84,
                "region_obl" => 86,
                "country_id" => 1,
                "region_name" => "Ханты-Манс.АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.060983"
            ],
            [
                "region_id" => 162,
                "region_obl" => 184,
                "country_id" => 1,
                "region_name" => "Херсонская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:45.877943",
                "updated_at" => "2024-09-19 00:50:02.062821"
            ],
            [
                "region_id" => 50,
                "region_obl" => 74,
                "country_id" => 1,
                "region_name" => "Челябинская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.065642"
            ],
            [
                "region_id" => 45,
                "region_obl" => 20,
                "country_id" => 1,
                "region_name" => "Чеченская республика",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.067998"
            ],
            [
                "region_id" => 25,
                "region_obl" => 21,
                "country_id" => 1,
                "region_name" => "Чувашская респ.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.069870"
            ],
            [
                "region_id" => 85,
                "region_obl" => 87,
                "country_id" => 1,
                "region_name" => "Чукотский АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.076208"
            ],
            [
                "region_id" => 86,
                "region_obl" => 88,
                "country_id" => 1,
                "region_name" => "Эвенкийский АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.077860"
            ],
            [
                "region_id" => 133,
                "region_obl" => 948,
                "country_id" => 40,
                "region_name" => "Дундговь",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.184569"
            ],
            [
                "region_id" => 135,
                "region_obl" => 962,
                "country_id" => 40,
                "region_name" => "Увурхангай",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.200687"
            ],
            [
                "region_id" => 164,
                "region_obl" => 1,
                "country_id" => 49,
                "region_name" => "Южная Осетия",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:46.182350",
                "updated_at" => "2024-09-19 00:50:02.234305"
            ],
            [
                "region_id" => 74,
                "region_obl" => 4,
                "country_id" => 1,
                "region_name" => "Алтай республ.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.882637"
            ],
            [
                "region_id" => 53,
                "region_obl" => 22,
                "country_id" => 1,
                "region_name" => "Алтайский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.884555"
            ],
            [
                "region_id" => 66,
                "region_obl" => 28,
                "country_id" => 1,
                "region_name" => "Амурская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.886292"
            ],
            [
                "region_id" => 1,
                "region_obl" => 29,
                "country_id" => 1,
                "region_name" => "Архангельская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.888035"
            ],
            [
                "region_id" => 31,
                "region_obl" => 30,
                "country_id" => 1,
                "region_name" => "Астраханская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.890257"
            ],
            [
                "region_id" => 26,
                "region_obl" => 31,
                "country_id" => 1,
                "region_name" => "Белгородская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.892009"
            ],
            [
                "region_id" => 9,
                "region_obl" => 32,
                "country_id" => 1,
                "region_name" => "Брянская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.893767"
            ],
            [
                "region_id" => 62,
                "region_obl" => 3,
                "country_id" => 1,
                "region_name" => "Бурятия респуб.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.895523"
            ],
            [
                "region_id" => 10,
                "region_obl" => 33,
                "country_id" => 1,
                "region_name" => "Владимирская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.897343"
            ],
            [
                "region_id" => 32,
                "region_obl" => 34,
                "country_id" => 1,
                "region_name" => "Волгоградская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.899044"
            ],
            [
                "region_id" => 2,
                "region_obl" => 35,
                "country_id" => 1,
                "region_name" => "Вологодская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.900868"
            ],
            [
                "region_id" => 27,
                "region_obl" => 36,
                "country_id" => 1,
                "region_name" => "Воронежская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.902695"
            ],
            [
                "region_id" => 42,
                "region_obl" => 5,
                "country_id" => 1,
                "region_name" => "Дагестан респ.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.904595"
            ],
            [
                "region_id" => 76,
                "region_obl" => 79,
                "country_id" => 1,
                "region_name" => "Еврейская АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.908088"
            ],
            [
                "region_id" => 61,
                "region_obl" => 75,
                "country_id" => 1,
                "region_name" => "Забайкальский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.910187"
            ],
            [
                "region_id" => 163,
                "region_obl" => 185,
                "country_id" => 1,
                "region_name" => "Запорожская",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:45.614660",
                "updated_at" => "2024-09-19 00:50:01.912256"
            ],
            [
                "region_id" => 11,
                "region_obl" => 37,
                "country_id" => 1,
                "region_name" => "Ивановская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.914287"
            ],
            [
                "region_id" => 88,
                "region_obl" => 6,
                "country_id" => 1,
                "region_name" => "Ингушетия респ.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.915985"
            ],
            [
                "region_id" => 60,
                "region_obl" => 38,
                "country_id" => 1,
                "region_name" => "Иркутская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.917848"
            ],
            [
                "region_id" => 71,
                "region_obl" => 39,
                "country_id" => 1,
                "region_name" => "Калининградская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.919651"
            ],
            [
                "region_id" => 37,
                "region_obl" => 8,
                "country_id" => 1,
                "region_name" => "Калмыкия республика",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.922119"
            ],
            [
                "region_id" => 13,
                "region_obl" => 40,
                "country_id" => 1,
                "region_name" => "Калужская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.924144"
            ],
            [
                "region_id" => 67,
                "region_obl" => 41,
                "country_id" => 1,
                "region_name" => "Камчатский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.925874"
            ],
            [
                "region_id" => 4,
                "region_obl" => 10,
                "country_id" => 1,
                "region_name" => "Карелия респ.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.928086"
            ],
            [
                "region_id" => 43,
                "region_obl" => 7,
                "country_id" => 1,
                "region_name" => "КБР",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.930239"
            ],
            [
                "region_id" => 54,
                "region_obl" => 42,
                "country_id" => 1,
                "region_name" => "Кемеровская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.931896"
            ],
            [
                "region_id" => 22,
                "region_obl" => 43,
                "country_id" => 1,
                "region_name" => "Кировская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.933657"
            ],
            [
                "region_id" => 80,
                "region_obl" => 81,
                "country_id" => 1,
                "region_name" => "Коми-Пермяц.АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.935844"
            ],
            [
                "region_id" => 5,
                "region_obl" => 11,
                "country_id" => 1,
                "region_name" => "Коми республика",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.938538"
            ],
            [
                "region_id" => 14,
                "region_obl" => 44,
                "country_id" => 1,
                "region_name" => "Костромская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.941769"
            ],
            [
                "region_id" => 39,
                "region_obl" => 23,
                "country_id" => 1,
                "region_name" => "Краснодарский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.944109"
            ],
            [
                "region_id" => 59,
                "region_obl" => 24,
                "country_id" => 1,
                "region_name" => "Красноярский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.946101"
            ],
            [
                "region_id" => 46,
                "region_obl" => 45,
                "country_id" => 1,
                "region_name" => "Курганская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.947961"
            ],
            [
                "region_id" => 28,
                "region_obl" => 46,
                "country_id" => 1,
                "region_name" => "Курская область",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.950264"
            ],
            [
                "region_id" => 73,
                "region_obl" => 9,
                "country_id" => 1,
                "region_name" => "КЧР",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.951981"
            ],
            [
                "region_id" => 6,
                "region_obl" => 47,
                "country_id" => 1,
                "region_name" => "Ленинградская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.954256"
            ],
            [
                "region_id" => 29,
                "region_obl" => 48,
                "country_id" => 1,
                "region_name" => "Липецкая обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.956759"
            ],
            [
                "region_id" => 161,
                "region_obl" => 181,
                "country_id" => 1,
                "region_name" => "ЛНР",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:45.696247",
                "updated_at" => "2024-09-19 00:50:01.959403"
            ],
            [
                "region_id" => 68,
                "region_obl" => 49,
                "country_id" => 1,
                "region_name" => "Магаданская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.961772"
            ],
            [
                "region_id" => 23,
                "region_obl" => 12,
                "country_id" => 1,
                "region_name" => "Марий Эл респ.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.964315"
            ],
            [
                "region_id" => 24,
                "region_obl" => 13,
                "country_id" => 1,
                "region_name" => "Мордовия республика",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.966448"
            ],
            [
                "region_id" => 96,
                "region_obl" => 77,
                "country_id" => 1,
                "region_name" => "Москва",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.968851"
            ],
            [
                "region_id" => 15,
                "region_obl" => 50,
                "country_id" => 1,
                "region_name" => "Московская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.971168"
            ],
            [
                "region_id" => 3,
                "region_obl" => 51,
                "country_id" => 1,
                "region_name" => "Мурманская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.973676"
            ],
            [
                "region_id" => 99,
                "region_obl" => 0,
                "country_id" => 1,
                "region_name" => "не зарегистрирована",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.976128"
            ],
            [
                "region_id" => 82,
                "region_obl" => 83,
                "country_id" => 1,
                "region_name" => "Ненецкий АО",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.978667"
            ],
            [
                "region_id" => 21,
                "region_obl" => 52,
                "country_id" => 1,
                "region_name" => "Нижегородская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.980898"
            ],
            [
                "region_id" => 7,
                "region_obl" => 53,
                "country_id" => 1,
                "region_name" => "Новгородская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.983452"
            ],
            [
                "region_id" => 55,
                "region_obl" => 54,
                "country_id" => 1,
                "region_name" => "Новосибирская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.985592"
            ],
            [
                "region_id" => 56,
                "region_obl" => 55,
                "country_id" => 1,
                "region_name" => "Омская область",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.987503"
            ],
            [
                "region_id" => 47,
                "region_obl" => 56,
                "country_id" => 1,
                "region_name" => "Оренбургская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.989337"
            ],
            [
                "region_id" => 16,
                "region_obl" => 57,
                "country_id" => 1,
                "region_name" => "Орловская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.991132"
            ],
            [
                "region_id" => 34,
                "region_obl" => 58,
                "country_id" => 1,
                "region_name" => "Пензенская обл",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.993567"
            ],
            [
                "region_id" => 48,
                "region_obl" => 59,
                "country_id" => 1,
                "region_name" => "Пермский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.995598"
            ],
            [
                "region_id" => 64,
                "region_obl" => 25,
                "country_id" => 1,
                "region_name" => "Приморский край",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.997546"
            ],
            [
                "region_id" => 77,
                "region_obl" => 0,
                "country_id" => 1,
                "region_name" => "Прочие",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:01.999519"
            ],
            [
                "region_id" => 8,
                "region_obl" => 60,
                "country_id" => 1,
                "region_name" => "Псковская обл.",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.001507"
            ],
            [
                "region_id" => 51,
                "region_obl" => 2,
                "country_id" => 1,
                "region_name" => "РБ",
                "region_status" => "enabled",
                "region_status_delete" => "active",
                "created_at" => "2024-05-22 14:10:16.702450",
                "updated_at" => "2024-09-19 00:50:02.003568"
            ]
        ]);

    }
}
