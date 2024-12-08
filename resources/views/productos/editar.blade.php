@extends('layouts.app')
@section('titulo', 'Editar producto')
@section('contenido')
    <h1>Editar producto</h1>



    <form action="{{ route('producto.update', ['id' => $producto->id ]) }}"
        method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre del producto</label><br>
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}"><br>

        <label for="marca">Marca del producto</label><br>
        <input type="text" id="marca" name="marca" value="{{ $producto->marca }}"><br>

        <label for="precio">Precio del producto</label><br>
        <input type="text" id="precio" name="precio" value="{{ $producto->precio }}"><br>

        <label for="descripcion">Descripción del producto</label><br>
        <input type="text" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}"><br>

        <button type="submit" class="btn btn-outline-primary">Editar producto</button>
    </form>
    <a href="{{ route('producto.index') }}">Gestionar productos</a>
@endsection
