<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculos;
use App\Http\Requests\VehiculoController;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculos::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|string|max:11',
            'modelo' => 'required|string|max:70',
            'propietario' => 'required|string|max:100',
        ]);

        Vehiculos::create($request->all());

        return redirect()->route('vehiculo.index')->with('success', 'Vehículo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculos $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculos $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculos $vehiculo)
    {
        $request->validate([
            'placa' => 'required|string|max:11',
            'modelo' => 'required|string|max:70',
            'propietario' => 'required|string|max:100',
        ]);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculo.index')->with('success', 'Vehículo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculos $vehiculo)
    {
        $vehiculo->delete();

        return redirect()->route('vehiculo.index')->with('success', 'Vehículo eliminado correctamente.');
    }
}
