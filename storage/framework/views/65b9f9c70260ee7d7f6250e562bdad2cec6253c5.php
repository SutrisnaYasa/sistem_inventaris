<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href=""><?php echo e(env('APP_NAME', 'Sistem Inventaris')); ?></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">🚀</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dasboard</li>
            <li class="<?php echo e(request()->is('dashboard') ? 'active' : ''); ?>"> <a class="nav-link"
                    href="<?php echo e(route('home')); ?>"> <i class="fas fa-square"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="dropdown <?php echo e(request()->is('barcode/create') || request()->is('inventaris') ? 'active' : ''); ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-list-alt"></i>
                    <span>Inventaris</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(request()->is('barcode-data/create') ? 'active' : ''); ?>"> <a
                            href="<?php echo e(route('barcode-data.create')); ?>" class="nav-link">Tambah Barang</a></li>
                    <li class="<?php echo e(request()->is('inventaris') ? 'active' : ''); ?>"> <a href="<?php echo e(route('inventaris')); ?>"
                            class="nav-link">Semua Inventaris</a></li>
                    <li class="<?php echo e(request()->is('barcode') ? 'active' : ''); ?>"> <a href="<?php echo e(route('barcode')); ?>"
                            class=" nav-link">Barcode</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
<?php /**PATH /home/pamda/Code/Works/inventaris/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>