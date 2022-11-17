@extends('layouts.main')
@section('title', 'Lembaga Desa')
@section('breadcrumb', 'Lembaga Desa')
@section('lembagadesa', 'active')
@section('info', 'show')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        </div>
        </div>
        </section>
        
        <section class="content">
        <div class="row">
            <div class="col-md-3">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Lembaga Desa</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            </div>
            </div>
            <div class="card-body p-0" style="display: block;">
            <ul class="nav nav-pills flex-column">
            <li class="nav-item active">
            <a href="#" class="nav-link">
            <i class="far fa-file-alt"></i> BPD
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="far fa-file-alt"></i> LPM
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="far fa-file-alt"></i> PKK
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="far fa-file-alt"></i> KATAR
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="far fa-trash-alt"></i> Trash
            </a>
            </li>
            </ul>
            </div>
            
            </div>
            
            
            </div>
        
        <div class="col-md-9">
        <div class="card card-primary card-outline">
        <div class="card-header">
        <h3 class="card-title">Inbox</h3>
        <div class="card-tools">
        <div class="input-group input-group-sm">
        <input type="text" class="form-control" placeholder="Search Mail">
        <div class="input-group-append">
        <div class="btn btn-primary">
        <i class="fas fa-search"></i>
        </div>
        </div>
        </div>
        </div>
        
        </div>
        
        <div class="card-body p-0">
        <div class="mailbox-controls">
        
        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
        </button>
        <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm">
        <i class="far fa-trash-alt"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-reply"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-share"></i>
        </button>
        </div>
        
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-sync-alt"></i>
        </button>
        <div class="float-right">
        1-50/200
        <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-chevron-right"></i>
        </button>
        </div>
        
        </div>
        
        </div>
        <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
        <tbody>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check1">
        <label for="check1"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">5 mins ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check2">
        <label for="check2"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">28 mins ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check3">
        <label for="check3"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">11 hours ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check4">
        <label for="check4"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">15 hours ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check5">
        <label for="check5"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">Yesterday</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check6">
        <label for="check6"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check7">
        <label for="check7"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check8">
        <label for="check8"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check9">
        <label for="check9"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check10">
        <label for="check10"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check11">
        <label for="check11"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">4 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check12">
        <label for="check12"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">12 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check13">
        <label for="check13"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">12 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check14">
        <label for="check14"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">14 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check15">
        <label for="check15"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">15 days ago</td>
        </tr>
        </tbody>
        </table>
        
        </div>
        
        </div>
        
        <div class="card-footer p-0">
        <div class="mailbox-controls">
        
        <button type="button" class="btn btn-default btn-sm checkbox-toggle">
        <i class="far fa-square"></i>
        </button>
        <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm">
        <i class="far fa-trash-alt"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-reply"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-share"></i>
        </button>
        </div>
        
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-sync-alt"></i>
        </button>
        <div class="float-right">
        1-50/200
        <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm">
        <i class="fas fa-chevron-right"></i>
        </button>
        </div>
        
        </div>
        
        </div>
        </div>
        </div>
        
        </div>
        
        </div>
    
    </section>
    
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

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            });
        });
    </script>
@endsection
