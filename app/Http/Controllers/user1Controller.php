<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user1Controller extends Controller
{
   public function index(){


$User1 = \App\User1::all(); /**para ver todos los registros*/
/**$Clients = \App\client::where('user_id', Auth::user()->id)->get();/*para poder solo ver los datos de solo usuario permitido*/
return view('usur1',compact('User1'));


   }
}
