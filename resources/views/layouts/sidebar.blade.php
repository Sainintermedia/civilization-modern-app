<aside class="main-sidebar sidebar-dark-danger elevation-4 text-sm">

    <a href="/dashboard" class="brand-link">
        <img src="assets/admin/dist/img/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">SiODe</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            <div class="image">
                <img src="assets/admin/dist/img/logo.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Desa Cisoka</a>
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
                {{-- <li class="nav-item @yield('info')"> --}}
                <li
                    class="nav-item {{ request()->is(['wilayahadministratif', 'identitas']) || request()->is(['wilayahadministratif/*', 'identitas/*']) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-circle-info text-danger"></i>
                        <p>
                            {{ trans('Info Desa') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="identitas"
                                class="nav-link {{ request()->is('identitas') || request()->is('identitas/*') ? 'active' : 'text-yellow' }}">
                                <i class="far fa-circle nav-icon text-red"></i>
                                <p>Identitas Desa</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item {{request()->is('wilayahadministratif') ||request()->is('wilayahadministratif/*')? 'menu=open':''}}"> --}}
                        <li class="nav-item">
                            <a href="wilayahadministratif"
                                class="nav-link {{ request()->is('wilayahadministratif') || request()->is('wilayahadministratif/*') ? 'active' : 'text-yellow' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Wilayah Administratif</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon text-yellow"></i>
                                <p>Pemerintahan Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="statusdesa" class="nav-link">
                                <i class="far fa-circle nav-icon text-green"></i>
                                <p>Status Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lembagadesa" class="nav-link">
                                <i class="far fa-circle nav-icon text-blue"></i>
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
                        <i class="nav-icon fas fa-solid fa-people-group text-info"></i>
                        <p>
                            Kependudukan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon text-blue"></i>
                                <p>Penduduk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon text-green"></i>
                                <p>Keluarga</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon text-yellow"></i>
                                <p>Rumah Tangga</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon text-red"></i>
                                <p>Kelompok</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon text-purple"></i>
                                <p>Data Suplemen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon text-white"></i>
                                <p>Calon Pemilih</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ request()->is(['bukuadministrasidesaumum']) || request()->is(['bukuadministrasidesaumum']) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book text-success"></i>
                        <p>
                            Buku Administrasi Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="bukuadministrasidesaumum"
                                class="nav-link {{ request()->is('bukuadministrasidesaumum') || request()->is('bukuadministrasidesaumum/*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administrasi Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administrasi Penduduk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administrasi Pembangunan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Arsip Desa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit text-primary"></i>
                        <p>
                            Layanan Surat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengaturan Surat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cetak Surat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Arsip Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Panduan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Persyaratan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie text-warning"></i>
                        <p>
                            Statistik
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>Statistik Kependudukan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Bulanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Penduduk</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-header">Admin</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file text-primary"></i>
                        <p>
                            Absen
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="nav-icon far fa-plus-square text-green"></i>
                                <p>Laporan Absen Staf Desa</p>
                            </a>
                        </li>
                    </ul>

                </li>
            </ul>
        </nav>

    </div>

</aside>
