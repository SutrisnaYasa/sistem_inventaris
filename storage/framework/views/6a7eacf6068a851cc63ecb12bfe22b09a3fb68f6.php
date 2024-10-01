<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo e(env('APP_NAME', 'Laravel')); ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('stisla/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('stisla/assets/css/components.css')); ?>">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

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

            <footer class="main-footer">
                <div class="footer-left">
                </div>
                <div class="footer-right">
                    Made with <i class="fas fa-heart text-danger"></i> by PPTI STMIK Primakara
                </div>
            </footer>
        </div>
    </div>

</body>
<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="<?php echo e(asset('stisla/assets/js/stisla.js')); ?>"></script>

<!-- Template JS File -->
<script src="<?php echo e(asset('stisla/assets/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('stisla/assets/js/custom.js')); ?>"></script>


</html>
<?php /**PATH /home/u0453371/public_html/inventaris/barcodegenerator/resources/views/barcode/detail.blade.php ENDPATH**/ ?>