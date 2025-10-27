<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DivisionalSecretariatSeeder extends Seeder {
    public function run(): void {
        $rawData = [
            // Galle District (31)
            ['ds_code' => '03', 'ds_name' => 'බෙන්තොට', 'd_code' => '31'],
            ['ds_code' => '06', 'ds_name' => 'බලපිටිය', 'd_code' => '31'],
            ['ds_code' => '09', 'ds_name' => 'කරන්දෙණිය', 'd_code' => '31'],
            ['ds_code' => '12', 'ds_name' => 'ඇල්පිටිය', 'd_code' => '31'],
            ['ds_code' => '15', 'ds_name' => 'නියගම', 'd_code' => '31'],
            ['ds_code' => '18', 'ds_name' => 'තවලම', 'd_code' => '31'],
            ['ds_code' => '21', 'ds_name' => 'නැළුව', 'd_code' => '31'],
            ['ds_code' => '24', 'ds_name' => 'නාගොඩ', 'd_code' => '31'],
            ['ds_code' => '27', 'ds_name' => 'බද්දේගම', 'd_code' => '31'],
            ['ds_code' => '28', 'ds_name' => 'වඳුරඹ', 'd_code' => '31'],
            ['ds_code' => '30', 'ds_name' => 'වැලිවිටිය-දිවිතුර', 'd_code' => '31'],
            ['ds_code' => '33', 'ds_name' => 'අඹලන්ගොඩ', 'd_code' => '31'],
            ['ds_code' => '34', 'ds_name' => 'ගොනපීනුවල', 'd_code' => '31'],
            ['ds_code' => '35', 'ds_name' => 'මඩම්පගම', 'd_code' => '31'],
            ['ds_code' => '36', 'ds_name' => 'හික්කඩුව', 'd_code' => '31'],
            ['ds_code' => '37', 'ds_name' => 'රත්ගම', 'd_code' => '31'],
            ['ds_code' => '39', 'ds_name' => 'ගාල්ල චතුරශ්‍රය', 'd_code' => '31'],
            ['ds_code' => '42', 'ds_name' => 'බෝපේ-පොද්දල', 'd_code' => '31'],
            ['ds_code' => '45', 'ds_name' => 'අක්මීමන', 'd_code' => '31'],
            ['ds_code' => '48', 'ds_name' => 'යක්කලමුල්ල', 'd_code' => '31'],
            ['ds_code' => '51', 'ds_name' => 'ඉමදූව', 'd_code' => '31'],
            ['ds_code' => '54', 'ds_name' => 'හබරදූව', 'd_code' => '31'],

            // Matara District (32)
            ['ds_code' => '03', 'ds_name' => 'පිටබැද්දර', 'd_code' => '32'],
            ['ds_code' => '06', 'ds_name' => 'කොටපොල', 'd_code' => '32'],
            ['ds_code' => '09', 'ds_name' => 'පස්ගොඩ', 'd_code' => '32'],
            ['ds_code' => '12', 'ds_name' => 'මුලතියන', 'd_code' => '32'],
            ['ds_code' => '15', 'ds_name' => 'අතුරලිය', 'd_code' => '32'],
            ['ds_code' => '18', 'ds_name' => 'අකුරැස්ස', 'd_code' => '32'],
            ['ds_code' => '21', 'ds_name' => 'වැලිපිටිය', 'd_code' => '32'],
            ['ds_code' => '24', 'ds_name' => 'මලිම්බඩ', 'd_code' => '32'],
            ['ds_code' => '27', 'ds_name' => 'කඹුරුපිටිය', 'd_code' => '32'],
            ['ds_code' => '30', 'ds_name' => 'හක්මන', 'd_code' => '32'],
            ['ds_code' => '33', 'ds_name' => 'කිරින්ද-පුහුල්වැල්ල', 'd_code' => '32'],
            ['ds_code' => '36', 'ds_name' => 'තිහගොඩ', 'd_code' => '32'],
            ['ds_code' => '39', 'ds_name' => 'වැලිගම', 'd_code' => '32'],
            ['ds_code' => '42', 'ds_name' => 'මාතර චතුරශ්‍රය', 'd_code' => '32'],
            ['ds_code' => '45', 'ds_name' => 'දෙවිනුවර', 'd_code' => '32'],
            ['ds_code' => '48', 'ds_name' => 'ඩික්වැල්ල', 'd_code' => '32'],

            // Hambantota District (33)
            ['ds_code' => '03', 'ds_name' => 'සූරියවැව', 'd_code' => '33'],
            ['ds_code' => '06', 'ds_name' => 'ලුණුගම්වෙහෙර', 'd_code' => '33'],
            ['ds_code' => '09', 'ds_name' => 'තිස්සමහාරාම', 'd_code' => '33'],
            ['ds_code' => '12', 'ds_name' => 'හම්බන්තොට', 'd_code' => '33'],
            ['ds_code' => '15', 'ds_name' => 'අඹලන්තොට', 'd_code' => '33'],
            ['ds_code' => '18', 'ds_name' => 'අඟුණකොලපැලැස්ස', 'd_code' => '33'],
            ['ds_code' => '21', 'ds_name' => 'වීරකැටිය', 'd_code' => '33'],
            ['ds_code' => '24', 'ds_name' => 'කටුවන', 'd_code' => '33'],
            ['ds_code' => '25', 'ds_name' => 'වලස්මුල්ල', 'd_code' => '33'],
            ['ds_code' => '27', 'ds_name' => 'ඔකේවල', 'd_code' => '33'],
            ['ds_code' => '30', 'ds_name' => 'බෙලිඅත්ත', 'd_code' => '33'],
            ['ds_code' => '33', 'ds_name' => 'තංගල්ල', 'd_code' => '33'],
        ];
        $rows = collect($rawData)->map(fn($row) => [
            'ds_id' => $row['d_code'] . $row['ds_code'],
            'ds_code' => $row['ds_code'],
            'ds_name' => $row['ds_name'],
            'd_code' => $row['d_code'],
        ]);
        DB::table('divisional_secretariats')->insert($rows->toArray());
    }
}

