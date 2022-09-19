@extends('layouts.main')
@section('title', 'Identitas Desa')
@section('breadcrumb', 'Identitas Desa')
@section('identitas', 'active')
@section('info', 'show')
@section('content')
    <div class="container-fluid p-0">
        <div class="wrapper">
            <form method="POST" action="{{ route('populations.store') }}" enctype="multipart/form-data" autocomplete="off">
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
                                <br />
                                <div class="input-group input-group-sm text-center">
                                    <input type="file" class="hidden" id="file" name="foto">
                                    <input type="text" class="hidden" id="file_path" name="foto">
                                    <input type="hidden" name="old_foto" id="old_foto" value="">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-block btn-flat btn-mb-5"
                                            id="file_browser"><i class="fa fa-upload"></i> Unggah</button>
                                        <button type="button" class="btn btn-danger btn-block btn-flat btn-mb-5"
                                            onclick="kamera();"><i class="fa fa-camera"></i> Kamera</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card card-dark card-outline rounded-0">
                            <div class="card-body text-sm">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">No Kartu Keluarga</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="no_kk"
                                            id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-primary" style="padding:10px">
                                            <strong>Alamat Kartu Keluarga :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">Dusun / Kampung</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="alamat"
                                            id="">
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Rt</label>
                                                <select class="form-select form-control form-control-sm rounded-0"
                                                    aria-label="Default select example">
                                                    <option selected>Open</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="">Rw</label>
                                                <select class="form-select form-control form-control-sm rounded-0"
                                                    aria-label="Default select example">
                                                    <option selected>Open</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Kode Pos</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="alamat"
                                            id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Desa</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="alamat"
                                            id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Kecamatan</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="alamat"
                                            id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Kabupaten / Kota</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="alamat"
                                            id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Provinsi</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="alamat" id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-primary" style="padding:10px">
                                            <strong>Identitas Kepala keluarga :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">No Induk Keluarga (NIK)</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="no_nik" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="no_nik" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Agama</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="no_nik" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Pendidikan</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Jenis Pekerjaan</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Golongan Darah</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
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
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Tanggal Perkawinan</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Hubungan Dalam Keluarga</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
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
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">No Paspor</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">No Kitap</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
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
                                            name="nama" id="">
                                    </div>
                                    <div class="col">
                                        <label for="">Nama ibu</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            name="nama" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
@section('styles')
    <script>
        input[type = "text"] {
            width: 200 px;
        }
    </script>
@endsection

@section('javas')

@endsection
