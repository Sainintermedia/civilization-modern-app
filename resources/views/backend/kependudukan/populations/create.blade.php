@extends('layouts.main')
@section('title', 'Kartu keluarga')
@section('breadcrumb', 'Kartu keluarga')
@section('content')
    <div class="container-fluid p-0">
        <div class="wrapper">
            <form method="POST" action="{!! route('siode.populations.store') !!}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="row">
                    <div class='col-sm-12'>
                        <div class="form-group bg-primary" style="padding:10px">
                            <strong>DATA KEPALA KELUARGA :</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="card card-dark card-outline rounded-0">
                            <div class="card-body text-sm">
                                {{-- <img class="penduduk" id="foto"
                                src="https://berputar.opendesa.id/assets/images/pengguna/kuser.png" alt="Foto Penduduk"> --}}
                                <br>
                                {{--  <div class="input-group input-group-sm text-center">
                                    <input type="file" class="hidden" id="file" name="foto">
                                    <input type="text" class="hidden" id="file_path" name="foto">
                                    <input type="hidden" name="old_foto" id="old_foto" value="">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-block btn-flat btn-mb-5"
                                            id="file_browser"><i class="fa fa-upload"></i> Unggah</button>
                                        <button type="button" class="btn btn-danger btn-block btn-flat btn-mb-5"
                                            onclick="kamera();"><i class="fa fa-camera"></i> Kamera</button>
                                    </span>
                                </div>  --}}
                                <h3>Input Kartu keluarga</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card card-dark card-outline rounded-0">
                            <div class="card-body text-sm">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-primary" style="padding:10px">
                                            <strong>Identitas Penduduk :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="inputName">No Kartu Keluarga</label>
                                            <div class="input-group input-group-sm">
                                                <input type="text" name="no_kk" id="no_kk"
                                                    class="form-control form-control-sm rounded-0"
                                                    aria-describedby="button-addon2" required="required" value=""
                                                    readonly required>
                                                <button class="btn btn-outline-secondary btn-sm rounded-0" type="button"
                                                    id="button-addon2" data-toggle="modal" data-target="#modalFamillies"><i
                                                        class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Nama kepala Keluarga</label>
                                        <input id="nama_kk" type="text" class="form-control form-control-sm rounded-0"
                                            required readonly>
                                    </div>
                                    <input id="id_kk" type="hidden" class="form-control form-control-sm rounded-0"
                                        name="no_kk_id" readonly required>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">No Induk Keluarga (NIK)</label>
                                        <input type="number" class="form-control form-control-sm rounded-0" name="no_nik"
                                            id="no_nik" required>
                                    </div>
                                    <div class="col">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="nama_kk"
                                            id="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Jenis Kelamin</label>
                                        <select class="form-control select2 rounded-0" style="width: 100%;" name="jenkel"
                                            id="" required>
                                            <option value="" hidden>Pilih Jenis Kelamin</option>
                                            @foreach ($sexes as $sex)
                                                <option value="{!! $sex->id !!}">{!! $sex->nama !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="tmpt_lahir" id="" required>
                                    </div>
                                    <div class="col">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-sm rounded-0"
                                            name="tgl_lahir" id="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Agama</label>
                                        <select class="form-control select2 rounded-0" style="width: 100%;" name="agama"
                                            id="" required>
                                            <option value="" hidden>Pilih Agama</option>
                                            @foreach ($religions as $religion)
                                                <option value="{!! $religion->id !!}">{!! $religion->nama !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Pendidikan</label>
                                        <select class="form-control select2 rounded-0" style="width: 100%;"
                                            name="pendidikan" id=""required>
                                            <option value="" hidden>Pilih Pendidikan</option>
                                            @foreach ($educations as $education)
                                                <option value="{!! $education->id !!}">{!! $education->nama !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Jenis Pekerjaan</label>
                                        <select class="form-control select2 rounded-0" style="width: 100%;"
                                            name="jns_pekerjaan" id="" required>
                                            <option value="" hidden>Pilih Pekerjaan</option>
                                            @foreach ($works as $work)
                                                <option value="{!! $work->id !!}">{!! $work->nama !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Golongan Darah</label>
                                        <select class="form-control select2 rounded-0" style="width: 100%;"
                                            name="gol_darah" id="" required>
                                            <option value="" hidden>Pilih Gol. Darah</option>
                                            @foreach ($bloods as $blood)
                                                <option value="{!! $blood->id !!}">{!! $blood->nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-primary" style="padding:10px">
                                            <strong>Status perkawinan :</strong>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Status Perkawinan</label>
                                        <select class="form-control select2 rounded-0" style="width: 100%;"
                                            name="sts_perkawinan" id="" required>
                                            <option value="" hidden>Pilih Status Perkawinan</option>
                                            @foreach ($marries as $marry)
                                                <option value="{!! $marry->id !!}">{!! $marry->nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Tanggal Perkawinan</label>
                                        <input type="date" class="form-control form-control-sm rounded-0"
                                            name="tgl_perkawinan" id="tgl_perkawinan" required>
                                    </div>
                                    <div class="col">
                                        <label for="">Hubungan Dalam Keluarga</label>
                                        <select class="form-control select2 rounded-0" style="width: 100%;"
                                            name="sts_hub_kel" id="" required>
                                            <option value="" hidden>Pilih Hubungan</option>
                                            @foreach ($relations as $ralation)
                                                <option value="{!! $ralation->id !!}">{!! $ralation->nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-primary" style="padding:10px">
                                            <strong>Kewarganegaraan :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Kewarganegaraan</label>
                                        <select class="form-control select2 rounded-0" style="width: 100%;"
                                            name="kwn" id="" required>
                                            <option value="" hidden>Pilih Kewarganegaraan</option>
                                            @foreach ($citizens as $citizen)
                                                <option value="{!! $citizen->id !!}">{!! $citizen->nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">No Paspor</label>
                                        <input type="number" class="form-control form-control-sm rounded-0"
                                            name="no_paspor" id="no_paspor">
                                    </div>
                                    <div class="col">
                                        <label for="">No Kitap</label>
                                        <input type="number" class="form-control form-control-sm rounded-0"
                                            name="no_kitap" id="no_kitap">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-primary" style="padding:10px">
                                            <strong>Nama Orang tua :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Nama Ayah</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nm_ayah" id="" required>
                                    </div>
                                    <div class="col">
                                        <label for="">Nama ibu</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nm_ibu" id="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm rounded-0"
                                            href="#">
                                            {{ trans('Cancel') }}
                                        </a>
                                        <input type="submit" value="Submit"
                                            class="btn bg-gradient-primary rounded-0 btn-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modalFamillies" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content rounded-0 text-sm">
                <div class="modal-header">
                    <h5 class="modal-title">Data Kepala Keluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="exampleFamillies" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="" width="15">No</th>
                                <th scope="col">No Kartu keluarga</th>
                                <th scope="col">Nama Kepala Keluarga</th>
                                <th scope="col" class="text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($famillies as $familly)
                                <tr class="">
                                    <td class="text-center">{!! $loop->iteration !!}</td>
                                    <td>{!! $familly->no_kk !!}</td>
                                    <td>{!! $familly->nama_kk !!}</td>
                                    <td scope="row" class="text-center" width="15"><button
                                            class="btnreg btn btn-primary btn-xs text-xs" id="selectFamillies"
                                            data-no_kk="{!! $familly->no_kk !!}" data-id_kk="{!! $familly->id !!}"
                                            data-nama_kk="{!! $familly->nama_kk !!}" data-dismiss="modal" </button>Select
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">


    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

@endsection

@section('javas')
    <script src="{!! URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>

    <script src="https://adminlte.io/themes/v3/plugins/select2/js/select2.full.min.js"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
    </script>
    <script>
        $(function() {
            $("#exampleFamillies").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#selectFamillies', function() {
                var id_kk = $(this).data('id_kk');
                var nama_kk = $(this).data('nama_kk');
                var no_kk = $(this).data('no_kk');
                $('#id_kk').val(id_kk);
                $('#nama_kk').val(nama_kk);
                $('#no_kk').val(no_kk);
            })
        })
    </script>

@endsection
