<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    
    public function index( $pagina = 1 ){
        $titulo = 'Listado de películas';
        return view('pelicula.index', array(
            'titulo' => $titulo,
            'pagina' =>  $pagina
        ));
    }

    public function detalle( $year = null){
       return view('pelicula.detalle');
    }

    public function redirigir(){
        //return redirect()->action('PeliculaController@detalle');
        //return redirect('/peliculas');
        return redirect()->route('detalle.pelicula');
    }
}
