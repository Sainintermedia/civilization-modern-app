<aside class="main-sidebar sidebar-dark-warning elevation-4 text-sm">

    <a href="/dashboard" class="brand-link">
        <img src="{!! URL::asset('assets/admin/dist/img/icon.png') !!}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">SiODe</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
            <div class="image">
                <img src="{{ URL::asset('assets/admin/dist/img/logo.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Desa Cisoka</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact nav-flat nav-collapse-hide-child layout-fixed text-sm nav-sidebar"
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
                    class="nav-item {{ request()->is(['wilayahadministratif', 'identitas', 'pemerintahandesa', 'buku_keputusan_desa']) || request()->is(['wilayahadministratif/*', 'identitas/*', 'pemerintahandesa/*', 'buku_keputusan_desa/*']) ? 'menu-open' : '' }}">
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
                                class="nav-link {{ request()->is('identitas') || request()->is('identitas/*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon text-red"></i>
                                <p>Identitas Desa</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item {{request()->is('wilayahadministratif') ||request()->is('wilayahadministratif/*')? 'menu=open':''}}"> --}}
                        <li class="nav-item">
                            <a href="wilayahadministratif"
                                class="nav-link {{ request()->is('wilayahadministratif') || request()->is('wilayahadministratif/*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Wilayah Administratif</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{!! route('siode.pemerintahandesa.index') !!}"
                                class="nav-link {{ request()->is(['pemerintahandesa', 'buku_keputusan_desa']) || request()->is(['pemerintahandesa/*', 'buku_keputusan_desa/*']) ? 'active' : '' }}">
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
                <li
                    class="nav-item {{ request()->is(['populations', 'famillies']) || request()->is(['populations/*', 'famillies/*']) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is(['populations', 'famillies']) || request()->is(['populations/*', 'famillies/*']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-solid fa-people-group text-info"></i>
                        <p>
                            Kependudukan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{!! route('siode.populations.index') !!}"
                                class="nav-link {{ request()->is(['populations']) || request()->is(['populations/*']) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon text-blue"></i>
                                <p>Penduduk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{!! route('siode.famillies.index') !!}"
                                class="nav-link {{ request()->is(['famillies']) || request()->is(['famillies/*']) ? 'active' : '' }}">
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
                @can('users_manage')
                    <li class="nav-header">Super Admin</li>
                    <li class="nav-item {!! request()->is(['admin/users', 'admin/roles', 'admin/permissions', 'admin/audits']) ||
                    request()->is(['admin/users/*', 'admin/roles/*', 'admin/permissions/*', 'admin/audits/*'])
                        ? 'menu-open'
                        : '' !!}">
                        <a href="#" class="nav-link {!! request()->is(['admin/users', 'admin/roles', 'admin/permissions', 'admin/audits/']) ||
                        request()->is(['admin/users/*', 'admin/roles/*', 'admin/permissions/*', 'admin/audits/*'])
                            ? 'active'
                            : '' !!}">
                            <i class="nav-icon fa-fw fas fa-users text-danger"></i>
                            <p>
                                {!! trans('cruds.userManagement.title') !!}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{!! route('admin.permissions.index') !!}" class="nav-link {!! request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' !!}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">
                                    </i>
                                    <p>{!! trans('cruds.permission.title') !!}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{!! route('admin.roles.index') !!}" class="nav-link {!! request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' !!}">
                                    <i class="fa-fw fas fa-briefcase nav-icon"></i>
                                    <p>{!! trans('cruds.role.title') !!}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{!! route('admin.users.index') !!}" class="nav-link {!! request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' !!}">
                                    <i class="fa-fw fas fa-user nav-icon"></i>
                                    <p>{!! trans('cruds.user.title') !!}</p>
                                </a>
                            </li>
                            {{--  <li class="nav-item">
                                <a href="{!! route('admin.audits.index') !!}" class="nav-link {!! request()->is('admin/audits') || request()->is('admin/audits/*') ? 'active' : '' !!}">
                                    <i class="fa-solid fa-user-secret nav-icon"></i>
                                    <p>Audits</p>
                                </a>
                            </li>  --}}
                        </ul>
                    </li>
                @endcan
                {{-- <li class="nav-item">
                    <a href="{{ route('auth.change_password') }}"
                        class="nav-link {{ request()->is('change_password') || request()->is('change_password') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-fw fa-key">

                        </i>
                        <p>Change password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt">

                        </i>
                        <p>{{ trans('global.logout') }}</p>
                    </a>
                </li> --}}
            </ul>
        </nav>

    </div>

</aside>
