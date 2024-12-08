<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoDosController extends Controller
{
    /**
     * Listar todos los productos .
     */
    public function index()
    {
        $productos = Producto::all();

        return view('productos.gestionar',
        compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = Producto::create([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion
        ]);

        if(!$producto){
            echo "Error al registrar producto :(";
            return route('producto.create');
        }
        echo "Producto registrado con exito :)";
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::where('id', $id)->first();
        return view('productos.editar',
        compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::where('id', $id)->update([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion
        ]);

        if(!$producto){
            echo "Producto no actualizado :(";
            return $this->index();
        }
        echo "Producto actualizado con éxito :)";
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::where('id', $id)->delete();
        if(!$producto){
            echo "Error al eliminar el producto :(";
            return $this->index();
        }
        echo "Producto eliminado con éxito :)";
        return $this->index();
    }
}
