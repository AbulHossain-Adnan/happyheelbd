<?php

namespace Database\Seeders;

use App\Models\Admin\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::insert([
            [
                "id" => 1,
                "division" => "Dhaka",
                "bn_name" => "ঢাকা",

            ],
            [
                "id" => 2,
                "division" => "Chittagong",
                "bn_name" => "চট্টগ্রাম",

            ],
            [
                "id" => 3,
                "division" => "Rajshahi",
                "bn_name" => "রাজশাহী",

            ],
            [
                "id" => 4,
                "division" => "Khulna",
                "bn_name" => "খুলনা",

            ],
            [
                "id" => 5,
                "division" => "Barisal",
                "bn_name" => "বরিশাল",

            ],
            [
                "id" => 6,
                "division" => "Rangpur",
                "bn_name" => "রংপুর",

            ],
            [
                "id" => 7,
                "division" => "Sylhet",
                "bn_name" => "সিলেট",

            ],

            [
                "id" => 8,
                "division" => "Mymensingh",
                "bn_name" => "ময়মনসিংহ",

            ]
        ]);
    }
}
