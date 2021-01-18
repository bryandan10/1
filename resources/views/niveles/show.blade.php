@extends('layouts.plantilla')
@section('title')
<title>Photo | Mostrar nivel</title>
@endsection

@section('content')
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
                  <label>Costo:</label>
                </div>
                <div class="col-sm-6">
                  <label>${{$nivel->costo}}</label>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <label>Modo:</label>
                </div>
                <div class="col-sm-6">
                  <label>{{$nivel->modo}}</label>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <label>Periodo:</label>
                </div>
                <div class="col-sm-6">
                  <label>{{$nivel->periodo}}</label>
                </div>
              </div>
            </div>
        </div>
    </div>

@endsection



