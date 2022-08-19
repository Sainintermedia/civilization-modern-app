@extends('layouts.main')
@section('title', 'Identitas Desa')
@section('breadcrumb', 'Identitas Desa')
@section('content')

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
            </div>
            <div class="col-9">
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
    </div>
    </div>
    {{-- <div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="https://demosid.opendesa.id/identitas_desa" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Identitas Desa</a>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="nama">Nama Desa</label>
                <div class="col-sm-8">
                                                            <select id="pilih_desa" name="pilih_desa" class="form-control input-sm select-nama-desa" data-placeholder="Nampar Tabang - Lamba Leda - Manggarai Timur - Nusa Tenggara Timur" data-token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw" data-tracker='https://pantau.opensid.my.id' style="display: none;"></select>
                                                        <input type="hidden" id="nama_desa" class="form-control input-sm nama_terbatas required" minlength="3" maxlength="50" name="nama_desa" value="Nampar Tabang">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="kode_desa">Kode Desa</label>
                <div class="col-sm-2">
                    <input readonly id="kode_desa" name="kode_desa" class="form-control input-sm  required"  type="text" onkeyup="tampil_kode_desa()" placeholder="Kode Desa" value="5319032005" ></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="kode_pos">Kode Pos Desa</label>
                <div class="col-sm-2">
                    <input id="kode_pos" name="kode_pos" class="form-control input-sm number" minlength="5" maxlength="5" type="text" placeholder="Kode Pos Desa" value="83355"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="pamong_id">Nama Kepala</label>
                <div class="col-sm-8">
                    <select class="form-control input-sm" id="kades" name="pamong_id">
                        <option value="">--- Pilih Kepala ---</option>
                                                                    <option value="20" data-nip="197905062010011007"  >Mustahiq S.Adm (Sekretaris Desa)</option>
                                                                    <option value="21" data-nip="-"  >Syafruddin  (Kaur Pemerintahan )</option>
                                                                    <option value="22" data-nip="-"  >Supardi Rustam  (Kaur Umum )</option>
                                                                    <option value="23" data-nip="-"  >Mardiana  (Kaur Keuangan)</option>
                                                                    <option value="24" data-nip="-"  >Syafi-i. SE  (Kaur Pembangunan )</option>
                                                                    <option value="25" data-nip=""  >Mahrup  (Kaur Keamanan dan Ketertiban)</option>
                                                                    <option value="14" data-nip="" selected='selected' >Muhammad Ilham  (Kepala)</option>
                                                            </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="nip_kepala_desa">NIP Kepala</label>
                <div class="col-sm-8">
                    <input readonly id="nip_kepala_desa" name="nip_kepala_desa" class="form-control input-sm nomor_sk" maxlength="50" type="text" placeholder="NIP Kepala" value=""></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="alamat_kantor">Alamat Kantor Desa</label>
                <div class="col-sm-8">
                    <textarea id="alamat_kantor" name="alamat_kantor" class="form-control input-sm alamat required" maxlength="100" placeholder="Alamat Kantor Desa" rows="3" style="resize:none;">Jl. Raya Senggigi Km 10 Kerandangan </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="email_desa">E-Mail Desa</label>
                <div class="col-sm-8">
                    <input id="email_desa" name="email_desa" class="form-control input-sm email" maxlength="50" type="text" placeholder="E-Mail Desa" value=""></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="telepon">Telpon Desa</label>
                <div class="col-sm-8">
                    <input id="telepon" name="telepon" class="form-control input-sm bilangan" type="text" maxlength="15" placeholder="Telpon Desa" value=""></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="website">Website Desa</label>
                <div class="col-sm-8">
                    <input id="website" name="website" class="form-control input-sm url" maxlength="50" type="text" placeholder="Website Desa" value=""></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="nama_kecamatan">Nama Kecamatan</label>
                <div class="col-sm-8">
                    <input readonly id="nama_kecamatan" name="nama_kecamatan" class="form-control input-sm required" type="text" placeholder="Nama Kecamatan" value="Lamba Leda"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="kode_kecamatan">Kode Kecamatan</label>
                <div class="col-sm-2">
                    <input readonly id="kode_kecamatan" name="kode_kecamatan" class="form-control input-sm required" type="text" placeholder="Kode Kecamatan" value="531903" ></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="nama_kecamatan">Nama Camat</label>
                <div class="col-sm-8">
                    <input id="nama_kepala_camat" name="nama_kepala_camat" class="form-control input-sm nama required" maxlength="50" type="text" placeholder="Nama Camat" value="Bambang Budi Sanyoto, S. H"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="nip_kepala_camat">NIP Camat</label>
                <div class="col-sm-4">
                    <input id="nip_kepala_camat" name="nip_kepala_camat" class="form-control input-sm nomor_sk" maxlength="50" type="text" placeholder="NIP Camat" value="-"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="nama_kabupaten">Nama Kabupaten</label>
                <div class="col-sm-8">
                    <input readonly id="nama_kabupaten" name="nama_kabupaten" class="form-control input-sm required" type="text" placeholder="Nama Kabupaten" value="Manggarai Timur"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="kode_kabupaten">Kode Kabupaten</label>
                <div class="col-sm-2">
                    <input readonly id="kode_kabupaten" name="kode_kabupaten" class="form-control input-sm required" type="text" placeholder="Kode Kabupaten" value="5319"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="nama_propinsi">Nama Provinsi</label>
                <div class="col-sm-8">
                    <input readonly id="nama_propinsi" name="nama_propinsi" class="form-control input-sm required" type="text" placeholder="Nama Propinsi" value="Nusa Tenggara Timur"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="kode_propinsi">Kode Provinsi</label>
                <div class="col-sm-2">
                    <input readonly id="kode_propinsi" name="kode_propinsi" class="form-control input-sm required" type="text" placeholder="Kode Provinsi" value="53"></input>
                </div>
            </div>
        </div>
        <div class='box-footer'>
            <button type='reset' class='btn btn-social btn-flat btn-danger btn-sm' ><i class='fa fa-times'></i> Batal</button>
            <button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
        </div>
    </div>
</div>
</form>
</div> --}}

@endsection
@section('styles')

@endsection

@section('javas')

@endsection
