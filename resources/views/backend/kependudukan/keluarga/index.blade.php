@extends('layouts.main')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-warning card-outline rounded-0 table-responsive">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{!! route('siode.kependudukan.kepala-keluarga.create') !!}" type="button"
                            class="card-title btn-sm bg-gradient-primary text-sm"><i class="fa-solid fa-square-plus"></i>
                            Keluarga</a>
                    </h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <div class="card-header">
                    <h3 class="card-title">
                        <a href="{!! route('siode.kependudukan.kepala-keluarga.create') !!}" type="button"
                            class="card-title btn-sm bg-gradient-primary text-sm"><i class="fa-solid fa-square-plus"></i>
                            Keluarga</a>
                    </h3>
                    <div class="card-tools">
                        <form method="GET" action="#" autocomplete="off">
                            @csrf
                            <div class="input-group input-group-sm text-sm" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right"
                                    placeholder="Cari kepala keluarga...." id="search" value="{!! old('search') !!}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-default bg-gradient-info">
                                        <i class="fa-brands fa-searchengin"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  --}}
                <div class="card-body">
                    <table id="example1"
                        class="table-bordered table-hover table-striped rounded-0 table-sm table py-0 text-sm">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">No</th>
                                <th>No KK</th>
                                <th>Nama</th>
                                <th>Kp</th>
                                <th>Rt</th>
                                <th>Rw</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th style="width: 200px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($famillycardmembers as $value => $famillycard)
                                {{--  <tr class="text-center">
                                    <td>{!! $loop->iteration !!}</td>
                                    <td>{!! $population->no_kk !!}</td>
                                    <td style="text-transform:uppercase">{!! $population->nama !!}</td>
                                    <td style="text-transform:uppercase">{!! $population->kp !!}</td>
                                    <td>{!! $population->rt !!}</td>
                                    <td>{!! $population->rw !!}</td>
                                    <td style="text-transform:uppercase">{!! $population->village->name !!}</td>
                                    <td style="text-transform:uppercase">{!! $population->district->name !!}</td>
                                    <td style="width: 175px">
                                        <form method="POST" action="{!! route('siode.kependudukan.keluarga.destroy', $population->id) !!}" class="text-center">
                                            @csrf
                                            @method('delete')
                                            <a href="{!! route('siode.kependudukan.kk') !!}" class="btn bg-gradient-info btn-xs text-xs">
                                                <i class="fa-solid fa-eye"></i> Show</a>
                                            <a href="{!! route('siode.kependudukan.keluarga.edit', $population->id) !!}"
                                                class="btn bg-gradient-warning btn-xs text-xs">
                                                <i class="fa-solid fa-pen"></i> Edit</a>
                                            <button type="submit" class="btn bg-gradient-danger btn-xs text-xs"
                                                name="button"><i class="fa-solid fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>  --}}
                            @empty
                                <h4>tidak ada data</h4>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th style="width: 10px">No</th>
                                <th>No KK</th>
                                <th>Nama</th>
                                <th>Kp</th>
                                <th>Rt</th>
                                <th>Rw</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th style="width: 175px">Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    Jumlah Data : {{ $famillycardmembers->total() }}
                    <ul class="pagination pagination-sm float-right m-0">
                        {{ $famillycardmembers->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('styles')
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
@endsection

@section('javas')

@endsection
