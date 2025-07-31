@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KLIK rekrut - Community</title>
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
</head>

<body class="index-page">

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
              Engage with Member,<br>Unlock Career Together
            </h1>
            <div class="d-flex flex-column flex-md-row gap-3">
              <a href="#" class="btn btn-danger rounded-pill px-4 py-2" style="font-weight: 500;">Join Community</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- BENEFIT SECTION -->
<section style="background-color: #ffffff; padding: 60px 0;">
  <div class="container" data-aos="fade-up"> 
    <h5 class="text-warning fw-bold mb-4">COMMUNITY BENEFIT :</h5>
    <div class="row g-4 align-items-center">
      <div class="col-md-6">
        <div class="d-flex flex-column gap-3">

          <!-- Benefit 1 -->
          <div class="p-3 bg-white shadow rounded border-start border-5 border-primary benefit-item" data-img="assets/img/hand.jpg">
            <h6 class="fw-bold text-dark mb-1">Exclusive Bulletin</h6>
            <p class="mb-0 text-muted">Dapatkan buletin mingguan tentang pasar kerja, berita rekrutmen, dan tren industri yang dibagikan hanya di dalam komunitas.</p>
          </div>

          <!-- Benefit 2 -->
          <div class="p-3 bg-white shadow rounded border-start border-5 border-primary benefit-item" data-img="assets/img/event.jpg">
            <h6 class="fw-bold text-dark mb-1">Exclusive Event</h6>
            <p class="mb-0 text-muted">Dapatkan akses ke event edukasi rekrutmen dari para profesional dan rekruter perusahaan khusus member komunitas.</p>
          </div>

          <!-- Benefit 3 -->
          <div class="p-3 bg-white shadow rounded border-start border-5 border-primary benefit-item" data-img="assets/img/join.jpg">
            <h6 class="fw-bold text-dark mb-1">Exclusive Opportunities</h6>
            <p class="mb-0 text-muted">Akses informasi lowongan kerja, freelance dan kolaborasi dari para member yang ditawarkan hanya di dalam komunitas.</p>
          </div>

          <!-- Benefit 4 -->
          <div class="p-3 bg-white shadow rounded border-start border-5 border-primary benefit-item" data-img="assets/img/business.jpg">
            <h6 class="fw-bold text-dark mb-1">Career Discussion Group</h6>
            <p class="mb-0 text-muted">Berjejaring dan berdiskusi karir dengan member lain yang sebidang denganmu.</p>
          </div>

        </div>
      </div>

      <!-- Gambar akan berubah -->
      <div class="col-md-6 text-center">
        <img id="benefit-image" src="assets/img/klik.jpg" alt="Benefit Preview" class="img-fluid transition-img" style="max-height: 500px;">
      </div>
    </div>
  </div>
</section>
<script>
  document.querySelectorAll('.benefit-item').forEach(item => {
    item.addEventListener('click', function () {
      const img = document.getElementById('benefit-image');
      const newSrc = this.getAttribute('data-img');

      // Tambahkan efek fade-out
      img.classList.add('fade-out');

      // Setelah animasi selesai, ganti gambar dan fade-in
      setTimeout(() => {
        img.setAttribute('src', newSrc);
        img.classList.remove('fade-out');
      }, 300); // sesuaikan waktunya dengan CSS transition (0.5s)
    });
  });
</script>

<!-- UPCOMING EVENT SECTION -->
<section style="background-color: #4A7CA9; padding: 60px 0;">
  <div class="container"data-aos="fade-up">
    <h2 class="text-center fw-bold mb-5">Upcoming Exclusive Event</h2>
    <div class="row g-4 justify-content-center">

      <!-- Event 1 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow event-card">
          <img src="assets/img/andi.jpg" class="card-img-top img-fluid">
          <div class="card-body">
            <h5 class="fw-bold">BIKIN CV OUTSTANDING YANG GAK BIKIN PUSING</h5>
            <p class="text-muted">JUMAT, 18 APR 2025</p>
            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Join Community</a>
          </div>
        </div>
      </div>

      <!-- Event 2 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow event-card">
          <img src="assets/img/adam.jpg" class="card-img-top img-fluid">
          <div class="card-body">
            <h5 class="fw-bold">LIVE HIRING</h5>
            <p class="text-muted">UPCOMING!</p>
            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Join Community</a>
          </div>
        </div>
      </div>

      <!-- Event 3 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow event-card">
          <img src="assets/img/far.jpg" class="card-img-top img-fluid">
          <div class="card-body">
            <h5 class="fw-bold">INTERVIEW SERIES</h5>
            <p class="text-muted">UPCOMING!</p>
            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Join Community</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONI SECTION -->
<section style="background-color: #ffffff; padding: 60px 0;">
  <div class="container"data-aos="fade-up">
    <h3 class="text-center fw-bold mb-5">Rasanya Gabung Komunitas KLIK Rekrut</h3>
    <div class="row g-4 justify-content-center">
      <div class="col-md-3 col-6">
        <img src="assets/img/tangan.jpg" alt="Testimoni 1" class="img-fluid rounded">
      </div>
      <div class="col-md-3 col-6">
        <img src="assets/img/tangan.jpg" alt="Testimoni 2" class="img-fluid rounded">
      </div>
      <div class="col-md-3 col-6">
        <img src="assets/img/tangan.jpg" alt="Testimoni 3" class="img-fluid rounded">
      </div>
      <div class="col-md-3 col-6">
        <img src="assets/img/tangan.jpg" alt="Testimoni 4" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

<!-- DISCUSSION GROUP SECTION -->
<section style="background-color: #f4f7fa; padding: 60px 0;">
  <div class="container text-center"data-aos="fade-up">
    <h3 class="fw-bold mb-3">Join the Discussion Group</h3>
    <p class="mb-4">Pilih bidang karir kamu dan mulai terhubung dengan member lain di bidang yang sama denganmu.</p>
    <div class="row justify-content-center g-3">
      <div class="col-6 col-md-3 col-lg-2"><a href="#" class="btn btn-outline-primary w-100">IT</a></div>
      <div class="col-6 col-md-3 col-lg-2"><a href="#" class="btn btn-outline-primary w-100">FINANCE</a></div>
      <div class="col-6 col-md-3 col-lg-2"><a href="#" class="btn btn-outline-primary w-100">CREATIVE</a></div>
      <div class="col-6 col-md-3 col-lg-2"><a href="#" class="btn btn-outline-primary w-100">DIGITAL MARKETING</a></div>
      <div class="col-6 col-md-3 col-lg-2"><a href="#" class="btn btn-outline-primary w-100">HR</a></div>
      <div class="col-6 col-md-3 col-lg-2"><a href="#" class="btn btn-outline-primary w-100">SALES</a></div>
    </div>
    <p class="text-muted mt-4">Semua benefit bisa kamu dapatkan secara <strong>gratis</strong> hanya di dalam komunitas</p>
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

</body>

</html>
@endsection