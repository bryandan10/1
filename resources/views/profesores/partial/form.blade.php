<div class="card-body">
    <h4 class="card-title">Informacion Personal</h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
        <div class="col-sm-9">
            {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'Nombres']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Apellido</label>
        <div class="col-sm-9">
            {{ Form::text('apellido', null, ['class' => 'form-control', 'id' => 'apellido', 'placeholder' => 'Apellido']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Cédula</label>
        <div class="col-sm-9">
            {{ Form::text('cedula', null, ['class' => 'form-control', 'id' => 'cedula', 'placeholder' => 'Cedula']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
        <div class="col-sm-9">
            {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono', 'placeholder' => 'Telefono']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Celular</label>
        <div class="col-sm-9">
            {{ Form::text('celular', null, ['class' => 'form-control', 'id' => 'celular', 'placeholder' => 'Celular']) }}            
        </div>
    </div>
    <input type="hidden" name="estado" value="Activo">
</div>
<div class="border-top">
    <div class="card-body">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>