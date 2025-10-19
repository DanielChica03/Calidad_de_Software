<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tipo;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $query = Producto::with('tipo');
        $tipos = Tipo::orderBy('nombre')->get();

        if (request()->filled('tipo_id')) {
            $query->where('tipo_id', request('tipo_id'));
        }

        $productos = $query->paginate(10)->withQueryString();
        return view('productos.crud.index', compact('productos','tipos'));
    }

    public function create()
    {
        $tipos = Tipo::orderBy('nombre')->get();
        return view('productos.crud.create', compact('tipos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0.01',
            'tipo_id' => 'required|exists:tipos,id',
        ]);

        Producto::create($data);
        return redirect()->route('productos.index')->with('success', 'Producto creado.');
    }

    public function show(Producto $producto)
    {
        return view('productos.crud.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $tipos = Tipo::orderBy('nombre')->get();
        return view('productos.crud.edit', compact('producto','tipos'));
    }

    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0.01',
            'tipo_id' => 'required|exists:tipos,id',
        ]);

        $producto->update($data);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado.');
    }
}
