<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;
use Image;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::paginate();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    protected function random_string()
    {
        $key = '';
        $keys = array_merge( range('a','z'), range(0,9) );
     
        for($i=0; $i<10; $i++)
        {
            $key .= $keys[array_rand($keys)];
        }
     
        return $key;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ruta de las imagenes guardadas
        $ruta = public_path().'/imgs/';
     
        // recogida del form
        $imagenOriginal = $request->file('img');
         
        // crear instancia de imagen
        $imagen = Image::make($imagenOriginal);
         
        // generar un nombre aleatorio para la imagen
        $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
         
        $imagen->resize(320,240);
         
        // guardar imagen
        // save( [ruta], [calidad])
        $imagen->save($ruta . $temp_name, 100);

        $servicios = Servicio::create([
                'descripcion' => $request['descripcion'],
                'costo' => $request['costo'],
                'estado' => "Activo",
                'img' => $temp_name,
        ]);

        return redirect()->route('servicios.index')->with('store', 'Servicio agregado con éxito');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.edit', compact('servicio'));
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
        $servicio = Servicio::find($id);
        if ($request->file('img') != null) 
        {
            // ruta de las imagenes guardadas
            $ruta = public_path().'/imgs/';
         
            // recogida del form
            $imagenOriginal = $request->file('imagen');
             
            // crear instancia de imagen
            $imagen = Image::make($imagenOriginal);
             
            // generar un nombre aleatorio para la imagen
            $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
             
            $imagen->resize(100,100);
             
            // guardar imagen
            // save( [ruta], [calidad])
            $imagen->save($ruta . $temp_name, 100);

            $servicio->update([
                'descripcion' => $request['descripcion'],
                'costo' => $request['costo'],
                'estado' => $request['estado'],
                'img' => $temp_name,
            ]);
        }
        else
        {
            $servicio->update([
                'descripcion' => $request['descripcion'],
                'costo' => $request['costo'],
                'estado' => $request['estado'],
            ]);        
        }
        return redirect()->route('servicios.index')->with('update', 'Editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id)->delete();
        return redirect()->route('servicios.index')->with('delete', 'Servicio eliminado con éxito');;
    }
}
