<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dapur Nasa</title>

  <link href="{{ asset('assets/img/logo-dapur-nasa.png')}}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('welcome/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('welcome/assets/css/style.css') }}" rel="stylesheet">

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="https://wa.me/6285728012440?text=produknya%20ready?"><img src="{{ asset('assets/img/logo-dapur-nasa.png') }}" alt=""></a></h1>
      <a href="https://wa.me/6285728012440?text=produknya%20ready?" class="get-started-btn scrollto">Chat Penjual</a>
    </div>
  </header><!-- End Header -->

  @yield('content')
  
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Shoprul</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://shoprul.com/">Shoprul</a>
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="{{ asset('welcome/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('welcome/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('welcome/assets/js/main.js') }}"></script>
</body>
</html>
