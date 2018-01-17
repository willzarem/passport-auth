<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VistaController extends Controller
{
    public function index(){


/**$Clients = \App\client::all(); /**para ver todos los registros*/
$Clients = \App\client::where('user_id', Auth::user()->id)->get();/*para poder solo ver los datos de solo usuario permitido*/
return view('vista',compact('Clients'));


   }
}
