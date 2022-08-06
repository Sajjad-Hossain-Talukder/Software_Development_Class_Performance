<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $name = "Sajjad Hossain Talukder" ; 
        $email = "sajjadhossain.cse35@gmail.com";
        return view('about.about-us', ['name'=>$name , 'email'=>$email ] );
    }
}
