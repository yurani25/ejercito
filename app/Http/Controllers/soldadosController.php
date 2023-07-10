<?php

namespace App\Http\Controllers;

use App\Models\soldado;
use Illuminate\Http\Request;

class soldadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
         return view('soldados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ejercito= new soldado();
        $ejercito->nombre=$request->nombre;
        $ejercito->apellido=$request->apellido;
        $ejercito->descripcion=$request->descripcion;
        $ejercito->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
