@extends('layouts.main')
@section('title', 'Pemerintahan Desa')
@section('breadcrumb', 'pemerintahandesa')
@section('pemerintahandesa', ' active')
@section('info', 'show')
@section('content')

    <div class="container-fluid p-0">
        <div class="wrapper">
            <div class="row">
                <div class="col-3">



                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" href="/pemerintahandesa">Buku Peraturan
                            Desa</a>
                        <a class="list-group-item list-group-item-action" href="/buku_keputusan_desa">Buku Keputusan Desa</a>
                        {{-- <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a> --}}
                    </div>
                </div>
                <div class="col-9">
                    <div class="card card-warning card-outline rounded-0 py-0">
                        <div class="card-header py-1">

                            <a href={!! route('populations.create') !!} type="button"
                                class="card-title btn-sm text-sm rounded-0 bg-gradient-primary"><i
                                    class="fa-solid fa-square-plus"></i> Data Penduduk</a>
                        </div>

                        <div class="card-body">
                            <table id="example1"
                                class="table table-bordered table-hover table-striped rounded-0 text-sm table-sm py-0">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 10px">No</th>
                                        <th>Judul</th>
                                        <th>Jenis Peraturan</th>
                                        <th>No./Tgl Ditetapkan</th>
                                        <th>Uraian Singkat</th>
                                        <th>Dimuat Pada</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @forelse ($populations as $value => $population) --}}
                                    <tr class="text-center">
                                        {{-- <td>{!! $loop->iteration !!}</td>
                                            <td>{!! $population->no_kk !!}</td>
                                            @foreach ($population->populationsubs as $value)
                                                <td>{!! $value->no_nik !!}</td>
                                                <td>{!! $value->nama !!}</td>
                                                <td>{!! $value->jenkel == 1 ? 'LAKI-LAKI' : 'PEREMPUAN' !!}</td>
                                                <td>{!! $value->tmpt_lahir !!}</td>
                                                <td>{!! $value->tgl_lahir !!}</td>
                                            @endforeach
                                            <td>S</td> --}}
                                        <td>1</td>
                                        <td>buku desa</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>

                                    </tr>
                                    {{-- @empty --}}
                                    {{-- <h4>tidak  ada data</h4> --}}
                                    {{-- @endforelse --}}
                                </tbody>
                                <tfoot>
                                    <tr class="text-center">
                                        <th style="width: 10px">No</th>
                                        <th>Judul</th>
                                        <th>Jenis Peraturan</th>
                                        <th>No./Tgl Ditetapkan</th>
                                        <th>Uraian Singkat</th>
                                        <th>Dimuat Pada</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
