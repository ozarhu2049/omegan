<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
                //traemos todos los registros de la BD
                $clientes = Cliente::all();

                //mostramos en una vista los datos
                return view('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required | email | unique:clientes',        
          ]);
        $clientes = new Cliente();
        $clientes->codigo = $request->get('codigo');
        $clientes->nombre = $request->get('nombre');
        $clientes->apellidos = $request->get('apellidos');
        $clientes->correo = $request->get('correo');
        $clientes->descripcion = $request->get('descripcion');
        $clientes->save();

        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required | email | unique:clientes',        
          ]);

        $clientes = Cliente::find($id);
        $clientes->codigo = $request->get('codigo');
        $clientes->nombre = $request->get('nombre');
        $clientes->apellidos = $request->get('apellidos');
        $clientes->correo = $request->get('correo');
        $clientes->descripcion = $request->get('descripcion');
        $clientes->save();

        return redirect('/cliente')->with('success', 'Formulario validado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientes = Cliente::find($id);        
        $clientes->delete();

        return redirect('/cliente');
    }
}
