@extends('layouts.main')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-warning card-outline rounded-0">
                <div class="card-header card-header-sm">
                    <h3 class="card-title">
                        <a href="{!! route('siode.kependudukan.penduduk.create') !!}" type="button"
                            class="card-title btn-sm bg-gradient-primary text-sm"><i class="fa-solid fa-square-plus"></i>
                            Penduduk</a>
                    </h3>
                    <div class="card-tools">
                        <form method="GET" action="{!! route('siode.kependudukan.penduduk.cari') !!}" autocomplete="off">
                            @csrf
                            <div class="input-group input-group-sm text-sm" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right"
                                    placeholder="Cari penduduk...." id="search" value="{!! old('search') !!}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-default bg-gradient-info">
                                        <i class="fa-brands fa-searchengin"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table id="example1"
                        class="table-bordered table-hover table-striped rounded-0 table-sm table py-0 text-sm">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">No</th>
                                <th>No Nik</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Taggal lahir</th>
                                <th style="width: 200px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($populationsubs as $value => $populationsub)
                                <tr class="text-center">
                                    <td>{!! $loop->iteration !!}</td>
                                    <td>{!! $populationsub->no_nik !!}</td>
                                    <td style="text-transform:uppercase">{!! $populationsub->nama !!}</td>
                                    <td>{!! $populationsub->jenkel == 1 ? 'LAKI-LAKI' : 'PEREMPUAN' !!}</td>
                                    <td style="text-transform:uppercase">{!! $populationsub->tmpt_lahir !!}</td>
                                    <td>{!! $populationsub->tgl_lahir !!}</td>
                                    <td style="width: 175px">
                                        <form method="POST" action="{!! route('siode.kependudukan.penduduk.destroy', $populationsub->id) !!}" class="text-center">
                                            @csrf
                                            @method('delete')
                                            <a href="{!! route('siode.kependudukan.penduduk.show', $populationsub->id) !!}" class="btn bg-gradient-info btn-xs text-xs">
                                                <i class="fa-solid fa-eye"></i> Show</a>
                                            <a href="{!! route('siode.kependudukan.penduduk.edit', $populationsub->id) !!}"
                                                class="btn bg-gradient-warning btn-xs text-xs">
                                                <i class="fa-solid fa-pen"></i> Edit</a>
                                            <button type="submit" class="btn bg-gradient-danger btn-xs text-xs"
                                                name="button"><i class="fa-solid fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <h4>tidak ada data</h4>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>No</th>
                                <th>No Nik</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Taggal lahir</th>
                                <th style="width: 175px">Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    Jumlah Data : {{ $populationsubs->total() }}
                    <ul class="pagination pagination-sm float-right m-0">
                        {{ $populationsubs->links() }}
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
