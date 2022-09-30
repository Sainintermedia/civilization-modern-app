<meta charset="UTF-8">
<meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{!! csrf_token() !!}">

<title>SiODe| @yield('title')</title>
<link href="{!! URL::asset('assets/admin/img/logo1.png') !!}" rel='shortcut icon'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/fontawesome-free/css/all.min.css') !!}">

{{--  <link rel="stylesheet" href="{!! URL::asset('assets/admin/dist/css/adminlte.min.css') !!}">  --}}

<link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
{{--  <link href="{!! asset('assets/admin/css/custom.css') !!}" rel="stylesheet" />  --}}
