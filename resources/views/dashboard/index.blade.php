@extends('layouts.main')
@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
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
                                        <i class="icon ion-location"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-purple">
                                    <div class="inner">
                                        <h3>{{ $famillycardmembers }}</h3>

                                        <p>Kependudukan</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="{{ route('siode.kependudukan.anggota-keluarga.index') }}"
                                        class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-primary">
                                    <div class="inner">

                                        <h3>{{ $famillycards }}</h3>
                                        <h3>{{ $rt1 }}</h3>
                                        <h3>{{ $rt2 }}</h3>
                                        <h3>{{ $rt3 }}</h3>
                                        <h3>{{ $rt4 }}</h3>
                                        <h3>{{ $rt5 }}</h3>

                                        <p>Keluarga</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-ios-people"></i>
                                    </div>
                                    <a href="{{ route('siode.kependudukan.kepala-keluarga.index') }}"
                                        class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Donut Chart</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="donutChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 603px;"
                            width="603" height="250" class="chartjs-render-monitor"></canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')

@endsection

@section('scripts')

    <script src="{{ URL::asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>

@endsection
