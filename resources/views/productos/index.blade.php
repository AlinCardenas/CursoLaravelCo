@extends('layouts.plantilla')
@section('title', 'index')

@section('content')

    <h1>Pagina principal de productos</h1>
    {{-- lik para ingresar a la seccion de crear --}}
    <a href="{{route('productos.create')}}">Crear producto</a>
    
    {{--4. Para mostrar todos los datos se deben mostrar en un bucle que vaya recorriendo la coleccion--}}
    <ul>
        {{-- 5. Nombre de la coleccion y nombre de la variale donde se almacenara temporalmente los registros
        en este caso la variable que enviamos desde controlador es $productos y se guarda como $producto --}}
        @foreach ($productos as $producto)
            {{-- 6. Aqui se especifica que datos queremos visualizar--}}
            <li>
                <a href="{{route('productos.show', $producto->id)}}">{{$producto->nombre}} </a>
            </li>
        @endforeach
    </ul>
    {{-- 7. crear botones para paginado con $coleccion->metodo link  --}}
    {{$productos->links()}}

@endsection