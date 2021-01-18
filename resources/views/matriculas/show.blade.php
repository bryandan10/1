@extends('layouts.plantilla')
@section('title')
<title>Photo | Mostrar servicio</title>
@endsection

@section('content')
 <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">Servicio {{$servicio->descripcion}}</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-2">
                <label>Costo:</label>
              </div>
              <div class="col-sm-6">
                <label>${{$servicio->costo}}</label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
                <label>Estado:</label>
              </div>
              <div class="col-sm-6">
                <label>{{$servicio->estado}}</label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
                <label>Imagen:</label>
              </div>
              <div class="col-sm-6">
                <img src="{{ asset('imgs/'.$servicio->img) }}">
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection



