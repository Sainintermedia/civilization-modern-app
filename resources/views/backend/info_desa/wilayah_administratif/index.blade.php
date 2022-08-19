@extends('layouts.main')
@section('title', 'Wilayah Administratif')
@section('breadcrumb', 'Wilayah Administratif')
@section('content')

    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            <div class="card">
                                <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                
                                <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>Trident</td>
                                <td>Internet
                                Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                                </tr>
                                <tr>
                                <td>Trident</td>
                                <td>Internet
                                Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                                </tr>
                                <tr>
                                <td>Trident</td>
                                <td>Internet
                                Explorer 5.5
                                </td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Trident</td>
                                <td>Internet
                                Explorer 6
                                </td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Trident</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td>6</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.7</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Firefox 3.0</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td>1.9</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td>1.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Netscape 7.2</td>
                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                <td>1.7</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Netscape Browser 8</td>
                                <td>Win 98SE+</td>
                                <td>1.7</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Netscape Navigator 9</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.1</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.1</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.2</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.2</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.3</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.3</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.4</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.4</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.5</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.5</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.6</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.6</td>
                                 <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.7</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.7</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.8</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Seamonkey 1.1</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Gecko</td>
                                <td>Epiphany 2.20</td>
                                <td>Gnome</td>
                                <td>1.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Webkit</td>
                                <td>Safari 1.2</td>
                                <td>OSX.3</td>
                                <td>125.5</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Webkit</td>
                                <td>Safari 1.3</td>
                                <td>OSX.3</td>
                                <td>312.8</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Webkit</td>
                                <td>Safari 2.0</td>
                                <td>OSX.4+</td>
                                <td>419.3</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Webkit</td>
                                <td>Safari 3.0</td>
                                <td>OSX.4+</td>
                                <td>522.1</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Webkit</td>
                                <td>OmniWeb 5.5</td>
                                <td>OSX.4+</td>
                                <td>420</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Webkit</td>
                                <td>iPod Touch / iPhone</td>
                                <td>iPod</td>
                                <td>420.1</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Webkit</td>
                                <td>S60</td>
                                <td>S60</td>
                                <td>413</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Opera 7.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Opera 8.0</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Opera 8.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Opera 9.0</td>
                                <td>Win 95+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Opera 9.2</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Opera 9.5</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                 <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Opera for Wii</td>
                                <td>Wii</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Nokia N800</td>
                                <td>N800</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Presto</td>
                                <td>Nintendo DS browser</td>
                                <td>Nintendo DS</td>
                                <td>8.5</td>
                                <td>C/A<sup>1</sup></td>
                                </tr>
                                <tr>
                                <td>KHTML</td>
                                <td>Konqureror 3.1</td>
                                <td>KDE 3.1</td>
                                <td>3.1</td>
                                <td>C</td>
                                </tr>
                                <tr>
                                <td>KHTML</td>
                                <td>Konqureror 3.3</td>
                                <td>KDE 3.3</td>
                                <td>3.3</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>KHTML</td>
                                <td>Konqureror 3.5</td>
                                <td>KDE 3.5</td>
                                <td>3.5</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Tasman</td>
                                <td>Internet Explorer 4.5</td>
                                <td>Mac OS 8-9</td>
                                <td>-</td>
                                <td>X</td>
                                </tr>
                                <tr>
                                <td>Tasman</td>
                                <td>Internet Explorer 5.1</td>
                                <td>Mac OS 7.6-9</td>
                                <td>1</td>
                                <td>C</td>
                                </tr>
                                <tr>
                                <td>Tasman</td>
                                <td>Internet Explorer 5.2</td>
                                <td>Mac OS 8-X</td>
                                <td>1</td>
                                <td>C</td>
                                </tr>
                                <tr>
                                <td>Misc</td>
                                <td>NetFront 3.1</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>C</td>
                                </tr>
                                <tr>
                                <td>Misc</td>
                                <td>NetFront 3.4</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>A</td>
                                </tr>
                                <tr>
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>X</td>
                                </tr>
                                <tr>
                                <td>Misc</td>
                                <td>Links</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                                </tr>
                                <tr>
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                                </tr>
                                <tr>
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td>-</td>
                                <td>C</td>
                                </tr>
                                <tr>
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td>-</td>
                                <td>C</td>
                                </tr>
                                <tr>
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td>-</td>
                                <td>U</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                 <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                                </tr>
                                </tfoot>
                                </table>
                                </div>
                                
                                </div>
                                
                                </div>
                                
                                </div>
                                
                                </div>
                        </p>
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
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('javas')
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/pdfmake/vfs_fonts.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
