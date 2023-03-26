<?php

namespace Database\Seeders;

use App\Models\Admin\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::insert([
            [
                "id" => 1,
                "division_id" => 1,
                "district" => "Narsingdi",
                "bn_name" => "নরসিংদী"
            ],
            [
                "id" => 2,
                "division_id" => 1,
                "district" => "Gazipur",
                "bn_name" => "গাজীপুর"
            ],
            [
                "id" => 3,
                "division_id" => 1,
                "district" => "Shariatpur",
                "bn_name" => "শরীয়তপুর"
            ],
            [
                "id" => 4,
                "division_id" => 1,
                "district" => "Narayanganj",
                "bn_name" => "নারায়ণগঞ্জ"
            ],
            [
                "id" => 5,
                "division_id" => 1,
                "district" => "Tangail",
                "bn_name" => "টাঙ্গাইল"
            ],
            [
                "id" => 6,
                "division_id" => 1,
                "district" => "Kishoreganj",
                "bn_name" => "কিশোরগঞ্জ"
            ],
            [
                "id" => 7,
                "division_id" => 1,
                "district" => "Manikganj",
                "bn_name" => "মানিকগঞ্জ"
            ],
            [
                "id" => 8,
                "division_id" => 1,
                "district" => "Dhaka",
                "bn_name" => "ঢাকা"
            ],
            [
                "id" => 9,
                "division_id" => 1,
                "district" => "Munshiganj",
                "bn_name" => "মুন্সিগঞ্জ"
            ],
            [
                "id" => 10,
                "division_id" => 1,
                "district" => "Rajbari",
                "bn_name" => "রাজবাড়ী"
            ],
            [
                "id" => 11,
                "division_id" => 1,
                "district" => "Madaripur",
                "bn_name" => "মাদারীপুর"
            ],
            [
                "id" => 12,
                "division_id" => 1,
                "district" => "Gopalganj",
                "bn_name" => "গোপালগঞ্জ"
            ],
            [
                "id" => 13,
                "division_id" => 1,
                "district" => "Faridpur",
                "bn_name" => "ফরিদপুর"
            ],
            [
                "id" => 14,
                "division_id" => 2,
                "district" => "Comilla",
                "bn_name" => "কুমিল্লা"
            ],
            [
                "id" => 15,
                "division_id" => 2,
                "district" => "Feni",
                "bn_name" => "ফেনী"
            ],
            [
                "id" => 16,
                "division_id" => 2,
                "district" => "Brahmanbaria",
                "bn_name" => "ব্রাহ্মণবাড়িয়া"
            ],
            [
                "id" => 17,
                "division_id" => 2,
                "district" => "Rangamati",
                "bn_name" => "রাঙ্গামাটি"
            ],
            [
                "id" => 18,
                "division_id" => 2,
                "district" => "Noakhali",
                "bn_name" => "নোয়াখালী"
            ],
            [
                "id" => 19,
                "division_id" => 2,
                "district" => "Chandpur",
                "bn_name" => "চাঁদপুর"
            ],
            [
                "id" => 20,
                "division_id" => 2,
                "district" => "Lakshmipur",
                "bn_name" => "লক্ষ্মীপুর"
            ],
            [
                "id" => 21,
                "division_id" => 2,
                "district" => "Chittagong",
                "bn_name" => "চট্টগ্রাম"
            ],
            [
                "id" => 22,
                "division_id" => 2,
                "district" => "Coxsbazar",
                "bn_name" => "কক্সবাজার"
            ],
            [
                "id" => 23,
                "division_id" => 2,
                "district" => "Khagrachhari",
                "bn_name" => "খাগড়াছড়ি"
            ],
            [
                "id" => 24,
                "division_id" => 2,
                "district" => "Bandarban",
                "bn_name" => "বান্দরবান"
            ],
            [
                "id" => 25,
                "division_id" => 3,
                "district" => "Sirajganj",
                "bn_name" => "সিরাজগঞ্জ"
            ],
            [
                "id" => 26,
                "division_id" => 3,
                "district" => "Pabna",
                "bn_name" => "পাবনা"
            ],
            [
                "id" => 27,
                "division_id" => 3,
                "district" => "Bogra",
                "bn_name" => "বগুড়া"
            ],
            [
                "id" => 28,
                "division_id" => 3,
                "district" => "Rajshahi",
                "bn_name" => "রাজশাহী"
            ],
            [
                "id" => 29,
                "division_id" => 3,
                "district" => "Natore",
                "bn_name" => "নাটোর"
            ],
            [
                "id" => 30,
                "division_id" => 3,
                "district" => "Joypurhat",
                "bn_name" => "জয়পুরহাট"
            ],
            [
                "id" => 31,
                "division_id" => 3,
                "district" => "Chapainawabganj",
                "bn_name" => "চাঁপাইনবাবগঞ্জ"
            ],
            [
                "id" => 32,
                "division_id" => 3,
                "district" => "Naogaon",
                "bn_name" => "নওগাঁ"
            ],
            [
                "id" => 33,
                "division_id" => 4,
                "district" => "Jessore",
                "bn_name" => "যশোর"
            ],
            [
                "id" => 34,
                "division_id" => 4,
                "district" => "Satkhira",
                "bn_name" => "সাতক্ষীরা"
            ],
            [
                "id" => 35,
                "division_id" => 4,
                "district" => "Meherpur",
                "bn_name" => "মেহেরপুর"
            ],
            [
                "id" => 36,
                "division_id" => 4,
                "district" => "Narail",
                "bn_name" => "নড়াইল"
            ],
            [
                "id" => 37,
                "division_id" => 4,
                "district" => "Chuadanga",
                "bn_name" => "চুয়াডাঙ্গা"
            ],
            [
                "id" => 38,
                "division_id" => 4,
                "district" => "Kushtia",
                "bn_name" => "কুষ্টিয়া"
            ],
            [
                "id" => 39,
                "division_id" => 4,
                "district" => "Magura",
                "bn_name" => "মাগুরা"
            ],
            [
                "id" => 40,
                "division_id" => 4,
                "district" => "Khulna",
                "bn_name" => "খুলনা"
            ],
            [
                "id" => 41,
                "division_id" => 4,
                "district" => "Bagerhat",
                "bn_name" => "বাগেরহাট"
            ],
            [
                "id" => 42,
                "division_id" => 4,
                "district" => "Jhenaidah",
                "bn_name" => "ঝিনাইদহ"
            ],
            [
                "id" => 43,
                "division_id" => 5,
                "district" => "Jhalakathi",
                "bn_name" => "ঝালকাঠি"
            ],
            [
                "id" => 44,
                "division_id" => 5,
                "district" => "Patuakhali",
                "bn_name" => "পটুয়াখালী"
            ],
            [
                "id" => 45,
                "division_id" => 5,
                "district" => "Pirojpur",
                "bn_name" => "পিরোজপুর"
            ],
            [
                "id" => 46,
                "division_id" => 5,
                "district" => "Barisal",
                "bn_name" => "বরিশাল"
            ],
            [
                "id" => 47,
                "division_id" => 5,
                "district" => "Bhola",
                "bn_name" => "ভোলা"
            ],
            [
                "id" => 48,
                "division_id" => 5,
                "district" => "Barguna",
                "bn_name" => "বরগুনা"
            ],
            [
                "id" => 49,
                "division_id" => 6,
                "district" => "Panchagarh",
                "bn_name" => "পঞ্চগড়"
            ],
            [
                "id" => 50,
                "division_id" => 6,
                "district" => "Dinajpur",
                "bn_name" => "দিনাজপুর"
            ],
            [
                "id" => 51,
                "division_id" => 6,
                "district" => "Lalmonirhat",
                "bn_name" => "লালমনিরহাট"
            ],
            [
                "id" => 52,
                "division_id" => 6,
                "district" => "Nilphamari",
                "bn_name" => "নীলফামারী"
            ],
            [
                "id" => 53,
                "division_id" => 6,
                "district" => "Gaibandha",
                "bn_name" => "গাইবান্ধা"
            ],
            [
                "id" => 54,
                "division_id" => 6,
                "district" => "Thakurgaon",
                "bn_name" => "ঠাকুরগাঁও"
            ],
            [
                "id" => 55,
                "division_id" => 6,
                "district" => "Rangpur",
                "bn_name" => "রংপুর"
            ],
            [
                "id" => 56,
                "division_id" => 6,
                "district" => "Kurigram",
                "bn_name" => "কুড়িগ্রাম"
            ],
            [
                "id" => 57,
                "division_id" => 7,
                "district" => "Sylhet",
                "bn_name" => "সিলেট"
            ],
            [
                "id" => 58,
                "division_id" => 7,
                "district" => "Moulvibazar",
                "bn_name" => "মৌলভীবাজার"
            ],
            [
                "id" => 59,
                "division_id" => 7,
                "district" => "Habiganj",
                "bn_name" => "হবিগঞ্জ"
            ],
            [
                "id" => 60,
                "division_id" => 7,
                "district" => "Sunamganj",
                "bn_name" => "সুনামগঞ্জ"
            ],
            [
                "id" => 61,
                "division_id" => 8,
                "district" => "Sherpur",
                "bn_name" => "শেরপুর"
            ],
            [
                "id" => 62,
                "division_id" => 8,
                "district" => "Mymensingh",
                "bn_name" => "ময়মনসিংহ"
            ],
            [
                "id" => 63,
                "division_id" => 8,
                "district" => "Jamalpur",
                "bn_name" => "জামালপুর"
            ],
            [
                "id" => 64,
                "division_id" => 8,
                "district" => "Netrokona",
                "bn_name" => "নেত্রকোণা"
            ]
        ]);
    }
}
