<?php $__env->startSection('title'); ?>
<title>Photo | Home</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Información Básica</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
            <div class="col-md-6">
                <div class="card">
                    <form method="POST" class="form-horizontal" action="<?php echo e(route('informacion.personal')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <input name="id" type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                            <h4 class="card-title">Informacion Personal</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Primer Nombre</label>
                                <div class="col-sm-9">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Nombres" value="<?php echo e(Auth::user()->name); ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Apellido</label>
                                <div class="col-sm-9">
                                    <input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellidos" value="<?php echo e(Auth::user()->apellido); ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Cédula</label>
                                <div class="col-sm-9">
                                    <input name="cedula" type="text" class="form-control" id="cedula" placeholder="Cédula o Ruc" value="<?php echo e(Auth::user()->cedula); ?>" pattern="[0-9]{10}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                <div class="col-sm-9">
                                    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Número de telefono" value="<?php echo e(Auth::user()->telefono); ?>" pattern="[0-9]{10}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Dirección</label>
                                <div class="col-sm-9">
                                    <textarea name="direccion" id="direccion" class="form-control" required><?php echo e(Auth::user()->direccion); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>