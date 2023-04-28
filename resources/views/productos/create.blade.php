@extends('layouts.plantilla')
@section('title', 'create')

@section('content')

    <h1>Crear</h1>
    
    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <label >
            Nombre:
            <br>
            <input type="text" name="nombre" >
        </label><br>
        <label >
            <br>
            Decripcion:
            <br>
            <textarea name="descripcion"  cols="30" rows="10"></textarea>
        </label><br>
        <label for="">
            Precio:
            <br>
            <input type="number" name="precio">
        </label><br>
        <button type="submit">Enviar</button>
    </form>

@endsection