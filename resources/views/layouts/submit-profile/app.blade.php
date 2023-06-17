<!DOCTYPE html>
<html lang="en">
<head>
   @include('include.submit-profile.head')
   @yield('header')
</head>
<body>
      <div class="d-flex">
        @include('include.submit-profile.siderbar')
        @yield('content')
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
      <!-- Include jQuery UI library -->
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <script src="{{ asset('assets/toast/jquery.toast.js') }}"></script>
      @include('include.alert-msg')
      @yield('footer')
</body>
</html>
