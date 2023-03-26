<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\Admin::truncate();
        \App\Models\User::truncate();
        \App\Models\Admin\Division::truncate();
        \App\Models\Admin\District::truncate();

        $this->call([
            DivisionSeeder::class,
            DistrictSeeder::class
        ]);

        \App\Models\Admin::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);


        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
