@extends('user.layout.app')
@section('content')
    <section class="breadcrumb-area extra-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="title extra-padding">
                        Register
                    </h4>
                    <ul class="breadcrumb-list">
                        <li>
                            <a href="{{ route('LandingPage') }}">
                                <i class="fas fa-home"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <span><i class="fas fa-chevron-right"></i> </span>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="sign-form">
                        <div class="heading">
                            <h4 class="title">
                                Register
                            </h4>
                            <p class="subtitle">
                                Sign up new account to continue.
                            </p>
                        </div>
                        <form class="form-group mb-0" action="{{ route('register') }}" method="POST">
                            <input class="form-control" type="text" name="name" placeholder="User Name">
                            <input class="form-control" type="text" name="email" placeholder="User Email">
                            <input class="form-control" type="text" name="phone" placeholder="User Phone">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                            <input class="form-control" type="password" name="password_confirmation"
                                placeholder="Confirm Password">
                            <div class="custom-control custom-checkbox  d-flex">
                                <input type="checkbox" class="custom-control-input" id="remember">
                                <label class="custom-control-label ml-2" for="remember">Remember Me</label>
                                <span class="ml-auto"><a href="forgot-pass.html">Forgot Password ?</a></span>
                            </div>
                            <button class="base-btn1" type="submit">Log In</button>
                            <p class="reg-text text-center mb-0">Don't have an account? <a href="signup.html">Register
                                    Now</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
