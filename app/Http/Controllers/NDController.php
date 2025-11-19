<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\NaturalDisaster;

class NDController extends Controller
{
    public function getNDList() {
        return response()->json(
            NaturalDisaster::all()
        );
    }

    public function insertND(Request $request) {
    $validatedData = $request->validate([
        'nd_name'    => 'required|string',
        'nd_period'  => 'required|string',
        'nd_solution'=> 'required|string',
        'other_nd'   => 'nullable|string' // only validated if present
    ]);

    if ($validatedData['other_nd']) {
        $nd = NaturalDisaster::insert('nd_name', $validatedData['other_nd']);
        $newND = $nd->id;
    } else {
        
    }
    

}

}
