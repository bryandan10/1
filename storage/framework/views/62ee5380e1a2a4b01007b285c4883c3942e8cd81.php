<?php $__env->startSection('title'); ?>
<title>SICT | Editar rol</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar roles</h3> 
              

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                    
                  <thead>
                  <tr>
                   <?php echo Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']); ?>


                        <?php echo $__env->make('roles.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        
                    <?php echo Form::close(); ?>

                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            
          </div>
          <!-- /.box -->
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>