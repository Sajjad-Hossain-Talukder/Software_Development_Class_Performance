<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category ;
use App\Models\Product ;

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

       if ( $obj->save()) {
       
            echo "successful";
       }

    }

    public function clist(){
        $row = Category::all() ; 
        return view('category.category_list', ['row'=>$row] ) ; 

    }

    public function plist(){
        $row = Product::all() ; 
        return view('category.product_list', ['row'=>$row] ) ; 

    }

    public function showproduct(){
        // Eloquent ORM
        $row = Category::all() ; 

        return view('category.insert_product',['row'=>$row]);
    }
    public function storeproduct(Request $req){
        $name = $req->name ; 
        $sort_order =  $req->so; 
        $act =  $req->act ; 
        $price = $req->price ; 
        $cat =  $req->cat ; 
 
        $obj = new Product(); 
 
        $obj->name = $name  ; 
        $obj->sort_order = $sort_order ; 
        $obj->is_active = $act ; 
        $obj->price = $price ; 
        $obj->cat_id = $cat ; 
 
        if ( $obj->save()) echo "Inserted"; 
 
     }
 


}
