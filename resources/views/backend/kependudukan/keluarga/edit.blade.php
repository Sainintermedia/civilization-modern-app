@extends('layouts.main')
@section('title', 'Kepala keluarga')
@section('breadcrumb', 'Edit Kepala Keluarga')
@section('content')

    <div class="card card-dark card-outline rounded-0">
        <form method="POST" action="{!! route('siode.kependudukan.kepala-keluarga.update', $famillycardmember->id) !!}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            @method('PUT')
            {{--  <input type="text" name="memberid" value="{{ $famillycardmember->id }}">  --}}
            <input type="hidden" name="famillyid" value="{{ $famillycardmember->no_kk }}">
            <div class="card-header">
                <div class="card-title">
                    <strong>EDIT DATA KEPALA KELUARGA</strong>
                </div>
            </div>
            <div class="card-body text-sm">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">No Kartu Keluarga</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="no_kk" id="no_kk"
                                value="{{ $famillycardmember->famillycard->no_kk }}" required>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>ALAMAT KARTU KELUARGA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="provinsi" id="province" required>
                                <option value="" hidden>Pilih Provinsi</option>
                                @foreach ($provinces as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="kabkot" id="city" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="kecamatan" id="district" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Desa</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="desa" id="village" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-0">
                        <div class="form-group">
                            <label for="">Dusun / Kampung</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="kp" id=""
                                value="{{ $famillycardmember->famillycard->kp }}" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rt</label>
                                    <select name="rt" class="form-select form-control form-control-sm rounded-0"
                                        style="text-transform:uppercase" name="rt" required>
                                        @foreach ($rtrw->whereNotNull('rt')->pluck('rt') as $id => $nama)
                                            <option value="{!! $nama !!}" {!! $nama == $famillycardmember->famillycard->rt ? 'selected' : '' !!}>
                                                {!! $nama !!}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rw</label>
                                    <select name="rw" class="form-select form-control form-control-sm rounded-0"
                                        style="text-transform:uppercase" name="rw" required>
                                        @foreach ($rtrw->whereNotNull('rw')->pluck('rw') as $id => $nama)
                                            <option value="{!! $nama !!}" {!! $nama == $famillycardmember->famillycard->rw ? 'selected' : '' !!}>
                                                {!! $nama !!}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="">Kode Pos</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="kodepos" id="" required
                                value="{{ $famillycardmember->famillycard->kodepos }}">
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>IDENTITAS KEPALA KELUARGA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK)</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="no_nik" id="no_nik"
                                value="{{ $famillycardmember->no_nik }}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="nama" id=""
                                value="{{ $famillycardmember->nama }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="jenkel" id="" required>
                                <option value="" hidden>Pilih Jenis Kelamin</option>
                                @foreach ($sexes as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $famillycardmember->jenkel ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tmpt_lahir" id=""
                                value="{{ $famillycardmember->tmpt_lahir }}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tgl_lahir" id=""
                                value="{{ $famillycardmember->tgl_lahir }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="agama" id="" required>
                                <option value="" hidden>Pilih Agama</option>
                                @foreach ($religions as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $famillycardmember->agama ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="pendidikan" id=""required>
                                <option value="" hidden>Pilih Pendidikan</option>
                                @foreach ($educations as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $famillycardmember->pendidikan ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Jenis Pekerjaan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="jns_pekerjaan" id="" required>
                                <option value="" hidden>Pilih Pekerjaan</option>
                                @foreach ($works as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $famillycardmember->jns_pekerjaan ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Golongan Darah</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="gol_darah" id="" required>
                                <option value="" hidden>Pilih Gol. Darah</option>
                                @foreach ($bloods as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $famillycardmember->gol_darah ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>STATUS PERKAWINAN :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Status Perkawinan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="sts_perkawinan" id="" required>
                                <option value="" hidden>Pilih Status Perkawinan</option>
                                @foreach ($marries as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $famillycardmember->sts_perkawinan ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal Perkawinan</label>
                            <input type="date" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tgl_perkawinan"
                                value="{{ $famillycardmember->tgl_perkawinan }}" id="tgl_perkawinan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hubungan Dalam Keluarga</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="sts_hub_kel" id="" required>
                                <option value="1" selected>KEPALA KELUARGA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>KEWARGANEGARAAN :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kewarganegaraan</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="sts_kwn" id="sts_kawin" required>
                                <option value="" hidden>Pilih Kewarganegaraan</option>
                                @foreach ($citizens as $id => $nama)
                                    <option value="{!! $id !!}" {!! $id == $famillycardmember->sts_kwn ? 'selected' : '' !!}>
                                        {!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Paspor</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $famillycardmember->no_paspor }}"
                                name="no_paspor" id="no_paspor">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Kitap</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $famillycardmember->no_kitap }}"
                                name="no_kitap" id="no_kitap">
                        </div>
                    </div>
                </div>
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>ORANG TUA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK) Ayah</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $famillycardmember->nik_ayah }}"
                                name="nik_ayah" id="nik_ayah" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $famillycardmember->nm_ayah }}"
                                name="nm_ayah" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK) Ibu</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $famillycardmember->nik_ibu }}"
                                name="nik_ibu" id="nik_ibu" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama ibu</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" value="{{ $famillycardmember->nm_ibu }}" name="nm_ibu"
                                id="" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="col-6">
                    <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm rounded-0"
                        style="text-transform:uppercase" href="#">
                        {{ trans('Cancel') }}
                    </a>
                    <input type="submit" value="Submit" class="btn bg-gradient-primary rounded-0 btn-sm">
                </div>
            </div>
        </form>
    </div>

@endsection
@section('styles')

    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">

@endsection

@section('scripts')

    <script src="{!! URL::asset('assets/admin/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script>
    <script>
        $(function() {
            $('#province').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.city') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#city').empty();

                        $.each(response.data, function(id, name) {
                            $('#city').append(new Option(name, id))
                        })
                    });
            });
            $('#city').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.district') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#district').empty();

                        $.each(response.data, function(id, name) {
                            $('#district').append(new Option(name, id))
                        })
                    });
            });
            $('#district').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.village') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#village').empty();

                        $.each(response.data, function(id, name) {
                            $('#village').append(new Option(name, id))
                        })
                    });
            });
        });
    </script>

@endsection

{{--  <div class="wrapper">
    <form method="POST" action="{!! route('siode.kependudukan.keluarga.update', $populations->id) !!}" enctype="multipart/form-data" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="row">
            <div class='col-sm-12'>
                <div class="form-group bg-secondary" style="padding:2px">
                    <strong>DATA KEPALA KELUARGA :</strong>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card card-dark card-outline rounded-0">
                    <div class="card-body text-sm">
                        <h3>Input Kartu keluarga</h3>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card card-dark card-outline rounded-0">
                    <div class="card-body text-sm">
                        <div class="row">
                            <div class="col-6">
                                <label for="">No Kartu Keluarga</label>
                                <input type="number" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" name="no_kk" value="{!! $populations->no_kk !!}"
                                    id="no_kk" required>
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
                                <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                    style="width: 100%;" name="provinsi" id="province" required>
                                    <option value="" hidden>Pilih Provinsi</option>
                                    @foreach ($provinces as $id => $name)
                                        <option value="{{ $id }}">
                                            {{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Kabupaten / Kota</label>
                                <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                    style="width: 100%;" name="kabkot" id="city" required>
                                    <option value="" hidden>Pilih Kab/Kota</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="">Kecamatan</label>
                                <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                    style="width: 100%;" name="kecamatan" id="district" required>
                                    <option value="" hidden>Pilih Kab/Kota</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Desa</label>
                                <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                    style="width: 100%;" name="desa" id="village" required>
                                    <option value="" hidden>Pilih Kab/Kota</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <label for="">Dusun / Kampung</label>
                                <input type="text" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" name="kp" id=""
                                    value="{!! $populations->kp !!}" required>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Rt</label>
                                        <select name="rt"
                                            class="form-select form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" name="rt" required>
                                            <option value="" hidden>Open</option>
                                            <option value="001">001</option>
                                            <option value="002">002</option>
                                            <option value="003">003</option>
                                            <option value="004">004</option>
                                            <option value="005">005</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Rw</label>
                                        <select name="rw"
                                            class="form-select form-control form-control-sm rounded-0"
                                            style="text-transform:uppercase" name="rw" required>
                                            <option selected>Open</option>
                                            <option value="001">001</option>
                                            <option value="002">002</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="">Kode Pos</label>
                                <input type="number" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->kodepos !!}" name="kodepos"
                                    id="" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class='col-sm-12'>
                                <div class="form-group bg-secondary" style="padding:2px">
                                    <strong>IDENTITAS KEPALA KELUARGA :</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="">No Induk Keluarga (NIK)</label>
                                <input type="number" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->no_nik !!}" name="no_nik"
                                    id="no_nik" required>
                            </div>
                            <div class="col">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->nama !!}" name="nama"
                                    id="" required>
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
                                        <option value="{!! $id !!}" {!! $id == $populations->populationsub->jenkel ? 'selected' : '' !!}>
                                            {!! $nama !!}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->tmpt_lahir !!}"
                                    name="tmpt_lahir" id="" required>
                            </div>
                            <div class="col">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->tgl_lahir !!}"
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
                                        <option value="{!! $id !!}" {!! $id == $populations->populationsub->agama ? 'selected' : '' !!}>
                                            {!! $nama !!}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Pendidikan</label>
                                <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                    style="width: 100%;" name="pendidikan" id=""required>
                                    <option value="" hidden>Pilih Pendidikan</option>
                                    @foreach ($educations as $id => $nama)
                                        <option value="{!! $id !!}" {!! $id == $populations->populationsub->pendidikan ? 'selected' : '' !!}>
                                            {!! $nama !!}
                                        </option>
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
                                        <option value="{!! $id !!}" {!! $id == $populations->populationsub->jns_pekerjaan ? 'selected' : '' !!}>
                                            {!! $nama !!}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Golongan Darah</label>
                                <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                    style="width: 100%;" name="gol_darah" id="" required>
                                    <option value="" hidden>Pilih Gol. Darah</option>
                                    @foreach ($bloods as $id => $nama)
                                        <option value="{!! $id !!}" {!! $id == $populations->populationsub->gol_darah ? 'selected' : '' !!}>
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
                                        <option value="{!! $id !!}" {!! $id == $populations->populationsub->sts_perkawinan ? 'selected' : '' !!}>
                                            {!! $nama !!}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Tanggal Perkawinan</label>
                                <input type="date" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->tgl_perkawinan !!}"
                                    name="tgl_perkawinan" id="tgl_perkawinan">
                            </div>
                            <div class="col">
                                <label for="">Hubungan Dalam Keluarga</label>
                                <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                    style="width: 100%;" name="sts_hub_kel" id="" required>
                                    <option value="" hidden>Pilih Hubungan</option>
                                    @foreach ($relations as $id => $nama)
                                        <option value="{!! $id !!}" {!! $id == $populations->populationsub->sts_hub_kel ? 'selected' : '' !!}>
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
                                        <option value="{!! $id !!}" {!! $id == $populations->populationsub->kwn ? 'selected' : '' !!}>
                                            {!! $nama !!}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="">No Paspor</label>
                                <input type="number" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->no_paspor !!}"
                                    name="no_paspor" id="np_paspor">
                            </div>
                            <div class="col">
                                <label for="">No Kitap</label>
                                <input type="number" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->no_kitap !!}" name="no_kitap"
                                    id="no_kitap">
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
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->nm_ayah !!}" name="nm_ayah"
                                    id="" required>
                            </div>
                            <div class="col">
                                <label for="">Nama ibu</label>
                                <input type="text" class="form-control form-control-sm rounded-0"
                                    style="text-transform:uppercase" value="{!! $populations->populationsub->nm_ibu !!}" name="nm_ibu"
                                    id="" required>
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
</div>  --}}
