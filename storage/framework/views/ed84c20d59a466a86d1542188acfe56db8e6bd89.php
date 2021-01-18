<?php $__env->startSection('title'); ?>
<title>MLS | Facturas</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Listado Facturas</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Facturas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Datatable</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Número</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Ver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $facturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                      <td><?php echo e($factura->numero); ?></td>
                                      <td><?php echo e($factura->nombre); ?></td>
                                      <td><?php echo e($factura->apellido); ?></td>
                                      <td width="10px">
                                        <?php if (\Shinobi::can('facturas.show')): ?>
                                                <a href="<?php echo e(route('facturas.show', $factura->id)); ?>"
                                                   class ="btn btn-sm btn-primary"><i class='far fa-file-pdf'></i>
                                                    Ver
                                                </a>
                                        <?php endif; ?>
                                        </td>
                                    </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Número</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Ver</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>