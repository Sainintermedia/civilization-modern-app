@extends('layouts.main2')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')

    <font size="1">

        <div class="book">
            <div class="page">
                <div class="subpage">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card rounded-0 text-sm">
                                <div class="card-body">

                                    <h4 class="text-center"><strong>SALINAN KARTU KELUARGA</strong></h4>
                                    <h5 class="text-center"><strong>No. {{ $famillycard->no_kk }}</strong></h5>

                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-2">
                                            <table class="table-borderless table-sm table text-sm">
                                                <tr>
                                                    <td>Nama Kepala Keluarga</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                </tr>
                                                <tr>
                                                    <td>RT/RW</td>
                                                </tr>
                                                <tr>
                                                    <td>Kode Pos</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-4">
                                            <table class="table-borderless table-sm table text-sm">
                                                <tr>

                                                    @foreach ($famillycard->famillycardmembers->where('sts_hub_kel', 1) as $fam)
                                                        <td>: {{ $fam->nama }}</td>
                                                    @endforeach

                                                </tr>
                                                <tr>
                                                    <td>: {{ $famillycard->kp }}</td>
                                                </tr>
                                                <tr>
                                                    <td>: {{ $famillycard->rt }}/{{ $famillycard->rw }}</td>
                                                </tr>
                                                <tr>
                                                    <td>: {{ $famillycard->kodepos }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-2">
                                            <table class="table-borderless table-sm table text-sm">
                                                <tr>
                                                    <td>Desa/Kelurahan</td>
                                                </tr>
                                                <tr>
                                                    <td>Kecamatan</td>
                                                </tr>
                                                <tr>
                                                    <td>Kabupaten/Kota</td>
                                                </tr>
                                                <tr>
                                                    <td>Provinsi</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-3">
                                            <table class="table-borderless table-sm table text-sm">
                                                <tr>
                                                    <td>: {{ $famillycard->villages->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>: {{ $famillycard->districts->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>: {{ $famillycard->cities->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>: {{ $famillycard->provinces->name }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">

                                            <table class="table-bordered table-sm table text-sm">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" class="text-center"><br>No</th>
                                                        <th rowspan="2" class="text-center"><br>Nama Lengkap</th>
                                                        <th rowspan="2" class="text-center"><br>NIK</th>
                                                        <th rowspan="2" class="text-center">Jenis<br>Kelamin</th>
                                                        <th rowspan="2" class="text-center"><br>Tempat Lahir</th>
                                                        <th rowspan="2" class="text-center">Tanggal<br>Lahir</th>
                                                        <th rowspan="2" class="text-center"><br>Agama</th>
                                                        <th rowspan="2" class="text-center"><br>Pendidikan</th>
                                                        <th rowspan="2" class="text-center"><br>Jenis Pekerjaan</th>
                                                        <th rowspan="2" class="text-center">Golongan<br>Darah</th>
                                                    </tr>
                                                    <tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-center">(1)</td>
                                                        <td class="text-center">(2)</td>
                                                        <td class="text-center">(3)</td>
                                                        <td class="text-center">(4)</td>
                                                        <td class="text-center">(5)</td>
                                                        <td class="text-center">(6)</td>
                                                        <td class="text-center">(7)</td>
                                                        <td class="text-center">(8)</td>
                                                        <td class="text-center">(9)</td>
                                                    </tr>
                                                    @foreach ($famillycard->famillycardmembers as $familly)
                                                        <tr>
                                                            <td class="text-center" style="width: 20px">
                                                                {{ $loop->iteration }}
                                                            </td>
                                                            <td>{{ $familly->nama }}</td>
                                                            <td class="text-center">{{ $familly->no_nik }}</td>
                                                            <td class="text-center">{{ $familly->jeniskelamin->nama }}</td>
                                                            <td class="text-center">{{ $familly->tmpt_lahir }}</td>
                                                            <td class="text-center">{{ $familly->tgl_lahir }}</td>
                                                            <td class="text-center">{{ $familly->agamas->nama }}</td>
                                                            <td class="text-center">{{ $familly->edu->nama }}</td>
                                                            <td class="text-center">{{ $familly->pekerjaan->nama }}</td>
                                                            <td class="text-center">{{ $familly->darah->nama }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table-bordered table-sm table text-sm">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" class="text-center"><br>No.</th>
                                                        <th rowspan="2" class="text-center">Status<br>Perkawinan</th>
                                                        <th rowspan="2" class="text-center">
                                                            Tanggal<br>Perkawinan/Perceraian</th>
                                                        <th rowspan="2" class="text-center">Status Hubungan<br>Dalam
                                                            Keluarga</th>
                                                        <th rowspan="2" class="text-center"><br>Kewarganegaraan</th>
                                                        <th colspan="2" class="text-center">Dokumen Imigrasi</th>
                                                        <th colspan="2" class="text-center">Nama Orang Tua</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">No. Paspor</th>
                                                        <th class="text-center">No. KITAP</th>
                                                        <th class="text-center">Ayah</th>
                                                        <th class="text-center">Ibu</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-center">(10)</td>
                                                        <td class="text-center">(11)</td>
                                                        <td class="text-center">(12)</td>
                                                        <td class="text-center">(13)</td>
                                                        <td class="text-center">(14)</td>
                                                        <td class="text-center">(15)</td>
                                                        <td class="text-center">(16)</td>
                                                        <td class="text-center">(17)</td>
                                                    </tr>
                                                    @foreach ($famillycard->famillycardmembers as $familly)
                                                        <tr>
                                                            <td class="text-center" style="width: 20px">
                                                                {{ $loop->iteration }}
                                                            </td>
                                                            <td class="text-center">{{ $familly->perkawinan->nama }}</td>
                                                            <td class="text-center">{{ $familly->tgl_perkawinan }}</td>
                                                            <td class="text-center">{{ $familly->hubkel->nama }}</td>
                                                            <td class="text-center">{{ $familly->kwn->nama }}</td>
                                                            <td class="text-center">{{ $familly->no_paspor }}</td>
                                                            <td class="text-center">{{ $familly->no_kitap }}</td>
                                                            <td>{{ $familly->nm_ayah }}</td>
                                                            <td>{{ $familly->nm_ibu }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="table">
                                        <div class="row">
                                            <div class="col-2 text-center">&nbsp;</div>
                                            <div class="col-7 text-center">&nbsp;</div>
                                            <div class="col-3 text-center">{{ $famillycard->villages->name }} ,
                                                {{ $tgl }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-center">&nbsp;</div>
                                            <div class="col-7 text-center">&nbsp;</div>
                                            <div class="col-3 text-center">&nbsp;</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 text-center">KEPALA KELUARGA</div>
                                            <div class="col-6 text-center">&nbsp;</div>
                                            <div class="col-3 text-center">KEPALA DESA {{ $famillycard->villages->name }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-center">&nbsp;</div>
                                            <div class="col-8 text-center">&nbsp;</div>
                                            <div class="col-2 text-center">&nbsp;</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-center">&nbsp;</div>
                                            <div class="col-8 text-center">&nbsp;</div>
                                            <div class="col-2 text-center">&nbsp;</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-center">&nbsp;</div>
                                            <div class="col-8 text-center">&nbsp;</div>
                                            <div class="col-2 text-center">&nbsp;</div>
                                        </div>
                                        <div class="row">
                                            @foreach ($famillycard->famillycardmembers->where('sts_hub_kel', 1) as $fam)
                                                <div class="col-3 text-center">{{ $fam->nama }}
                                            @endforeach
                                        </div>
                                        <div class="col-6 text-center">&nbsp;</div>
                                        <div class="col-3 text-center">SUPARDI RUSTAM</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 text-center">&nbsp;</div>
                                        <div class="col-8 text-center">&nbsp;</div>
                                        <div class="col-2 text-center">&nbsp;</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </font>





@endsection
@section('styles')
    {{--  <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">  --}}
@endsection

@section('javas')
    {{--  <script src="{!! URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
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
    </script>  --}}
@endsection
