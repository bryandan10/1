@extends('layouts.plantilla')
@section('title')
<title>SICT | Roles</title>
@endsection

@section('content')

<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Roles</h3> 
              @can('roles.create')
                    <a href="{{ route('roles.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th colspan="6">&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                <td>
                                
                                @include('roles.partials.rud')                                 

                                </td>
                                
                            </tr>
                            @endforeach
                  
                  </tbody>
                </table>
                {{ $roles->render() }}
              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          <!-- /.box -->
    </section>

@endsection

