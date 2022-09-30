@extends('layouts.main')
@section('title', 'Wilayah Administratif Kejaroan')
@section('breadcrumb', 'Wilayah Administratif Kejaroan')
{{-- @section('wilayahadministratif', 'active') --}}
@section('info', 'show')
@section('content')

    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">
                            <button type="button" class="btn btn-dark float-right-3" style="margin-right: 5px;">
                                <i class="fas fa-plus"></i> Tambah Kejaroan
                            </button>
                        </h5>
                        <p class="card-text">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Desa</h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Kejaroan</th>
                                            <th>Kepala Kejaroan</th>
                                            <th>RW</th>
                                            <th>RT</th>
                                            <th>KK</th>
                                            <th>L+P</th>
                                            <th>L</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                            </td>
                                            <td>01</td>
                                            <td>Syarif</td>
                                            <td>01</td>
                                            <td>001</td>
                                            <td>5</td>
                                            <td>10</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>edit|delete
                                            </td>
                                            <td>02</td>
                                            <td>EGi</td>
                                            <td>02</td>
                                            <td>007</td>
                                            <td>5</td>
                                            <td>10</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Kejaroan</th>
                                            <th>Kepala Kejaroan</th>
                                            <th>RW</th>
                                            <th>RT</th>
                                            <th>KK</th>
                                            <th>L+P</th>
                                            <th>L</th>
                                            <th>P</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </p>
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
