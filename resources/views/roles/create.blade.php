@extends('layouts.plantilla')
@section('title')
<title>SICT | Crear rol</title>
@endsection

@section('content')

<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Roles</h3> 
             
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  
                  <tbody>
                   {{ Form::open(['route' => 'roles.store']) }}

                        @include('roles.partials.form')
                        
                    {{ Form::close() }}
                  
                  </tbody>
                </table>
                
              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          <!-- /.box -->
    </section>


@endsection