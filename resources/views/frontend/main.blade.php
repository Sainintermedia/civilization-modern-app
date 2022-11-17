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
    <a href="../../index3.html" class="navbar-brand">
    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
    
    <div class="content-header">
    <div class="container">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Layout</a></li>
    <li class="breadcrumb-item active">Top Navigation</li>
    </ol>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="content">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
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
    
    <div class="col-lg-6">
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
    </div>
    
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