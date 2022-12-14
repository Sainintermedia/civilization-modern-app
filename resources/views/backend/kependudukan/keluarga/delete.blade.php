@extends('layouts.main')
@section('title', 'Kepala Keluarga')
@section('breadcrumb', 'Kepala Keluarga')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-warning card-outline rounded-0 table-responsive">
                <div class="card-header">
                    <h3 class="card-title">
                        <p>Data yang dihapus</p>
                    </h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1"
                        class="table-bordered table-hover table-striped rounded-0 table-sm table py-0 text-sm">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">No</th>
                                <th>No KK</th>
                                <th>No NIK</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($famillycardmembers as $value => $fm)
                                <tr class="text-center">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $fm->no_kk }}</td>
                                    <td>{{ $fm->no_nik }}</td>
                                    <td style="text-transform:uppercase">{{ $fm->nama }}</td>
                                    <td style="text-transform:uppercase" class="text-center">{{ $fm->tgl_lahir }}</td>
                                    <td style="text-transform:uppercase" class="text-center">{{ $fm->tmpt_lahir }}</td>
                                    <td style="text-transform:uppercase">
                                        {{ $fm->famillycard->kp }}, RT.
                                        {{ $fm->famillycard->rt }}/
                                        {{ $fm->famillycard->rw }}, DS.
                                        {{ $fm->famillycard->villages->name }},
                                        KEC. {{ $fm->famillycard->districts->name }}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group text-center">
                                            {{--  <button type="button" class="btn bg-gradient-success btn-sm"></button>  --}}
                                            <button type="button"
                                                class="btn bg-gradient-success dropdown-toggle dropdown-icon btn-sm"
                                                data-toggle="dropdown">
                                                <span class="bg-gradient-success sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <form method="POST" action="{!! route('siode.kependudukan.kepala-keluarga.kill', $fm->id) !!}" class="text-center">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="dropdown-item bg-gradient-info"
                                                        href="{{ route('siode.kependudukan.kepala-keluarga.show', $fm->id) }}"><i
                                                            class="fa-solid fa-eye"></i>
                                                        View</a>
                                                    <a class="dropdown-item bg-gradient-warning"
                                                        href="{{ route('siode.kependudukan.kepala-keluarga.restore', $fm->id) }}"><i
                                                            class="fa-solid fa-pen"></i>
                                                        Restore</a>
                                                    <a class="dropdown-item bg-gradient-danger show_confirm"
                                                        data-nama="{!! $fm->nama !!}" type="submit"><i
                                                            class="fa-solid fa-trash"></i>
                                                        Delete</a>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                {{--  <td style="width: 175px">
                                        <form method="POST" action="{!! route('siode.kependudukan.keluarga.destroy', $population->id) !!}" class="text-center">
                                            @csrf
                                            @method('delete')
                                            <a href="{!! route('siode.kependudukan.kk') !!}" class="btn bg-gradient-info btn-xs text-xs">
                                                <i class="fa-solid fa-eye"></i> Show</a>
                                            <a href="{!! route('siode.kependudukan.keluarga.edit', $population->id) !!}"
                                                class="btn bg-gradient-warning btn-xs text-xs">
                                                <i class="fa-solid fa-pen"></i> Edit</a>
                                            <button type="submit" class="btn bg-gradient-danger btn-xs text-xs"
                                                name="button"><i class="fa-solid fa-trash"></i> Delete</button>
                                        </form>
                                    </td>  --}}
                            @empty
                                <h4>tidak ada data</h4>
                            @endforelse
                        </tbody>
                        <tfoot>
                            {{--  <tr class="text-center">
                                <th style="width: 10px">No</th>
                                <th>No KK</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>  --}}
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    Jumlah Data : {{ $famillycardmembers->total() }}
                    <ul class="pagination pagination-sm float-right m-0">
                        {{ $famillycardmembers->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')


@endsection
@section('styles')
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
@endsection

@section('scripts')

    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var nama_data = $(this).attr('data-nama');
            event.preventDefault();
            swal({
                    title: `Apakah anda yakin ?`,
                    text: "Data " + nama_data + " yang dihapus pemanent tidak dapat dikembalikan!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal(
                            'Terhapus!',
                            'Data berhasil di Hapus!',
                            'success'
                        )
                    }
                });
        });
    </script>
@endsection
