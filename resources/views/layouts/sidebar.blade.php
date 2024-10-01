<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">{{ env('APP_NAME', 'Sistem Inventaris') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">🚀</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dasboard</li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}"> <a class="nav-link"
                    href="{{ route('home') }}"> <i class="fas fa-square"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="dropdown {{ request()->is('barcode/create') || request()->is('inventaris') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-list-alt"></i>
                    <span>Inventaris</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('barcode-data/create') ? 'active' : '' }}"> <a
                            href="{{ route('barcode-data.create') }}" class="nav-link">Tambah Barang</a></li>
                    <li class="{{ request()->is('inventaris') ? 'active' : '' }}"> <a href="{{ route('inventaris') }}"
                            class="nav-link">Semua Inventaris</a></li>
                    <li class="{{ request()->is('barcode') ? 'active' : '' }}"> <a href="{{ route('barcode') }}"
                            class=" nav-link">Barcode</a></li>
                    <li class="{{ request()->is('importExoportView') ? 'active' : '' }}"> <a href="{{ route('importExportView') }}"
                            class=" nav-link">Import Inventaris</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>

