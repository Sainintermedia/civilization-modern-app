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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($famillies as $value => $familly)
                        <tr class="text-center">
                            <td>{!! $loop->iteration !!}</td>
                            <td>{!! $familly->no_nik !!}</td>
                            <td>{!! $familly->nama !!}</td>
                            <td>{!! $familly->jenkel == 1 ? 'LAKI-LAKI' : 'PEREMPUAN' !!}</td>
                            <td>{!! $familly->tmpt_lahir !!}</td>
                            <td>{!! $familly->tgl_lahir !!}</td>
                            <td>S</td>
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
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


@endsection
@section('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">
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
