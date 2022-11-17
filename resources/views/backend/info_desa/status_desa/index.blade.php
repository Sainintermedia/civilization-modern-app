@extends('layouts.main')
@section('title', 'Status Desa')
@section('breadcrumb', 'Status Desa')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12">
    <div class="callout callout-info">
    <h5><i class="fas fa-info"></i> Nama Desa:</h5>
    Cisoka Kecamatan Cisoka
    </div>
    
    <div class="invoice p-3 mb-3">
    
    <div class="row">
    <div class="col-12">
    
    </div>
    
    </div>
    
        <div class="row invoice-info">
            <div class="col-sm-2 invoice-col">
            
            </div>
        <div class="col-sm-8 invoice-col">
            <a href="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/50f1e0af-5dcb-489e-ad45-c57a3c7cf6ab" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                <img src="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/50f1e0af-5dcb-489e-ad45-c57a3c7cf6ab" class="img-fluid mb-2" alt="black sample">
                </a>
        <address>
        </div>
        <div class="col-sm-2 invoice-col">
            
        </div>
    
    </div>
    
    
    <div class="row">
    <div class="col-12 table-responsive">
    <table class="table table-bordered table-striped table-hover tabel-rincian">
        <tbody>
          <tr>
            <th colspan="3" class="subtitle_head"><strong>DESA</strong></th>
          </tr>
          <tr>
            <td width="300">Nama Desa</td><td width="1">:</td>
            <td>Waluyojati</td>
          </tr>
          <tr>
            <td>Kode Desa</td><td>:</td>
            <td>18.10.01.2007</td>
          </tr>
          <tr>
            <td>Kode Pos Desa</td><td>:</td>
            <td>37162</td>
          </tr>
          <tr>
            <td>Nama Kepala Desa</td><td>:</td>
            <td>H. AHLUL, S.Pd.I</td>
          </tr>
          <tr>
            <td>NIP Kepala Desa</td><td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Alamat Kantor Desa</td><td>:</td>
            <td>Jl. Raya DAPANDRA</td>
          </tr>
          <tr>
            <td>E-Mail Desa</td><td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Telpon Desa</td><td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Website Desa</td><td>:</td>
            <td></td>
          </tr>
          <tr>
            <th colspan="3" class="subtitle_head"><strong>KECAMATAN</strong></th>
          </tr>
          <tr>
            <td>Nama Kecamatan</td><td>:</td>
            <td>Pringsewu</td>
          </tr>
          <tr>
            <td>Kode Kecamatan</td><td>:</td>
            <td>18.10.01</td>
          </tr>
          <tr>
            <td>Nama Camat</td><td>:</td>
            <td>Qwerty</td>
          </tr>
          <tr>
            <td>NIP Camat</td><td>:</td>
            <td>-</td>
          </tr>
          <tr>
            <th colspan="3" class="subtitle_head"><strong>KABUPATEN</strong></th>
          </tr>
          <tr>
            <td>Nama Kabupaten</td><td>:</td>
            <td>Pringsewu</td>
          </tr>
          <tr>
            <td>Kode Kabupaten</td><td>:</td>
            <td>18.10</td>
          </tr>
          <tr>
            <th colspan="3" class="subtitle_head"><strong>PROVINSI</strong></th>
          </tr>
          <tr>
            <td>Nama Provinsi</td><td>:</td>
            <td>Lampung</td>
          </tr>
          <tr>
            <td>Kode Provinsi</td><td>:</td>
            <td>18</td>
          </tr>
        </tbody>
      </table>
    </div>
    
    </div>
    
    
    
    

    </div>
    
    </div>
    </div>
    </div>
    </section>
@endsection
@section('styles')
    {{-- <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}"> --}}
    {{--  <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">  --}}
@endsection

@section('javas')
    <script src="{!! URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>

    {{-- <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            });
        });
    </script> --}}
@endsection
