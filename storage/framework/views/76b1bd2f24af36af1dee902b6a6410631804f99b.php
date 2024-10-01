<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Import Data Inventaris</h1>
            </div>
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <?php echo e(session('success')); ?>

                    </div>
                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <?php echo e(session('error')); ?>

                    </div>
                </div>
            <?php endif; ?>

            <div class="card card-primary">
                <div class="card-body">
                    <div class="row" style="float: right;">
                        <a href ="<?php echo e(asset('contoh_file_import.xlsx')); ?>" >
                            <button class="btn btn-danger">Download Contoh File Import</button>
                        </a>
                    </div>
                        <br><br>
                        <label>Silahkan Pilih File Yang Akan Di Import</label>
                            <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="file" name="file" class="form-control">
                                <br>
                                <button class="btn btn-primary">Import Data Inventaris</button>
                                <!--<a class="btn btn-warning" href="<?php echo e(route('export')); ?>">Export Data Invnetaris</a>-->
                                
                            </form>


                        <!--<div class="card-body">
                        <label>Export Data Inventaris</label>
                            <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <a class="btn btn-danger" href="<?php echo e(route('export')); ?>">Export Data Invnetaris</a>
                            </form>
                        </div>-->
                    </div>
                </div>
            


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ppti\inventaris\resources\views/barcode/import.blade.php ENDPATH**/ ?>