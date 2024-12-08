@extends('layouts.app')
@section('titulo', 'Gestionar productos')
@section('contenido')


<div class="position-absolute top-50 start-50 translate-middle" >
    <h1 >Gestionar los productos</h1> <br>
    <div class="p-3 mb-2 bg-info text-dark">
    <table>

        <thead >
            <th class="border border-5" >N°</th>
            <th class="border border-5">Nombre</th>
            <th class="border border-5">Marca</th>
            <th class="border border-5">Descripción</th>
            <th class="border border-5">Precio</th>
            <th class="border border-5">Acciones</th>
        </thead>
        <tbody
            @foreach($productos as $p)

                <tr class="border border-5">

                    <td class="border border-5 " >{{ /* $p->id */ $loop->iteration }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->marca }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>{{ $p->precio }}</td>
                    <td>
                        <a href="{{ route('producto.edit', ['id'=>$p->id]) }}" class="rounded-pill text-dark" >Editar </a> <br>



                       <br> <form
                            action="{{ route('producto.destroy', ['id'=>$p->id]) }}"
                            method="POST"
                            onsubmit="return confirm('Seguro?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-primary text-success">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> <br>
    <a href="{{ route('producto.create') }}" class="text-success">Registrar producto</a>
@endsection

</div>
</div>
