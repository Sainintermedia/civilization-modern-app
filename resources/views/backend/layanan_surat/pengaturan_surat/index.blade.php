@extends('layouts.main')
@section('title', 'Kepala Keluarga')
@section('breadcrumb', 'Kepala Keluarga')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-warning card-outline rounded-0 table-responsive">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{!! route('siode.layanan-surat.pengaturan-surat.create') !!}" type="button"
                            class="card-title btn-sm bg-gradient-primary rounded-0 text-sm"><i
                                class="fa-solid fa-square-plus"></i>
                            Keluarga</a>
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
                {{--  <div class="card-header">
                    <h3 class="card-title">
                        <a href="{!! route('siode.kependudukan.kepala-keluarga.create') !!}" type="button"
                            class="card-title btn-sm bg-gradient-primary text-sm"><i class="fa-solid fa-square-plus"></i>
                            Keluarga</a>
                    </h3>
                    <div class="card-tools">
                        <form method="GET" action="#" autocomplete="off">
                            @csrf
                            <div class="input-group input-group-sm text-sm" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right"
                                    placeholder="Cari kepala keluarga...." id="search" value="{!! old('search') !!}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-default bg-gradient-info">
                                        <i class="fa-brands fa-searchengin"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  --}}
                <div class="card-body">
                    <table id="example1"
                        class="table-bordered table-hover table-striped rounded-0 table-sm table py-0 text-sm">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">No</th>
                                <th>Aksi</th>
                                <th>No KK</th>
                                <th>No NIK</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaturansurat as $item)
                                {{ $item->kop_srt }}
                            @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{--  Halaman : {{ $pengaturansurat->currentPage() }} <br />
                    Jumlah Data : {{ $pengaturansurat->total() }} <br />
                    Data Per Halaman : {{ $pengaturansurat->perPage() }}
                    <ul class="pagination pagination-sm float-right m-0">
                        {{ $pengaturansurat->links() }}
                    </ul>  --}}
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
                    text: "Data " + nama_data + " yang dihapus tidak dapat dikembalikan!",
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
