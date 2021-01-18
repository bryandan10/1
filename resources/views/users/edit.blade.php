@extends('layouts.plantilla')
@section('title')
<title>SICT | Editar usuario</title>
@endsection

@section('content')

<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar usuario</h3> 
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                	
                  <thead>
                  <tr>
                    {!! Form::model($user,['route'=>['users.update',$user->id],
                        'method'=>'PUT']) !!}

                        @include('users.partial.form')

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