<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Employee;
use DB; 

class EmployeeController extends Controller
{
    //
    public function employee_control(){
        $row = DB::table('divisions')->get();
        return view('employee_create',['row'=>$row]);
    }

    public function insertemployee( Request $req ){

        $obj = new Employee();
        $obj->name = $req->name ;
        $obj->division_id = $req->division ;
        $obj->district_id = $req->district ; 

        if($obj->save()){
            return response()->json([
                'employee' => $obj 
            ]);
        }


    }

}
