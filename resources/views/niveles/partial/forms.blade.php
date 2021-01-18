<div class="card-body">
    <h4 class="card-title">Informacion Personal</h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nivel</label>
        <div class="col-sm-9">
            <select name="nivel" class="form-control">
                <option value="{{$nivel->nivel}}">{{$nivel->nivel}}</option>
                @for ($i = 0; $i <= 8; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Periodo</label>
        <div class="col-sm-9">
            <select name="periodo" class="form-control">
                <option value="{{$nivel->periodo}}">{{$nivel->periodo}}</option>
                @for ($i = 0; $i <= 50; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Modo</label>
        <div class="col-sm-9">
            <select name="modo" class="form-control">
                <option value="{{$nivel->modo}}">{{$nivel->modo}}</option>
                <option value="Presencial">Presencial</option>
                <option value="Online">Online</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Profesor</label>
        <div class="col-sm-9">
            <select name="idprofesor" class="form-control">
                <option value="{{$nivel->idprofesor}}">{{$nivel->profesor->nombre}} {{$nivel->profesor->apellido}}</option>
                @foreach ($profesores as $profesor)
                    <option value="{{$profesor->id}}">{{$profesor->nombre}} {{$profesor->apellido}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Aula</label>
        <div class="col-sm-9">
            <select name="idaula" class="form-control">
                <option value="{{$nivel->idaula}}">{{$nivel->aula->numero}}</option>
                @foreach ($aulas as $aula)
                    <option value="{{$aula->id}}"># {{$aula->numero}}, {{$aula->ubicacion}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Libro</label>
        <div class="col-sm-9">
            <select name="idlibro" class="form-control">
                <option value="{{$nivel->idlibro}}">{{$nivel->libro->nombre}}</option>
                @foreach ($libros as $libro)
                    <option value="{{$libro->id}}"># {{$libro->nivel}}, {{$libro->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Fecha Inicio</label>
        <div class="col-sm-9">
            <div class="input-group">
                <input type="text" class="form-control datepicker-autoclose" placeholder="yyyy/mm/dd" name="fechainicio" value="{{ Carbon\Carbon::parse($nivel->fechainicio)->format('Y-m-d')}}">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Fecha Fin</label>
        <div class="col-sm-9">
            <div class="input-group">
                <input type="text" class="form-control datepicker-autoclose" placeholder="yyyy/mm/dd" name="fechafin" value="{{ Carbon\Carbon::parse($nivel->fechafin)->format('Y-m-d')}}">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Desde</label>
        <div class="col-sm-9">
            <div class="input-group">
                <input type="time" class="form-control" name="desde" value="{{$nivel->desde}}">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-stopwatch"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Hasta</label>
        <div class="col-sm-9">
            <div class="input-group">
                <input type="time" class="form-control" name="hasta" value="{{$nivel->hasta}}">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-stopwatch"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Cupos</label>
        <div class="col-sm-9">
            <div class="input-group">
                <input name="cupos" type="text" class="form-control" placeholder="Número de cupos" aria-label="Recipient 's username" aria-describedby="basic-addon2" value="{{$nivel->cupos}}">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">#</span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Costo</label>
        <div class="col-sm-9">
            <div class="input-group">
                <input name="costo" type="text" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2" value="{{$nivel->costo}}">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">$</span>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="estado" value="Activo">
</div>
<div class="border-top">
    <div class="card-body">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>