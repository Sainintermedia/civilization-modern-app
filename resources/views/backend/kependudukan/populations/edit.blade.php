@extends('layouts.main')
@section('title', 'Anggota Keluarga')
@section('breadcrumb', 'Anggota Keluarga')
@section('content')
    <div class="container-fluid p-0">
        <div class="wrapper">
            <form method="POST" action="{!! route('siode.kependudukan.penduduk.update', $populationsubs->id) !!}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class='col-sm-12'>
                        <div class="form-group bg-secondary" style="padding:2px">
                            <strong>DATA ANGGOTA KELUARGA :</strong>
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
                                        <div class="form-group bg-secondary" style="padding:2px">
                                            <strong>IDENTITAS KEPALA KELUARGA :</strong>
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
                                                    style="text-transform:uppercase" aria-describedby="button-addon2"
                                                    required="required" value="{!! $populationsubs->populations->no_kk !!}" readonly required>
                                                <button class="btn bg-gradient-secondary btn-sm rounded-0"
                                                    style="text-transform:uppercase" type="button" id="button-addon2"
                                                    data-toggle="modal" data-target="#modalFamillies"><i
                                                        class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Nama kepala Keluarga</label>
                                        <input id="nama_kk" type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->nama_kk !!}" required
                                            readonly>
                                        <input id="id_kk" type="hidden" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->no_kk_id !!}" name="no_kk_id"
                                            readonly required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-secondary" style="padding:2px">
                                            <strong>ALAMAT KARTU KELUARGA :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Provinsi</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->provinces->name !!}" name=""
                                            id="provinsi" readonly required>
                                    </div>
                                    <div class="col">
                                        <label for="">Kabupaten / Kota</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->cities->name !!}" name=""
                                            id="kabkot" readonly required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Kecamatan</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->district->name !!}" name=""
                                            id="kecamatan" readonly required>
                                    </div>
                                    <div class="col">
                                        <label for="">Desa</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->village->name !!}" name=""
                                            id="desa" readonly required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">Dusun / Kampung</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->kp !!}" name=""
                                            id="kp" readonly required>
                                    </div>
                                    <div class="col">
                                        <label for="">Rt</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->rt !!}"
                                            name="" id="rt" readonly required>
                                    </div>
                                    <div class="col">
                                        <label for="">Rw</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->rw !!}"
                                            name="" id="rw" readonly required>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Kode Pos</label>
                                        <input type="number" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->populations->kodepos !!}"
                                            name="" id="kodepos" readonly required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-secondary" style="padding:2px">
                                            <strong>IDENTITAS ANGGOTA KELUARGA :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">No Induk Keluarga (NIK)</label>
                                        <input type="number" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->no_nik !!}"
                                            name="no_nik" id="no_nik" required>
                                    </div>
                                    <div class="col">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->nama !!}"
                                            name="nama_kk" id="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Jenis Kelamin</label>
                                        <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                            style="width: 100%;" name="jenkel" id="" required>
                                            <option value="" hidden>Pilih Jenis Kelamin</option>
                                            @foreach ($sexes as $id => $nama)
                                                <option value="{!! $id !!}" {!! $id == $populationsubs->jenkel ? 'selected' : '' !!}>
                                                    {!! $nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->tmpt_lahir !!}"
                                            name="tmpt_lahir" id="" required>
                                    </div>
                                    <div class="col">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->tgl_lahir !!}"
                                            name="tgl_lahir" id="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Agama</label>
                                        <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                            style="width: 100%;" name="agama" id="" required>
                                            <option value="" hidden>Pilih Agama</option>
                                            @foreach ($religions as $id => $nama)
                                                <option value="{!! $id !!}" {!! $id == $populationsubs->agama ? 'selected' : '' !!}>
                                                    {!! $nama !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Pendidikan</label>
                                        <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                            style="width: 100%;" name="pendidikan" id=""required>
                                            <option value="" hidden>Pilih Pendidikan</option>
                                            @foreach ($educations as $id => $nama)
                                                <option value="{!! $id !!}" {!! $id == $populationsubs->pendidikan ? 'selected' : '' !!}>
                                                    {!! $nama !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Jenis Pekerjaan</label>
                                        <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                            style="width: 100%;" name="jns_pekerjaan" id="" required>
                                            <option value="" hidden>Pilih Pekerjaan</option>
                                            @foreach ($works as $id => $nama)
                                                <option value="{!! $id !!}" {!! $id == $populationsubs->jns_pekerjaan ? 'selected' : '' !!}>
                                                    {!! $nama !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Golongan Darah</label>
                                        <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                            style="width: 100%;" name="gol_darah" id="" required>
                                            <option value="" hidden>Pilih Gol. Darah</option>
                                            @foreach ($bloods as $id => $nama)
                                                <option value="{!! $id !!}" {!! $id == $populationsubs->gol_darah ? 'selected' : '' !!}>
                                                    {!! $nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-secondary" style="padding:2px">
                                            <strong>STATUS PERKAWINAN :</strong>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Status Perkawinan</label>
                                        <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                            style="width: 100%;" name="sts_perkawinan" id="" required>
                                            <option value="" hidden>Pilih Status Perkawinan</option>
                                            @foreach ($marries as $id => $nama)
                                                <option value="{!! $id !!}" {!! $id == $populationsubs->sts_perkawinan ? 'selected' : '' !!}>
                                                    {!! $nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Tanggal Perkawinan</label>
                                        <input type="date" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->tgl_perkawinan !!}"
                                            name="tgl_perkawinan" id="tgl_perkawinan">
                                    </div>
                                    <div class="col">
                                        <label for="">Hubungan Dalam Keluarga</label>
                                        <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                            style="width: 100%;" name="sts_hub_kel" id="" required>
                                            <option value="" hidden>Pilih Hubungan</option>
                                            @foreach ($relations as $id => $nama)
                                                <option value="{!! $id !!}" {!! $id == $populationsubs->sts_hub_kel ? 'selected' : '' !!}>
                                                    {!! $nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-secondary" style="padding:2px">
                                            <strong>KEWARGANEGARAAN :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Kewarganegaraan</label>
                                        <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                            style="width: 100%;" name="kwn" id="" required>
                                            <option value="" hidden>Pilih Kewarganegaraan</option>
                                            @foreach ($citizens as $id => $nama)
                                                <option value="{!! $id !!}" {!! $id == $populationsubs->kwn ? 'selected' : '' !!}>
                                                    {!! $nama !!}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">No Paspor</label>
                                        <input type="number" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->no_paspor !!}"
                                            name="no_paspor" id="no_paspor">
                                    </div>
                                    <div class="col">
                                        <label for="">No Kitap</label>
                                        <input type="number" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->no_kitap !!}"
                                            name="no_kitap" id="no_kitap">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <div class="form-group bg-secondary" style="padding:2px">
                                            <strong>NAMA ORANG TUA :</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Nama Ayah</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->nm_ayah !!}"
                                            name="nm_ayah" id="" required>
                                    </div>
                                    <div class="col">
                                        <label for="">Nama ibu</label>
                                        <input type="text" class="form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" value="{!! $populationsubs->nm_ibu !!}"
                                            name="nm_ibu" id="" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm rounded-0"
                                            style="text-transform:uppercase" href="#">
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
    @include('backend.kependudukan.populations.partials.modal-create')
@endsection
@section('styles')
    @include('backend.kependudukan.populations.partials.styles-create')
@endsection

@section('javas')
    @include('backend.kependudukan.populations.partials.javascript-create')
@endsection
