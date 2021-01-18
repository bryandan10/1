<div class="card-body">
    <h4 class="card-title">Informacion Personal</h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nivel</label>
        <div class="col-sm-9">
            <select name="nivel" class="form-control">
                <option value="">Seleccione...</option>
                @for ($i = 1; $i <= 8; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Periodo</label>
        <div class="col-sm-9">
            <select name="periodo" class="form-control">
                <option value="">Seleccione...</option>
                @for ($i = 1; $i <= 50; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Modo</label>
        <div class="col-sm-9">
            <select name="modo" class="form-control">
                <option value="">Seleccione...</option>
                <option value="Presencial">Presencial</option>
                <option value="Online">Online</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Profesor</label>
        <div class="col-sm-9">
            <select name="idprofesor" class="form-control">
                <option value="">Seleccione...</option>
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
                <option value="">Seleccione...</option>
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
                <option value="">Seleccione...</option>
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
                <input type="text" class="form-control datepicker-autoclose" placeholder="yyyy/mm/dd" name="fechainicio">
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
                <input type="text" class="form-control datepicker-autoclose" placeholder="yyyy/mm/dd" name="fechafin">
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
                <input type="time" class="form-control" name="desde">
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
                <input type="time" class="form-control" name="hasta">
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
                <input name="cupos" type="text" class="form-control" placeholder="Número de cupos" aria-label="Recipient 's username" aria-describedby="basic-addon2">
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
                <input name="costo" type="text" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2">
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