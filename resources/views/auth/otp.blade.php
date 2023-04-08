@extends('layouts.auth')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/toastr.min.css') }}">
<script src="{{ asset('assets/auth/toastr.min.js') }}"></script>
@section('content')
    <section class="contact-us section">
        @if (Session::has('message'))
            <div id="success" title="Success">
                <p>{{ Session::get('message') }}</p>
            </div>
        @elseif (Session::has('error'))
            <div id="error" title="Error">
                <p>{{ Session::get('error') }}</p>
            </div>
        @endif
        <script>
            @if(Session::has('msg'))
               toastr.success("{{ Session::get('msg') }}");
                 @elseif (Session::has('expire'))
                 toastr.info("{{ Session::get('expire') }}");
                 @elseif (Session::has('invalid'))
                 toastr.error("{{ Session::get('invalid') }}");
                 @elseif (Session::has('success'))
                 toastr.success("{{ Session::get('success') }}");
             @endif
         </script>
        <main class="d-flex align-items-center w-auto main-container">
            <div class="container">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <div class="card-body">
                                <div class="brand-wrapper">
                                    <a href="{{ route('users.home') }}">
                                        <img src="{{ asset('assets/website/images/anticasting-logo.png') }}" alt="logo"
                                            class="logo">
                                    </a>
                                </div>
                                <p class="d-flex justify-content-center fs-4">OTP Verification</p>
                                <div class="border-0">
                                    <span class="text-muted">Please enter OTP, which is sent on your email address.</span>
                                </div>
                                <form class="form-disable" action="{{ route('verify.otp') }}" method="post">
                                    @csrf
                                    <div>&nbsp;</div>
                                    <div class="form-group form mb-3">
                                        <label for="otp" class="text-muted" >OTP Number</label>
                                        <br/>
                                        <input class="form-control" id="otp" name="otp" maxlength="4" type="text" placeholder="Please enter otp" />

                                        @error('otp')
                                          <span class="text-danger"><b>{{ $message }}</b></span>
                                        @enderror
                                    </div>
                                    <div class="d-grid gap-2 mb-1 mt-4 col-6 mx-auto">
                                        <input type="submit" class="btn btn-dark form-control" type="submit" value="Verify OTP">
                                    </div>
                                </form>
                                <div class="mt-3">
                                    <p class="login-card-footer-text"><b>Don't have an account?</b><a
                                            href="{{ route('users.register') }}" class="text-reset text-muted"> Register
                                            here</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
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
    </script>
@endsection

{{--
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Anticasting | OTP</title>
        <link href="{{ asset('assets/auth/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/auth/jquery-3.6.0.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/toastr.min.css') }}">
        <script src="{{ asset('assets/auth/toastr.min.js') }}"></script>
    </head>
    <body>
        <br/>
        <br/>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
              <script>
                 @if(Session::has('msg'))
                    toastr.success("{{ Session::get('msg') }}");

                      @elseif (Session::has('expire'))
                      toastr.info("{{ Session::get('expire') }}");
                      @elseif (Session::has('invalid'))
                      toastr.error("{{ Session::get('invalid') }}");
                      @elseif (Session::has('success'))
                      toastr.success("{{ Session::get('success') }}");
                  @endif
              </script>
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <div class="border-0">
                                              <span class="lead text-muted" >
                                                OTP has been sent your email please enter. You will receive an email message and enter below.
                                              </span>
                                        </div>
                                   </div>
                               </div>
                                <div class="card shadow-lg border-0 rounded-lg mt-3">

                                    <div class="card-body">
                                        <form class="form-disable" action="{{ route('verify.otp') }}" method="post">
                                            @csrf
                                            <div class="form mb-3">
                                                <label for="otp" class="text-muted" >OTP Number</label>
                                                <br/>
                                                <input class="form-control" id="otp" name="otp" maxlength="4" type="text" placeholder="Please enter otp" />

                                                @error('otp')
                                                  <span class="text-danger"><b>{{ $message }}</b></span>
                                                @enderror
                                            </div>


                                            <div style="margin-left:290px;" class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <input type="submit" class="btn-sm btn btn-primary active" value="Verify OTP">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/auth/js/scripts.js') }}"></script>
    </body>
</html> --}}
