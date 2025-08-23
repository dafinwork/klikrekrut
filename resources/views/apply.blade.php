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

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
<link href="assets/css/apply.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Header -->
<header class="header fixed-top">
  <div class="container d-flex justify-content-between align-items-center py-2">

    <!-- Logo -->
    <a href="#" class="logo d-flex align-items-center">
      <img src="assets/img/Header.png" alt="Klikrekrut Logo" class="logo-full" />
    </a>

    <!-- Mobile Toggle -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- Nav Menu -->
<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="#">Services</a></li>
    <li><a href="{{ url('learning') }}">E-learning</a></li>
    <li><a href="{{ url('apply') }}">Apply as partner</a></li>
    <li>
      <a href="https://api.whatsapp.com/send?phone=6289678868752"
         target="_blank"
         rel="noopener noreferrer"
         class="btn btn-outline-light wa-btn rounded-pill px-3 py-1">
        Join to Talent Community ➝
      </a>
    </li>
  </ul>
</nav>
</div>
</header>


<!-- Overlay -->
<div class="mobile-nav-overlay"></div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    const toggle = document.querySelector(".mobile-nav-toggle");
    const navmenu = document.getElementById("navmenu");
    const dropdowns = document.querySelectorAll(".navmenu .dropdown");

    // Ubah ikon burger jadi X saat menu aktif
    function updateToggleIcon() {
      if (navmenu.classList.contains("active")) {
        toggle.classList.remove("bi-list");
        toggle.classList.add("bi-x");
        toggle.style.color = "#000"; // selalu hitam saat menu terbuka
      } else {
        toggle.classList.remove("bi-x");
        toggle.classList.add("bi-list");

        // Warna kembali sesuai kondisi scroll
        if (window.scrollY > 10) {
          toggle.style.color = "#004AAD"; // biru saat scroll
        } else {
          toggle.style.color = "#fff"; // putih sebelum scroll
        }
      }
    }

    // Scroll behavior
    window.addEventListener("scroll", function () {
      if (window.scrollY > 10) {
        header.classList.add("scrolled");
        if (!navmenu.classList.contains("active")) {
          toggle.style.color = "#004AAD";
        }
      } else {
        header.classList.remove("scrolled");
        if (!navmenu.classList.contains("active")) {
          toggle.style.color = "#fff";
        }
      }
    });

    // Toggle nav mobile
    toggle.addEventListener("click", () => {
      navmenu.classList.toggle("active");
      document.body.classList.toggle("mobile-nav-active");
      updateToggleIcon();
    });

    // Interaksi dropdown
    dropdowns.forEach(drop => {
      const link = drop.querySelector("a");

      link.addEventListener("click", (e) => {
        e.preventDefault();

        // Tutup semua dropdown lain
        dropdowns.forEach(d => {
          if (d !== drop) {
            d.classList.remove("open");
            const submenu = d.querySelector("ul");
            if (submenu) {
              submenu.style.maxHeight = "0";
              submenu.style.opacity = "0";
            }

            const icon = d.querySelector(".toggle-icon");
            if (icon) {
              icon.classList.add("bi-chevron-down");
              icon.classList.remove("bi-chevron-up");
            }
          }
        });

        // Toggle dropdown sekarang
        drop.classList.toggle("open");
        const submenu = drop.querySelector("ul");
        if (drop.classList.contains("open")) {
          submenu.style.maxHeight = submenu.scrollHeight + "px";
          submenu.style.opacity = "1";
        } else {
          submenu.style.maxHeight = "0";
          submenu.style.opacity = "0";
        }

        const icon = drop.querySelector(".toggle-icon");
        if (icon) {
          icon.classList.toggle("bi-chevron-down");
          icon.classList.toggle("bi-chevron-up");
        }
      });
    });

    // Tutup nav saat klik di luar
    document.addEventListener("click", function (e) {
      if (
        document.body.classList.contains("mobile-nav-active") &&
        !e.target.closest("#navmenu") &&
        !e.target.closest(".mobile-nav-toggle")
      ) {
        navmenu.classList.remove("active");
        document.body.classList.remove("mobile-nav-active");
        updateToggleIcon();

        dropdowns.forEach(d => {
          d.classList.remove("open");
          const submenu = d.querySelector("ul");
          if (submenu) {
            submenu.style.maxHeight = "0";
            submenu.style.opacity = "0";
          }

          const icon = d.querySelector(".toggle-icon");
          if (icon) {
            icon.classList.add("bi-chevron-down");
            icon.classList.remove("bi-chevron-up");
          }
        });
      }
    });

    // Set ikon awal sesuai posisi scroll
    updateToggleIcon();
  });
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
<main class="main">
<!-- ==========================
     PARTNER JOIN SECTION
=========================== -->
<section id="partner-join" class="partner-section py-5">
  <div class="container text-center">

    <!-- Title -->
    <h2 class="fw-bold mb-5 title-partner">
      Ready to join as a <span class="highlight">KLIK Rekrut</span> Partner?
    </h2>

    <!-- Cards Wrapper -->
    <div class="row g-4 justify-content-center">

      <!-- Card 1: Recruiter -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Recruiter</h4>
          <p class="fw-semibold description">
            Kamu bertugas memproses permintaan talent dari klien lewat sistem manajemen rekrutmen kami.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami untuk menempatkan SDM terbaik di tempat yang tepat.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>

      <!-- Card 2: Sales -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Sales</h4>
          <p class="fw-semibold description">
            Kamu bertugas mencari perusahaan yang lagi butuh kandidat terbaik.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami memberikan akses SDM terampil buat bisnis di Indonesia.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>

      <!-- Card 3: Affiliate -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Affiliate</h4>
          <p class="fw-semibold description">
            Kamu bertugas merekomendasikan pembelajaran rekrutmen kami ke recruiter dan jobseeker.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami untuk membantu mereka lebih jago cari kerja dan karyawan.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>
    </div>

    <!-- WhatsApp CTA -->
    <div class="text-center mt-5">
      <a href="https://api.whatsapp.com/send?phone=6289678868752" 
         target="_blank"
         class="btn btn-success px-4 py-2 rounded-pill d-inline-flex align-items-center wa-btn">
        <i class="bi bi-whatsapp me-2"></i>
        Punya pertanyaan seputar kemitraan?
      </a>
    </div>

  </div>
</section>
<!-- ==========================
     PARTNER JOIN SECTION
=========================== -->
<section id="partner-join" class="partner-section py-5">
  <div class="container text-center">

    <!-- Title -->
    <h2 class="fw-bold mb-5 title-partner">
      Ready to join as a <span class="highlight">KLIK Rekrut</span> Partner?
    </h2>

    <!-- Cards Wrapper -->
    <div class="row g-4 justify-content-center">

      <!-- Card 1: Recruiter -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Recruiter</h4>
          <p class="fw-semibold description">
            Kamu bertugas memproses permintaan talent dari klien lewat sistem manajemen rekrutmen kami.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami untuk menempatkan SDM terbaik di tempat yang tepat.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>

      <!-- Card 2: Sales -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Sales</h4>
          <p class="fw-semibold description">
            Kamu bertugas mencari perusahaan yang lagi butuh kandidat terbaik.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami memberikan akses SDM terampil buat bisnis di Indonesia.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>

      <!-- Card 3: Affiliate -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Affiliate</h4>
          <p class="fw-semibold description">
            Kamu bertugas merekomendasikan pembelajaran rekrutmen kami ke recruiter dan jobseeker.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami untuk membantu mereka lebih jago cari kerja dan karyawan.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>
    </div>

    <!-- WhatsApp CTA -->
    <div class="text-center mt-5">
      <a href="https://api.whatsapp.com/send?phone=6289678868752" 
         target="_blank"
         class="btn btn-success px-4 py-2 rounded-pill d-inline-flex align-items-center wa-btn">
        <i class="bi bi-whatsapp me-2"></i>
        Punya pertanyaan seputar kemitraan?
      </a>
    </div>

  </div>
</section>
<!-- ==========================
     PARTNER JOIN SECTION
=========================== -->
<section id="partner-join" class="partner-section py-5">
  <div class="container text-center">

    <!-- Title -->
    <h2 class="fw-bold mb-5 title-partner">
      Ready to join as a <span class="highlight">KLIK Rekrut</span> Partner?
    </h2>

    <!-- Cards Wrapper -->
    <div class="row g-4 justify-content-center">

      <!-- Card 1: Recruiter -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Recruiter</h4>
          <p class="fw-semibold description">
            Kamu bertugas memproses permintaan talent dari klien lewat sistem manajemen rekrutmen kami.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami untuk menempatkan SDM terbaik di tempat yang tepat.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>

      <!-- Card 2: Sales -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Sales</h4>
          <p class="fw-semibold description">
            Kamu bertugas mencari perusahaan yang lagi butuh kandidat terbaik.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami memberikan akses SDM terampil buat bisnis di Indonesia.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>

      <!-- Card 3: Affiliate -->
      <div class="col-lg-4 col-md-6">
        <div class="partner-card h-100 p-4 shadow-sm rounded-4">
          <h4 class="fw-bold mb-3">Affiliate</h4>
          <p class="fw-semibold description">
            Kamu bertugas merekomendasikan pembelajaran rekrutmen kami ke recruiter dan jobseeker.
          </p>
          <p class="sub-description">
            Kamu akan ikut mendukung misi kami untuk membantu mereka lebih jago cari kerja dan karyawan.
          </p>
          <a href="{{ url('apply') }}" class="btn btn-apply mt-3">Apply here ➝</a>
        </div>
      </div>
    </div>

    <!-- WhatsApp CTA -->
    <div class="text-center mt-5">
      <a href="https://api.whatsapp.com/send?phone=6289678868752" 
         target="_blank"
         class="btn btn-success px-4 py-2 rounded-pill d-inline-flex align-items-center wa-btn">
        <i class="bi bi-whatsapp me-2"></i>
        Punya pertanyaan seputar kemitraan?
      </a>
    </div>

  </div>
</section>

<!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      
      <!-- Kiri: Logo + deskripsi -->
      <div class="footer-about">
        <img src="assets/img/Footer.png" alt="Klik Rekrut Logo" class="footer-logo">
        <p>Layanan online untuk mempermudah proses merekrut tim.</p>
      </div>

      <!-- Tengah: Kemitraan + Layanan -->
      <div class="footer-center">
        <div class="footer-column">
          <h6>KEMITRAAN</h6>
          <ul>
            <li><a href="#">Recruiter Partner</a></li>
            <li><a href="#">Sales Partner</a></li>
            <li><a href="#">Affiliate Partner</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h6>LAYANAN</h6>
          <ul>
            <li><a href="#">Asisten Rekrutmen</a></li>
            <li><a href="#">Komunitas Rekrutmen</a></li>
            <li><a href="#">Belajar Rekrutmen</a></li>
          </ul>
        </div>
      </div>

      <!-- Kanan: Sosial Media -->
      <div class="footer-column footer-right">
        <h6>LAINNYA</h6>
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
  margin-top: 0; /* reset jarak atas footer */
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

.footer-about {
  max-width: 280px;
}

.footer-logo {
  max-width: 120px;
  margin-bottom: 8px;
}

.footer-about p {
  font-size: 13px;
  color: #555;
  margin: 0;
}

/* Tengah: Kemitraan + Layanan */
.footer-center {
  display: flex;
  gap: 80px; /* jarak antar kemitraan dan layanan */
  margin-left: 10px; /* jarak dari logo */
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