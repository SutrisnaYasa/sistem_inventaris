<?php $__env->startSection('content'); ?>
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Detail Barang</h1>
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
                    <div class="row">
                        <div class="card card-primary">
                            <div class="card-body">
                                <form action="<?php echo e(route('barcode-data.update', $inventaris->id)); ?>" method="POST">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="mr-4">Nama Barang :</label>
                                                    <h5><?php echo e($inventaris->nama_barang); ?> </h5>
                                                </div>
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="mr-4">Nomor Inventaris :</label>
                                                    <h5><?php echo e($inventaris->nomor_inventaris); ?></h5>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Jenis Barang :</label>
                                                            <h4><?php echo e($inventaris->jenis_barang); ?></h4>
                                                        </div>
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Kode Jenis Barang :</label>
                                                            <h4><?php echo e($inventaris->kode_jenis_barang); ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Kategori Barang :</label>
                                                            <h4><?php echo e($inventaris->kategori_barang); ?></h4>
                                                        </div>
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Kode Kategori Barang :</label>
                                                            <h4><?php echo e($inventaris->kode_kategori); ?></h4>
                                                        </div>
                                                        <div class=" form-group  mb-2 col-md-12">
                                                            <label for="" class="">Pilihan :</label>
                                                            <h4><?php echo e($inventaris->pilihan); ?></h4>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Kode Lokasi :</label>
                                                            <h4><?php echo e($inventaris->kode_lokasi); ?></h4>
                                                        </div>
                                                        <div class=" form-group  mb-2 col-md-6"> <label for=""
                                                                class="">Lokasi
                                                                <h4><?php echo e($inventaris->lokasi); ?></h4>
                                                        </div>

                                                        <div class=" form-group  mb-2 col-md-12"> <label for=""
                                                                class=""> Pilihan 2
                                                                :</label>
                                                            <h4><?php echo e($inventaris->pilihan_02); ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class="form-group mb-2 col-md-6 ">
                                                            <label for="lokasi_lantai" class="">Lokasi Lantai:</label>
                                                            <h4><?php echo e($inventaris->lokasi_lantai); ?></h4>

                                                        </div>
                                                        <div class="form-group mb-2 col-md-6 ">

                                                            <label for="kode_lantai" class="mr-2">Kode Lantai :</label>
                                                            <h4><?php echo e($inventaris->kode_lantai); ?></h4>
                                                        </div>
                                                        <div class="form-group   mb-2 col-md-12 ">

                                                            <label for="pilihan_3" class="">Pilihan 3:</label>
                                                            <h4><?php echo e($inventaris->pilihan_03); ?></h4>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <div class="row">
                                                <div class="form-group mb-2 col-md-12 ">
                                                    <label for="penanggungjawab" class="">Penanggung Jawab</label>
                                                    <h4><?php echo e($inventaris->penanggung_jawab); ?></h4>
                                                </div>

                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class=" form-group mb-2 col-md-6">
                                                            <label for="" class="">Jumlah Barang :</label>
                                                            <h4><?php echo e($inventaris->jumlah); ?></h4>

                                                        </div>
                                                        <div class=" form-group mb-2 col-md-6">
                                                            <label for="" class="mr-2">Kondisi :</label>
                                                            <h4><?php echo e($inventaris->kondisi); ?></h4>

                                                        </div>
                                                        <div class="form-group mb-2 col-md-12 ">
                                                            <label for="" class="mr-2">Pilihan 4:</label>
                                                            <h4><?php echo e($inventaris->pilihan_04); ?></h4>

                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class="form-group mb-2 col-md-6 ">
                                                            <label for="" class="mr-2">Nomer Urut :</label>
                                                            <h4><?php echo e($inventaris->nomor_urut); ?></h4>
                                                        </div>


                                                        <div class="form-group mb-2 col-md-6 ">
                                                            <label for="" class="mr-2">Tahun Pembelian :</label>
                                                            <h4><?php echo e($inventaris->tahun_pembelian); ?></h4>
                                                        </div>

                                                        <div class="form-group mb-2 col-md-12">
                                                            <label for="" class="mr-2">Pilihan 5:</label>
                                                            <h4><?php echo e($inventaris->pilihan_05); ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<?php $__env->stopSection(); ?>
        

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u0453371/public_html/inventaris/resources/views/barcode/detail.blade.php ENDPATH**/ ?>