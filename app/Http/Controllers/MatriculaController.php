<?php

namespace App\Http\Controllers;

use App\Matricula;
use App\Progreso;
use App\Nivele;
use App\Libro;
use App\Factura;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->id > 1) {
            $progreso = Progreso::where('iduser','=',Auth::user()->id)->first();
            return view('matriculas.index', compact('progreso'));
        } 
        else
        {
            $matriculas = Matricula::all();
            return view('matriculas.indexadmin', compact('matriculas'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $nivel = Nivele::where('nivel','=',$id)->first();
        $disponibilidad = Matricula::where('idnivel','=',$id)->get()->count();
        $libro = Libro::where('nivel','=',$id)->first();
        if (empty($nivel) || $nivel->cupos <= $disponibilidad) {
            return redirect()->route('matriculas.index')->with('error', 'No hay cupos');
        }
        else
        {
            return view('matriculas.create', compact('nivel','libro'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matricula = Matricula::create($request->all());
        $matri = Matricula::orderBy('id', 'DESC')->first();
        $progreso = Progreso::where('iduser','=',Auth::user()->id)->first();
        if ($matri->nivel->nivel == 1) {
            $progreso->update([
                    'primer' => "Matriculado",
                ]);
        } elseif ($matri->nivel->nivel == 2) {
            $progreso->update([
                    'segundo' => "Matriculado",
                ]);
        } elseif ($matri->nivel->nivel == 3) {
            $progreso->update([
                    'tercero' => "Matriculado",
                ]);
        } elseif ($matri->nivel->nivel == 4) {
            $progreso->update([
                    'cuarto' => "Matriculado",
                ]);
        } elseif ($matri->nivel->nivel == 5) {
            $progreso->update([
                    'quinto' => "Matriculado",
                ]);
        } elseif ($matri->nivel->nivel == 6) {
            $progreso->update([
                    'sexto' => "Matriculado",
                ]);
        } elseif ($matri->nivel->nivel == 7) {
            $progreso->update([
                    'septimo' => "Matriculado",
                ]);
        } elseif ($matri->nivel->nivel == 8) {
            $progreso->update([
                    'octavo' => "Matriculado",
                ]);
        };
        $numero=mt_rand(200000,900000);
        $now = Carbon::now();
        if ($request['suma'] == "Si") {
            $subtot = $matri->nivel->libro->costo + $matri->nivel->costo;
            $total = 0.12*$subtot + $subtot;
        }else{
            $subtot = $matri->nivel->costo;
            $total = 0.12*$subtot + $subtot;
        };
        $fac = Factura::create([
            'idmatricula' => $matri->id,
            'numero' => $numero,
            'nombre' => Auth::user()->name,
            'apellido' => Auth::user()->apellido,
            'cedula' => Auth::user()->cedula,
            'celular' => Auth::user()->telefono,
            'direccion' => Auth::user()->direccion,
            'fecha' => $now,
            'compra1' => $matri->idnivel,
            'compra2' => $matri->nivel->idlibro,
            'subtotal' => $subtot,
            'total' => $subtot,
        ]);
        //Genera pdf
        $factura = Factura::orderBy('id', 'DESC')->first();
        $view = view('facturas.pdf', compact('factura'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->save(public_path().'/pdfs/'.$factura->id.'.pdf');
        //Envio de mail
        $data = array('factura' => $factura->id,);
        Mail::send('facturas.headmail', $data, function($msj){
            $id = Auth::id();
            $factura = Factura::orderBy('id', 'DESC')->first();
            $view = view ('facturas.pdf', compact('factura'));
            $msj->subject('Se generó una nueva factura');
            $msj->to(Auth::user()->email);
            $msj->attach(public_path().'/pdfs/'.$factura->id.'.pdf');
            });

        return redirect()->route('matriculas.index')->with('store', 'Matricula guardado con éxito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula $matricula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matricula = Matricula::find($id);
        $factura = Factura::where('idmatricula','=',$matricula->id)->get()->last()->delete();
        $progreso = Progreso::where('iduser','=',$matricula->iduser)->first();
        if ($matricula->nivel->nivel == 1) {
            $progreso->update([
                    'primer' => "Pendiente",
                ]);
        } elseif ($matri->nivel->nivel == 2) {
            $progreso->update([
                    'segundo' => "Pendiente",
                ]);
        } elseif ($matri->nivel->nivel == 3) {
            $progreso->update([
                    'tercero' => "Pendiente",
                ]);
        } elseif ($matri->nivel->nivel == 4) {
            $progreso->update([
                    'cuarto' => "Pendiente",
                ]);
        } elseif ($matri->nivel->nivel == 5) {
            $progreso->update([
                    'quinto' => "Pendiente",
                ]);
        } elseif ($matri->nivel->nivel == 6) {
            $progreso->update([
                    'sexto' => "Pendiente",
                ]);
        } elseif ($matri->nivel->nivel == 7) {
            $progreso->update([
                    'septimo' => "Pendiente",
                ]);
        } elseif ($matri->nivel->nivel == 8) {
            $progreso->update([
                    'octavo' => "Pendiente",
                ]);
        };
        $matricula = Matricula::find($id)->delete();
        return redirect()->route('matriculas.index')->with('delete', 'Matricula eliminado con éxito');
    }
}
