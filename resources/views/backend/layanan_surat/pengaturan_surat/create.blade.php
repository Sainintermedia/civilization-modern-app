@extends('layouts.main')
@section('title', 'Kartu keluarga')
@section('breadcrumb', 'Kartu keluarga')
@section('content')

    <div class="card card-dark card-outline rounded-0">
        <form method="POST" action="{!! route('siode.layanan-surat.pengaturan-surat.store') !!}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card-header">
                <div class="card-title">
                    <strong>Buat template surat</strong>
                </div>
            </div>

            <div class="card-body">

                <textarea id="summernote" name="kop_srt"></textarea>
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

    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/summernote/summernote.min.css') !!}">
@endsection

@section('scripts')
    <script src="{!! URL::asset('assets/admin/plugins/summernote/summernote.min.js') !!}"></script>
    <script>
        $(function() {
            $('#summernote').summernote()
        });
    </script>
@endsection
