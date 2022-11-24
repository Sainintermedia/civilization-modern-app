@extends('layouts.main')
@section('title', 'Kartu keluarga')
@section('breadcrumb', 'Kartu keluarga')
@section('content')

    <div class="card card-dark card-outline rounded-0">
        <form method="POST" action="{!! route('siode.kependudukan.anggota-keluarga.store') !!}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card-header">
                <div class="card-title">
                    <strong>INPUT DATA KEPALA KELUARGA</strong>
                </div>
            </div>
            <div class="card-body text-sm">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">No Kartu Keluarga</label>
                            <div class="input-group input-group-sm">
                                <input type="text" name="no_kk" id="no_kk"
                                    class="form-control form-control-sm rounded-0" style="text-transform:uppercase"
                                    aria-describedby="button-addon2" required="required" value="" readonly required>
                                <button class="btn btn-outline-secondary btn-sm rounded-0" style="text-transform:uppercase"
                                    type="button" id="button-addon2" data-toggle="modal" data-target="#modalFamillies"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="fom-group">
                            <label for="">Nama Kepala Keluarga</label>
                            <input id="nama" type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" required readonly>
                            <input type="hidden" id="id_kk" name="no_kk">
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
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="" id="provinsi" readonly required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="" id="kabkot" readonly required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="" id="kecamatan" readonly required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Desa</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="" id="desa" readonly required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-0">
                        <div class="form-group">
                            <label for="">Dusun / Kampung</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="kp" id="kp" required readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rt</label>
                                    <input type="text" class="form-control form-control-sm rounded-0"
                                        style="text-transform:uppercase" name="" id="rt" readonly required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rw</label>
                                    <input type="text" class="form-control form-control-sm rounded-0"
                                        style="text-transform:uppercase" name="" id="rw" readonly required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="">Kode Pos</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="kodepos" id="kodepos" required readonly>
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
                                style="text-transform:uppercase" name="no_nik" id="no_nik" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="nama" id="" required>
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
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tmpt_lahir" id="" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tgl_lahir" id="" required>
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
                                    <option value="{!! $id !!}">{!! $nama !!}
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
                                    <option value="{!! $id !!}">{!! $nama !!}
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
                                    <option value="{!! $id !!}">{!! $nama !!}
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
                                    <option value="{!! $id !!}">{!! $nama !!}
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
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal Perkawinan</label>
                            <input type="date" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="tgl_perkawinan" id="tgl_perkawinan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hubungan Dalam Keluarga</label>
                            <select class="form-control select2 rounded-0" style="text-transform:uppercase"
                                style="width: 100%;" name="sts_hub_kel" id="" required>
                                <option value="" hidden>Pilih Hubungan</option>
                                @foreach ($relations as $id => $nama)
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
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
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Paspor</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="no_paspor" id="no_paspor">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Kitap</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="no_kitap" id="no_kitap">
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
                                style="text-transform:uppercase" name="nik_ayah" id="nik_ayah" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="nm_ayah" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK) Ibu</label>
                            <input type="number" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="nik_ibu" id="nik_ibu" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama ibu</label>
                            <input type="text" class="form-control form-control-sm rounded-0"
                                style="text-transform:uppercase" name="nm_ibu" id="" required>
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
                    <table id="exampleFamillies" class="table-bordered table-striped table-sm table">
                        <thead>
                            <tr>
                                <th scope="col" class="" width="15">No</th>
                                <th scope="col">No Kartu keluarga</th>
                                <th scope="col">Nama Kepala Keluarga</th>
                                <th scope="col" class="text-center">pilih</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($famillycardmembers as $fcm)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fcm->famillycard->no_kk }}</td>
                                    <td>{{ $fcm->nama }}</td>
                                    <td>
                                        <button class="btnreg btn bg-gradient-info btn-sm rounded-0 text-sm"
                                            id="selectFamillies" data-no_kk="{!! $fcm->famillycard->no_kk !!}"
                                            data-nama="{!! $fcm->nama !!}" data-id_kk="{!! $fcm->famillycard->id !!}"
                                            data-kp="{!! $fcm->famillycard->kp !!}" data-rt="{!! $fcm->famillycard->rt !!}"
                                            data-rw="{!! $fcm->famillycard->rw !!}" data-kodepos="{!! $fcm->famillycard->kodepos !!}"
                                            data-provinsi="{!! $fcm->famillycard->provinces->name !!}"
                                            data-kabkot="{!! $fcm->famillycard->cities->name !!}"
                                            data-kecamatan="{!! $fcm->famillycard->district->name !!}" data-desa="{!! $fcm->famillycard->village->name !!}"
                                            data-dismiss="modal" </button>Select
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

    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">

@endsection

@section('scripts')

    <script src="{!! URL::asset('assets/admin/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>
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
    {{--  <script>
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
    </script>  --}}
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
                var nama = $(this).data('nama');
                var no_kk = $(this).data('no_kk');
                var kp = $(this).data('kp');
                var rt = $(this).data('rt');
                var rw = $(this).data('rw');
                var kodepos = $(this).data('kodepos');
                var desa = $(this).data('desa');
                var kecamatan = $(this).data('kecamatan');
                var kabkot = $(this).data('kabkot');
                var provinsi = $(this).data('provinsi');
                $('#id_kk').val(id_kk);
                $('#nama').val(nama);
                $('#no_kk').val(no_kk);
                $('#kp').val(kp);
                $('#rt').val(rt);
                $('#rw').val(rw);
                $('#kodepos').val(kodepos);
                $('#desa').val(desa);
                $('#kecamatan').val(kecamatan);
                $('#kabkot').val(kabkot);
                $('#provinsi').val(provinsi);
            })
        })
    </script>
@endsection
