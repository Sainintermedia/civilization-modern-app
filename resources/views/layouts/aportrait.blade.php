<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Salinan Kartu Keluarga</title>
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/paper-css/normalize/normalize.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/admin/plugins/paper-css/paper/paper.css') !!}">
    <style>
        @page {
            size: legal landscape
        }
    </style>
    @include('layouts.style')
</head>


<body class="a4">

    @yield('content')

</body>

</html>
