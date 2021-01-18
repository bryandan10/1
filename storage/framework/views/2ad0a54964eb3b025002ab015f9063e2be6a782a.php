<td width="10px">
<?php if (\Shinobi::can('niveles.show')): ?>
        <a href="<?php echo e(route('niveles.show', $nivel->id)); ?>"
           class ="btn btn-sm btn-primary"><i class='fa fa-eye'></i>
            Ver
        </a>
<?php endif; ?>
</td>
<td width="10px">

<?php if (\Shinobi::can('niveles.edit')): ?>
        <a href="<?php echo e(route('niveles.edit', $nivel->id)); ?>"
           class ="btn btn-sm btn-success"><i class='fas fa-pencil-alt'></i>
            Editar
        </a>
<?php endif; ?>
</td>
<td width="10px">

<?php if (\Shinobi::can('niveles.destroy')): ?>
        <?php echo Form::open(['route'=> ['niveles.destroy',$nivel->id],
        'method'=>'DELETE']); ?>

        <button class ="btn btn-sm btn-danger"><i class='fa fa-trash'></i>
            Eliminar
        </button>
        <?php echo Form::close(); ?>

<?php endif; ?>
</td>