<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ env('APP_NAME') }} - Your finance advisor </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    <x-alert />

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- preloader area end -->
    <!--Main-Menu Area Start-->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('LandingPage') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                            aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse fixed-height" id="main_menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                        href="{{ route('LandingPage') }}">Home
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('About') ? 'active' : '' }}"
                                        href="{{ route('LandingPage.About') }}">About
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('Plans') ? 'active' : '' }}"
                                        href="{{ route('LandingPage.Plans') }}">Investment
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('Contact') ? 'active' : '' }}"
                                        href="{{ route('LandingPage.Contact') }}">Contact
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                            </ul>

                            @if (auth()->user())
                                <a href="{{ route('User.Dashboard') }}" class="base-btn2">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="base-btn2">Login</a>
                            @endif

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Main-Menu Area Start-->
