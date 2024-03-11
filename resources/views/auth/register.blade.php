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
                            @csrf
                            <input class="form-control" type="text" name="name" required placeholder="User Name">
                            <input class="form-control" type="text" name="email" required placeholder="User Email">
                            <input class="form-control" type="number" name="phone" required placeholder="User Phone">
                            <div class="d-flex">
                                <input class="form-control" type="password" id="password" name="password" required
                                    placeholder="Password">
                                <i class="fas fa-eye" style="margin-left: -30px;margin-top:15px;"
                                    onclick="togglePasswordVisibility('password', 'togglePasswordIcon')"></i>
                            </div>
                            <div class="d-flex">
                                <input class="form-control" type="password" id="confirmPassword"
                                    name="password_confirmation" required placeholder="Confirm Password">
                                <i class="fas fa-eye" style="margin-left: -30px;margin-top:15px;"
                                    onclick="togglePasswordVisibility('confirmPassword', 'toggleConfirmPasswordIcon')">
                                </i>
                            </div>
                            <div class="custom-control custom-checkbox  d-flex">
                                <input type="checkbox" required class="custom-control-input" id="remember">
                                <label class="custom-control-label ml-2" for="remember">I agree to the <a
                                        href="#">terms and conditions</a> </label>
                            </div>
                            <button class="base-btn1" type="submit">Create Account</button>
                            <p class="reg-text text-center mb-0">Already have an acocunt? <a
                                    href="{{ route('login') }}">LogIn</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function togglePasswordVisibility(inputId, iconId) {
            var input = document.getElementById(inputId);
            var icon = document.getElementById(iconId);

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
    <style>
        .fa {
            cursor: pointer;
        }
    </style>
@endsection
