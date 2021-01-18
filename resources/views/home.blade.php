@extends('layouts.plantilla')
@section('title')
<title>Photo | Home</title>
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Información Básica</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
            <div class="col-md-6">
                <div class="card">
                    <form method="POST" class="form-horizontal" action="{{ route('informacion.personal') }}">
                        @csrf
                        <div class="card-body">
                            <input name="id" type="hidden" name="id" value="{{Auth::user()->id}}">
                            <h4 class="card-title">Informacion Personal</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Primer Nombre</label>
                                <div class="col-sm-9">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Nombres" value="{{Auth::user()->name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Apellido</label>
                                <div class="col-sm-9">
                                    <input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellidos" value="{{Auth::user()->apellido}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Cédula</label>
                                <div class="col-sm-9">
                                    <input name="cedula" type="text" class="form-control" id="cedula" placeholder="Cédula o Ruc" value="{{Auth::user()->cedula}}" pattern="[0-9]{10}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                <div class="col-sm-9">
                                    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Número de telefono" value="{{Auth::user()->telefono}}" pattern="[0-9]{10}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Dirección</label>
                                <div class="col-sm-9">
                                    <textarea name="direccion" id="direccion" class="form-control" required>{{Auth::user()->direccion}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

