<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder {
    public function run(): void {
        District::insert([
            ['d_code' => '31', 'd_name' => 'ගාල්ල'],
            ['d_code' => '32', 'd_name' => 'මාතර'],
            ['d_code' => '33', 'd_name' => 'හම්බන්තොට'],
        ]);
    }
}

