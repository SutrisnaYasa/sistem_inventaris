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
                <div class="card-header">
                    <div class="card-section">
                        <button class="btn btn-primary" onclick="print_data()"><i class="fas fa-print"> Print</i></button>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div id="print-area">
                            <div class="row">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 mb-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 style="font-size: 80% ; text-align:center" class="mx-auto d-block">
                                                    <?php echo e($item->nama_barang); ?>

                                                </h6>
                                            </div>
                                            <div class="col-md-12">
                                                <img class=" mx-auto d-block "
                                                    src=" data:image/png;base64,
                                                                                                                                                                                                                                                                                                                <?php echo e(DNS2D::getBarcodePNG('http://inventaris.primakara.ac.id/detail' . '/' . $item->nomor_inventaris, 'QRCODE', 5, 5)); ?>"
                                                    alt="barcode" srcset=""
                                                    style="width:165px !important ; height:165px !important">


                                            </div>
                                            <div class="col-md-12">
                                                <a href="<?php echo e(route('detail', $item->nomor_inventaris)); ?>">
                                                    <span class="text-center mx-auto d-block " style="font-size: 10px;"><img
                                                            style="margin-right: 10px;" src="<?php echo e(asset('logo.jpeg')); ?>"
                                                            width="30px"><?php echo e($item->nomor_inventaris); ?></span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            Halaman : <?php echo e($data->currentPage()); ?> <br />
                            Jumlah Data : <?php echo e($data->total()); ?> <br />
                            Data Per Halaman : <?php echo e($data->perPage()); ?> <br />


                        </div>
                        <div class="mx-auto"><?php echo e($data->links()); ?></div>

                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function print_data() {
            let originalConten = document.body.innerHTML;
            let printArea = document.getElementById('print-area').innerHTML;

            document.body.innerHTML = printArea;

            window.print();

            document.body.innerHTML = originalConten;




        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u0453371/public_html/inventaris/barcodegenerator/resources/views/barcode/index.blade.php ENDPATH**/ ?>