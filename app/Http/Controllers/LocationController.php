<?php

namespace App\Http\Controllers;
use App\Models\District;
use DB; 


use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getDistrictsByDivisionId($id){
        $row = DB::table('districts')->where('division_id',$id)->get();

        return response()->json([
            'districts' => $row ,
        ]);

    }
}
