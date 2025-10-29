<?php

namespace App\Http\Controllers;

use App\Models\DivisionalSecretariat;
use App\Models\GramaNiladariDivision;

use Illuminate\Http\Request;

class LocationController extends Controller
{


    public function getDS($d_code)
    {
        return DivisionalSecretariat::where('d_code', $d_code)->get(['ds_id', 'ds_name']);
    }

    public function getGND($ds_id)
    {
        return GramaNiladariDivision::where('ds_id', $ds_id)->get(['gnd_uid','gnd_number', 'gnd_name']);
    }
}
