<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use App\users;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  

    function insert(Request $request)
    {
    
    	$name = $request->input('name');
    	$lastname = $request->input('lastname');
    	$age = $request->input('age');
    	$email = $request->input('email');
    	$password =$request->input('password');
    
    	

    	DB::table('users')->insert(['name'=>$name, 'lastname'=>$lastname,"age"=>$age,"email"=>$email,"password"=>$password ]);

    	$usuario =DB::table('users')->orderby('id','DESC')->first();
 
    	return view('bienvenidos',compact('usuario'));
    }


    
}
