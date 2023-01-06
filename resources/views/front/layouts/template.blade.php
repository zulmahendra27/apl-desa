<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('') }}front/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('') }}front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('') }}front/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('') }}front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('') }}front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('') }}front/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('') }}front/assets/css/style.css" rel="stylesheet">

  @if (request()->is('agenda'))
    <link rel="stylesheet" href="{{ asset('') }}front/assets/css/evo-calendar.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
      rel="stylesheet">
  @endif

  <style>
    #calendar {
      font-family: 'Source Sans Pro', sans-serif;
    }

    .image {
      max-height: 300px;
      object-fit: cover;
      object-position: center;
    }
  </style>

  <!-- =======================================================
  * Template Name: SoftLand - v4.9.1
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="/">Desa Geulumpang Sulu Barat</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      @include('front.layouts.navbar')

    </div>
  </header><!-- End Header -->

  <main id="main">

    @include('front.layouts.header')

    @yield('container')

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>Starts Publishing Your Apps</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App
                  store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i
                  class="bx bxl-play-store"></i><span>Google play</span></a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>Tentang Desa Geulumpang Sulu Barat</h3>
          <p>Geulumpang Sulu Barat merupakan sebuah gampong yang terletak di kecamatan Dewantara, Kabupaten Aceh Utara,
            provinsi Aceh, Indonesia.</p>
          <p class="social">
            <a href="#"><span class="bi bi-twitter"></span></a>
            <a href="#"><span class="bi bi-facebook"></span></a>
            <a href="#"><span class="bi bi-instagram"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
          </p>
        </div>
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="/">Home</a></li>
                <li><a href="/struktur">Struktur Desa</a></li>
                <li><a href="/visi-misi">Visi dan Misi</a></li>
                <li><a href="/agenda">Agenda</a></li>
                <li><a href="/galleries">Galeri</a></li>
              </ul>
            </div>
            <div class="col-md-7 mb-4 mb-md-0">
              <h3>Peta Desa</h3>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7946.156718020575!2d96.98354512674173!3d5.250374218604006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304771407fbdb42f%3A0x57ca8d9076c76c52!2sGeulumpang%20Sulu%20Bar.%2C%20Kec.%20Dewantara%2C%20Kabupaten%20Aceh%20Utara%2C%20Aceh!5e0!3m2!1sid!2sid!4v1673015842307!5m2!1sid!2sid"
                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright <a href="/">Desa Geulumpang Sulu Barat</a>. All Rights Reserved
          </p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('') }}front/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('') }}front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}front/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}front/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('') }}front/assets/js/main.js"></script>

  @if (request()->is('agenda'))
    <!-- Add jQuery library (required) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

    <!-- Add the evo-calendar.js for.. obviously, functionality! -->
    <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>

    <script src="{{ asset('') }}front/assets/js/calendar.js"></script>
  @endif

</body>

</html>
