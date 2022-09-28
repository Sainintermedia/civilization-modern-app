@extends('layouts.main')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')


    <form id="mainform" name="mainform" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <a href="https://berputar.opendesa.id/keluarga/cetak_kk/1"
                            class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            target="_blank"><i class="fa fa-print "></i> Cetak</a>
                        <a href="https://berputar.opendesa.id/keluarga/doc_kk/1"
                            class="btn btn-social btn-flat bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            target="_blank"><i class="fa fa-download"></i> Unduh</a>
                        <a href="https://berputar.opendesa.id/keluarga/anggota/1/1/1"
                            class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            title="Rincian Anggota Keluarga">
                            <i class="fa fa-arrow-circle-left"></i>Kembali Ke Daftar Anggota Keluarga
                        </a>
                        <a href="https://berputar.opendesa.id/keluarga"
                            class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            title="Kembali Ke Daftar Anggota Keluarga">
                            <i class="fa fa-arrow-circle-left"></i>Kembali Ke Daftar Keluarga
                        </a>
                    </div>
                    <div class="box-header">
                        <h3 class="text-center"><strong>SALINAN KARTU KELUARGA</strong></h3>
                        <h5 class="text-center"><strong>No. 5201140104126994 </strong></h5>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ALAMAT</label>
                                    <div class="col-sm-8">
                                        <p class="text-muted">: - MANGSIT</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">RT/RW</label>
                                    <div class="col-sm-9">
                                        <p class="text-muted">: 004 / -</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">DESA / KELURAHAN</label>
                                    <div class="col-sm-9">
                                        <p class="text-muted">: SENGGIG1 </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">KECAMATAN</label>
                                    <div class="col-sm-9">
                                        <p class="text-muted">: BATULAY4R </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">KABUPATEN</label>
                                    <div class="col-sm-7">
                                        <p class="text-muted">: LOMBOK BART </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">KODE POS</label>
                                    <div class="col-sm-7">
                                        <p class="text-muted">: 83355</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">PROVINSI</label>
                                    <div class="col-sm-7">
                                        <p class="text-muted">: NUSA TENGGARA BARAT</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">JUMLAH ANGGOTA</label>
                                    <div class="col-sm-7">
                                        <p class="text-muted">: 3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover ">
                                        <thead class="bg-gray disabled color-palette">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama Lengkap</th>
                                                <th class="text-center">NIK</th>
                                                <th class="text-center">Jenis Kelamin</th>
                                                <th class="text-center">Tempat Lahir</th>
                                                <th class="text-center">Tanggal Lahir</th>
                                                <th class="text-center">Agama</th>
                                                <th class="text-center">Pendidikan</th>
                                                <th class="text-center">Jenis Pekerjaan</th>
                                                <th class="text-center">Golongan Darah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>AHLUL</td>
                                                <td>5201142005716996</td>
                                                <td>LAKI-LAKI</td>
                                                <td>MANGSIT</td>
                                                <td>20-05-1970</td>
                                                <td>ISLAM</td>
                                                <td>STRATA III</td>
                                                <td>TUKANG BATU</td>
                                                <td>TIDAK TAHU</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>AHMAD HABIB</td>
                                                <td>5201140301916995</td>
                                                <td>LAKI-LAKI</td>
                                                <td>MANGSIT</td>
                                                <td>03-01-1990</td>
                                                <td>ISLAM</td>
                                                <td>TAMAT SD / SEDERAJAT</td>
                                                <td>BELUM/TIDAK BEKERJA</td>
                                                <td>TIDAK TAHU</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>AHMAD ALLIF RIZKI</td>
                                                <td>5201140706966997</td>
                                                <td>LAKI-LAKI</td>
                                                <td>MANGSIT</td>
                                                <td>07-06-2007</td>
                                                <td>ISLAM</td>
                                                <td>TIDAK / BELUM SEKOLAH</td>
                                                <td>BELUM/TIDAK BEKERJA</td>
                                                <td>TIDAK TAHU</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover ">
                                        <thead class="bg-gray disabled color-palette">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Status Perkawinan</th>
                                                <th class="text-center">Tanggal Perkawinan</th>
                                                <th class="text-center">Status Hubungan Dalam Keluarga</th>
                                                <th class="text-center">Kewarganegaraan</th>
                                                <th class="text-center">No. Paspor</th>
                                                <th class="text-center">No. KITAS / KITAP</th>
                                                <th class="text-center">Nama Ayah</th>
                                                <th class="text-center">Nama Ibu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>KAWIN BELUM TERCATAT</td>
                                                <td class="text-center">-</td>
                                                <td>KEPALA KELUARGA</td>
                                                <td>WNI</td>
                                                <td></td>
                                                <td></td>
                                                <td>ARFAH</td>
                                                <td>RAISAH</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>BELUM KAWIN</td>
                                                <td class="text-center">-</td>
                                                <td>ANAK</td>
                                                <td>WNI</td>
                                                <td></td>
                                                <td></td>
                                                <td>AHLUL</td>
                                                <td>RUSDAH</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>BELUM KAWIN</td>
                                                <td class="text-center">-</td>
                                                <td>ANAK</td>
                                                <td>WNI</td>
                                                <td></td>
                                                <td></td>
                                                <td>AHLUL</td>
                                                <td>RUSDAH</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-border">
                                        <tbody>
                                            <tr>
                                                <td width="25%">&nbsp;</td>
                                                <td width="50%">&nbsp;</td>
                                                <td class="text-center" width="25%">Senggig1 , 28 September
                                                    2022</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">KEPALA KELUARGA</td>
                                                <td>&nbsp;</td>
                                                <td class="text-center">KEPALA DESA SENGGIG1 </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">AHLUL</td>
                                                <td width="50%">&nbsp;</td>
                                                <td class="text-center">SUPARDI RUSTAM </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




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
