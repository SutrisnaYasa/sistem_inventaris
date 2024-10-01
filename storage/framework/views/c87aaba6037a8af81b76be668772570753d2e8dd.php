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

    <!-- CSS Libraries -->
    <?php echo $__env->yieldContent('style'); ?>

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('stisla/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('stisla/assets/css/components.css')); ?>">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

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

<!-- JS Libraies -->
<?php echo $__env->yieldContent('script'); ?>

<!-- Template JS File -->
<script src="<?php echo e(asset('stisla/assets/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('stisla/assets/js/custom.js')); ?>"></script>


</html>
<?php /**PATH D:\ppti\inventaris\resources\views/layouts/app.blade.php ENDPATH**/ ?>