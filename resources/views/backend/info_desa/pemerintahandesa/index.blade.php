@extends('layouts.main')
@section('title', 'Pemerintahan Desa')
@section('breadcrumb', 'pemerintahandesa')
{{-- @section('pemerintahandesa', ' active') --}}
@section('pemerintahandesa', 'show')
@section('content')

    <div class="container-fluid p-0">
        <div class="wrapper">
            <div class="row">
                <div class="col-3">
                        <div class="card card-primary card-outline">
                            <ul class="list-group">
                               <a href=""><li class="list-group-item active" aria-current="true">An active item</li></a>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item">And a fifth one</li>
                            </ul>
    
                        </div>
                </div>
                <div class="col-9">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Nama Provinsi</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Kode Provinsi</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('styles')

@endsection

@section('javas')

@endsection
