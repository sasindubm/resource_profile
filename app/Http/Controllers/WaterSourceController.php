<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\WaterResource;

class WaterSourceController extends Controller
{
    public function insertWaterSource(Request $request)
    {
        $validatedData = $request->validate([
            'water_source_name' => 'required|string|max:255',
            'water_type' => 'required|string|max:255',
        ]);

        $waterSource = new WaterResource();
        $waterSource->water_source_name = $validatedData['water_source_name'];
        $waterSource->water_type = $validatedData['water_type'];
        $waterSource->save();

        return response()->json(['success' => true]);
    }

    public function getWaterSources($gndUid)
    {
        return response()->json(WaterResource::all());
    }

    public function deleteWaterSource($id)
    {
        $waterSource = WaterResource::find($id);
        if ($waterSource) {
            $waterSource->delete();
            return response()->json(['success' => true]);
        }
    }
}
