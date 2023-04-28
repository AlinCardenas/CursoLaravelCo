@extends('layouts.plantilla')
@section('title', 'producto'. $producto->nombre)

@section('content')

    <h1>Producto {{$producto->nombre}} </h1>
    <a href="{{route('productos.index')}}">Regresar</a>
    <a href="{{route('productos.edit', $producto)}}">Editar</a>
    <p>
        <strong>Descripcion: </strong>{{$producto->descripcion}}
    </p>
    <p>
        <strong>Precio: </strong>{{$producto->precio}}
    </p>
    
@endsection