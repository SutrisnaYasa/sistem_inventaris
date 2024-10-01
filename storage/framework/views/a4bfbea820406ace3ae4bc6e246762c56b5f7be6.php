<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
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
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <form action="<?php echo e(route('profile.update', $user->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="form-row">
                                    <div class="form-group mb-2 col-md-6">
                                        <div class="row">
                                            <div class="form-group mb-2 col-md-12">
                                                <label for="">Data Diri :</label>
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="mr-4">Nama :</label>
                                                    <input type="text" name="name" id="name" class="form-control  "
                                                        value="<?php echo e($user->name); ?>">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="mr-4">Email : </label>
                                                    <input type="text" name="email" value="<?php echo e($user->email); ?>" id="email"
                                                        class="form-control ">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group  mb-2 col-md-6 ">
                                        <div class="row">
                                            <div class="form-group mb-2 col-md-12">
                                                <label for="label">Ganti Password : </label>
                                                <div class="form-group mb-2  col-md-12">
                                                    <div class="form-group mb-2 col-md-12 ">
                                                        <label for="password" class="">Password :</label>
                                                        <input type="password" name="password" id="password"
                                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  ">

                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="form-group mb-2 col-md-12 ">
                                                        <label for="password" class="">Konfirmasi Password :</label>
                                                        <input type="password" name="konfirm_password" id="konfirm_passoword"
                                                            class="form-control ">
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

            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u0453371/public_html/inventaris/resources/views/auth/profile.blade.php ENDPATH**/ ?>