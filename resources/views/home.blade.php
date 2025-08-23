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
        <p class="mb-4">Temukan orang yang tepat untuk tim Anda - menawarkan layanan rekrutmen minim pusing, minim risiko dan minim resouce.</p>
        <a href="https://api.whatsapp.com/send?phone=6289678868752" 
   class="btn btn-success rounded-pill px-4 py-2 pulse-button" target="_blank" rel="noopener noreferrer"> Baca Lebih Lanjut ↘</a>
      </div>
      <div class="col-lg-6 text-center" data-aos="fade-left">
        <img src="assets/img/orgbener.png" class="img-fluid" style="max-height: 500px;" alt="Rekruter Image">
      </div>
    </div>
  </div>
  <script>
const text = "Membantu Anda\nMerekrut Tim Masa Depan";
const el = document.getElementById("typing-hero");
let i = 0;

  function typeText() {
    if (i < text.length) {
      el.innerHTML += text.charAt(i);
      i++;
      setTimeout(typeText, 50); // kecepatan ketik
    }
  }

  window.addEventListener("DOMContentLoaded", typeText);
</script>
<style>
  #typing-hero {
  white-space: pre-line;
}
.hero-title {
  font-weight: 700; /* atau 800 kalau mau lebih tebal */
}

.hero-title .animated-word {
  display: inline-block;
  opacity: 0;
  transform: translateY(20px);
  animation: slideUp 0.3s ease-out forwards;
  animation-delay: var(--delay);
  animation-fill-mode: both; /* ✅ ini penting biar animasi awal tetap muncul */
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

a.pulse-button {
  background-color: #7ed957 !important;
  border-color: #7ed957 !important;
  color: white !important;
}
a.pulse-button:hover {
  background-color: #6cc44a !important; /* sedikit lebih gelap */
  border-color: #6cc44a !important;
}

/* Batasi lebar di mobile */
@media (max-width: 576px) {
  .pulse-button {
    width: auto !important;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.07); }
  100% { transform: scale(1); }
}
.hero img {
  clip-path: ellipse(60% 90% at 50% 50%);
}
@media (max-width: 768px) {
  .hero-title {
    font-size: 1.8rem !important;
    text-align: center;
  }

.hero .btn {
  display: inline-block;
  margin: 0 auto;
  width: auto;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
@media (max-width: 576px) {
  .hero .btn {
    display: inline-block !important;
    width: auto !important;
    margin: 0 auto !important;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
}
  .hero img {
    max-height: 300px !important;
    margin-top: 20px;
  }

  .hero p {
    text-align: center;
  }

  .hero .col-lg-6 {
    text-align: center;
  }
}

.hero {
  background: 
    linear-gradient(to right, #5DE0E6, #004AAD),
    url('assets/img/ornament1.png') no-repeat bottom center;
  background-size: cover;
  padding: 100px 0 0 0;
  overflow: hidden;
  position: relative;
}

/* Supaya ornament lebih transparan */
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

/* Pastikan konten di atas ornament */
.hero .container {
  position: relative;
  z-index: 1;
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
            <p class="section-subtitle">LAYANAN REKRUTMEN KAMI</p>
            <h2 class="section-title">
                Bantu Rekrut Kandidat, Bikin Bisnis Melesat
            </h2>

            <!-- Baris 1 -->
            <div class="service-row">
                <div class="service-img">
                    <img src="assets/img/comu.png" alt="Talent Sourcing">
                </div>
                <div class="service-content">
                    <h3>Talent Sourcing</h3>
                    <p>Dapatkan kandidat dengan mudah, cepat, tanpa repot sourcing lewat komunitas talent kami dari berbagai bidang.</p>
                    <ul>
                        <li>Supports Entry & Mid Levels</li>
                        <li>Talent Pool</li>
                        <li>Sourcing Support</li>
                    </ul>
                    <a href="#" class="btn-service">Pesan Layanan →</a>
                </div>
            </div>
            <!-- Baris 2 -->
            <div class="service-row reverse">
                <div class="service-content">
                    <h3>Recruitment Assistant</h3>
                    <p>Dapatkan referensi kandidat terbaik dari para mitra rekruter kami yang berpengalaman di berbagai industri.</p>
                    <ul>
                        <li>Supports All Hiring Levels</li>
                        <li>End-to-end Recruitment</li>
                        <li>Talent Personalization</li>
                        <li>Approach Passive Candidate</li>
                        <li>Talent Replacement Guarantee</li>
                    </ul>
                    <a href="#" class="btn-service">Pesan Layanan →</a>
                </div>
                <div class="service-img">
                    <img src="assets/img/assis.png" alt="Recruitment Assistant">
                </div>
            </div>
        </div>
    </section>
    <style>
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
    padding: 40px 0 20px; /* atas 80px, bawah 40px */
    width: 100%; /* Pastikan full lebar layar */
    max-width: none; /* Hilangkan batasan 1200px */
    margin: 0;
}
.services-section .container {
    width: 90%; /* Konten tetap rapi */
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
    background: none; /* hilangkan box background */
    padding: 0; /* hilangkan padding seperti card */
    border-radius: 0; /* hilangkan efek kartu */
    box-shadow: none; /* hilangkan shadow */
}

.service-row.reverse {
    flex-direction: row-reverse;
}

.service-img {
    flex: 1;
    text-align: center;
}

.service-img img {
    max-width: 100%;
    height: auto;
}


.service-content {
    flex: 1;
    text-align: left;
}

.service-content h3 {
    font-size: 1.8rem;
    font-weight: 700;
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
    padding-left: 28px;
    position: relative;
    margin-bottom: 10px;
    color: #444;
}

.service-content ul li::before {
    content: "✓";
    color: #28a745;
    font-weight: bold;
    position: absolute;
    left: 0;
    font-size: 1.2rem;
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
        flex-direction: column; /* Gambar di atas, teks di bawah */
        text-align: center;
        gap: 20px;
        margin-bottom: 20px;
    }
    .service-row.reverse {
        flex-direction: column; /* Hilangkan efek reverse di mobile */
    }
    .service-content {
        text-align: center;
    }
    .service-img {
        order: -1; /* Pastikan gambar tetap di atas */
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
          <h1 class="counter mb-0" data-target="7">0</h1>
          <div class="text-start stat-text">
            key positions<br>successfully filled
          </div>
        </div>

        <!-- Item 2 -->
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-4">
          <h1 class="counter mb-0" data-target="14">0</h1>
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
              <p class="card-description">Pelayanan Klik Rekrut luar biasa. Sepanjang kerja sama dengan berbagai headhunter, mereka adalah yang paling cepat merespons dan konsisten mengirimkan kandidat berkualitas tinggi</p>
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
              <p class="card-description nurama-desc">KLIK Rekrut membantu kami di Nurama menemukan karyawan yang tepat dengan cepat. Prosesnya mudah, pelayanannya maksimal, dan benar-benar disesuaikan dengan kebutuhan kami. Sangat membantu perkembangan perusahaan kami. Terima kasih KLIK Rekrut</p>
            </div>
          </div>
          
          <!-- Client Group 2 -->
          <div class="carousel-slide">
            <div class="card">
              <div class="card-header">
                <img src="assets/img/client4.png" alt="Client 4 Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Client 4</h3>
                  <p class="role">Industry Type</p>
                </div>
              </div>
              <p class="card-description">Testimonial from Client 4 about their positive experience with your service. Highlighting key benefits and results achieved through your partnership.</p>
            </div>
            
            <div class="card">
              <div class="card-header">
                <img src="assets/img/client5.png" alt="Client 5 Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Client 5</h3>
                  <p class="role">Industry Type</p>
                </div>
              </div>
              <p class="card-description">Testimonial from Client 5 about their positive experience with your service. Highlighting key benefits and results achieved through your partnership.</p>
            </div>
            
            <div class="card">
              <div class="card-header">
                <img src="assets/img/client6.png" alt="Client 6 Logo" class="card-logo">
                <div class="card-titles">
                  <h3>Client 6</h3>
                  <p class="role">Industry Type</p>
                </div>
              </div>
              <p class="card-description">Testimonial from Client 6 about their positive experience with your service. Highlighting key benefits and results achieved through your partnership.</p>
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
            <img src="assets/img/cat1.png" alt="Agustina Gita" class="card-logo">
            <div class="card-titles">
              <h3>Agustina Gita</h3>
              <p class="role">Jr. Finance & Accounting</p>
            </div>
          </div>
          <p class="card-description gita-desc">KlikRekrut jadi pintu pertama perjalanan karierku. Dari intern 6 bulan di konsultan, sekarang sudah 2 tahun aku berkembang sebagai karyawan tetap. Smooth process, impactful result!
Thanks to KlikRekrut, aku mulai dari intern 6 bulan di konsultan dan lanjut jadi karyawan tetap sampai sekarang udah 2 tahun lebih. Prosesnya gampang banget dan beneran ngebuka jalan karierku!
</p>
        </div>

        <div class="card">
          <div class="card-header">
            <img src="assets/img/fadhia.jpg" alt="fadhiah" class="card-logo">
            <div class="card-titles">
              <h3>Fadhia Raudhah</h3>
              <p class="role">E commerce specialist</p>
            </div>
          </div>
          <p class="card-description fadhia-desc">Kalo dari aku ngerasanya puas banget kak dari layanan Jasa Klik Career ini. Rekruternya komunikatif, prosesnya diupdate secara berkala, berjalan cepat dan profesional. Sangat terbantu dari membuat CV yang proper,Mini Test dan dibantu mengenal lebih dalam mengenai jobdesk pekerjaan dan budaya perusahaan tempat saya melamar. mulai dari awal melamar sampai penawaran kerja tetap diarahkan dengan baik.</p>
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
    background: rgba(0,0,0,0.1);
    color: #3c678b;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 20px;
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s;
  }
  .carousel-button:hover {
    background: rgba(0,0,0,0.2);
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
  .card {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    padding: 20px;
    width: 300px;
    text-align: left;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
  }
  .card-header {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
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
    margin-top: auto;
    color: #444;
    line-height: 1.5;
    font-size: 14px;
    text-align: left;
  }
  .nurama-desc {
  font-size: 12px; /* Atur sesuai keinginan */
}
.gita-desc {
  font-size: 11px; /* Atur sesuai keinginan */
}
.fadhia-desc {
  font-size: 11px; /* Atur sesuai keinginan */
}
@media (max-width: 768px) {
  .carousel-slide.active {
    flex-direction: column;
    align-items: center;
  }
  .carousel-button {
    display: block; /* tampilkan lagi */
    top: auto;      /* biar nggak ketumpuk */
    bottom: -50px;  /* posisinya di bawah carousel */
    transform: none;
  }
  .prev {
    left: 30%;
  }
  .next {
    right: 30%;
  }
}
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
          Siap merekrut kandidat terbaik untuk bergabung jadi tim Anda?
        </h2>
        <p class="mb-4">
          Jangan biarkan momentum bisnis Anda hilang karena tim belum siap! 
          Klik tombol untuk mulai merekrut dan bawa bisnis Anda ke level berikutnya!
        </p>
        <a href="https://api.whatsapp.com/send?phone=6289678868752" class="btn btn-success rounded-pill px-4 py-2">Hubungi Kami</a>
        <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2">Explore Layanan →</a>
      </div>

      <!-- Foto Orang -->
      <div class="col-lg-6 text-center">
        <img src="assets/img/cta.png" class="img-fluid" style="max-height: 500px;" alt="Tim Rekrut">
      </div>

    </div>
  </div>
</section>

<style>
.cta-section {
  background: 
    linear-gradient(to right, #5DE0E6, #004AAD),
    url('assets/img/ornamencta.png') no-repeat right center;
  background-size: cover;
  padding: 80px 0 60px; /* Atas 80px, kanan/kiri 0, bawah 60px */
  overflow: hidden;
  position: relative;
}

/* Overlay ornament transparan */
.cta-section::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 60%; /* Lebih lebar biar nutup setengah kanan */
  height: 100%;
  background: url('assets/img/ornamencta.png') no-repeat center right;
  background-size: 150%; /* Perbesar ornament */
  opacity: 0.4; /* Biar lebih kelihatan */
  z-index: 0;
  pointer-events: none;
}

.cta-section .container {
  position: relative;
  z-index: 1; /* konten di atas ornament */
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
}
</style>
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