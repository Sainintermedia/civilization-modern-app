@extends('layouts.main')
@section('title', 'Identitas Desa')
@section('breadcrumb', 'Identitas Desa')
@section('identitas', 'active')
@section('info', 'show')
@section('content')
    <div class="row">
        <div class="col-mb-12">
            <div class="callout callout-info rounded-0">
                <h5>Nama Desa:</h5>
                {{ $identitas->nm_desa }} KECAMATAN {{ $identitas->nm_kec }}
            </div>
            <div class="card rounded-0">
                <div class="card-header">
                    <div class="card-title">
                        <a href="{!! route('siode.infodesa.identitas-desa.edit', $identitas->id) !!}" type="button"
                            class="card-title btn-sm bg-gradient-primary rounded-0 text-sm"><i
                                class="fa-solid fa-square-pen"></i>
                            Ubah Identitas Desa</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row invoice-info">
                        <div class="col-sm-2 invoice-col">

                        </div>
                        <div class="col-sm-8 invoice-col">
                            <a href="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/50f1e0af-5dcb-489e-ad45-c57a3c7cf6ab"
                                data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                                <img src="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/50f1e0af-5dcb-489e-ad45-c57a3c7cf6ab"
                                    class="img-fluid mb-2" alt="black sample">
                            </a>
                            <address>
                        </div>
                        <div class="col-sm-2 invoice-col">

                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table-bordered table-striped table-hover tabel-rincian table">
                                <tbody>
                                    <tr>
                                        <th colspan="3" class="subtitle_head"><strong>DESA</strong></th>
                                    </tr>
                                    <tr>
                                        <td width="300">Nama Desa</td>
                                        <td width="1">:</td>
                                        <td>{{ $identitas->nm_desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Desa</td>
                                        <td>:</td>
                                        <td>{{ $identitas->kd_desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Pos Desa</td>
                                        <td>:</td>
                                        <td>{{ $identitas->kd_pos_desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kepala Desa</td>
                                        <td>:</td>
                                        <td>{{ $identitas->nm_kepala_desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>NIP Kepala Desa</td>
                                        <td>:</td>
                                        <td>{{ $identitas->nip_kepala_desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Kantor Desa</td>
                                        <td>:</td>
                                        <td>{{ $identitas->alamat_kntr_desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>E-Mail Desa</td>
                                        <td>:</td>
                                        <td>{{ $identitas->email_desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telpon Desa</td>
                                        <td>:</td>
                                        <td>{{ $identitas->tlp_desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Website Desa</td>
                                        <td>:</td>
                                        <td>{{ $identitas->web_desa }}</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="subtitle_head"><strong>KECAMATAN</strong></th>
                                    </tr>
                                    <tr>
                                        <td>Nama Kecamatan</td>
                                        <td>:</td>
                                        <td>{{ $identitas->nm_kec }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Kecamatan</td>
                                        <td>:</td>
                                        <td>{{ $identitas->kd_kec }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Camat</td>
                                        <td>:</td>
                                        <td>{{ $identitas->nm_kec }}</td>
                                    </tr>
                                    <tr>
                                        <td>NIP Camat</td>
                                        <td>:</td>
                                        <td>{{ $identitas->nip_kec }}</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="subtitle_head"><strong>KABUPATEN</strong></th>
                                    </tr>
                                    <tr>
                                        <td>Nama Kabupaten</td>
                                        <td>:</td>
                                        <td>{{ $identitas->nm_kabkot }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Kabupaten</td>
                                        <td>:</td>
                                        <td>{{ $identitas->kd_kabkot }}</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="subtitle_head"><strong>PROVINSI</strong></th>
                                    </tr>
                                    <tr>
                                        <td>Nama Provinsi</td>
                                        <td>:</td>
                                        <td>{{ $identitas->nm_provinsi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Provinsi</td>
                                        <td>:</td>
                                        <td>{{ $identitas->kd_provinsi }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('styles')
    {{-- <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}"> --}}
    {{--  <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">  --}}
@endsection

@section('scripts')
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
