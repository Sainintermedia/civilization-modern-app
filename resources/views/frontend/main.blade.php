<!DOCTYPE html>

<html lang="en">

<head>

    @include('layouts.style')
    @yield('styles')
</head>
<nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{!! URL::asset('assets/admin/dist/img/logo.png') !!}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"><strong>{!! Auth::user()->name !!}</strong></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right text-center"
                style="left: inherit; right: 0px; width: 0px;">
                <a href="{!! route('auth.change_password') !!}" class="dropdown-item">
                    <i class="fas fa-fw fa-key mr-2"></i> Change
                    password
                </a>
                <a href="#" class="dropdown-item"
                    onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt mr-2"></i> {!! trans('global.logout') !!}
                </a>
            </ul>
        </li>
        @if (count(config('panel.available_languages', [])) > 1)
            <li class="nav-item dropdown d-md-down-none">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    {!! strtoupper(app()->getLocale()) !!}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @foreach (config('panel.available_languages') as $langLocale => $langName)
                        <a class="dropdown-item"
                            href="{!! url()->current() !!}?change_language={!! $langLocale !!}">{!! strtoupper($langLocale) !!}
                            ({!! $langName !!})
                        </a>
                    @endforeach
                </div>
            </li>
        @endif
    </ul>
</nav>

