@extends('layouts.plantilla')
@section('title')
<title>Photo | Mostrar aula</title>
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Ver Aulas</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ver Aula</li>
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
                        <label>Numero:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$aula->numero}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Capacidad:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$aula->capacidad}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Ubicacion:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$aula->ubicacion}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Estado:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$aula->estado}}</label>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



