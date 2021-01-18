@extends('layouts.plantilla')
@section('title')
<title>MLS | Libros</title>
@endsection

@section('content')
  <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Listado Libros</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Libros</li>
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
                            <div class="card-body">
                              <div class="pull-right text-right">
                                <a class="btn btn-dark" href="{{ route('libros.create') }}"><i class='fas fa-plus'></i> Registrar Libro</a>
                              </div>
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Nivel</th>
                                                <th>Modo</th>
                                                <th>Costo</th>
                                                <th>Ver</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($libros as $libro)
                                            <tr>
                                              <td>{{$libro->nombre}}</td>
                                              <td>{{$libro->nivel}}</td>
                                              <td>{{$libro->modo}}</td>
                                              <td>{{$libro->costo}}</td>
                                              @include('libros.partial.rud')
                                            </tr>
                                          @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Nivel</th>
                                                <th>Modo</th>
                                                <th>Costo</th>
                                                <th>Ver</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
            </div>
        </div>
    </div>
@endsection