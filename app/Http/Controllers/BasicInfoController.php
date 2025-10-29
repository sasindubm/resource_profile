<?php

namespace App\Http\Controllers;

use App\Models\DivisionalSecretariat;
use App\Models\GramaNiladariDivision;
use App\Models\District;

use Illuminate\Http\Request;

class BasicInfoController extends Controller
{
    public function getGNDNumber($gnd_uid)
    {
        return response()->json(['gnd_number' => GramaNiladariDivision::where('gnd_uid', $gnd_uid)->value('gnd_number')]);
    }

    public function getGNDName($gnd_uid)
    {
        return GramaNiladariDivision::where('gnd_uid', $gnd_uid)->get(['gnd_name']);
    }

    public function getDSNameByGND($gnd_uid)
    {
        $ds_id = GramaNiladariDivision::where('gnd_uid', $gnd_uid)->value('ds_id');
        $ds_name = DivisionalSecretariat::where('ds_id', $ds_id)->value('ds_name');

        return response()->json(['ds_name' => $ds_name]);
    }

    public function getDistrictNameByGND($gnd_uid)
    {
        $ds_id = GramaNiladariDivision::where('gnd_uid', $gnd_uid)->value('ds_id');
        $d_code = DivisionalSecretariat::where('ds_id', $ds_id)->value('d_code');
        $d_name = District::where('d_code', $d_code)->value('d_name');

        return response()->json(['d_name' => $d_name]);
    }
}
