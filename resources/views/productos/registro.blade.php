@extends('layouts.app')
@section('titulo', 'Registrar producto')
@section('contenido')
    <h1>Registro de producto</h1>

    <a href="{{ route('producto.index') }}">Gestionar productos</a>

    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="nombre">Nombre del producto</label>
        <input type="text" id="nombre" name="nombre">

        <label for="marca">Marca del producto</label>
        <input type="text" id="marca" name="marca">

        <label for="precio">Precio del producto</label>
        <input type="text" id="precio" name="precio">

        <label for="descripcion">Descripción del producto</label>
        <input type="text" id="descripcion" name="descripcion">

        <button type="submit" class="btn btn-primary">Registrar producto</button>
       

    </form>
@endsection
