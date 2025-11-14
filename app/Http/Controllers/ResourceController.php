<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Resource;
use \App\Models\RHasGND;

class ResourceController extends Controller
{
    public function insertResource(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'r_name' => 'required|string|max:255',
            'r_importance' => 'required|string|max:255',
            'r_is_used' => 'required|string|max:255',
            'gnd_uid' => 'required|string|max:255',
        ]);

        $resource = Resource::create([
            'r_name' => $validatedData['r_name'],
            'r_importance' => $validatedData['r_importance'],
        ]);
        $resource_id = $resource->id;

        RHasGND::create([
            'r_id' => $resource_id,
            'gnd_uid' => $validatedData['gnd_uid'],
            'r_is_used' => $validatedData['r_is_used'],
        ]);

        return response()->json(['success' => true]);
    }

    public function getResources($gndUid)
    {
        $resources = Resource::whereIn(
            'r_id',
            RHasGND::where('gnd_uid', $gndUid)->pluck('r_id')
        )->get();

        return response()->json($resources);
    }

    public function deleteResource($id)
    {
        return response()->json(
            Resource::where('r_id', $id)->delete()
        );
    }
}
