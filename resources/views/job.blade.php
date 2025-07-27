@extends('layouts.app')

@section('content')
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KLIK rekrut - Find Job</title>
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
        <h4 style="color: white; font-weight: bold; margin-bottom: 1rem;">
          <span style="color: white; font-weight: bold;">klik</span><span style="color: #cfcfcf; font-weight: normal;">rekrut</span>
        </h4>
<h1 style="font-weight: bold; color: white; font-size: 2.5rem; line-height: 1.3; margin-bottom: 1rem;">
  Kick Start<br>
  Your <span class="exclusive-text">Career.</span>
</h1>
        <p id="typing-explore" style="color: #cfcfcf; font-size: 1.1rem; margin-bottom: 1.5rem;"></p>
        <div class="d-flex flex-column flex-md-row gap-3">
          <a href="#jobs-open" class="btn btn-danger rounded-pill px-4 py-2" style="font-weight: 500;">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const exploreText = "Explore Jobs";
  const exploreEl = document.getElementById("typing-explore");
  let e = 0;

  function typeExplore() {
    if (e < exploreText.length) {
      exploreEl.innerHTML += exploreText.charAt(e);
      e++;
      setTimeout(typeExplore, 100); // ubah kecepatan kalau perlu
    }
  }

  window.addEventListener("DOMContentLoaded", typeExplore);
</script>


<<!-- Jobs Open Section -->
<section id="jobs-open" class="section" style="padding: 60px 0;">
  <div class="container" data-aos="fade-up">
    <div class="section-header text-center">
      <h2>Jobs Open</h2>
    </div>

    <div class="row gy-4">
      <!-- Job Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/nur.png" alt="Nurama Logo" style="height: 30px; margin-right: 10px;">
              <span class="fw-semibold">n u r a m a .®</span>
            </div>
            <h5 class="card-title">Content Creator Specialist</h5>
            <p class="card-text">Cocok untuk kamu yang suka dengan dunia content creating dan aktif menggunakan social media.</p>
            <a href="#" class="btn btn-success rounded-pill mt-2 px-4">APPLY HERE</a>
          </div>
        </div>
      </div>

      <!-- Job Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/hokp.png" alt="Hokkaido Logo" style="height: 30px; margin-right: 10px;">
              <span class="fw-semibold">HOKKAIDO BAKED CHEESE TART</span>
            </div>
            <h5 class="card-title">Content Creator Specialist</h5>
            <p class="card-text">Cocok untuk kamu yang suka dengan dunia content creating dan aktif menggunakan social media.</p>
            <a href="#" class="btn btn-success rounded-pill mt-2 px-4">APPLY HERE</a>
          </div>
        </div>
      </div>

      <!-- Job Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/sosi.png" alt="Sosialo Logo" style="height: 30px; margin-right: 10px;">
              <span class="fw-semibold">Sosialo</span>
            </div>
            <h5 class="card-title">Content Creator Specialist</h5>
            <p class="card-text">Cocok untuk kamu yang suka dengan dunia content creating dan aktif menggunakan social media.</p>
            <a href="#" class="btn btn-success rounded-pill mt-2 px-4">APPLY HERE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Latest Jobs Closed Section -->
<section id="jobs-closed" class="section" style="padding: 60px 0;">
  <div class="container" data-aos="fade-up">
    <div class="section-header text-center">
      <h2>Latest Jobs Closed</h2>
    </div>

    <div class="row gy-4">
      <!-- Closed Job 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/irij.png" alt="Indonesia Research Logo" style="height: 30px; margin-right: 10px;">
              <span class="fw-semibold">Indonesia Research Institute Japan</span>
            </div>
            <h5 class="card-title">Content Creator Specialist</h5>
            <p class="card-text">Cocok untuk kamu yang suka dengan dunia content creating dan aktif menggunakan social media.</p>
          </div>
        </div>
      </div>

      <!-- Closed Job 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/nur.png" alt="Nurama Logo" style="height: 30px; margin-right: 10px;">
              <span class="fw-semibold">n u r a m a .®</span>
            </div>
            <h5 class="card-title">Content Creator Specialist</h5>
            <p class="card-text">Cocok untuk kamu yang suka dengan dunia content creating dan aktif menggunakan social media.</p>
          </div>
        </div>
      </div>

      <!-- Closed Job 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="assets/img/hokp.png" alt="Hokkaido Logo" style="height: 30px; margin-right: 10px;">
              <span class="fw-semibold">HOKKAIDO BAKED CHEESE TART</span>
            </div>
            <h5 class="card-title">Content Creator Specialist</h5>
            <p class="card-text">Cocok untuk kamu yang suka dengan dunia content creating dan aktif menggunakan social media.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- No Matching Jobs Section -->
<section class="section" style="padding: 60px 0;">
  <div class="container text-center" data-aos="fade-up">
    <div class="p-4 rounded" style="max-width: 800px; margin: auto;">
      <h2 class="fw-bold mb-3" style="font-size: 2rem;">Belum ada peluang kerja yang cocok?</h2>
      <p class="mb-1" style="font-size: 1.1rem;">-Submit CV & Portofolio-</p>
      <p class="text-muted" style="font-size: 1rem;">
        Tunggu kami menawarkan peluang kerja yang cocok dengan profil kemampuan dan tujuan karir kamu.
      </p>
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
@endsection