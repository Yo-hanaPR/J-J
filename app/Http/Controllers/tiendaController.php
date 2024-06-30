<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\productos;
use App\models\categoria;
use App\models\post;

class tiendaController extends Controller
{
    //
    public function index(){
        $productos= productos::with('categorias')->get();
        $categorias= categoria::with('productos')->get();
        $posts= post::all();
        return response()->json(
            [
                'productos'=>$productos, 
                'categorias'=>$categorias,
                'posts'=>$posts
            ]
          , 200);
    }
}
