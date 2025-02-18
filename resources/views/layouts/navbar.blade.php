<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                @auth
                <div class="d-sm-none d-lg-inline-block">Holla, {{ Auth::user()->name }}</div>
                @endauth
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('profile.index') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger"
                    onclick="document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
        <form action="{{ route('logout') }}" method="POST" id="logout-form">
            @csrf
        </form>
    </ul>
</nav>
