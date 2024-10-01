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
                    <form class="form-inline" action="" method="GET">
                        <div class=" form-group  mb-2">
                            <div class=" form-group  mx-sm-2">
                                <select class="form-control" name="lokasi_lantai" id="lokasi_lantai">
                                    <option value=""> Pilih Lantai</option>
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
                            <input class="form-control" type="text" name="cari" placeholder="Search" aria-label="Search" value="<?php echo e(request()->get('cari')); ?>">
                        </div>
                        <div>
                            <button class="btn btn-primary my-2 my-sm-0" type="submit" value="cari">Search</button>
                            <input class="btn btn-success my-2 my-sm-0" type="submit" name="export" value="export">
                        </div>                        
                        
                    </div>    
                </div>
            </form>


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
                        <!--<?php echo e($data_inventaris->render()); ?>--> <?php echo e($data_inventaris->appends(request()->input())->links()); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u0453371/public_html/inventaris/resources/views/barcode/inventaris_all.blade.php ENDPATH**/ ?>