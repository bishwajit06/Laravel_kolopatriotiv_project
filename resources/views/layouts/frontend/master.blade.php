<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('assets/frontend/images/favicon.png')}}"/>
    <title>Save Ukrainian children</title>
    <link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    @stack('css')
    <link href="{{asset('assets/frontend/css/custom.css')}}" rel="stylesheet">
  </head>
  <body>
    <!-- TOP NAVIGATION SECTION -->
    @include('frontend.partial.header')

    @yield('content')

    <!-- FOOTER SECTION -->
    @include('frontend.partial.footer')

    <script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
    @stack('js')
  </body>
</html>