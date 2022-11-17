@extends('layouts.main')
@section('title', 'Wilayah Administratif Kejaroan')
@section('breadcrumb', 'Wilayah Administratif Kejaroan')
{{-- @section('wilayahadministratif', 'active') --}}
@section('info', 'show')
@section('content')

<div class="box box-info">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <form id="mainform" name="mainform" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Wilayah Administratif</h3>
                                    </div>
                                  
                                    <div class="card-body">
                            
                                  
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped dataTable table-hover">
                                                        <thead class="bg-gray disabled color-palette">
                                                            <tr>
                                                                <th class="padat">No</th>
                                                                <th wlass="padat">Aksi</th>
                                                                <th width="25%"> Dusun</th>
                                                                <th width="35%">Kepala Dusun</th>
                                                                <th>RW</th>
                                                                <th>RT</th>
                                                                <th>KK</th>
                                                                <th>L+P</th>
                                                                <th>L</th>
                                                                <th>P</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                        <tr>
                                                                <td class="no_urut">1</td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-info btn-flat">Action</button>
                                                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                        </button>
                                                                        <div class="dropdown-menu" role="menu">
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>MANGSIT</td>
                                                                <td nowrap=""><strong></strong> - </td>
                                                                <td class="bilangan">0</td>
                                                                <td class="bilangan">4</td>
                                                                <td class="bilangan">5</td>
                                                                <td class="bilangan">19</td>
                                                                <td class="bilangan">10</td>
                                                                <td class="bilangan">9</td>
                                                            </tr>
                                                                                                                        <tr>
                                                                <td class="no_urut">2</td>
                                                                <td>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-info btn-flat">Action</button>
                                                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                            </button>
                                                                            <div class="dropdown-menu" role="menu">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                            </div>
                                                                        </div>
                                                                </td>
                                                                <td>SENGGIGI</td>
                                                                <td nowrap=""><strong></strong> - </td>
                                                                <td class="bilangan">0</td>
                                                                <td class="bilangan">4</td>
                                                                <td class="bilangan">5</td>
                                                                <td class="bilangan">19</td>
                                                                <td class="bilangan">10</td>
                                                                <td class="bilangan">9</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no_urut">3</td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-info btn-flat">Action</button>
                                                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                        </button>
                                                                        <div class="dropdown-menu" role="menu">
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>KERANDANGAN</td>
                                                                <td nowrap=""><strong></strong> - </td>
                                                                <td class="bilangan">0</td>
                                                                <td class="bilangan">4</td>
                                                                <td class="bilangan">5</td>
                                                                <td class="bilangan">19</td>
                                                                <td class="bilangan">10</td>
                                                                <td class="bilangan">9</td>
                                                            </tr>
                                                                                                                        <tr>
                                                                <td class="no_urut">4</td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-info btn-flat">Action</button>
                                                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                        </button>
                                                                        <div class="dropdown-menu" role="menu">
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>LOCO</td>
                                                                <td nowrap=""><strong></strong> - </td>
                                                                <td class="bilangan">0</td>
                                                                <td class="bilangan">4</td>
                                                                <td class="bilangan">5</td>
                                                                <td class="bilangan">19</td>
                                                                <td class="bilangan">10</td>
                                                                <td class="bilangan">9</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no_urut">5</td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-info btn-flat">Action</button>
                                                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                        </button>
                                                                        <div class="dropdown-menu" role="menu">
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>TESTING2</td>
                                                                <td nowrap=""><strong></strong> - </td>
                                                                <td class="bilangan">0</td>
                                                                <td class="bilangan">4</td>
                                                                <td class="bilangan">5</td>
                                                                <td class="bilangan">19</td>
                                                                <td class="bilangan">10</td>
                                                                <td class="bilangan">9</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th colspan="4"><label>TOTAL</label></th>
                                                                <th class="bilangan">0</th>
                                                                <th class="bilangan">19</th>
                                                                <th class="bilangan">34</th>
                                                                <th class="bilangan">95</th>
                                                                <th class="bilangan">45</th>
                                                                <th class="bilangan">50</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                </div>
                                    
                                    
                            </div>
                            </div>
                        </div>
                    <input type="hidden" name="sidcsrf" value="087a1cc6d85a487d9f31f7a07974f04d"></form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">
    {{--  <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">  --}}
@endsection

@section('javas')
    <script src="{!! URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>

   
@endsection
