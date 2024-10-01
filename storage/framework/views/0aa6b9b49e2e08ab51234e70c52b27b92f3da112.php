<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Barang</h1>
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
                        <form action="<?php echo e(route('barcode-data.store')); ?>" method="POST">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <div class=" form-group  mb-2 col-md-12">
                                            <label for="" class="mr-4">Nama Barang :</label>
                                            <input type="text" name="nama_barang" id="nama_barang" class="form-control  ">
                                        </div>
                                        <div class=" form-group  mb-2 col-md-12">
                                            <label for="" class="mr-4">Nomor Inventaris :</label>
                                            <input type="text" name="nomor_inventaris" id="nomor_inventaris"
                                                class="form-control ">
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Jenis Barang :</label>
                                                    <input type="text" name="jenis_barang" id="jenis_barang"
                                                        class="form-control ">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Kode Jenis Barang :</label>
                                                    <input type="text" name="kode_jenis_barang" id="kode_jenis_barang"
                                                        class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Kategori Barang :</label>
                                                    <input type="text" name="kategori_barang" id="kategori_barang"
                                                        class="form-control ">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Kode Kategori Barang :</label>
                                                    <input type="text" name="kode_kategori" id="kode_kategori_barang"
                                                        class="form-control ">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="">Pilihan :</label>
                                                    <input type="text" name="pilihan" id="pilihan" class="form-control ">
                                                </div>


                                            </div>
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Kode Lokasi :</label>
                                                    <input type="text" name="kode_lokasi" id="kode_lokasi"
                                                        class="form-control ">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-6"> <label for="" class="">Lokasi
                                                        :</label> <input type="text" name="lokasi" id="lokasi"
                                                        class="form-control ">
                                                </div>

                                                <div class=" form-group  mb-2 col-md-12"> <label for="" class=""> Pilihan 2
                                                        :</label> <input type="text" name="pilihan_02" id="pilihan_02"
                                                        class="form-control ">
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group col-md-6 ">
                                    <div class="row">
                                        <div class="form-group mb-2 col-md-12 ">
                                            <label for="penanggungjawab" class="">Penanggung Jawab</label>
                                            <input type="text" name="penanggung_jawab" id="penanggung_jawab"
                                                class="form-control ">

                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class="form-group mb-2 col-md-6 ">
                                                    <label for="lokasi_lantai" class="">Lokasi Lantai:</label>
                                                    <input type="text" name="lokasi_lantai" id="lokasi_lantai"
                                                        class="form-control ">

                                                </div>
                                                <div class="form-group mb-2 col-md-6 ">

                                                    <label for="kode_lantai" class="mr-2">Kode Lantai :</label>
                                                    <input type="text" name="kode_lantai" id="kode_lantai"
                                                        class="form-control ">
                                                </div>
                                                <div class="form-group   mb-2 col-md-12 ">

                                                    <label for="pilihan_3" class="">Pilihan 3:</label>
                                                    <input type="text" name="pilihan_03" id="pilihan_03"
                                                        class="form-control ">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class=" form-group mb-2 col-md-6">
                                                    <label for="" class="">Jumlah Barang :</label>
                                                    <input type="text" name="jumlah_barang" id="jumlah_barang"
                                                        class="form-control ">

                                                </div>
                                                <div class=" form-group mb-2 col-md-6">
                                                    <label for="" class="mr-2">Kondisi :</label>
                                                    <input type="text" class="form-control  " name="kondisi" id="kondisi">

                                                </div>
                                                <div class="form-group mb-2 col-md-12 ">
                                                    <label for="" class="mr-2">Pilihan 4:</label>
                                                    <input type="text" class="form-control  " name="pilihan_04"
                                                        id="pilihan_04">

                                                </div>


                                            </div>
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class="form-group mb-2 col-md-6 ">
                                                    <label for="" class="mr-2">Nomer Urut :</label>
                                                    <input type="text" class="form-control  " name="nomor_urut"
                                                        id="nomor_urut">
                                                </div>


                                                <div class="form-group mb-2 col-md-6 ">
                                                    <label for="" class="mr-2">Tahun Pembelian :</label>
                                                    <input type="number" class="form-control " name="tahun_pembelian"
                                                        id="jumlah_buka">
                                                </div>

                                                <div class="form-group mb-2 col-md-12">
                                                    <label for="" class="mr-2">Pilihan 5:</label>
                                                    <input type="text" class="form-control  " name="pilihan_05"
                                                        id="pilihan_05">
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group mb-2 col-md-12">
                                <button type="submit" class="btn btn-success"> simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u0453371/public_html/inventaris/resources/views/barcode/create.blade.php ENDPATH**/ ?>