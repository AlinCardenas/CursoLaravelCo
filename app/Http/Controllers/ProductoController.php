<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        //1. en variable productos se van a almacenar los productos que estan almacenados con paginacion
        // si se desea mostrar todos el paginate se cambia a all
        $productos = Producto::paginate();
        //2. estamos retornando la vista y a la vista con el compac le envio la variable productos a que tiene productos almacenados
        return view('productos.index', compact('productos'));
    }
    public function create(){
        return view('productos.create');
    }
    public function show($producto){
        return view('productos.show', compact('producto'));
    }
}
