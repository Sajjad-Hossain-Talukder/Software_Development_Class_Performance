<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function contact($cat){
        return view('contact',['catagory'=>$cat]);
    }
}
