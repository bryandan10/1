<div class="card-body">
    <h4 class="card-title">Progreso de {{$progreso->user->name}}</h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Primer Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="primer">
                <option value="{{$progreso->primer}}">{{$progreso->primer}}</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Reprobado">Reprobado</option>
                <option value="Matriculado">Matriculado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Segundo Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="segundo">
                <option value="{{$progreso->segundo}}">{{$progreso->segundo}}</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Reprobado">Reprobado</option>
                <option value="Matriculado">Matriculado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tercero Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="tercero">
                <option value="{{$progreso->tercero}}">{{$progreso->tercero}}</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Reprobado">Reprobado</option>
                <option value="Matriculado">Matriculado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Cuarto Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="cuarto">
                <option value="{{$progreso->cuarto}}">{{$progreso->cuarto}}</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Reprobado">Reprobado</option>
                <option value="Matriculado">Matriculado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Quinto Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="quinto">
                <option value="{{$progreso->quinto}}">{{$progreso->quinto}}</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Reprobado">Reprobado</option>
                <option value="Matriculado">Matriculado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sexto Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="sexto">
                <option value="{{$progreso->sexto}}">{{$progreso->sexto}}</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Reprobado">Reprobado</option>
                <option value="Matriculado">Matriculado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Septimo Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="septimo">
                <option value="{{$progreso->septimo}}">{{$progreso->septimo}}</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Reprobado">Reprobado</option>
                <option value="Matriculado">Matriculado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Octavo Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="octavo">
                <option value="{{$progreso->octavo}}">{{$progreso->octavo}}</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Reprobado">Reprobado</option>
                <option value="Matriculado">Matriculado</option>
            </select>
        </div>
    </div>
</div>
<div class="border-top">
    <div class="card-body">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>