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
        ->where('password','=',$pass) 
        ->first();
        if( $user == null  ){
            return redirect()->back()->with('fail','Failed to login!!');
        }
        
        if( $user->is_approved == "No"){
            return redirect()->back()->with('fail','Failed to login!!');
        }
        else {
            Session::put('username' , $user->name ); 
            Session::put('userrole' , $user->role ); 
            
            return redirect('dashboard');
            //return redirect('pending-list');
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


    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        Session::forget('username');
        return redirect('login');
    }




}
