<?php

namespace App\Http\Controllers;

use App\Models\GovermentFigure;
use Illuminate\Http\Request;

class GovFigureController extends Controller
{

    public function getAllGovernmentFigure($gnd_uid)
    {
        return response()->json(GovermentFigure::where('gnd_uid', $gnd_uid)->get(['gf_id', 'gf_name', 'gf_type', 'gf_address']));
    }

    public function insertGovernmentFigure(Request $request)
    {
        $validatedData = $request->validate([
            'gf_name' => 'required|string|max:255',
            'gf_type' => 'required|string|max:255',
            'gf_address' => 'required|string|max:255',
            'gnd_uid' => 'required|string|max:255',
        ]);

        $gf = new GovermentFigure();
        $gf->gf_name = $validatedData['gf_name'];
        $gf->gf_type = $validatedData['gf_type'];
        $gf->gf_address = $validatedData['gf_address'];
        $gf->gnd_uid = $validatedData['gnd_uid'];
        $gf->save();

        return response()->json(['success' => true]);
    }

    public function deleteGovernmentFigure($gf_id) {
        return response()->json(GovermentFigure::where('gf_id', $gf_id)->delete());
    }
}
