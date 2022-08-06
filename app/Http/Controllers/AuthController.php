<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ; 
use Session ; 

class AuthController extends Controller
{
    public function login(){
        return view('login'); 
    }
    public function loginstore(Request $req){
        $email = $req->email; 
        $pass = $req->password;
        $user = DB::table('users')
        ->where('email','=',$email) 
        ->where('password','=',md5($pass)) 
        ->first();
    

        if( $user->is_approved =='No'){
            return redirect()->back()->with('fail','Failed to login!!');
        }
        else {
            Session::put('usrname' , $user->name ); 
            Session::put('usrrole' , $user->role ); 

            

             return redirect('pending-list');
        }
        
    }
    public function register(){
        return view('register');
    }

    public function storeregister(Request $req){
        $name = $req->name ;
        $email = $req->email ; 
        $password = $req->password ; 
        $cpassword = $req->cpassword ; 

        if ( $password != $cpassword ) {
            return redirect()->back()->with('err_msg','Password Mismatch!!!');
        }
        else {
            DB::table('users')->insert([
                'name' => $name , 
                'email' => $email,
                'password' => md5($password) , 
                'role' => 'student'
            ]);

            return redirect()->back()->with('success','Successfullly Registered');
        }
    }

    public function pendlist(){
        $usr = DB::table('users') ->where('is_approved' ,'No') ->get() ; 
        return view('pendlist',['user'=>$usr]);
    }

}
