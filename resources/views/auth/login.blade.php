@extends('layouts.auth')
@section('content')
    <section class="contact-us section">
        <main class="d-flex align-items-center w-auto main-container">
            <div class="container">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="card-body">
                                <div class="brand-wrapper">
                                    <a href="{{ route('users.home') }}">
                                        <img src="{{ asset('assets/website/images/anticasting-logo.png') }}" alt="logo"
                                            class="logo">
                                    </a>
                                </div>
                                <p class="d-flex justify-content-center fs-4">Login into your account</p>
                                @if (Session::has('message'))
                                    <div id="success" class="text-success text-center" title="Success">
                                        <p>{{ Session::get('message') }}</p>
                                    </div>
                                @elseif (Session::has('error'))
                                    <div id="error" class="text-danger text-center" title="Error">
                                        <p>{{ Session::get('error') }}</p>
                                    </div>
                                @endif
                                <form class="form-disable" action="{{ route('users.loginpost') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="form-label text-muted">
                                            <b>Email</b>&nbsp;<span style="color:red;"><b>*</b></span>
                                        </label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email address">
                                        @error('email')
                                            <span class="text-danger"><b>{{ $message }}</b></span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password" class="form-label text-muted">
                                            <b>Password</b>&nbsp;<span style="color:red;"><b>*</b></span>
                                        </label>
                                        <div class="input-group">
                                            <input class="form-control password" id="password" class="block mt-1 w-full"
                                                type="password" name="password" placeholder="Enter  password" />
                                            <span class="input-group-text togglePassword" id="">
                                                <i data-feather="eye" style="cursor: pointer"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                            <span class="text-danger"><b>{{ $message }}</b></span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 my-2">
                                        <div class="captcha">
                                            <span class="captcha_div">{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-danger btn_captcha" class="reload" id="reload">
                                                &#x21bb;
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group mb-1">
                                        <input id="captcha" type="text" class="form-control"
                                            placeholder="Enter Captcha" name="captcha">
                                        @error('captcha')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <input type="checkbox" name="remeber_me" id="rember-me" />
                                        <label for="rember-me" class="form-label text-muted">&nbsp;<b>Remember
                                                Me</b></label>
                                        <label class="forg-pass">
                                            <a href="{{ route('users.forgot-password') }}"
                                                class="forgot-password-link"><b>Forgot
                                                    password?</b></a>
                                        </label>
                                    </div>
                                    <div class="d-grid gap-2 mt-3 col-6 mx-auto">
                                        <input type="submit" class="btn btn-dark form-control" value="Login">
                                    </div>
                                </form>
                                <div class="register-link">
                                    <p class="login-card-footer-text"><b>Don't have an account?</b>
                                        <a href="{{ route('users.register') }}" class="text-reset text-muted"> Register
                                            here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-lg-7 d-none d-sm-none d-md-block">
                            <img src="{{ asset('assets/website/images/banner.jpg') }}" alt="login"
                                class="login-card-img">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
@section('footer')
    <script type="text/javascript">
        feather.replace({
            'aria-hidden': 'true'
        });
        $(".togglePassword").click(function(e) {
            e.preventDefault();
            var type = $(this).parent().parent().find(".password").attr("type");
            //console.log(type);
            if (type == "password") {

                $("svg.feather.feather-eye").replaceWith(feather.icons["eye-off"].toSvg());
                $(this).parent().parent().find(".password").attr("type", "text");
            } else if (type == "text") {
                $("svg.feather.feather-eye-off").replaceWith(feather.icons["eye"].toSvg());
                $(this).parent().parent().find(".password").attr("type", "password");
            }
        });
    </script>
    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '{{ route('reload-captcha') }}',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endsection
