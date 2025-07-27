@extends('layouts.app')

@section('content')

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KLIK rekrut</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<header class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex justify-content-between align-items-center">
    <a href="#" class="logo d-flex align-items-center">
      <h1 class="sitename"><span class="bold">Klik</span><span>rekrut</span></h1>
    </a>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/find') }}">Find Employee</a></li>
        <li><a href="{{ url('/job') }}">Find Job</a></li>
        <li><a href="{{ url('/learning') }}">E-Learning</a></li>
        <li><a href="{{ url('/community') }}">Community</a></li>
      </ul>
    </nav>
  </div>
</header>
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background" style="font-family: 'Poppins', sans-serif; background: linear-gradient(to bottom, #004AAD, #5DE0E6); min-height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center" data-aos="fade-up">
    <h5 style="font-size: 1.1rem; font-weight: 600; color: white;">klik<span style="color: #ccc;">rekrut</span></h5>
<h1 style="font-size: 3rem; font-weight: bold; color: white; line-height: 1.2; margin-top: 20px;">
  Upgrade Your<br><span class="exclusive-text">Recruitment Skills</span>
</h1>
    <div class="mt-4">
      <a href="#recruiter" class="btn btn-outline-light rounded-pill px-4 py-2" style="font-weight: 500;">
        Learn Now
      </a>
    </div>
  </div>
</section>

<!-- Product Section with Flip Cards -->
<section style="background: #4A7CA9; padding: 60px 0;">
  <div class="container"data-aos="fade-up">

    <!-- FOR RECRUITER -->
    <div class="mb-5">
      <div id="recruiter" class="mb-5">
      <span class="badge bg-warning text-dark px-3 py-2 mb-2" style="font-weight: 600;">FOR RECRUITER</span>
      <h3 class="text-white fw-bold text-center mb-4">PRODUK VIDEO TERBARU !</h3>
      <div class="row justify-content-center g-4">

        <!-- Card 1 -->
        <div class="col-md-4 col-sm-6">
          <div class="flip-card">
            <div class="card-inner">
              <div class="card-front">
                <img src="assets/img/andi.jpg" alt="Product 1" class="product-img">
              </div>
              <div class="card-back d-flex flex-column justify-content-center align-items-center">
                <a href="#" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold">RP 19.000</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 col-sm-6">
          <div class="flip-card">
            <div class="card-inner">
              <div class="card-front">
                <img src="assets/img/far.jpg" alt="Product 2" class="product-img">
              </div>
              <div class="card-back d-flex flex-column justify-content-center align-items-center">
                <a href="#" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold">RP 19.000</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 col-sm-6">
          <div class="flip-card">
            <div class="card-inner">
              <div class="card-front">
                <img src="assets/img/adam.jpg" alt="Product 3" class="product-img">
              </div>
              <div class="card-back d-flex flex-column justify-content-center align-items-center">
                <a href="#" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold">RP 19.000</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

<!-- PRODUK VIDEO TERBARU ! -->
<div id="recruiter" class="mb-5"data-aos="fade-up">
  <span class="badge bg-warning text-dark px-3 py-2 mb-2" style="font-weight: 600;">FOR RECRUITER</span>
  <h3 class="text-white fw-bold text-center mb-4">PRODUK VIDEO TERBARU !</h3>
  <div class="row justify-content-center g-4">

    <!-- Card 1 -->
    <div class="col-md-4 col-sm-6">
      <div class="flip-card">
        <div class="card-inner">
          <div class="card-front">
            <img src="assets/img/andi.jpg" alt="Product 4" class="product-img">
          </div>
          <div class="card-back d-flex flex-column justify-content-center align-items-center">
            <a href="#" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold">RP 19.000</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4 col-sm-6">
      <div class="flip-card">
        <div class="card-inner">
          <div class="card-front">
            <img src="assets/img/far.jpg" alt="Product 5" class="product-img">
          </div>
          <div class="card-back d-flex flex-column justify-content-center align-items-center">
            <a href="#" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold">RP 19.000</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4 col-sm-6">
      <div class="flip-card">
        <div class="card-inner">
          <div class="card-front">
            <img src="assets/img/adam.jpg" alt="Product 6" class="product-img">
          </div>
          <div class="card-back d-flex flex-column justify-content-center align-items-center">
            <a href="#" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold">RP 19.000</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</section>

    <!-- Footer -->
    <footer style="background-color: #fff; color: #333; padding: 40px 20px; font-family: 'Inter', sans-serif; font-size: 14px;">
      <div class="container">
        <div class="row justify-content-between align-items-start flex-wrap">

          <!-- Logo dan Deskripsi -->
          <div class="col-md-3 col-12 mb-4">
            <div style="font-size: 28px; font-weight: 700; font-family: 'Inter', sans-serif; margin-bottom: 10px;">
              <span style="color: #2A5D9F;">klik</span><span style="color:rgb(0, 145, 255);">rekrut</span>
            </div>
            <p style="margin: 0; font-size: 12px; color: #666;">Recruitment & Job Offer Assistant</p>
          </div>

          <!-- KLIK REKRUT -->
          <div class="col-md-2 col-6 mb-4">
            <h6 style="font-weight: 700; font-size: 13px;">KLIK REKRUT</h6>
            <ul style="list-style: none; padding-left: 0; margin: 0;">
              <li><a href="find" style="text-decoration: none; color: #333;">Find Employee</a></li>
              <li><a href="job" style="text-decoration: none; color: #333;">Find Job</a></li>
              <li><a href="learning" style="text-decoration: none; color: #333;">E-Learning</a></li>
              <li><a href="community" style="text-decoration: none; color: #333;">Community</a></li>
            </ul>
          </div>

          <!-- LAYANAN -->
          <div class="col-md-2 col-6 mb-4">
            <h6 style="font-weight: 700; font-size: 13px;">LAYANAN</h6>
            <ul style="list-style: none; padding-left: 0; margin: 0;">
              <li><a href="find" style="text-decoration: none; color: #333;">Find Employee</a></li>
              <li><a href="job" style="text-decoration: none; color: #333;">Find Job</a></li>
              <li><a href="learning" style="text-decoration: none; color: #333;">E-Learning</a></li>
              <li><a href="community" style="text-decoration: none; color: #333;">Community</a></li>
            </ul>
          </div>

          <!-- LAINNYA + Sosmed -->
          <div class="col-md-3 col-12 mb-4">
            <h6 style="font-weight: 700; font-size: 13px;">LAINNYA</h6>
            <div style="margin-top: 10px;">
              <a href="#" style="margin-right: 10px;"><img src="assets/img/tt.png" alt="tiktok" style="width: 35px;"></a>
              <a href="https://www.instagram.com/klikrekrut/" style="margin-right: 10px;"><img src="assets/img/ig.png" alt="Instagram" style="width: 20px;"></a>
              <a href="#" style="margin-right: 10px;"><img src="assets/img/linkln.png" alt="LinkedIn" style="width: 20px;"></a>
              <a href="#" style="margin-right: 10px;"><img src="assets/img/twt.png" alt="Twitter" style="width: 20px;"></a>
              <a href="#"><img src="assets/img/yt.png" alt="YouTube" style="width: 20px;"></a>
            </div>
          </div>
        </div>

        <hr style="border-top: 1px solid #999; margin: 20px 0;">

        <p style="font-size: 12px; color: #666; margin: 0;">© KLIKREKRUT 2025 • All Right Reserved</p>
      </div>
    </footer>

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

    <!-- Floating WhatsApp Button -->
<a href="https://api.whatsapp.com/send?phone=6289678868752" 
   class="whatsapp-float" 
   target="_blank" 
   title="Chat via WhatsApp">
  <img src="https://img.icons8.com/ios-filled/50/ffffff/whatsapp--v1.png" alt="WhatsApp" />
</a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector('.mobile-nav-toggle');
    const nav = document.querySelector('#navmenu');

    toggle.addEventListener('click', function () {
      nav.classList.toggle('navmenu-active');
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector('.mobile-nav-toggle');
    const nav = document.querySelector('.navmenu');
    const overlay = document.querySelector('#nav-overlay');

    toggle.addEventListener('click', function () {
      nav.classList.toggle('active');
      overlay.classList.toggle('active');
      toggle.classList.toggle('bi-x');
      toggle.classList.toggle('bi-list');
    });

    overlay.addEventListener('click', function () {
      nav.classList.remove('active');
      overlay.classList.remove('active');
      toggle.classList.add('bi-list');
      toggle.classList.remove('bi-x');
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector('.mobile-nav-toggle');
    const nav = document.querySelector('#navmenu');

    if (toggle && nav) {
      toggle.addEventListener('click', function () {
        nav.classList.toggle('active');
        toggle.classList.toggle('bi-x');
        toggle.classList.toggle('bi-list');
      });
    }
  });
</script>

@endsection