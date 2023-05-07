<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anticasting | @yield('title', 'Admin Login')</title>
    <link rel="icon" sizes="16x16" href="{{ asset('assets/website/images/favicon.ico') }}">
    <link href="{{ asset('assets/admin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
</head>
<style>
   body{
     overflow-y: hidden !important;
   }
</style>
<body>
<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="{{ url('/admin') }}">
                            <img src="{{ asset('assets/website/images/anticasting-logo.png') }}" alt="logo" class="logo"/>
                        </a>
                    </div>
                    <div class="login-form">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
@yield('footer')
<script type="text/javascript">
    $(document).ready(function () {
        $(".form-disable").on("submit", function () {
            var self = $(this),
                button = self.find('input[type="submit"], button'),
                submitValue = button.data("submit-value");
            button
                .attr("disabled", "disabled")
                .val(submitValue ? submitValue : "Please wait...");
        });
    });
</script>
</body>
</html>
