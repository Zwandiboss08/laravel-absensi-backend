<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Stefanus Admin',
            'email' => 'stefanus@anugrahjaya.com',
            'password' => Hash::make('123456'),
        ]);

        //data dummy for company

        \App\Models\Company::create([
            'name' => 'PT. Anugrah Jaya',
            'email' => 'admin@anugrahjaya.com',
            'address' => 'Jl. Jend. Sudirman No. 1',
            'latitude' => '-6.175110',
            'longitude' => '106.827220',
            'radius_km' => '5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call(AttendanceSeeder::class);
    }
}
