<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <title>{!! env('APP_NAME', 'Permissions Manager') !!}</title>
    <link href="{!! URL::asset('assets/assets/img/logo1.png') !!}" rel='shortcut icon'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/fontawesome-free/css/all.min.css') !!}">

    <link rel="stylesheet" href="{!! URL::asset('assets/admin/dist/css/adminlte.min.css') !!}">


    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


    <link href="{!! asset('css/custom.css') !!}" rel="stylesheet" />
    <style>
        @page {
            size: A4 landscape;

        }

        @page {
            size: 100mm 200mm landscape;
        }

        @page {
            size: 4in 6in landscape;
        }
    </style>
    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 2px 19px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 2px 19px;
            word-break: normal;
        }

        .tg .tg-akps {
            border-color: inherit;
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-kq39 {
            border-color: #ffffff;
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-pjqy {
            border-color: #000000;
            font-family: Arial, Helvetica, sans-serif !important;
            text-align: left;
            vertical-align: top
        }

        .tg .tg-j5n6 {
            border-color: inherit;
            font-family: Arial, Helvetica, sans-serif !important;
            text-align: left;
            vertical-align: top
        }

        .tg .tg-lcf4 {
            border-color: inherit;
            font-family: Arial, Helvetica, sans-serif !important;
            text-align: center;
            vertical-align: top
        }
    </style>
    @yield('styles')
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
    <div class="app flex-row align-items-center">
        <div class="container">
            @yield('content')
        </div>
    </div>



    @include('layouts.javascript')
    @yield('javas')
</body>

</html>
