@extends('layouts.main')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('Dashboard', 'active')
@section('home', 'show')
@section('content')

    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                        <h3>44</h3>
                                        <p>Wilayah Kejaroan</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-location"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-purple">
                                        <div class="inner">
                                        <h3>44</h3>
                                        <p>Kependudukan</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                     
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                        <h3>44</h3>
                                        <p>Keluarga</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-ios-people"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                        <h3>44</h3>
                                        <p>Surat Tercetak</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion-ios-paper"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('javas')
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>
@endsection
