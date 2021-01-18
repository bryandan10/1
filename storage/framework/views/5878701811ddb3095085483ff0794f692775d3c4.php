<div class="card-body">
    <h4 class="card-title">Matricula de <?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->apellido); ?></h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nivel</label>
        <div class="col-sm-9">
            <input type="text" name="idnivel" value="<?php echo e($nivel->nivel); ?>" readonly="readonly" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Periodo</label>
        <div class="col-sm-9">
            <label class="col-sm-3 control-label col-form-label"><?php echo e($nivel->periodo); ?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Modo</label>
        <div class="col-sm-9">
            <label class="col-sm-3 control-label col-form-label"><?php echo e($nivel->modo); ?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Aula</label>
        <div class="col-sm-9">
            <label class="col-sm-3 control-label col-form-label"><?php echo e($nivel->aula->numero); ?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Incluir libro?</label>
        <div class="col-sm-9">
            <input type="radio" name="bedStatus" id="allot" checked="checked" value="allot">No
            <input type="radio" name="bedStatus" id="transfer" value="transfer">Si
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Inicio</label>
        <div class="col-sm-9">
            <label class="col-sm-4 control-label col-form-label"><?php echo e(Carbon\Carbon::parse($nivel->fechainicio)->format('d-m-Y')); ?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hora</label>
        <div class="col-sm-9">
            <label class="col-sm-4 control-label col-form-label"><?php echo e(Carbon\Carbon::parse($nivel->desde)->format('H:i')); ?> - <?php echo e(Carbon\Carbon::parse($nivel->hasta)->format('H:i')); ?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Costo Nivel</label>
        <div class="col-sm-9">
            <input type="hidden" id="costonivel" value="<?php echo e($nivel->costo); ?>">
            <label class="col-sm-4 control-label col-form-label">$<?php echo e($nivel->costo); ?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Total Nivel</label>
        <div class="col-sm-9">
            <label class="col-sm-4 control-label col-form-label total"><?php echo e($nivel->costo); ?></label>
        </div>
    </div>
    <input type="hidden" id="libro" value="<?php echo e($nivel->libro->costo); ?>">
    <input type="hidden" name="idnivel" value="<?php echo e($nivel->id); ?>">
    <input type="hidden" name="iduser" value="<?php echo e(Auth::user()->id); ?>">
    <input type="hidden" name="idlibro" value="<?php echo e($nivel->idlibro); ?>">
    <input type="hidden" name="estado" value="Activo">
    <input type="hidden" id="suma" name="suma">
</div>
<div class="border-top">
    <div class="card-body">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<script src="<?php echo e(asset('pagina/assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
<script type="text/javascript">
    var total = parseFloat($('#libro').val()) + parseFloat($('#costonivel').val())
    $('input[type=radio][name=bedStatus]').on('change', function() {
  switch ($(this).val()) {
    case 'allot':      
      $('.total').empty();
      $('.total').append($('#costonivel').val());
      $('#suma').val("No");
      break;
    case 'transfer':
      $('.total').empty();
      $('.total').append(total);
      $('#suma').val("Si");
      break;
  }
});
</script>