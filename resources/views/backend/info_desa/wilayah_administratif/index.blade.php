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
            </div>
    </div>
    </div>

@endsection
@section('styles')
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('javas')
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/pdfmake/vfs_fonts.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>



<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
