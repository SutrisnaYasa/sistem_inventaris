<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Inventaris </h1>
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
                    <form class="form-inline" action="" method="GET">
                        <div class=" form-group  mb-2">
                            <div class=" form-group  mx-sm-2">
                                <select class="form-control" name="lokasi_lantai" id="lokasi_lantai">
                                    <option value=""> Pilih Lantai</option>
                                    <option value="semua"> Semua Lantai</option>
                                    <?php $__currentLoopData = $lokasi_lantais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lokasi_lantai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lokasi_lantai); ?>" <?php echo e(request()->get('lokasi_lantai') == $lokasi_lantai? 'selected' : ''); ?>> <?php echo e($lokasi_lantai); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group mx-sm-2">
                                <select class="form-control"  name="kategori_barang" id="kategori_barang">
                                    <option value=""> Pilih Kategori</option>
                                    <?php $__currentLoopData = $kategori_barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori_barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($kategori_barang); ?>" <?php echo e(request()->get('kategori_barang') == $kategori_barang? 'selected' : ''); ?>> <?php echo e($kategori_barang); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group mx-sm-2">
                                <select class="form-control" name="kondisi" id="kondisi">
                                    <option value=""> Pilih Kondisi</option>
                                    <?php $__currentLoopData = $kondisis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kondisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($kondisi); ?>" <?php echo e(request()->get('kondisi') == $kondisi? 'selected' : ''); ?>> <?php echo e($kondisi); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group mx-sm-2">
                                <select class="form-control"  name="jenis_barang" id="jenis_barang">
                                    <option value=""> Pilih Jenis Barang</option>
                                    <?php $__currentLoopData = $jenis_barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($jenis_barang); ?>" <?php echo e(request()->get('jenis_barang') == $jenis_barang? 'selected' : ''); ?>> <?php echo e($jenis_barang); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group mx-sm-2">
                                <select class="form-control"  name="tahun_pembelian" id="tahun_pembelian">
                                    <option value=""> Pilih Tahun Pembelian</option>
                                    <?php $__currentLoopData = $tahun_pembelians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun_pembelian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tahun_pembelian); ?>" <?php echo e(request()->get('tahun_pembelian') == $tahun_pembelian? 'selected' : ''); ?>> <?php echo e($tahun_pembelian); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group mx-sm-2">
                            <input class="form-control" type="text" name="cari" placeholder="Search" aria-label="Search" value="<?php echo e(request()->get('cari')); ?>" >
                        </div>
                        <div>
                            <button class="btn btn-primary my-2 my-sm-0" type="submit" value="cari">Search</button>
                            <input class="btn btn-success my-2 my-sm-0" type="submit" name="export" value="export">
                        </div>
                    </div>    
                </div>
            </form>
                      
            <div class="card ">
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
                                                            style="margin-right: 10px;" src="<?php echo e(asset('logo.png')); ?>"
                                                            width="50px"><?php echo e($item->nomor_inventaris); ?></span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function print_data() {
            let originalConten = document.body.innerHTML;
            let printArea = document.getElementById('print-area').innerHTML;

            let printWindow = window.open("", "wnd");
            printWindow.document.write(document.documentElement.outerHTML);
            printWindow.document.body.innerHTML = printArea;
            
            
            //document.body.innerHTML = printArea;
            
            //window.print();

            //document.body.innerHTML = originalConten;
        }

    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u0453371/public_html/inventaris/resources/views/barcode/index.blade.php ENDPATH**/ ?>