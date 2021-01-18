<?php $__env->startSection('title'); ?>
<title>MLS | Matriculas</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Listado Matriculas</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Matriculas</li>
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Matriculas Disponibles</h5>
                    <div class="col-sm-12">
                        <div class="row">
                            <?php
                                $cont = 0;  
                            ?>
                            <div class="card card-hover col-sm-3">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white">1</h1>
                                    <h6 class="text-white">Nivel</h6>
                                    <h6 class="text-white"><?php echo e($progreso->primer); ?></h6>
                                    <?php if($progreso->primer == "Pendiente" || $progreso->primer == "Reprobado"): ?>
                                        <?php if($cont == 0 ): ?>
                                            <?php
                                                $cont++;
                                            ?>
                                            <a href="<?php echo e(route('matriculas.create', 1)); ?>" class ="btn btn-sm btn-light"><i class=' far fa-check-square'></i>
                                            Matricular</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card card-hover col-sm-3">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">2</h1>
                                    <h6 class="text-white">Nivel</h6>
                                    <h6 class="text-white"><?php echo e($progreso->segundo); ?></h6>
                                    <?php if($progreso->segundo == "Pendiente" || $progreso->segundo == "Reprobado"): ?>
                                        <?php if($cont == 0 && $progreso->primer != "Matriculado"): ?>
                                            <?php
                                                $cont++;
                                            ?>
                                            <a href="<?php echo e(route('matriculas.create', 2)); ?>" class ="btn btn-sm btn-light"><i class=' far fa-check-square'></i>
                                            Matricular</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card card-hover col-sm-3">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-white">3</h1>
                                    <h6 class="text-white">Nivel</h6>
                                    <h6 class="text-white"><?php echo e($progreso->tercero); ?></h6>
                                    <?php if($progreso->tercer == "Pendiente" || $progreso->tercer == "Reprobado"): ?>
                                        <?php if($cont == 0 && $progreso->segundo != "Matriculado" && $progreso->primer != "Matriculado"): ?>
                                            <?php
                                                $cont++;
                                            ?>
                                            <a href="<?php echo e(route('matriculas.create', 3)); ?>" class ="btn btn-sm btn-light"><i class=' far fa-check-square'></i>
                                            Matricular</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card card-hover col-sm-3">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white">4</h1>
                                    <h6 class="text-white">Nivel</h6>
                                    <h6 class="text-white"><?php echo e($progreso->cuarto); ?></h6>
                                    <?php if($progreso->cuarto == "Pendiente" || $progreso->cuarto == "Reprobado"): ?>
                                        <?php if($cont == 0 &&  $progreso->segundo != "Matriculado" && $progreso->tercero != "Matriculado" && $progreso->primer != "Matriculado"): ?>
                                            <?php
                                                $cont++;
                                            ?>
                                            <a href="<?php echo e(route('matriculas.create', 4)); ?>" class ="btn btn-sm btn-light"><i class=' far fa-check-square'></i>
                                            Matricular</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card card-hover col-sm-3">
                                <div class="box bg-secondary text-center">
                                    <h1 class="font-light text-white">5</h1>
                                    <h6 class="text-white">Nivel</h6>
                                    <h6 class="text-white"><?php echo e($progreso->quinto); ?></h6>
                                    <?php if($progreso->quinto == "Pendiente" || $progreso->quinto == "Reprobado"): ?>
                                        <?php if($cont == 0 && $progreso->cuarto != "Matriculado" && $progreso->tercero != "Matriculado" && $progreso->segundo != "Matriculado" && $progreso->primer != "Matriculado"): ?>
                                            <?php
                                                $cont++;
                                            ?>
                                            <a href="<?php echo e(route('matriculas.create', 5)); ?>" class ="btn btn-sm btn-light"><i class=' far fa-check-square'></i>
                                            Matricular</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card card-hover col-sm-3">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white">6</h1>
                                    <h6 class="text-white">Nivel</h6>
                                    <h6 class="text-white"><?php echo e($progreso->sexto); ?></h6>
                                    <?php if($progreso->sexto == "Pendiente" || $progreso->sexto == "Reprobado"): ?>
                                        <?php if($cont == 0 && $progreso->quinto != "Matriculado" && $progreso->cuarto != "Matriculado" && $progreso->tercero != "Matriculado" && $progreso->segundo != "Matriculado" && $progreso->primer != "Matriculado"): ?>
                                            <?php
                                                $cont++;
                                            ?>
                                            <a href="<?php echo e(route('matriculas.create', 6)); ?>" class ="btn btn-sm btn-light"><i class=' far fa-check-square'></i>
                                            Matricular</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card card-hover col-sm-3">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white">7</h1>
                                    <h6 class="text-white">Nivel</h6>
                                    <h6 class="text-white"><?php echo e($progreso->septimo); ?></h6>
                                    <?php if($progreso->septimo == "Pendiente" || $progreso->septimo == "Reprobado"): ?>
                                        <?php if($cont == 0 && $progreso->sexto != "Matriculado" && $progreso->quinto != "Matriculado" && $progreso->cuarto != "Matriculado" && $progreso->tercero != "Matriculado" && $progreso->segundo != "Matriculado" && $progreso->primer != "Matriculado"): ?>
                                            <?php
                                                $cont++;
                                            ?>
                                            <a href="<?php echo e(route('matriculas.create', 7)); ?>" class ="btn btn-sm btn-light"><i class=' far fa-check-square'></i>
                                            Matricular</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card card-hover col-sm-3">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white">8</h1>
                                    <h6 class="text-white">Nivel</h6>
                                    <h6 class="text-white"><?php echo e($progreso->octavo); ?></h6>
                                    <?php if($progreso->octavo == "Pendiente" || $progreso->octavo == "Reprobado"): ?>
                                        <?php if($cont == 0 && $progreso->septimo != "Matriculado" && $progreso->sexto != "Matriculado" && $progreso->quinto != "Matriculado" && $progreso->cuarto != "Matriculado" && $progreso->tercero != "Matriculado" && $progreso->segundo != "Matriculado" && $progreso->primer != "Matriculado"): ?>
                                            <?php
                                                $cont++;
                                            ?>
                                            <a href="<?php echo e(route('matriculas.create', 8)); ?>" class ="btn btn-sm btn-light"><i class=' far fa-check-square'></i>
                                            Matricular</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>