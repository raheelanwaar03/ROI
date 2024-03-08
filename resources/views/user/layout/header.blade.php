<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Biniog - HYIP & Financial Investment Template </title>
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse fixed-height" id="main_menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('LandingPage') }}">Home
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="investment.html">Investment
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                {{-- <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#blog-section" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Pages
										<div class="mr-hover-effect"></div>
									</a>
									<div class="dropdown-menu">
                                            <a class="dropdown-item" href="team.html">Investors</a>
                                            <a class="dropdown-item" href="faq.html">Faq</a>
                                            <a class="dropdown-item" href="signin.html">Login</a>
                                            <a class="dropdown-item" href="signup.html">Register</a>
                                            <a class="dropdown-item" href="forgot-pass.html">Forgot Password</a>
                                            <a class="dropdown-item" href="404.html">404</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#blog-section" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Blog
										<div class="mr-hover-effect"></div>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="blog.html">Blog Grid</a>
										<a class="dropdown-item" href="blog-with-sidebar.html">Blog With Sidebar</a>
										<a class="dropdown-item" href="blog-details.html">Blog Details</a>
									</div>
								</li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('login') }}" class="base-btn2"> Login</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Main-Menu Area Start-->
