<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/peliculas/{pagina?}', 'PeliculaController@index');

Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);

Route::get('/formulario', 'PeliculaController@formularios');
Route::post('/recibir', 'PeliculaController@recibir');

Route::get('/redirigir', 'PeliculaController@redirigir');

Route::resource('/usuario', 'UsuarioController');

/*
Route::get('/mostrar-fecha', function () {
    $titulo = 'Fecha:';
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo?}', function($titulo = 'No hay una pelicula') {
    return view('pelicula', array( 'titulo' => $titulo ));
});

Route::get('/curso/{titulo}/{year?}', function($titulo, $year) {
    return view('pelicula', array( 'titulo' => $titulo ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));


Route::get('/listado-peliculas', function(){

    $titulo = 'Listado de peliculas';
    $peliculas = array(
        'BATMAN', 'PELICULA2', 'PELICULA3'
    );

    return view('peliculas.listado', array(
        'titulo' => $titulo,
        'listado' => $peliculas
    ));
});


Route::get('/pagina-generica', function(){
    return view('pagina');
});*/
