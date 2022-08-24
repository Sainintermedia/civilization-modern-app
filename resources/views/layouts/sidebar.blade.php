<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            <div class="image">
                <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact nav-flat nav-legacy nav-collapse-hide-child layout-fixed text-sm nav-sidebar"
                data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">MENU UTAMA</li>
                <li class="nav-item">
                    <a href="dashboard" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-house-chimney"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item @yield('info')">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-circle-info"></i>
                        <p>
                            {{ trans('Info Desa') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="identitas" class="nav-link @yield('identitas')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Identitas Desa</p>
                            </a>
                        </li>
                        <li class="nav-item @yield('wilayahadministratif')">
                            <a href="wilayahadministratif" class="nav-link @yield('wilayahadministratif')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Wilayah Administratif</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pemerintahan Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="statusdesa" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Status Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lembagadesa" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lembaga Desa</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Layanan Pelanggan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pendaftaran Kerjasama</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-people-group"></i>
                        <p>
                            Kependudukan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penduduk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Keluarga</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rumah Tangga</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kelompok</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Suplemen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Calon Pemilih</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>

</aside>
