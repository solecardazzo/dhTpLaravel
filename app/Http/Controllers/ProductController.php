<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){
    //De esta forma estoy llamando a mi modelo y ademas el método all(), me trae todos los datos de esa tabla
    $peliculas = Movie::paginate(6);
    //Ahora que tengo esos datos, se los paso a la vista proximosEstrenos que debo crear y con el llamdo al método with que me ofrece laravel dispongo como parámetros la variable que contendra los datos que va a la vista 'peliculas' y la variable que posee almacenado los datos $peliculas, ojo: esto remplaza a la forma como lo ejecuta Daro en los videos haciendo uso del "concact".
    return view('movies.proximosEstrenos')->with('peliculas',$peliculas);
  }
}
