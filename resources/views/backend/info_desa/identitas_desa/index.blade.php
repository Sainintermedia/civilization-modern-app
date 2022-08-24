@extends('layouts.main')
@section('title', 'Identitas Desa')
@section('breadcrumb', 'Identitas Desa')
@section('identitas', 'active')
@section('info', 'show')
@section('content')

    <div class="container-fluid p-0">
        <div class="wrapper">
            <div class="row">
                <div class="col-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card card-primary card-outline">
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Nama Desa</label>
                                <div class="input-group input-group-sm col-sm-9">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Kode Desa</label>
                                <div class="input-group input-group-sm col-sm-2">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Kode Pos Desa</label>
                                <div class="input-group input-group-sm col-sm-2">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Nama kepala</label>
                                <div class="input-group input-group-sm col-sm-9">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Nip Kepala</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Alamat Kantor Desa</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <textarea type="text" class="form-control input-sm"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">E-Mail Desa</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Telepon Desa</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Website Desa</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Nama Kecamatan</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Kode Kecamatan</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Nama Camat</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Nip Camat</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Nama Kabupaten</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_pos" class="col-sm-3 col-form-label">Kode Kabupaten</label>
                                <div class="input-group input-group-sm col-sm-6">
                                    <input type="text" class="form-control input-sm">
                                </div>
                            </div>
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
