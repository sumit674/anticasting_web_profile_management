<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anticasting @yield('title')</title>
    <link rel="icon" sizes="16x16" href="{{ asset('assets/website/images/favicon.ico') }}">
    @include('include.submitprofile.head')
    @yield('header')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('include.submitprofile.header')
    <!-- ======= End Header ======= -->
    @yield('content')

    @include('include.submitprofile.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('assets/toast/jquery.toast.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets/submitprofile/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="{{ asset('assets/submitprofile/assets/js/cropper.min.js') }}"></script>
    @yield('footer')
    {{--  <script type="text/javascript">
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
    </script>  --}}
    <script src="{{ asset('assets/toast/jquery.toast.js') }}"></script>
    @include('include.alert-msg')
</body>

</html>
