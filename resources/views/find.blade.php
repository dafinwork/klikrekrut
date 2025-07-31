@extends('layouts.app')

@section('content')

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KLIK rekrut - Find Employee</title>
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
  Find Employee<br>
  <span class="exclusive-text">Effortless</span>
</h1>
        <p id="typing-recruit" style="color: #cfcfcf; font-size: 1.1rem; margin-bottom: 1.5rem;"></p>
        <div class="d-flex flex-column flex-md-row gap-3">
          <a href="#services" class="btn btn-danger rounded-pill px-4 py-2" style="font-weight: 500;">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const recruitText = "Recruit with Us";
  const recruitEl = document.getElementById("typing-recruit");
  let i = 0;

  function typeRecruit() {
    if (i < recruitText.length) {
      recruitEl.innerHTML += recruitText.charAt(i);
      i++;
      setTimeout(typeRecruit, 100); // ubah angka ini buat atur kecepatan
    }
  }

  window.addEventListener("DOMContentLoaded", typeRecruit);
</script>


<!-- Recruitment Service Comparison Section -->
<section id="services" class="services section" style="padding: 60px 0;">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Recruitment Service Comparison</h2>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center">
        <thead class="table-primary">
          <tr>
            <th scope="col" style="width: 30%;">Services</th>
            <th scope="col" style="width: 20%;">Job Portal</th>
            <th scope="col" style="width: 20%;">Headhunter</th>
            <th scope="col" style="width: 30%;">Assistant by KLIK Rekrut</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-start">Affordable Recruitment Solutions</td>
            <td><i class="bi bi-check-lg text-success"></i></td>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
          </tr>
          <tr>
            <td class="text-start">Supports All Hiring Levels</td>
            <td><i class="bi bi-check-lg text-success"></i></td>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
          </tr>
          <tr>
            <td class="text-start">End-to-end Recruitment Process</td>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
          </tr>
          <tr>
            <td class="text-start">Talent Personalization</td>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
          </tr>
          <tr>
            <td class="text-start">Talent Replacement Guarantee</td>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
          </tr>
          <tr>
            <td class="text-start">Approach Passive Candidate</td>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
            <td><i class="bi bi-check-lg text-success"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- How to Start Section -->
<section id="how-to-start" class="how-to-start section" style="padding: 60px 0; background-color: #f8f9fa;">
  <div class="container" data-aos="fade-up">
    <div class="section-header text-center">
      <h2>Bagaimana cara mulai untuk mencari karyawan?</h2>
    </div>

    <div class="row gy-5 justify-content-center">
      <!-- Step 1 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="step-number mb-3" style="
              width: 50px;
              height: 50px;
              background-color: #004AAD;
              color: white;
              border-radius: 50%;
              display: flex;
              align-items: center;
              justify-content: center;
              margin: 0 auto 20px;
              font-size: 1.5rem;
              font-weight: bold;
            ">1</div>
            <h5 class="card-title mb-3">Share Your Talent Need</h5>
            <p class="card-text">Hubungi Tim KLIK Rekrut dan request talent yang kamu cari.</p>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="step-number mb-3" style="
              width: 50px;
              height: 50px;
              background-color: #004AAD;
              color: white;
              border-radius: 50%;
              display: flex;
              align-items: center;
              justify-content: center;
              margin: 0 auto 20px;
              font-size: 1.5rem;
              font-weight: bold;
            ">2</div>
            <h5 class="card-title mb-3">Giving Talent to You</h5>
            <p class="card-text">Asisten rekrutmen kami akan bekerja dan memberikan qualified talent untukmu.</p>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="step-number mb-3" style="
              width: 50px;
              height: 50px;
              background-color: #004AAD;
              color: white;
              border-radius: 50%;
              display: flex;
              align-items: center;
              justify-content: center;
              margin: 0 auto 20px;
              font-size: 1.5rem;
              font-weight: bold;
            ">3</div>
            <h5 class="card-title mb-3">Claim Talent</h5>
            <p class="card-text">Klaim kandidat yang cocok. Apabila masih belum cocok, kami carikan lagi.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Button -->
    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
      <a href="https://api.whatsapp.com/send?phone=6289678868752" 
         target="_blank" 
         class="btn btn-primary rounded-pill px-4 py-2" 
         style="font-weight: 500;">
        Contact Us
      </a>
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
              <a href="https://www.tiktok.com/@klikrekrut" style="margin-right: 10px;"><img src="assets/img/tt.png" alt="tiktok" style="width: 35px;"></a>
              <a href="https://www.instagram.com/klikrekrut/" style="margin-right: 10px;"><img src="assets/img/ig.png" alt="Instagram" style="width: 20px;"></a>
              <a href="https://www.linkedin.com/company/klikrekrut/" style="margin-right: 10px;"><img src="assets/img/linkln.png" alt="LinkedIn" style="width: 20px;"></a>
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

      <!-- Garis -->
      <hr style="border-top: 1px solid #999; margin: 20px 0;">

      <!-- Copyright -->
      <p style="font-size: 12px; color: #666; margin: 0;">© KLIKREKRUT 2025 • All Right Reserved</p>
    </div>
  </footer>

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