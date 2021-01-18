@extends('layouts.plantilla')
@section('title')
<title>SICT | Mostrar usuario</title>
@endsection

@section('content')

<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Mostrar usuario</h3> 
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  
                  <tbody>
                  	<p><strong>Nombre: </strong>{{$user->name}}</p>
                    <p><strong>E-mail: </strong>{{$user->email}}</p> 
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          <!-- /.box -->
    </section>

@endsection