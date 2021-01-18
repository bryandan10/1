<?php $__env->startSection('title'); ?>
<title>SICT | Roles</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Roles</h3> 
              <?php if (\Shinobi::can('roles.create')): ?>
                    <a href="<?php echo e(route('roles.create')); ?>" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    <?php endif; ?>
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th colspan="6">&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($role->id); ?></td>
                                <td><?php echo e($role->name); ?></td>
                                <td><?php echo e($role->description); ?></td>
                                <td>
                                
                                <?php echo $__env->make('roles.partials.rud', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>                                 

                                </td>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                  </tbody>
                </table>
                <?php echo e($roles->render()); ?>

              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          <!-- /.box -->
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>