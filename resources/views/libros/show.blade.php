@extends('layouts.plantilla')
@section('title')
<title>Photo | Mostrar libro</title>
@endsection

@section('content')
 <!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Ver libros</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ver libro</li>
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
                        <label>{{$libro->nombre}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Nivel:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$libro->nivel}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Modo:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>{{$libro->modo}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label>Costo:</label>
                      </div>
                      <div class="col-sm-6">
                        <label>${{$libro->costo}}</label>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



