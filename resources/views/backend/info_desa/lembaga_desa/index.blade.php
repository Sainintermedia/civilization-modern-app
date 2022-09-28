@extends('layouts.main')
@section('title', 'Lembaga Desa')
@section('breadcrumb', 'Lembaga Desa')
@section('lembagadesa', 'active')
@section('info', 'show')
@section('content')

    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="card">
                            <div class="card-header">
                                <input class="form-control form-control-sm col-sm-2" type="text"
                                    placeholder=".form-control-sm">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.5
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5.5</td>
                                            <td>A</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
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
