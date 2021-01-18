<div class="card-body">
    <h4 class="card-title">Informacion del Libro</h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
        <div class="col-sm-9">
            {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'Nombres']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Nivel</label>
        <div class="col-sm-9">
            {{ Form::text('nivel', null, ['class' => 'form-control', 'id' => 'nivel', 'placeholder' => 'Nivel']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Modo</label>
        <div class="col-sm-9">
            {{ Form::text('modo', null, ['class' => 'form-control', 'id' => 'modo', 'placeholder' => 'Modo']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Costo</label>
        <div class="col-sm-9">
            {{ Form::text('costo', null, ['class' => 'form-control', 'id' => 'costo', 'placeholder' => 'Costo']) }}
        </div>
    </div>
    <input type="hidden" name="estado" value="Activo">
</div>
<div class="border-top">
    <div class="card-body">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>