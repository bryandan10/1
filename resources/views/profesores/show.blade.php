@extends('layouts.plantilla')
@section('title')
<title>Photo | Mostrar servicio</title>
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Ver Profesor</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ver Profesor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
 <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Nombre:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$profesor->nombre}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Apellido:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$profesor->apellido}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Cedula:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$profesor->cedula}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Telefono:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$profesor->telefono}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Celular:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$profesor->celular}}</label>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



