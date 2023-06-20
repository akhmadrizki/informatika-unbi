<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Informatika - Universitas Bali Internasional</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://www.unbi.ac.id//assets/img/logsmall.png" rel="icon">
  <link href="http://www.unbi.ac.id//assets/img/logsmall.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('client-assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('client-assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('client-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('client-assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('client-assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('client-assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('client-assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('client-assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
    @include('layouts.client.navigation')
  <!-- End Header -->

  <main id="main">
    {{ $slot }}
    <!-- ======= Popular Courses Section ======= -->
        @include('layouts.client.news')
    <!-- ======= End Popular Courses Section ======= -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('layouts.client.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-whatsapp"></i> &nbsp; &nbsp; <span>Chat Dengan Kami</span>
  </a>

  <!-- Vendor JS Files -->
  <script src="{{asset('client-assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('client-assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('client-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('client-assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('client-assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('client-assets/js/main.js')}}"></script>

</body>

</html>
