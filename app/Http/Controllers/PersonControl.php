<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ; 

class PersonControl extends Controller
{
    public function all(){
       $persons = DB::table('persons')
                    ->get();
        //dd($persons);
        return view('person.all',['all_persons' => $persons]);
    }
   
    public function create(){
        return view('person.create');
    }

    public function store( Request $request ){
        $name = $request->name ; 
        $email = $request->email ; 
        $birth_date = $request->birth_date ; 
        $salary = $request->salary ; 

        DB:: table('persons')->insert(
            [ 
                'name' => $name , 
                'email' => $email ,
                'birth_date' => $birth_date , 
                'salary' => $salary  
            ]
        );
        return redirect('/persons');
       // echo $name.' '.$email.' '.$birth_date.' '.$salary ;

    }

    public function edit($id){
        $person = DB::table('persons') -> where ('Id','=',$id) ->first() ; 
        return view('person.edit',['person'=>$person]);
    }

    public function update( Request $request , $id ){
    
        $name = $request->name ; 
        $email = $request->email ; 
        $birth_date = $request->birth_date ; 
        $salary = $request->salary ; 

        $aff = DB::table('persons') 
            -> where('id' , $id ) 
            ->update([ 
                'name' => $name , 
                'email' => $email ,
                'birth_date' => $birth_date , 
                'salary' => $salary  ]);
        return redirect('edit-person/'.$id) ;

    }

    public function delete ($id){
        $del = DB:: table('persons') ->  where ('id' , $id) -> delete();
        return redirect('persons');
    }

    
}
