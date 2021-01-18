@extends('layouts.plantilla')
@section('title')
<title>SICT | Mostrar rol</title>
@endsection

@section('content')
<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Rol</h3> 
             
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  
                  <tbody>
                   <p><strong>Nombre: </strong>     {{ $role->name }}</p>
                    <p><strong>Slug: </strong>       {{ $role->slug }}</p>
                    <p><strong>Descripción: </strong>  {{ $role->description }}</p>
                  
                  </tbody>
                </table>
                
              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          <!-- /.box -->
    </section>

@endsection