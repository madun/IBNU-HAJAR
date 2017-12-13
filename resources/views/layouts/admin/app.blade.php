<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('image/u-logo.jpg') }}">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    @section('style')
    @show
    {{-- Uikit Notif --}}
    <!-- UIkit CSS -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/css/uikit.min.css" /> --}}
    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">

  </head>
  <body class="nav-md" onload="startTime()">
    <div class="container body">
      <div class="main_container">
        @include('layouts.admin.topnav.top')
        @section('sidebar-left')
        @show
        {{-- content here --}}
        <div class="right_col" role="main">
          @section('content')
          @show
        </div>
        @include('layouts.admin.footer.footer')

      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin/vendors/nprogress/nprogress.js') }}"></script>
    <!-- UIkit JS -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/js/uikit-icons.min.js"></script> --}}
    @section('script')
    @show


    {{-- BUTTON NOTIFY --}}
    {{-- <script type="text/javascript">
    $('button.status').on('click', function() {
        UIkit.notification($(".status").data(), {pos: 'top-center', timeout: 5000});
    });
      // UIkit.notification($(this).data(), {pos: 'top-center', timeout: 5000})
    </script> --}}
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin/build/js/custom.min.js') }}"></script>

  </body>
</html>
