@extends('layouts.plantilla')
@section('title')
<title>SICT | Usuarios</title>
@endsection

@section('content')

<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Usuarios</h3> 
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th colspan="6">&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>
                                    @include('users.partial.rud')
                                </td>
                            </tr>
                    @endforeach
                  
                  </tbody>
                </table>
                {{$users->render()}}
              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          <!-- /.box -->
    </section>

@endsection