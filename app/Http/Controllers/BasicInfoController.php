<?php

namespace App\Http\Controllers;

use App\Models\DivisionalSecretariat;
use App\Models\GramaNiladariDivision;
use App\Models\District;

use Illuminate\Http\Request;

class BasicInfoController extends Controller
{
    public function getGNDName($gnd_uid)
    {
        return GramaNiladariDivision::where('gnd_uid', $gnd_uid)->get(['gnd_name']);
    }

    public function getDSNameByGND($gnd_uid)
    {
        $ds = GramaNiladariDivision::where('gnd_uid', $gnd_uid)->get('ds_id');
        return DivisionalSecretariat::where('ds_id', $ds)->get('ds_name');
    }

    public function getDistrictNameByGND($gnd_uid)
    {
        $ds = GramaNiladariDivision::where('gnd_uid', $gnd_uid)->get('ds_id');
        $district = DivisionalSecretariat::where('ds_id', $ds)->get('d_code');
        return District::where('d_code', $district)->get('d_name');
    }
}
