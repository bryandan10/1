@extends('layouts.plantilla')
@section('tittle')
<title>MLS | Factura</title>
@endsection
@section('content')
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Factura</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Facturas</li>
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
                        <div class="card card-body printableArea">
                            <h3><b>Factura</b> <span class="pull-right">#{{$factura->numero}}</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">Metropolitan Language School</b></h3>
                                            <p class="text-muted m-l-5">6 de Diceimbre, Robles,
                                                <br/> Nr' Viswakarma Temple,
                                                <br/> Talaja Road,
                                                <br/> Quito - Ecuador</p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h4 class="font-bold">{{$factura->nombre}} {{$factura->apellido}},</h4>
                                            <p class="text-muted m-l-30">{{$factura->cedula}},
                                                <br/> {{$factura->celular}},
                                                <br/> {{$factura->direccion}}</p>
                                            <p class="m-t-30"><b>Fecha Factura :</b> <i class="fa fa-calendar"></i> {{Carbon\Carbon::parse($factura->fecha)->format('d-m-Y')}}</p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Descripción</th>
                                                    <th class="text-right">Cantidad</th>
                                                    <th class="text-right">Costo Unitario</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Matricula Nivel {{$factura->matricula->idnivel}}, modo {{$factura->matricula->nivel->modo}}</td>
                                                    <td class="text-right">1 </td>
                                                    <td class="text-right"> ${{$factura->matricula->nivel->costo}} </td>
                                                    <td class="text-right"> ${{$factura->matricula->nivel->costo}}  </td>
                                                </tr>
                                                @if ($factura->matricula->nivel->costo != $factura->subtotal)
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Libro {{$factura->matricula->libro->nombre}}</td>
                                                        <td class="text-right"> 1 </td>
                                                        <td class="text-right"> ${{$factura->matricula->libro->costo}} </td>
                                                        <td class="text-right"> ${{$factura->matricula->libro->costo}} </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total: ${{$factura->subtotal}}</p>
                                        <hr>
                                        <h3><b>Total :</b> ${{$factura->subtotal}}</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@endsection