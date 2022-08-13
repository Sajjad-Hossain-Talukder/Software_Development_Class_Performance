<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(){
        return view('insert_category');
    }
    public function store(Request $req){
       $name = $req->name ; 
       $sort_order =  $req->so; 
       $act =  $req->act ; 

       
    
       dd($req) ; 


    }
}
