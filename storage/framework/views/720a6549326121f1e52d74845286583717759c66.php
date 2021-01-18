<td width="10px">
   <?php if (\Shinobi::can('roles.show')): ?>
   <a href="<?php echo e(route('roles.show', $role->id)); ?>" 
      class="btn btn-sm btn-primary">
   Ver
   </a>
   <?php endif; ?>
</td>
<td width="10px">
   <?php if (\Shinobi::can('roles.edit')): ?>
   <a href="<?php echo e(route('roles.edit', $role->id)); ?>" 
      class="btn btn-sm btn-success">
   Editar
   </a>
   <?php endif; ?>
</td>
<td width="10px">
   <?php if (\Shinobi::can('roles.destroy')): ?>
   <?php echo Form::open(['route' => ['roles.destroy', $role->id], 
   'method' => 'DELETE']); ?>

   <button class="btn btn-sm btn-danger">
   Eliminar
   </button>
   <?php echo Form::close(); ?>

   <?php endif; ?>
</td>