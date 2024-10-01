<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Inventaris</h1>
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
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Nama</td>
                                    <td>Jumlah</td>
                                    <td>Jenis Barang</td>
                                    <td>Kategori Barang</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data_inventaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $inventaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($inventaris->nama_barang); ?></td>
                                        <td><?php echo e($inventaris->jumlah); ?></td>
                                        <td><?php echo e($inventaris->jenis_barang); ?></td>
                                        <td><?php echo e($inventaris->kategori_barang); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('barcode-data.edit', $inventaris->id)); ?>"
                                                class="btn  btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?php echo e(route('barcode-data.show', $inventaris->id)); ?>"
                                                class="btn btn-sm btn-warning"><i class="fas fa-info"></i></a>
                                            <button
                                                onclick="delete_form('<?php echo e($inventaris->id); ?>', '<?php echo e($inventaris->nama_barang); ?>')"
                                                class="btn  btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                        <?php echo e($data_inventaris->render()); ?>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <form id="form_delete" action="" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>;
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function delete_form(id, nama_barang) {
            let isHapus = confirm('Apakah Yakin Menghapus Inventaris ' + nama_barang + ' ini ');
            if (isHapus) {
                let form = $('#form_delete');
                let action = "<?php echo route('barcode-data.store'); ?>";
                action += "/" + id;
                form.attr('action', action);
                form.submit();
            }
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u0453371/public_html/inventaris/barcodegenerator/resources/views/barcode/inventaris_all.blade.php ENDPATH**/ ?>