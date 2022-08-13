<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category ;

class CategoryController extends Controller
{
    public function show(){
        return view('category.insert_category');
    }
    public function store(Request $req){
       $name = $req->name ; 
       $sort_order =  $req->so; 
       $act =  $req->act ; 

       $obj = new Category(); 

       $obj->name = $name  ; 
       $obj->sort_order = $sort_order ; 
       $obj->is_active = $act ; 

       if ( $obj->save()) return redirect('category.category-list') ; 

    }

    public function showproduct(){
        // Eloquent ORM
        $row = Category::all() ; 

        return view('category.insert_product',['row'=>$row]);
    }


}
