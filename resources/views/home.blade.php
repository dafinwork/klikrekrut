@extends('layouts.app')

@section('title', 'Klik Rekrut - Layanan Asisten Rekrutmen')
@section('description', 'Temukan pekerjaan impianmu di Klik Rekrut')
@section('keywords', 'find job, lowongan kerja, klik rekrut')

@section('content')
  <!-- isi halaman -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KLIK rekrut - Find Job</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('assets/img/square.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

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
<link href="assets/css/main.css" rel="stylesheet">

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
      <img src="assets/img/Header.png" alt="Klikrekrut Logo" class="logo-full" />
    </a>

    <!-- Mobile Toggle -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- Nav Menu -->
<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="/">Services</a></li>
    <li><a href="elearning">E-learning</a></li>
    <li><a href="applypartner">Apply as partner</a></li>
    <li>
<a href="community"
   class="btn btn-outline-light wa-btn rounded-pill px-3 py-1 d-flex align-items-center gap-2">
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
<!-- Tambahkan di layout atau halaman -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Hero Section -->
<section id="hero" class="hero section position-relative">
  <div class="container">
    <div class="row align-items-center">
<div class="col-lg-6 text-white" data-aos="fade-right">
  <h1 class="mb-4 hero-title" style="font-weight:700; color:white;">
    <span id="typing-hero"></span>
  </h1>

<!-- ✅ Tambahan ceklis -->
<div class="hero-checklist">
  <div class="check-item">
    <img src="assets/img/check.png" alt="Check" class="check-icon">
    <span>Hiring Entry & Mid Levels</span>
  </div>
  <div class="check-item">
    <img src="assets/img/check.png" alt="Check" class="check-icon">
    <span>Ergonomic Solution</span>
  </div>
  <div class="check-item">
    <img src="assets/img/check.png" alt="Check" class="check-icon">
    <span>All in One Recruitment Support</span>
  </div>
</div>

<p class="mb-4">
Temukan orang yang tepat untuk tim Anda - menawarkan layanan <br> rekrutmen yang lengkap dan sesuai kebutuhan.
</p>
<a class="btn btn-success rounded-pill px-4 py-2 pulse-button tombol-panah">
  Baca Lebih Lanjut
  <img src="assets/img/panahputih.png" alt="Panah" class="icon-panah">
</a>
</div>
      <div class="col-lg-6 text-center" data-aos="fade-left">
        <img src="assets/img/orgbener.png" class="img-fluid" style="max-height: 500px;" alt="Rekruter Image">
      </div>
    </div>
  </div>
<script>
const lines = ["Membantu Anda", "Merekrut Tim Masa Depan"];
const el = document.getElementById("typing-hero");
let lineIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
  let currentLine = lines[lineIndex];

  if (!isDeleting) {
    // Tampilkan baris yang sudah selesai + baris yang sedang diketik
    el.innerHTML = lines.slice(0, lineIndex).join("<br>") + "<br>" + currentLine.substring(0, charIndex + 1);
    charIndex++;

    // Kalau sudah selesai 1 baris, kasih jeda sebelum lanjut baris berikutnya
    if (charIndex === currentLine.length) {
      isDeleting = true;
      setTimeout(typeEffect, 700); // jeda setelah selesai 1 baris
      return;
    }
  } else {
    // Lanjut ke baris berikutnya
    if (lineIndex < lines.length - 1) {
      isDeleting = false;
      lineIndex++;
      charIndex = 0;
    }
  }
  setTimeout(typeEffect, 50); // kecepatan ketik per huruf
}

window.addEventListener("DOMContentLoaded", typeEffect);
</script>
<style>
/* ==================== HERO CHECKLIST ==================== */
.hero-checklist {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
  margin-bottom: 20px;
}

.check-item {
  display: flex;
  align-items: center;
  gap: 6px;
  color: #ffffff;
  font-size: 14px;
  font-weight: 500;
}

.check-icon {
  width: 18px;
  height: 18px;
  object-fit: contain;
}

/* ==================== TOMBOL PANAH ==================== */
.tombol-panah {
  display: inline-flex;      
  align-items: center;       
  justify-content: center;   
  gap: 8px;                  
  padding: 10px 22px;        
  background-color: #7ed957;
  border-radius: 50px;       
  color: white;
  font-weight: 600;
  font-size: 16px;
  text-decoration: none;
  line-height: 1;
  transition: all 0.3s ease;
  white-space: nowrap;
}

.icon-panah {
  width: 12px;
  height: 12px;
  display: inline-block;
  object-fit: contain;
  vertical-align: middle;
  transition: transform 0.3s ease;
}

/* Efek hover panah */
.tombol-panah:hover .icon-panah {
  transform: translateX(4px);
}

/* ==================== TOMBOL PULSE ==================== */
a.pulse-button {
  background-color: #7ed957 !important;
  border-color: #7ed957 !important;
  color: white !important;
  display: inline-block;
  /* animasi pulse dihapus */
}

a.pulse-button:hover {
  background-color: #6cc44a !important;
  border-color: #6cc44a !important;
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.07); }
  100% { transform: scale(1); }
}

/* ==================== HERO IMAGE ==================== */
.hero img {
  clip-path: ellipse(60% 90% at 50% 50%);
}

/* ==================== BACKGROUND HERO ==================== */
.hero {
  background:
    linear-gradient(to right, #5DE0E6, #004AAD),
    url('assets/img/ornament1.png') no-repeat bottom center;
  background-size: cover;
  padding: 100px 0 0 0;
  overflow: hidden;
  position: relative;
}

.hero::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('assets/img/ornament1.png') no-repeat bottom center;
  background-size: cover;
  opacity: 0.3;
  z-index: 0;
  pointer-events: none;
}

.hero .container {
  position: relative;
  z-index: 1;
}

/* ========================================================= */
/* ==================== RESPONSIF HERO ==================== */
/* ========================================================= */

@media (max-width: 768px) {
  .hero-checklist {
    flex-direction: column;   /* item ke bawah */
    align-items: center;      /* blok tetap di tengah */
    gap: 10px;
    width: 100%;
  }

  .check-item {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    width: 250px;             /* kasih lebar seragam supaya rata */
    gap: 8px;
    text-align: left;
  }
    .check-item span {
    display: inline-block;
    padding-left: 4px;        /* jarak tambahan biar teks mulai lurus */
    flex: 1;                  /* biar teks isi sisa ruang */
  }
   .check-icon {
    transform: translateY(-10px); /* Naikin 2px */
  }
  .hero-title {
    font-size: 1.8rem !important;
    text-align: center;
  }

  .hero p {
    text-align: center;
  }

  .hero .col-lg-6 {
    text-align: center;
  }

  .hero .btn {
    display: inline-block;
    margin: 0 auto;
    width: auto;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .hero img {
    max-height: 300px !important;
    margin-top: 20px;
  }

  .tombol-panah {
    padding: 12px 12px;
    gap: 8px;
    font-size: 16px;
    line-height: 1;
  }

  .icon-panah {
    width: 12px;
    height: 12px;
    position: relative;
    top: -11px; /* kalau ini terasa terlalu geser, bisa dikurangi */
  }
}


@media (max-width: 576px) {
  .pulse-button {
    width: auto !important;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .hero .btn {
    display: inline-block !important;
    width: auto !important;
    margin: 0 auto !important;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
}
</style>
</section>
<!-- Trusted By Section -->
<section class="trusted-section">
  <div class="container">
    <div class="trusted-logos-wrapper">
      <p class="trusted-label mb-3">
  Telah dipercaya oleh perusahaan dari berbagai Industri
</p>
      <div class="trusted-logos-track">
        <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" />
        <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" />
        <!-- Duplikat untuk loop -->
        <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" />
        <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" />
                <!-- Duplikat untuk loop -->
        <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" />
        <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" />
                <!-- Duplikat untuk loop -->
        <img src="assets/img/hokkaido2.png" alt="Hokkaido" class="trusted-logo" />
        <img src="assets/img/irij2.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka2.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama2.png" alt="Nurama" class="trusted-logo" />
      </div>
    </div>
  </div>
</section>
<style>
.trusted-section {
  background-color: #e8f5fc;
  padding: 40px;
  text-align: center;
  overflow: hidden;
  padding: 40px 40px 15px 40px; /* atas 40px, kanan 40px, bawah 15px, kiri 40px */
}

.trusted-label {
  font-family: 'Poppins', sans-serif;
  font-size: 1rem;
  font-weight: 700;
  color: #414c58;
  margin: 0;
  white-space: nowrap; /* desktop: paksa satu baris */
} 

.trusted-logos-wrapper {
  overflow: hidden;
  position: relative;
  width: 100%;
  margin: 0;
}

.trusted-logos-track {
  display: flex;
  align-items: center; /* 🔹 logo sejajar vertikal */
  gap: 20px; /* 🔹 jarak antar logo lebih rapat */
  animation: scrollLeft 20s linear infinite;
  width: max-content;
}

.trusted-logo {
  max-height: 140px;
  object-fit: contain;
  transition: transform 0.3s ease;
  flex: 0 0 auto;
}

.trusted-logo:hover {
  transform: scale(1.05);
}

@keyframes scrollLeft {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

/* Mobile */
@media (max-width: 767px) {
  .trusted-section {
    padding-top: 15px;
  }
  .trusted-label {
    white-space: normal; /* mobile: izinkan teks turun */
    text-align: center;   /* pastikan rapi di tengah */
  }
  .trusted-logos-wrapper {
    width: 100%;
    height: auto;
  }
  .trusted-logo {
    height: 110px;
    max-height: 110px;
  }
}
</style>
<!-- layanan utama -->
<section class="services-section">
    <div class="container">
        <p class="section-subtitle">LAYANAN ASISTEN REKRUTMEN KAMI</p>
        <h2 class="section-title">
            Bantu Rekrut Kandidat, Bikin Bisnis Melesat
        </h2>

        <!-- Baris 1 -->
        <div class="service-row first-row">
            <div class="service-img">
                <img src="assets/img/comu.png" alt="Talent Sourcing">
            </div>
            <div class="service-content">
                <h3>Job Posting</h3>
                <p>Iklankan loker Anda dengan mudah dan dapatkan calon kandidat potential tanpa repot sourcing. </p>
                <ul>
                  <li>
                    <span class="title">Media</span>
                    <span class="desc">Dapatkan dukungan sourcing lewat jaringan media kami dari berbagai kota.</span>
                  </li>
                  <li>
                    <span class="title">Community</span>
                    <span class="desc">Dapatkan dukungan sourcing lewat komunitas talent kami dari berbagai bidang.</span>
                  </li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=6289678868752" 
                   class="btn-service" 
                   target="_blank" 
                   rel="noopener noreferrer">
                   Pesan Layanan →
                </a>
            </div>
        </div>

        <!-- Baris 2 -->
        <div class="service-row reverse baris-dua">
            <div class="service-content">
                <h3>Interview Support</h3>
                <p>Tak perlu repot mengatur proses HR Interview, dari persiapan, interviewer hingga laporan akhir, semua dalam satu layanan. </p>
                <ul>
                    <li>Interview Scheduling Assistant</li>
                    <li>Interviewer Support</li>
                    <li>Selection Candidate Report</li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=6289678868752" 
                   class="btn-service" 
                   target="_blank" 
                   rel="noopener noreferrer">
                   Pesan Layanan →
                </a>
            </div>
            <div class="service-img">
                <img src="assets/img/asistant.png" alt="Recruitment Assistant">
            </div>
        </div>

        <!-- Baris 3 -->
        <div class="service-row reverse">
            <div class="service-content">
                <h3>Full Service</h3>
                <p>Kami bantu kelola seluruh proses rekrutmen, kami akan berikan kandidat yang sesuai permintaan Anda.</p>
                <ul>
      <li>Talent Personalization</li>
      <li>End-to-end Recruitment</li>
      <li>Approach Passive Candidate</li>
      <li>Selection Candidate Report</li>
      <li>Rejection Guarantee</li>
      <li>Talent Replacement</li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=6289678868752" 
                   class="btn-service" 
                   target="_blank" 
                   rel="noopener noreferrer">
                   Pesan Layanan →
                </a>
            </div>
            <div class="service-img">
                <img src="assets/img/asistant.png" alt="Recruitment Assistant">
            </div>
        </div>
</section>


<style>
  .service-row.first-row {
    margin-bottom: 80px; /* contoh jarak lebih besar */
}

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
    }

    .services-section {
        padding: 40px 0 20px;
        width: 100%;
        max-width: none;
        margin: 0;
    }

    .services-section .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-subtitle {
        text-align: center;
        color: #2e6bbc;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 1px;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    .section-title {
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 32px;
        line-height: 1.3;
        color: #3c678b;
        text-align: center;
    }

    .service-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        gap: 50px;
        background: none;
        padding: 0;
        border-radius: 0;
        box-shadow: none;
    }
  .baris-dua {
  margin-bottom: 80px; /* lebih besar daripada default */
}
    .service-row.reverse {
        flex-direction: row-reverse;
    }

    .service-img {
        flex: 1;
        text-align: center;
    }

    .service-img img {
        max-width: 450px; /* gambar lebih besar */
        width: 100%;
        height: auto;
    }
.service-content ul li .desc {
  font-size: 14px;
  color: #555;
  margin-top: 4px;
  line-height: 1.4;
}
    .service-content {
        flex: 1;
        text-align: left;
    }

    .service-content h3 {
        font-size: 1.8rem;
        font-weight: 800;
        color: #000;
        margin-bottom: 15px;
    }

    .service-content p {
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #555;
    }

    .service-content ul {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
    }

.service-content ul li {
  position: relative;
  display: flex;
  flex-direction: column; /* Teks utama & deskripsi jadi vertikal */
  align-items: flex-start; /* Biar rata kiri */
  padding-left: 35px;
  margin-bottom: 16px;
  font-size: 16px;
  line-height: 1.4;
  color: #444;
}

    /* Ganti icon panah → jadi icon centang */
.service-content ul li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 1px; /* icon sejajar dengan title */
  width: 20px;
  height: 20px;
  background: url('assets/img/check.png') no-repeat center;
  background-size: 20px 20px;
}
.service-content ul li .title {
  font-weight: 600;
  color: #000;
}

    .btn-service {
        display: inline-block;
        background: linear-gradient(135deg, #5DE0E6, #004AAD);
        color: white;
        padding: 12px 24px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-service:hover {
        background: linear-gradient(135deg, #4BC9D1, #003388);
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 74, 173, 0.3);
    }

@media (max-width: 992px) {
  .service-row {
    flex-direction: column;
    text-align: center;
    gap: 20px;
    margin-bottom: 20px;
  }

  .service-row.reverse {
    flex-direction: column;
  }

  .service-content {
    text-align: center;
  }

  .service-img {
    order: -1;
  }

  /* UL di tengah */
  .service-content ul {
    display: flex;
    flex-direction: column;
    align-items: center;   /* <== ini bikin seluruh li ada di tengah */
    gap: 12px;
    margin: 0 auto;
    padding: 0;
  }

  .service-content ul li {
    position: relative;
    list-style: none;
    padding-left: 28px;    /* ruang icon */
    text-align: left;      /* teks dalam blok tetap rata kiri */
    max-width: 280px;      /* biar ada batas lebar rapi */
    width: 100%;           /* supaya semua li punya lebar sama */
  }

  .service-content ul li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 4px;
    width: 18px;
    height: 18px;
    background: url('assets/img/check.png') no-repeat center;
    background-size: contain;  /* biar pas ukurannya */
  }

  /* ✅ Jarak ekstra baris 2 di mobile juga */
  .baris-dua {
    margin-bottom: 60px; /* Bisa disesuaikan lebih kecil dari desktop */
  }
}

</style>

<!-- Import Font Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<section class="stats-section">
  <section class="stats-inner" style="background: linear-gradient(135deg, #5DE0E6, #004AAD); color: #fff; padding: 40px 20px; text-align: center; height: 204.47px; width: 100%; margin: 0 auto; border-radius: 9999px; font-family: 'Poppins', sans-serif;">
    <div class="container" data-aos="fade-up" style="height: 100%; display: flex; align-items: center; justify-content: center;">
      <div class="row justify-content-center text-center g-4" style="width: 100%;">

        <!-- Item 1 -->
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-4">
          <h1 class="counter mb-0" data-target="11">0</h1>
          <div class="text-start stat-text">
            key positions<br>successfully filled
          </div>
        </div>

        <!-- Item 2 -->
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-4">
          <h1 class="counter mb-0" data-target="17">0</h1>
          <div class="text-start stat-text">
            of talents elevate<br>their career
          </div>
        </div>

        <!-- Item 3 -->
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-4">
          <h1 class="counter mb-0" data-target="90" data-suffix="%">0%</h1>
          <div class="text-start stat-text">
            of our client successfully<br>grows their business
          </div>
        </div>

      </div>
    </div>
  </section>
</section>

<style>
.counter {
  font-size: 69px;
  font-weight: 700;
  line-height: 1;
  margin-right: 10px;
  color: #fff;
}

.stat-text {
  font-size: 12.8px;
  color: #fff;
  text-align: left;
}

/* Mobile adjustments - hanya untuk section ini */
@media (max-width: 768px) {
  .stats-section .stats-inner {
    height: auto !important;
    min-width: auto !important;
    border-radius: 0 !important; /* Jadi kotak */
    padding: 20px !important;
  }
  .stats-section .counter {
    font-size: 40px;
  }
  .stats-section .stat-text {
    font-size: 14px;
  }
  .stats-section .row.g-4 {
    flex-direction: column !important;
    gap: 20px;
  }
  .stats-section .col-12 {
    display: flex;
    justify-content: flex-start;
    text-align: left;
  }
}
</style>

<!-- Count-Up Script -->
<script>
document.querySelectorAll('.counter').forEach(counter => {
  const suffix = counter.getAttribute('data-suffix') || '';
  const target = +counter.getAttribute('data-target');
  const speed = 12;
  const increment = Math.ceil(target / 100);

  const updateCount = () => {
    const current = parseInt(counter.innerText.replace(/\D/g, ''), 10) || 0;
    if (current < target) {
      counter.innerText = `${current + increment}${suffix}`;
      setTimeout(updateCount, speed);
    } else {
      counter.innerText = `${target}${suffix}`;
    }
  };

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        updateCount();
        observer.unobserve(counter);
      }
    });
  }, { threshold: 0.9 });

  observer.observe(counter);
});
</script>
<!-- Client & Talent Section -->
<section class="client-section">
  <div class="container">
    <h2 class="client-title">Empowering Indonesia's Talent and Business Ecosystem</h2>  

    <!-- Tab Buttons -->
    <div class="tab-buttons">
      <button class="tab active" data-target="clients">Clients</button>
      <button class="tab" data-target="talents">Talents</button>
    </div>

    <!-- Clients Content -->
    <div class="tab-content active" id="clients">
      <div class="carousel-container">
        <button class="carousel-button prev" aria-label="Previous">&#10094;</button>
        
        <div class="carousel-track">
          <!-- Client Group 1 (visible by default) -->
          <div class="carousel-slide active">
            <div class="card">
              <div class="card-header">
                <img src="assets/img/irij3.png" alt="IRIJ Logo" class="card-logo">
                <div class="card-titles">
                  <h3>IRIJ Jakarta</h3>
                  <p class="role">Market Research Consultant</p>
                </div>
              </div>
              <p class="description-irij">Proses rekrutmen berjalan sangat cepat dan efisien, tidak lama dari kami submit kriteria tenaga kerja yang dibutuhkan, Klik Rekrut langsung memberikan beberapa kandidat yang potensial.  Sudah 2 tahun sejak kandidat yang direferensikan bergabung. Sekarang menjadi salah satu staf yang memiliki kompetensi yang bagus. Bekerja dengan cepat dan cermat.</p>
            </div>
            
            <div class="card">
              <div class="card-header">
                <img src="assets/img/sosialoka3.png" alt="Sosialoka Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Sosialoka</h3>
                  <p class="role">Digital Agency</p>
                </div>
              </div>
              <p class="card-description">Klik Rekrut selalu tanggap dan mudah diajak komunikasi. Prosesnya singkat, efisien, dan tanpa langkah-langkah yang bikin ribet. Kandidat yang diberikan selalu sesuai kebutuhan, dan hasil kerjanya memuaskan.</p>
            </div>
            
            <div class="card">
              <div class="card-header">
                <img src="assets/img/nurama3.png" alt="Nurama.clo Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Nurama.clo</h3>
                  <p class="role">Fashion Modest Brand</p>
                </div>
              </div>
              <p class="card-description nurama-desc">KLIK Rekrut membantu kami di Nurama menemukan karyawan yang tepat dengan cepat. Prosesnya pun mudah, pelayanannya maksimal, dan benar-benar disesuaikan dengan kebutuhan perusahaan. Sangat membantu perkembangan perusahaan kami.</p>
            </div>
          </div>
          
          <!-- Client Group 2 -->
          <div class="carousel-slide">
            <div class="card">
              <div class="card-header">
                <img src="assets/img/hokkaido.png" alt="Client 4 Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Hokkaido Baked</h3>
                  <p class="role">F&B Brand</p>
                </div>
              </div>
              <p class="card-description">KLIK Rekrut prosesnya praktis dan sangat membantu. Kami bisa langsung dapat pengganti yang tepat saat salah satu karyawan kami resign mendadak.
               Operasional outlet pun tetap berjalan normal.</p>
            </div>
          </div>
        </div>
        
        <button class="carousel-button next" aria-label="Next">&#10095;</button>
      </div>
      
      <div class="carousel-dots">
        <span class="dot active" data-slide="0"></span>
        <span class="dot" data-slide="1"></span>
      </div>
    </div>

<!-- Talents Content -->
<div class="tab-content" id="talents">
  <div class="carousel-container" data-carousel="talents">
    <button class="carousel-button prev" aria-label="Previous">&#10094;</button>

    <div class="carousel-track">
      <!-- Slide 1 -->
      <div class="carousel-slide active">
        <div class="card">
          <div class="card-header">
            <img src="assets/img/gita.jpg" alt="Agustina Gita" class="card-logo">
            <div class="card-titles">
              <h3>Agustina Gita</h3>
              <p class="role">Jr. Finance & Accounting</p>
            </div>
          </div>
          <p class="card-description gita-desc">KlikRekrut jadi pintu pertama perjalanan karierku. Dari intern 6 bulan di konsultan, sekarang sudah 2 tahun aku berkembang sebagai karyawan tetap. Smooth process, impactful result! Prosesnya gampang banget dan beneran ngebuka jalan karierku!</p>
        </div>

        <div class="card">
          <div class="card-header">
            <img src="assets/img/fadhia1.jpg" alt="fadhiah" class="card-logo">
            <div class="card-titles">
              <h3>Fadhia Raudhah</h3>
              <p class="role">E commerce specialist</p>
            </div>
          </div>
          <p class="card-description fadhia-desc">Puas banget dari layanannya. Rekruternya komunikatif, prosesnya diupdate secara berkala, berjalan cepat dan profesional. Sangat terbantu dari membuat CV yang proper, dan dibantu mengenal lebih dalam mengenai jobdesk pekerjaan dan budaya perusahaan tempat saya melamar. Mulai dari awal melamar sampai penawaran kerja tetap diarahkan dengan baik</p>
        </div>

        <div class="card">
          <div class="card-header">
            <img src="assets/img/cat1.png" alt="Ical" class="card-logo">
            <div class="card-titles">
              <h3>Ical</h3>
              <p class="role">Video Grapher & Editor</p>
            </div>
          </div>
          <p class="card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>

      <!-- Slide 2 (contoh isi tambahan) -->
      <div class="carousel-slide">
        <div class="card">
          <div class="card-header">
            <img src="assets/img/cat1.png" alt="Talent 4" class="card-logo">
            <div class="card-titles">
              <h3>Talent 4</h3>
              <p class="role">Role 4</p>
            </div>
          </div>
          <p class="card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
        </div>

        <div class="card">
          <div class="card-header">
            <img src="assets/img/cat1.png" alt="Talent 5" class="card-logo">
            <div class="card-titles">
              <h3>Talent 5</h3>
              <p class="role">Role 5</p>
            </div>
          </div>
          <p class="card-description">Deskripsi singkat talent 5.</p>
        </div>

        <div class="card">
          <div class="card-header">
            <img src="assets/img/cat1.png" alt="Talent 6" class="card-logo">
            <div class="card-titles">
              <h3>Talent 6</h3>
              <p class="role">Role 6</p>
            </div>
          </div>
          <p class="card-description">Deskripsi singkat talent 6.</p>
        </div>
      </div>
    </div>

    <button class="carousel-button next" aria-label="Next">&#10095;</button>
  </div>

  <div class="carousel-dots">
    <span class="dot active" data-slide="0"></span>
    <span class="dot" data-slide="1"></span>
  </div>
</div>
</div>
<style>
.client-section {
  padding-top: 10px;
  padding-bottom: 0; /* biar gak nambah jarak bawah */
  margin-bottom: 0;  /* gak dorong footer */
  background: white;
}
.client-section .client-title,
.client-section .tab-buttons,
.client-section .tab-content {
  text-align: center;
}

  .client-title {
    font-size: 29.5px;
    font-weight: 700;
    margin-bottom: 30px; /* sebelumnya 10px */
    margin-top: 20px; /* kalau mau jarak atas lebih longgar */
    color: #3c678b;
  }
  .tab-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 40px; /* sebelumnya 30px */
    margin-top: 50px; /* jarak dari judul */
    flex-wrap: wrap;
  }
  .tab {
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    background: #f0f0f0;
    color: #333;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s;
  }
  .tab.active {
    background: linear-gradient(90deg, #5DE0E6, #004AAD);
    color: white;
  }
  .tab-content {
    display: none;
    justify-content: center;
    flex-wrap: wrap;
    align-items: stretch;
  }
  .tab-content.active {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  /* Carousel Styles */
  .carousel-container {
    position: relative;
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    align-items: center;
  }
  .carousel-track {
    display: flex;
    overflow: visible;
    width: 100%;
  }
  .carousel-slide {
    display: none;
    justify-content: center;
    gap: 20px;
    width: 100%;
    flex-shrink: 0;
    transition: transform 0.5s ease;
  }
  .carousel-slide.active {
    display: flex;
  }
  .carousel-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: linear-gradient(135deg, #5DE0E6, #004AAD); /* Warna gradient tetap */
    color: white; /* Warna panah */
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
    z-index: 10;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.25s ease-in-out; /* Animasi smooth saat hover */
}

/* Hover cuma buat animasi zoom aja, warnanya nggak berubah */
.carousel-button:hover {
    transform: scale(1.1);
}

  .prev {
    left: -50px;
  }
  .next {
    right: -50px;
  }
  .carousel-dots {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    gap: 10px;
    margin-bottom: 60px; /* tambahin jarak ekstra di bawah dots */
  }
  .dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #ddd;
    cursor: pointer;
    transition: all 0.3s;
  }
  .dot.active {
    background: #3c678b;
  }
  
  /* Card Styles */
  /* Gambar Talent Dibikin Bulat */
#talents .card-logo {
    width: 60px;
    height: 60px;
    object-fit: cover; /* supaya wajah tidak gepeng */
    margin-right: 12px;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%; /* bikin bulat */
    border: 2px solid #e0e0e0; /* opsional: kasih border tipis biar rapi */
}

.card {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    padding: 20px; /* lebih lega */
    width: 320px; /* sebelumnya 300px → diperbesar */
    min-height: 320px; /* biar semua kartu punya tinggi seragam */
    text-align: left;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
  .card-header {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
    background: transparent;
    border-bottom: none;
    min-height: 50px;
  }
  .card-logo {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-right: 12px;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .card-titles {
    flex: 1;
    background: transparent;
  }
  .card h3 {
    margin: 0 0 3px;
    font-size: 18px;
    color: #635d5e;
    font-weight: bold;
    background: transparent;
  }
  .card .role {
    color: #635d5e;
    font-size: 10px;
    margin: 0;
    background: transparent;
    font-weight: bold;
  }
  .card-description {
    margin-top: 0;
    color: #444;
    line-height: 1.5;
    font-size: 14px;
    text-align: justify;
    flex-shrink: 0;
  }
  
  .nurama-desc {
  font-size: 13px; /* Atur sesuai keinginan */
}
.gita-desc {
  font-size: 13px; /* Atur sesuai keinginan */
}
.fadhia-desc {
  font-size: 13px; /* Atur sesuai keinginan */
}
.description-irij{
  font-size: 13px; /* Atur sesuai keinginan */
}
/* Mobile view: kartu numpuk ke bawah */
@media (max-width: 768px) {
    /* Atur container agar susunan jadi vertikal */
    .carousel-slide.active {
        flex-direction: column; /* KARTU NUMPUK KEBAWAH */
        align-items: center;    /* Tengahin kartunya */
        gap: 20px;              /* Jarak antar kartu */
    }

    /* Samakan tinggi kartu */
    .card {
        width: 90%;
        max-width: 360px;
        min-height: 320px; /* Semua kartu sama tinggi biar sejajar */
        display: flex;
        flex-direction: column;
        justify-content: flex-start; /* Biar title & deskripsi nempel ke atas */
        padding: 16px;
        box-sizing: border-box;
    }

    /* Pastikan title nggak ketiban deskripsi */
    .card-title {
        margin-bottom: 8px;
    }

    /* Deskripsi tetap nempel ke atas, meskipun lebih pendek dari kartu lain */
    .card-description {
        margin-top: 0;
        flex-grow: 0;
    }
}
.carousel-button { 
  display: block; /* tampilkan lagi */ 
  top: auto; /* biar nggak ketumpuk */ 
  bottom: -50px; /* posisinya di bawah carousel */
   transform: none; } .prev { left: 30%; } .next { right: 30%; }

</style>
<script>
  // Tab switching (tetap)
  const tabs = document.querySelectorAll('.tab');
  const contents = document.querySelectorAll('.tab-content');
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));
      tab.classList.add('active');
      document.getElementById(tab.dataset.target).classList.add('active');
    });
  });

  // Carousel reusable untuk Clients & Talents
  function initCarousel(scopeEl) {
    const container = scopeEl.querySelector('.carousel-container');
    if (!container) return;

    const slides = container.querySelectorAll('.carousel-slide');
    const dots = scopeEl.querySelectorAll('.carousel-dots .dot');
    const prevBtn = container.querySelector('.prev');
    const nextBtn = container.querySelector('.next');
    let current = [...slides].findIndex(s => s.classList.contains('active'));
    if (current < 0) current = 0;

    function show(i) {
      slides.forEach(s => s.classList.remove('active'));
      dots.forEach(d => d.classList.remove('active'));
      slides[i].classList.add('active');
      if (dots[i]) dots[i].classList.add('active');
      current = i;
    }

    prevBtn.addEventListener('click', () => {
      show((current - 1 + slides.length) % slides.length);
    });
    nextBtn.addEventListener('click', () => {
      show((current + 1) % slides.length);
    });
    dots.forEach(d => {
      d.addEventListener('click', () => show(parseInt(d.dataset.slide, 10)));
    });
  }

  // Inisialisasi untuk setiap tab-content yang punya carousel
  document.querySelectorAll('.tab-content').forEach(initCarousel);
</script>

<!-- CTA Section -->
<section class="cta-section position-relative">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Teks -->
      <div class="col-lg-6 text-white">
        <h2 class="mb-4" style="font-weight:700; color:white;">
          Siap merekrut kandidat<br>
          terbaik untuk bergabung<br>
          jadi tim Anda?
        </h2>
        <p class="mb-4">
          Jangan biarkan momentum bisnis Anda hilang karena tim belum siap!<br>
          Klik tombol untuk mulai merekrut dan bawa bisnis Anda ke level berikutnya!
        </p>

        <!-- Tombol CTA -->
        <div class="cta-buttons d-flex flex-wrap gap-3">
          <!-- Tombol WhatsApp -->
          <a href="https://api.whatsapp.com/send?phone=6289678868752" 
            class="btn btn-success rounded-pill px-4 py-2 pulse-whatsapp"
            style="background-color: #7ed957; border-color: #7ed957; color: white;"
            target="_blank" 
            rel="noopener noreferrer">
            Book a Special Offer ➝
          </a>

          <!-- Tombol Download Proposal -->
          <a href="assets/proposal.pdf" 
            class="btn btn-outline-proposal rounded-pill px-4 py-2"
            target="_blank" 
            rel="noopener noreferrer">
            Download Proposal
          </a>
        </div>
      </div>

      <!-- Foto Orang -->
      <div class="col-lg-6 text-center">
        <img src="assets/img/cta.png" class="img-fluid" style="max-height: 500px;" alt="Tim Rekrut">
      </div>
    </div>
  </div>
</section>
<style>
/* Animasi detak jantung khusus tombol WhatsApp */
@keyframes pulseWhatsapp {
  0% { transform: scale(1); }
  50% { transform: scale(1.1); }
  100% { transform: scale(1); }
}

.pulse-whatsapp {
  display: inline-block;
  animation: pulseWhatsapp 1s infinite;
  transition: transform 0.2s;
}

/* Tombol Download Proposal */
.btn-outline-proposal {
  background-color: transparent;
  border: 2px solid white;
  color: white;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-outline-proposal:hover {
  background-color: white;
  color: #004AAD;
  box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
}

.cta-section p.mb-4 {
  font-size: 14px;
  line-height: 1.6;
}

.cta-section {
  background: 
    linear-gradient(to right, #5DE0E6, #004AAD),
    url('assets/img/ornamencta.png') no-repeat right center;
  background-size: cover;
  padding: 80px 0 60px;
  overflow: hidden;
  position: relative;
}

/* Overlay ornament transparan */
.cta-section::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 60%;
  height: 100%;
  background: url('assets/img/ornamencta.png') no-repeat center right;
  background-size: 150%;
  opacity: 0.4;
  z-index: 0;
  pointer-events: none;
}

.cta-section .container {
  position: relative;
  z-index: 1;
}

/* Responsif Mobile */
@media (max-width: 768px) {
  .cta-section {
    text-align: center;
    background: linear-gradient(to bottom, #5DE0E6, #004AAD);
  }

  .cta-section::before {
    width: 100%;
    height: 50%;
    top: auto;
    bottom: 0;
    background-size: cover;
  }

  .cta-section img {
    max-height: 300px !important;
    margin-top: 20px;
  }

  /* Tombol agar rapi di mobile */
  .cta-buttons {
    flex-direction: column;
    align-items: center;
  }
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
            <li><a href="/">e-Recruitment</a></li>
            <li><a href="elearning">e-Learning</a></li>
          </ul>
        </div>
        <!-- Komunitas -->
        <div class="footer-column">
          <h6>LAINNYA</h6>
          <ul>
            <li><a href="community">Komunitas</a></li>
            <li><a href="applypartner">Kemitraan</a></li>
          </ul>
        </div>
        <!-- Bantuan -->
        <div class="footer-column">
          <h6>BANTUAN</h6>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="https://api.whatsapp.com/send?phone=6289678868752" 
     target="_blank" 
     rel="noopener noreferrer">Hubungi Kami</a></li>
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
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

@endsection