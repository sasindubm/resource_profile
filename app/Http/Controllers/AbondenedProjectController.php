<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbondenedProject;

class AbondenedProjectController extends Controller
{
    public function getAbondenedProjects($gnd_uid)
    {
        return response()->json(AbondenedProject::where('gnd_uid', $gnd_uid)->get());
    }

    public function addAbondenedProject(Request $request)
    {
        $ap = new AbondenedProject();
        $ap->ap_name = $request->input('ap_name');
        $ap->ap_reason = $request->input('ap_reason');
        $ap->gnd_uid = $request->input('gnd_uid');
        $ap->save();

        return response()->json(['success' => true]);
    }

    public function deleteAbondenedProject($ap_id)
    {
        return response()->json(AbondenedProject::where('ap_id', $ap_id)->delete());
    }
}
