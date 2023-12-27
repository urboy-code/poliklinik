<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Akun</span>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout')}}" method="POST">
                    @csrf
                    <button type='submit' href="#" class="dropdown-item">
                        <i class="fas fa-user mr-2"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
