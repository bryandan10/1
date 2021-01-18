<div class="card-body">
    <h4 class="card-title">Informacion Personal</h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nivel</label>
        <div class="col-sm-9">
            <select name="nivel" class="form-control">
                <option value="">Seleccione...</option>
                <?php for($i = 1; $i <= 8; $i++): ?>
                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Periodo</label>
        <div class="col-sm-9">
            <select name="periodo" class="form-control">
                <option value="">Seleccione...</option>
                <?php for($i = 1; $i <= 50; $i++): ?>
                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                <?php endfor; ?>
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
                <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($profesor->id); ?>"><?php echo e($profesor->nombre); ?> <?php echo e($profesor->apellido); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Aula</label>
        <div class="col-sm-9">
            <select name="idaula" class="form-control">
                <option value="">Seleccione...</option>
                <?php $__currentLoopData = $aulas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($aula->id); ?>"># <?php echo e($aula->numero); ?>, <?php echo e($aula->ubicacion); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Libro</label>
        <div class="col-sm-9">
            <select name="idlibro" class="form-control">
                <option value="">Seleccione...</option>
                <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($libro->id); ?>"># <?php echo e($libro->nivel); ?>, <?php echo e($libro->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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