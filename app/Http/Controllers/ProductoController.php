<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        //1. en variable productos se van a almacenar los productos que estan almacenados con paginacion
        // si se desea mostrar todos el paginate se cambia a all
        $productos = Producto::orderBy('id','desc')->paginate();
        //2. estamos retornando la vista y a la vista con el compac le envio la variable productos a que tiene productos almacenados
        return view('productos.index', compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect()->route('productos.show',$producto);
    }

    public function show($id){
        $producto= Producto::find($id);
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto){
        return view('productos.edit',compact('producto'));
    }

    public function update(Request $request, Producto $producto){
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect()->route('productos.show',$producto);

    }
}



