<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa | @yield('title')</title>
    @include('layouts.style')
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed text-sm">
    <div class="wrapper">

        @include('layouts.navbar')


        @include('layouts.sidebar')

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>


        @include('layouts.footer')
    </div>



@include('layouts.javascript')
@yield('javas')
</body>

</html>
