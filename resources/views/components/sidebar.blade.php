@section('sidebar')
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.getUser') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Pengguna
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kehadiran.getKehadiran') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Kehadiran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jabatan.getJabatan') }}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Jabatan
                </a>
            </li>


        </ul>

    </div>
</nav>
@endsection