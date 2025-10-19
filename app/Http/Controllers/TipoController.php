<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::orderBy('nombre')->paginate(12);
        return view('tipos.crud.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipos.crud.create');
    }

    public function store(Request $request)
    {
    Log::info('TipoController@store request', $request->all());
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'unidad' => 'required|string|max:10',
            'porcentaje_descuento' => 'nullable|numeric|min:0',
            'activo' => 'sometimes|boolean',
        ]);

        Tipo::create($data);
        return redirect()->route('tipos.index')->with('success', 'Tipo creado.');
    }

    public function show(Tipo $tipo)
    {
        return view('tipos.crud.show', compact('tipo'));
    }

    public function edit(Tipo $tipo)
    {
        return view('tipos.crud.edit', compact('tipo'));
    }

    public function update(Request $request, Tipo $tipo)
    {
    Log::info('TipoController@update request', $request->all());
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'unidad' => 'required|string|max:10',
            'porcentaje_descuento' => 'nullable|numeric|min:0',
            'activo' => 'sometimes|boolean',
        ]);

        $tipo->update($data);
        return redirect()->route('tipos.index')->with('success', 'Tipo actualizado.');
    }

    public function destroy(Tipo $tipo)
    {
        $tipo->delete();
        return redirect()->route('tipos.index')->with('success', 'Tipo eliminado.');
    }
}
