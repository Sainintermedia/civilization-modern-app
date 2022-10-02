@extends('layouts.main')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')

    <div class="card card-warning card-outline rounded-0 py-0">
        <div class="card-header py-1">

            <a href={!! route('siode.kependudukan.penduduk.create') !!} type="button" class="card-title btn-sm text-sm rounded-0 bg-gradient-primary"><i
                    class="fa-solid fa-square-plus"></i> Data Penduduk</a>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover table-striped rounded-0 text-sm table-sm py-0">
                <thead>
                    <tr class="text-center">
                        <th style="width: 10px">No</th>
                        <th>No Nik</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Taggal lahir</th>
                        <th style="width: 175px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($populationsubs as $value => $populationsub)
                        <tr class="text-center">
                            <td>{!! $loop->iteration !!}</td>
                            <td>{!! $populationsub->no_nik !!}</td>
                            <td style="text-transform:uppercase">{!! $populationsub->nama !!}</td>
                            <td>{!! $populationsub->jenkel == 1 ? 'LAKI-LAKI' : 'PEREMPUAN' !!}</td>
                            <td style="text-transform:uppercase">{!! $populationsub->tmpt_lahir !!}</td>
                            <td>{!! $populationsub->tgl_lahir !!}</td>
                            <td style="width: 175px">
                                <form method="POST" action="{!! route('siode.kependudukan.penduduk.destroy', $populationsub->id) !!}" class="text-center">
                                    @csrf
                                    @method('delete')
                                    <a href="{!! route('siode.kependudukan.penduduk.show', $populationsub->id) !!}" class="btn bg-gradient-primary btn-xs text-xs">
                                        <i class="fa-solid fa-qrcode"></i> Show</a>
                                    <a href="{!! route('siode.kependudukan.penduduk.edit', $populationsub->id) !!}" class="btn bg-gradient-warning btn-xs text-xs">
                                        <i class="fa-regular fa-square-check"></i> Edit</a>
                                    <button type="submit" class="btn bg-gradient-danger btn-xs text-xs" name="button"><i
                                            class="fa-solid fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <h4>tidak ada data</h4>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr class="text-center">
                        <th>No</th>
                        <th>No Nik</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Taggal lahir</th>
                        <th style="width: 175px">Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


@endsection
@section('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">

    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    {{--  <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">  --}}
@endsection

@section('javas')
    <script src="{!! URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            });
        });
    </script>
@endsection
