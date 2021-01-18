@extends('layouts.plantilla')
@section('title')
<title>SICT | Editar rol</title>
@endsection

@section('content')
<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar roles</h3> 
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                    
                  <thead>
                  <tr>
                   {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']) !!}

                        @include('roles.partials.form')
                        
                    {!! Form::close() !!}
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          <!-- /.box -->
    </section>

@endsection