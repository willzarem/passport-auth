<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Ciudadanos;
use App\User;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cliente','ClienteController@index')->middleware('auth');


Route::get('/cliente', 'ClienteController@index')->name('cliente');

route::get('/vista', 'VistaController@index')->name('vista');

route::get('/vista', 'vistaController@index')->name('vista');



Route::get('/generartoken', function () {
    return view('generartoken');
});

Route::get('/ciudadano', function () {
    return view('ciudadano');
});



/** ruta para ver los datos y poder eliminar*/
Route::get('/eliminar', function () {
    $ciudadanos = Ciudadanos::all();
    return view('eliminar',['ciudadano' =>$ciudadanos]);
});

/** vista para vista ciudadaano*/

Route::get('/vistaciudadano', function () {

	$ciudadanos = Ciudadanos::all();
    return view('vistaciudadano',['ciudadano' =>$ciudadanos]);
});








/**a agrear nueva */
Route::post('/ciudadano', function (Request $request) {
   $validator = Validator::make($request->all(), [
            'dpi' => 'required|max:10',
            'telefono' => 'min:8',
            'email' => 'email'

        ]);

        if ($validator->fails()) {
            return redirect('/ciudadano')
                ->withErrors($validator);
        }
        $Ciudadanos = new ciudadanos;
        $Ciudadanos->dpi = $request->dpi;
         $Ciudadanos->nombre = $request->nombre;
          $Ciudadanos->apellido = $request->apellido;
           $Ciudadanos->direccion = $request->direccion;
            $Ciudadanos->telefono = $request->telefono;
             $Ciudadanos->email = $request->email;
             $Ciudadanos->save();
        return redirect('/ciudadano');


});
/**eliminar datos*/

Route::delete('/eliminar/{id}', function ($id) {
      Ciudadanos::findOrFail($id)->delete();
        return redirect('eliminar');
    
});

/** ruta para acutalizr */
Route::put('/actualizar/{id}', function (Request $request ,$id) {
         $validator = Validator::make($request->all(), [
            'dpi' => 'required|max:10',
            'telefono' => 'min:8',
            'email' => 'email'

        ]);   

       

        if ($validator->fails()) {
            return redirect('503')
                ->withErrors($validator);
        }
 
     
      $ciudadano = ciudadanos::findOrFail($id);
    $ciudadano->dpi = $request->dpi;
          $ciudadano->nombre = $request->nombre;
           $ciudadano->apellido = $request->apellido;
            $ciudadano->direccion = $request->direccion;
             $ciudadano->telefono = $request->telefono;
              $ciudadano->email = $request->email;
             $ciudadano->save();
      
        return redirect('editar');
    
});



/** ruta para modificacion */
route::get('/actualizar/{id}', function ($id) {

	$ciudadano = Ciudadanos::findOrFail($id);
    return view('actualizar',['ciudadano' =>$ciudadano]);
});

/** ruta de pagina de error*/
Route::get('/503', function () {
    return view('errors.503');
});

Route::get('/editar', function () {
    $ciudadanos = Ciudadanos::all();
    return view('editar',['ciudadano' =>$ciudadanos]);
});


/******* nuevas formas de busqueda*/


Route::get('/busqueda', 'busquedaController@index')->name('busqueda');