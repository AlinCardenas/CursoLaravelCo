@extends('layouts.plantilla')
@section('title', 'edit')

@section('content')

    <h1>Editar</h1>
    
    <form action="{{route('productos.update', $producto)}}" method="POST">
        
        @csrf
        {{-- especifica que etodo se desea usar para enviar los datos --}}
        @method('put')
        
        <label >
            Nombre:
            <br>
            <input type="text" name="nombre"  value="{{$producto->nombre}}">
        </label><br>
        <label >
            <br>
            Decripcion:
            <br>
            <textarea name="descripcion"  cols="30" rows="10" >{{$producto->descripcion}}</textarea>
        </label><br>
        <label for="">
            Precio:
            <br>
            <input type="number" name="precio" value="{{$producto->precio}}">
        </label><br>
        <button type="submit">Actualizar</button>
    </form>

@endsection