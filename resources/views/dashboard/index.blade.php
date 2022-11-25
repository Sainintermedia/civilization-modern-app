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
                                        <input type="hidden" value="{{ $sumpenduduk = 0 }}">
                                        @foreach ($famillycards as $famillycard)
                                            <input type="hidden"
                                                value="{{ $sumpenduduk += $famillycard->famillycardmembers_count }}">
                                        @endforeach
                                        <h3>{{ $sumpenduduk }}</h3>

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

                                        <h3>{{ $famillycards->count() }}</h3>

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
    {{--  <script src="../../plugins/chart.js/Chart.min.js"></script>  --}}
    <script>
        $(function() {
            //-------------
            //- DONUT CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
            var donutData = {
                labels: [

                    @foreach ($jenispekerjaan as $record)


                        '{{ $record->nama }}',
                    @endforeach
                ],
                datasets: [{
                    data: [700, 500, 400, 600, 300, 100],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }]
            }
            var donutOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions
            })

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var pieData = donutData;
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })
        })
    </script>

@endsection
