<div class="card-body">
    <h4 class="card-title">Informacion Personal</h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Numero</label>
        <div class="col-sm-9">
            {{ Form::text('numero', null, ['class' => 'form-control', 'id' => 'numero', 'placeholder' => 'Numero']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Capacidad</label>
        <div class="col-sm-9">
            {{ Form::text('capacidad', null, ['class' => 'form-control', 'id' => 'capacidad', 'placeholder' => 'Capacidad']) }}
        </div>
    </div>
    <div class="form-group row">
        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Ubicacion</label>
        <div class="col-sm-9">
            {{ Form::text('ubicacion', null, ['class' => 'form-control', 'id' => 'ubicacion', 'placeholder' => 'Ubicacion']) }}
        </div>
    </div>
    
    <input type="hidden" name="estado" value="Activo">
</div>
<div class="border-top">
    <div class="card-body">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>