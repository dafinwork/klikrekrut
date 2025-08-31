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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


<style>
    * {
  font-family: 'Poppins', sans-serif !important;
}

  /* Terapkan Poppins untuk semua elemen */
  * {
    font-family: 'Poppins', sans-serif !important;
  }
</style>


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
<link href="assets/css/elearn.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Header -->
<header class="header fixed-top">
  <div class="container d-flex justify-content-between align-items-center py-2">

    <!-- Logo -->
    <a href="/" class="logo d-flex align-items-center">
      <img src="assets/img/footer.png" alt="Klikrekrut Logo" class="logo-full" />
    </a>

    <!-- Mobile Toggle -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- Nav Menu -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/">Services</a></li>
        <li><a href="{{ url('elearn') }}">E-learning</a></li>
        <li><a href="{{ url('apply') }}">Apply as Partner</a></li>
        <li>
<a href="{{ url('community1') }}"
   class="btn btn-outline-light wa-btn rounded-pill px-3 py-1 d-flex align-items-center gap-2">
    Join to Talent Community ➝
</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<!-- Overlay untuk mobile -->
<div class="mobile-nav-overlay"></div>
<script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".mobile-nav-toggle");
    const navmenu = document.getElementById("navmenu");
    const overlay = document.querySelector(".mobile-nav-overlay");

    toggle.addEventListener("click", () => {
      navmenu.classList.toggle("active");
      overlay.classList.toggle("active");

      // Ganti ikon burger ↔ X
      toggle.classList.toggle("bi-list");
      toggle.classList.toggle("bi-x");
    });

    overlay.addEventListener("click", () => {
      navmenu.classList.remove("active");
      overlay.classList.remove("active");
      toggle.classList.add("bi-list");
      toggle.classList.remove("bi-x");
    });
  });
</script>
</script>


<main class="main">
<!-- Tambahkan di layout atau halaman -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Hero Section -->
<section class="hero-section">
  <div class="container text-center">
    <h1 class="hero-title">
      Cari Kerja Sendiri Itu Berat,<br> Kamu Pasti Butuh Penyemangat
    </h1>
    <a href="#" class="btn-hero mt-3">
      Jelajahi Komunitas ➝
    </a>
  </div>
</section>

<style>
.hero-section {
    background: url("assets/img/community.jpg") center center no-repeat;
    background-size: cover;
    background-position: top;
    background-attachment: scroll;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 100vh; /* full layar */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    z-index: 1;
}

/* Judul */
.hero-title {
  font-weight: 700;
  font-size: 2.2rem;
  line-height: 1.4;
  color: #fff;
  text-shadow: 0px 3px 6px rgba(0,0,0,0.3);
}

/* Tombol gradasi */
.btn-hero {
  display: inline-block;
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
  color: #fff;
  padding: 12px 28px;
  font-weight: 600;
  font-size: 1rem;
  border-radius: 50px;
  text-decoration: none;
  transition: 0.3s;
}

.btn-hero:hover {
  opacity: 0.9;
  transform: translateY(-3px);
  box-shadow: 0 6px 16px rgba(0,0,0,0.3);
}
</style>

<!-- UPCOMING EVENT SECTION -->
<section class="upcoming-section py-5">
  <div class="container" data-aos="fade-up">
    <h2 class="event-title">Upcoming Event</h2>
    <p class="event-subtitle">Exclusive only for Community Members</p>

    <!-- Carousel -->
    <div id="eventCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Baris 1 -->
        <div class="carousel-item active">
          <div class="row g-4 justify-content-center">

            <!-- Event 1 -->
            <div class="col-md-4">
              <div class="card h-100 text-center border-0 shadow event-card">
                <img src="assets/img/andi.jpg" class="card-img-top img-fluid" alt="Event 1">
                <div class="card-body">
                  <h5 class="fw-bold text-primary">LIVE CLASS</h5>
                  <p class="text-muted mb-0">JUMAT, 18 APRIL 2025</p>
                </div>
              </div>
            </div>

            <!-- Event 2 -->
            <div class="col-md-4">
              <div class="card h-100 text-center border-0 shadow event-card">
                <img src="assets/img/adam.jpg" class="card-img-top img-fluid" alt="Event 2">
                <div class="card-body">
                  <h5 class="fw-bold text-primary">LIVE HIRING</h5>
                  <p class="text-muted mb-0">JUMAT, 09 MEI 2025</p>
                </div>
              </div>
            </div>

            <!-- Event 3 -->
            <div class="col-md-4">
              <div class="card h-100 text-center border-0 shadow event-card">
                <img src="assets/img/far.jpg" class="card-img-top img-fluid" alt="Event 3">
                <div class="card-body">
                  <h5 class="fw-bold text-primary">LIVE CLASS</h5>
                  <p class="text-muted mb-0">KAMIS, 12 JUNI 2025</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Baris 2 (opsional, kalau ada event tambahan) -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <!-- Tambahkan event baru di sini -->
          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
  </div>
</section>

<style>
.event-title {
  font-size: 48px;
  font-weight: 800;
  text-align: center;   /* biar rata tengah */
  color: #fff;          /* warna putih */
}

.event-subtitle {
  font-size: 22px;
  font-weight: 400;
  text-align: center;   /* biar rata tengah */
  color: #fff;          /* warna putih */
}
.upcoming-section {
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
  color: #fff;
}

.upcoming-section .card {
  border-radius: 12px;
  overflow: hidden;
}

.upcoming-section .card-body {
  background: #fff;
  border-top: 1px solid #eee;
  padding: 15px;
}

.upcoming-section h5 {
  font-size: 1.1rem;
}

.upcoming-section p {
  font-size: 0.9rem;
}
</style>
<!-- BENEFIT MEMBER SECTION -->
<section class="benefit-section py-5" style="background-color: #E9F5FB;">
  <div class="container">

    <!-- Judul -->
    <h2 class="text-center fw-bold mb-5">Benefit Member</h2>

    <!-- List Benefit -->
    <div class="benefit-list">
      <div class="benefit-item d-flex mb-4">
        <img src="assets/img/check.png" alt="check" class="check-icon me-3">
        <p><strong>Company Talent Pool :</strong> Terhubung langsung dengan rekruter dari berbagai perusahaan dan dapatkan info rekrutmen lebih dulu dari publik.</p>
      </div>

      <div class="benefit-item d-flex mb-4">
        <img src="assets/img/check.png" alt="check" class="check-icon me-3">
        <p><strong>Company Live Hiring :</strong> Ikuti acara rekrutmen langsung dan dapatkan kesempatan interview instan.</p>
      </div>

      <div class="benefit-item d-flex mb-4">
        <img src="assets/img/check.png" alt="check" class="check-icon me-3">
        <p><strong>Recruitment Live Class :</strong> Kelas langsung dengan topik rekrutmen dari Profesional, Praktisi & Rekruter terkurasi.</p>
      </div>

      <div class="benefit-item d-flex mb-4">
        <img src="assets/img/check.png" alt="check" class="check-icon me-3">
        <p><strong>Exclusive WhatsApp Group :</strong> Berjejaring dan berdiskusi karir dengan member lain yang sebidang denganmu. Dapatkan career discussion grup, job opportunity dan rekrutmen news.</p>
      </div>
    </div>

    <!-- Highlight Text -->
    <p class="text-center fw-bold fs-5 mt-5">
      Disini kamu bukan hanya belajar, tapi benar-benar terhubung ke berbagai peluang kerja dan dipersiapkan untuk di rekrut.
    </p>

  </div>
</section>

<!-- CSS -->
<style>
  .check-icon {
    width: 28px;   /* atur ukuran icon checklist */
    height: 28px;
    flex-shrink: 0;
  }

  .benefit-item p {
    margin: 0;
    font-size: 18px;
    line-height: 1.6;
  }
</style>
<!-- PRICING SECTION -->
<section class="pricing-section py-5">
  <div class="container text-center" data-aos="fade-up">

    <!-- Judul -->
    <span class="badge bg-gradient mb-3">Pricing</span>
    <h2 class="fw-bold mb-3">Join to Community</h2>
    <p class="text-muted mb-5">Untuk freshgraduate, freelancer dan jobseeker</p>

    <div class="row justify-content-center g-4">
      
      <!-- Pre-launch -->
      <div class="col-md-4">
        <div class="card pricing-card border-0 shadow-lg h-100 text-white bg-gradient-blue">
          <div class="card-body p-4 d-flex flex-column">
            <div>
              <h5 class="fw-bold">Pre-launch</h5>
              <p class="text-decoration-line-through small">Rp 99.000</p>
              <h2 class="fw-bold">Rp 49.000</h2>
              <p>Akses semua benefit sekali bayar</p>
            </div>

            <div class="mt-auto">
              <a href="#" class="btn btn-light w-100 fw-semibold">Pilih →</a>
              <ul class="list-unstyled text-start mt-4">
                <li class="mb-2"><img src="assets/img/check.png" width="20" class="me-2"> Akses Komunitas</li>
                <li class="mb-2"><img src="assets/img/check.png" width="20" class="me-2"> Exclusive Event</li>
                <li class="mb-2"><img src="assets/img/check.png" width="20" class="me-2"> Grup Support</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Normal Price -->
      <div class="col-md-4">
        <div class="card pricing-card border-0 shadow-lg h-100 text-white bg-gradient-gray">
          <div class="card-body p-4 d-flex flex-column">
            <div>
              <h5 class="fw-bold">Normal Price</h5>
              <h2 class="fw-bold">Rp 99.000</h2>
              <p>Akses semua benefit sekali bayar</p>
            </div>

            <div class="mt-auto">
              <button class="btn btn-light w-100 fw-semibold" disabled>Early Coming Soon</button>
              <ul class="list-unstyled text-start mt-4 text-light">
                <li class="mb-2"><img src="assets/img/check.png" width="20" class="me-2 opacity-50"> Akses Komunitas</li>
                <li class="mb-2"><img src="assets/img/check.png" width="20" class="me-2 opacity-50"> Exclusive Event</li>
                <li class="mb-2"><img src="assets/img/check.png" width="20" class="me-2 opacity-50"> Grup Support</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS -->
<style>
  .pricing-section .badge {
    background: linear-gradient(135deg, #5DE0E6, #004AAD);
    padding: 10px 20px;
    font-size: 14px;
    border-radius: 30px;
  }

  .bg-gradient-blue {
    background: linear-gradient(135deg, #5DE0E6, #004AAD);
  }

  .bg-gradient-gray {
    background: #b5b5b5;
    color: #eee !important;
  }

 .pricing-card h5,
.pricing-card h2 {
  color: #fff;
}

  .pricing-card ul li {
    font-size: 16px;
    font-weight: 500;
  }

  .pricing-section h2,
  .pricing-section p,
  .pricing-section h5 {
    font-family: 'Poppins', sans-serif;
  }
</style>
<!-- COMMUNITY SECTION -->
<section class="community-section py-5 text-center text-white">
  <div class="container" data-aos="fade-up">

    <!-- Judul -->
    <h2 class="fw-bold mb-5">Rasanya Gabung Komunitas KLIK Rekrut</h2>

    <!-- Card List -->
    <div class="row g-4 justify-content-center">

      <!-- Card 1 -->
      <div class="col-md-3">
        <div class="card h-100 shadow-lg border-0">
          <img src="assets/img/awan.png" class="card-img-top" alt="Community">
          <div class="card-body">
            <p class="fw-semibold">Punya temen seperjuangan menghadapi kegagalan rekrutmen</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3">
        <div class="card h-100 shadow-lg border-0">
          <img src="assets/img/awan.png" class="card-img-top" alt="Live Hiring">
          <div class="card-body">
            <p class="fw-semibold">Bisa interview langsung sama rekruter perusahaan di Live Hiring</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3">
        <div class="card h-100 shadow-lg border-0">
          <img src="assets/img/awan.png" class="card-img-top" alt="Portofolio">
          <div class="card-body">
            <p class="fw-semibold">Bisa bangun portofolio dari project yang di share member lain</p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-3">
        <div class="card h-100 shadow-lg border-0">
          <img src="assets/img/awan.png" class="card-img-top" alt="Networking">
          <div class="card-body">
            <p class="fw-semibold">Ngobrol dan Networking bareng member lain dari lintas bidang</p>
          </div>
        </div>
      </div>

    </div>

    <!-- CTA Button -->
    <div class="mt-5">
      <a href="#" class="btn btn-light px-4 py-2 fw-semibold rounded-pill shadow">
        → Gabung Sekarang ←
      </a>
    </div>

  </div>
</section>

<!-- CSS -->
<style>
  .community-section {
    background: linear-gradient(135deg, #5DE0E6, #004AAD);
  }

  .community-section h2 {
    font-family: 'Poppins', sans-serif;
  }

  .community-section .card {
    border-radius: 15px;
    overflow: hidden;
  }

  .community-section .card-body p {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
  }

  .community-section .btn {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
  }
</style>

<!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      
      <!-- Kiri: Logo + deskripsi -->
<div class="footer-about">
  <img src="assets/img/Footer.png" alt="Klik Rekrut Logo" class="footer-logo">
  <p><strong>Klik Rekrut</strong> hadir sebagai solusi rekrutmen yang ergonomis untuk mendapatkan SDM Siap Kerja.</p>
</div>

      <!-- Tengah: Menu Footer Baru -->
      <div class="footer-center">
        <!-- Layanan -->
        <div class="footer-column">
          <h6>LAYANAN</h6>
          <ul>
            <li><a href="#">Cari Pelamar</a></li>
            <li><a href="#">Cari Asisten</a></li>
          </ul>
        </div>
        <!-- Komunitas -->
        <div class="footer-column">
          <h6>KOMUNITAS</h6>
          <ul>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Cara Gabung</a></li>
          </ul>
        </div>
        <!-- Bantuan -->
        <div class="footer-column">
          <h6>BANTUAN</h6>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Kemitraan</a></li>
          </ul>
        </div>
      </div>

      <!-- Kanan: Sosial Media -->
      <div class="footer-column footer-right">
        <h6>SOCIAL MEDIA</h6>
        <div class="social-icons">
          <a href="https://www.tiktok.com/@klikrekrut" target="_blank"><img src="assets/img/tiktok.png" alt="Tiktok"></a>
          <a href="https://www.instagram.com/klikrekrut/" target="_blank"><img src="assets/img/instagram.png" alt="Instagram"></a>
          <a href="https://www.linkedin.com/company/klikrekrut/" target="_blank"><img src="assets/img/linkedin.png" alt="LinkedIn"></a>
          <a href="https://www.youtube.com/@klikrekrut" target="_blank"><img src="assets/img/youtube.png" alt="YouTube"></a>
        </div>
      </div>

    </div>

    <!-- Garis Pemisah -->
    <hr class="footer-divider">

    <!-- Copyright -->
    <div class="footer-bottom">
      <p>© KLIKREKRUT 2025 • All Right Reserved</p>
    </div>
  </div>
</footer>

<style>
.footer {
  background-color: #f9f9f9;
  color: #333;
  padding: 30px 20px;
  margin-top: 0;
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
}

.footer .container {
  display: flex;
  flex-direction: column;
}

.footer-top {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

/* Kiri: Logo + Deskripsi */
.footer-about {
  max-width: 280px;
}

.footer-logo {
  max-width: 120px;
  margin-bottom: 8px;
}

.footer-about p {
  font-size: 11px;
  color: #555;
  margin: 0;
}

/* Tengah: Menu Footer */
.footer-center {
  display: flex;
  gap: 80px; /* jarak antar kolom menu */
  margin-left: 10px;
}

.footer-column h6 {
  font-weight: 700;
  font-size: 13px;
  margin-bottom: 8px;
}

.footer-column ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-column ul li {
  margin-bottom: 6px;
}

.footer-column ul li a {
  text-decoration: none;
  color: #333;
  font-size: 13px;
  transition: color 0.3s;
}

.footer-column ul li a:hover {
  text-decoration: underline;
}

/* Sosial Media */
.social-icons {
  display: flex;
  gap: 10px;
}

.social-icons img {
  width: 22px;
  height: 22px;
  object-fit: contain;
  transition: transform 0.3s;
}

.social-icons img:hover {
  transform: scale(1.1);
}

/* Garis pemisah */
.footer-divider {
  width: 100%;
  border: none;
  border-top: 1px solid #ccc;
  margin: 15px 0 5px;
}

/* Copyright */
.footer-bottom {
  width: 100%;
  text-align: left;
  font-size: 12px;
  color: #666;
}

/* Mobile */
@media (max-width: 768px) {
  .footer-top {
    flex-direction: column;
    gap: 20px;
  }

  .footer-center {
    flex-direction: column;
    gap: 15px;
    margin-left: 0;
  }
}
</style>


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

@endsection