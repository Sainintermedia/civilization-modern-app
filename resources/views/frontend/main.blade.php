<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        
            <title>{{ config('app.name', 'Laravel') }}</title>
        
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
        
            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            @include('layouts.style')
            @yield('styles')
        </head>
    
    <body class="layout-top-nav" style="height: auto;">
    <div class="wrapper">
    
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="/front" class="navbar-brand">
                    {{-- <img  src=".."  alt="Desa Cisoka" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
                    <span class="brand-text font-weight-light">WEBSITE RESMI DESA</span>
                    </a>
                {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/50f1e0af-5dcb-489e-ad45-c57a3c7cf6ab" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                    </div>
                   <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </button>
                </div> --}}

            </div>
        </nav>

    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="/front" class="navbar-brand">
            <img  src="{!! URL::asset('assets/admin/dist/img/logo.png') !!}"  alt="Desa Cisoka" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">Some action </a></li>
                    <li><a href="#" class="dropdown-item">Some other action</a></li>
                    <li class="dropdown-divider"></li>
                    
                    <li class="dropdown-submenu dropdown-hover">
                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                    <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                    </li>
                    
                    <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                    </li>
                    
                    <li><a href="#" class="dropdown-item">level 2</a></li>
                    <li><a href="#" class="dropdown-item">level 2</a></li>
                    </ul>
                    </li>
                    
                    </ul>
                    </li>
                    </ul>
                
                <form class="form-inline ml-0 ml-md-3">
                <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
                </button>
                </div>
                </div>
                </form>
                </div>
        
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
        
        <div class="media">
        <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
        <div class="media-body">
        <h3 class="dropdown-item-title">
        Brad Diesel
        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
        </h3>
        <p class="text-sm">Call me whenever you can...</p>
        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
        </div>
        </div>
        
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        
        <div class="media">
        <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
        <div class="media-body">
        <h3 class="dropdown-item-title">
        John Pierce
        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
        </h3>
        <p class="text-sm">I got your message bro</p>
        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
        </div>
        </div>
        
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        
        <div class="media">
        <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
        <div class="media-body">
        <h3 class="dropdown-item-title">
        Nora Silvester
        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
        </h3>
        <p class="text-sm">The subject goes here</p>
        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
        </div>
        </div>
        
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
        </li>
        
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> 4 new messages
        <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        <i class="fas fa-users mr-2"></i> 8 friend requests
        <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        <i class="fas fa-file mr-2"></i> 3 new reports
        <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
        </a>
        </li>
        </ul>
        </div>
    </nav>
    
    
    <div class="content-wrapper" style="min-height: 502px;">
    
    
    <div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                <div class="card card-primary card-outline">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div>
                </div>
            </div>
        
        {{-- <div class="col-lg-6">
        <div class="card">
        <div class="card-header">
        <h5 class="card-title m-0">Featured</h5>
        </div>
        <div class="card-body">
        <h6 class="card-title">Special title treatment</h6>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        <div class="card card-primary card-outline">
        <div class="card-header">
        <h5 class="card-title m-0">Featured</h5>
        </div>
        <div class="card-body">
        <h6 class="card-title">Special title treatment</h6>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        </div> --}}
        
        </div>
    
    </div>
    </div>
    
    </div>
    
    
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    
    <div class="p-3 control-sidebar-content" style="">
        <h5>Customize AdminLTE</h5>
        <hr class="mb-2">
        <div class="mb-4">
            <input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span>
        </div><h6>Header Options</h6>
        <div class="mb-1">
            <input type="checkbox" value="1" class="mr-1"><span>Fixed</span>
        </div><div class="mb-1">
            <input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span>
        </div>
        <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div><h6>Sidebar Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div><h6>Footer Options</h6><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><h6>Small Text Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div><h6>Navbar Variants</h6><div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-light"><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option></select></div><h6>Accent Color Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Dark Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select></div></aside>
    
    
    @include('layouts.footer')
    </div>
    
    
    @include('layouts.javascript')
    @yield('javas')
    
    
    </body></html>