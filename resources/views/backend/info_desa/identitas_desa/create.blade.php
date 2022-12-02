@extends('layouts.main')
@section('title', 'Identitas Desa')
@section('breadcrumb', 'Identitas Desa')
@section('content')

    <div class="card card-dark card-outline rounded-0">
        <form method="POST" action="{!! route('siode.kependudukan.kepala-keluarga.store') !!}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card-header">
                <div class="card-title">
                    <strong>INPUT IDENTITAS DESA</strong>
                </div>
            </div>

            <div class="card-footer">
                <div class="col-6">
                    <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm rounded-0"
                        style="text-transform:uppercase" href="#">
                        {{ trans('Cancel') }}
                    </a>
                    <input type="submit" value="Submit" class="btn bg-gradient-primary rounded-0 btn-sm">
                </div>
            </div>
        </form>
    </div>

@endsection
@section('styles')

    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">

@endsection

@section('scripts')

    <script src="{!! URL::asset('assets/admin/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script>
    <script>
        $(function() {
            $('#province').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.city') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#city').empty();

                        $.each(response.data, function(id, name) {
                            $('#city').append(new Option(name, id))
                        })
                    });
            });
            $('#city').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.district') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#district').empty();

                        $.each(response.data, function(id, name) {
                            $('#district').append(new Option(name, id))
                        })
                    });
            });
            $('#district').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.village') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#village').empty();

                        $.each(response.data, function(id, name) {
                            $('#village').append(new Option(name, id))
                        })
                    });
            });
        });
    </script>

@endsection
