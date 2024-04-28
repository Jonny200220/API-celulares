<?php

namespace App\Http\Controllers;

use App\Models\Celular;
use Illuminate\Http\Request;

class CelularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //La funcion index vamos a consultar todas los celulares
        //Y la mostraremos en pantalla con funcion dd
        $celulares = Celular::all();
        // el tabla::all() es como si
        //estucieramos haciedno un Select * from tabla;
        //dd($celulares);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Celular $celular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Celular $celular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Celular $celular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Celular $celular)
    {
        //
    }
}
