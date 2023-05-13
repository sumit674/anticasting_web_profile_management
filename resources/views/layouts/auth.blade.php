<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anticasting @yield('title')</title>
    <link rel="icon" sizes="16x16" href="{{ asset('assets/website/images/favicon.ico') }}">
    @include('auth.include.head')
    <style>
        body{
            overflow-y: hidden !important;
        }
    </style>
    @yield('style')
    {{-- @include('auth.include.header') --}}
    <script>
        var url = "{{ url('/') }}";
    </script>
    @yield('header')
</head>
<body class="bg-body">
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('assets/users/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
   </script>

  @yield('footer')
  {{--  <script type="text/javascript">
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
</script>  --}}
<script src="{{ asset('assets/toast/jquery.toast.js') }}"></script>
@include('include.alert-msg')
</body>
</html>
