<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    @yield('header')
    @stack('style')
</head>

<body>
    @include('admin.includes.sidebar')
    @include('admin.includes.header')
   <div class="content-wrap">
        @yield('content')
    </div>

     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="{{ asset('assets/toast/jquery.toast.js') }}"></script>
     <script src="{{asset('assets/admin/js/lib/bootstrap.min.js')}}"  crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <script  src="{{ asset('assets/admin/js/fSelect.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
     <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
     @include('admin.includes.alert-msg')
    @yield('footer')
  </body>
</html>
