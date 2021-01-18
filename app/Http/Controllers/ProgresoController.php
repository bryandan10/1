<?php

namespace App\Http\Controllers;

use App\Progreso;
use App\User;
use Illuminate\Http\Request;

class ProgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('progresos.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('progresos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $progreso = Progreso::where('iduser','=',$id)->first();
        return view('progresos.edit', compact('progreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $progreso = Progreso::find($id);
        $progreso->update($request->all());
        return redirect()->route('progresos.index')->with('update', 'Progreso guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Progreso  $progreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progreso $progreso)
    {
        //
    }
}
