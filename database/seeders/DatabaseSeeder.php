<?php

namespace Database\Seeders;

use App\Models\GramaNiladariDivision;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        GramaNiladariDivision::insert([
            ['gnd_code' => 'GND001', 'gnd_name' => 'Division One'],
            ['gnd_code' => 'GND002', 'gnd_name' => 'Division Two'],
            ['gnd_code' => 'GND003', 'gnd_name' => 'Division Three'],
        ]);
    }
}
