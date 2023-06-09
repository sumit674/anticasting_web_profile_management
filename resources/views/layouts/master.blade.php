<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anticasting @yield('title')</title>
    <link rel="icon" href="{{ asset('assets/website/images/favicon.ico') }}">
    @include('include.head')
    @yield('header')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('include.header')
    <!-- ======= End Header ======= -->
    <!-- ======= Hero ======= -->

    <!-- ======= End Hero ======= -->

    <!-- ======= Footer ======= -->
    @yield('content')
    @include('include.footer')
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/auth/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('assets/auth/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/users/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/users/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/users/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/users/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/users/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/users/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/users/assets/js/main.js') }}"></script>
    <script type="text/javascript">
        $("body").on('click', '.toggle-password', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#pass_log_id");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });
        $(document).ready(function() {
            $(".form-disable").on("submit", function() {
                var self = $(this),
                    button = self.find('input[type="submit"], button'),
                    submitValue = button.data("submit-value");
                button
                    .attr("disabled", "disabled")
                    .val(submitValue ? submitValue : "Please wait...");
            });
        });
    </script>

    @include('include.alert-msg')
    <script src="{{ asset('assets/toast/jquery.toast.js') }}"></script>
</body>
</html>
