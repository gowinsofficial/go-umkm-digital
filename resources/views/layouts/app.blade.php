<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-icons.css') }}">
</head>
<body>
   
      <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark " arial-label="Furni navigation bar">

        <div class="container">
          <a class="navbar-brand" href="index.html">GO UMKM<span>.</span></a>
  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li><a class="nav-link" href="/kuliner-madura">kuliner</a></li>
              <li><a class="nav-link" href="/">Pariwisata</a></li>
              <li><a class="nav-link" href="">Batik</a></li>
              <li><a class="nav-link" href="">Madura TV</a></li>
              <li><a class="nav-link" href="">Contact us</a></li>
            </ul>
  
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
              <li><a class="navbar-icon bi-person smoothscroll" href="#"></a></li>
              {{--  <li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>  --}}
            </ul>
          </div>
        </div>
          
      </nav>
        <main >
            @yield('content')
        </main>
        <script src="{{ asset('asset/js/jquery.min.js')}}"></script>
        <script src="{{ asset('asset/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('asset/js/jquery.sticky.js')}}"></script>
        <script src="{{ asset('asset/js/click-scroll.js')}}"></script>
        <script src="{{ asset('asset/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
