<?php

namespace App\Http\Controllers;

use App\Models\AbondenedGovernmentBuilding;
use Illuminate\Http\Request;

class AbondenedBuildingController extends Controller
{
    public function getAbondenedBuidings ($gnd_uid) {
        return response()->json(AbondenedGovernmentBuilding::where('gnd_uid', $gnd_uid)->get());
    }

    public function insertAbondenedBuilding(Request $request) {
        $validatedData = $request->validate([
            'ab_name' => 'required|string|max:255',
            'ab_used_for' => 'required|string|max:255',
            'ab_is_retrievable' => 'required|string|max:255',
            'gnd_uid' => 'required|string|max:255',
        ]);

        $ab = new AbondenedGovernmentBuilding();
        $ab->ab_name = $validatedData['ab_name'];
        $ab->ab_used_for = $validatedData['ab_used_for'];
        $ab->ab_is_retrievable = $validatedData['ab_is_retrievable'];
        $ab->gnd_uid = $validatedData['gnd_uid'];
        $ab->save();

        return response()->json(['success' => true]);
    }

    public function deleteAbondenedBuilding($ab_id) {
        return response()->json(AbondenedGovernmentBuilding::where('ab_id', $ab_id)->delete());
    }
}
