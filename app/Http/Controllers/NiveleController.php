<?php

namespace App\Http\Controllers;

use App\Nivele;
use App\Profe;
use App\Aula;
use App\Libro;
use Illuminate\Http\Request;

class NiveleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveles = Nivele::all();
        return view('niveles.index', compact('niveles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profe::where('estado','=','Activo')->get();
        $aulas = Aula::where('estado','=','Activo')->get();
        $libros = Libro::where('estado','=','Activo')->get();
        return view('niveles.create', compact('profesores', 'aulas', 'libros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $niveles = Nivele::create($request->all());
        return redirect()->route('niveles.index')->with('store', 'nivel guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nivel = Nivele::find($id);
        return view('niveles.show', compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesores = Profe::where('estado','=','Activo')->get();
        $aulas = Aula::where('estado','=','Activo')->get();
        $libros = Libro::where('estado','=','Activo')->get();
        $nivel = Nivele::find($id);
        return view('niveles.edit', compact('nivel', 'profesores', 'aulas', 'libros'));
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
        $nivel = Nivele::find($id);
        $nivel->update($request->all());
        return redirect()->route('niveles.index')
            ->with('update', 'Nivel guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nivel = Nivele::find($id)->delete();

        return back()->with('delete', 'Eliminado correctamente');
    }
}
