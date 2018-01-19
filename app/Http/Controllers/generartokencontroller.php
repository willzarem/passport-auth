<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generartokencontroller extends Controller
{
     public function index(){


/**$Clients = \App\client::all(); /**para ver todos los registros*/
$Clients = \App\post::where('user_id', Auth::user()->id)->get();/*para poder solo ver los datos de solo usuario permitido*/
return view('generartoken',compact('Clients'));


   }
}
