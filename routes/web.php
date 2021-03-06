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
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('main');
});

Route::resource('empresas','EmpresasController');

Route::resource('sucursales','SucursalesController');

Route::get('/sucursales/nueva/{id}',[
    'as' => 'sucursales.nueva',
    'uses' => 'SucursalesController@nueva'
]);

Route::get('/searchredirect', function(){

    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();

    $search = urlencode(e(Input::get('search')));
    $route = "/search/$search";
    return redirect($route);
});
Route::get("/search/{search}", "BuscadorController@busqueda");