<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anticasting @yield('title')</title>
    @include('include.submitprofile.head')
    @yield('style')
    @include('include.submitprofile.header')

</head>

<body>
    <!-- ======= Header ======= -->
    @yield('header')
    <!-- ======= End Header ======= -->
    @yield('content')

    @include('include.submitprofile.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets/submitprofile/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
   
</body>
</html>

    @yield('footer')
</body>

</html>
