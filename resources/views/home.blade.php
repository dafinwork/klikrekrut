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

<!-- hero section -->
<header class="header fixed-top">
  <div class="container d-flex justify-content-between align-items-center py-2">
<a href="#" class="logo d-flex align-items-center">
  <img src="assets/img/Header.png" alt="Klikrekrut Logo" class="logo-full" />
</a> <!-- di css namanya logo -->

    <!-- Mobile toggle button -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- Navigation Menu -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <li class="dropdown">
          <a href="#">Services <i class="bi bi-chevron-down toggle-icon"></i></a>
          <ul>
            <li><a href="#">Assistant</a></li>
            <li><a href="{{ url('community') }}">Community</a></li>
            <li><a href="{{ url('learning') }}">E-learning</a></li>
          </ul>
        </li>
        <li><a href="#">Free Resources</a></li>
        <li class="dropdown">
          <a href="#">Company <i class="bi bi-chevron-down toggle-icon"></i></a>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Partner with us</a></li>
          </ul>
        </li>
        <li>
  <a href="https://api.whatsapp.com/send?phone=6289678868752"
     target="_blank"
     rel="noopener noreferrer"
     class="btn btn-outline-light wa-btn rounded-pill px-3 py-1">
    Get Consultation Free ➝
  </a>
</li>

      </ul>
    </nav>
  </div>
</header>
<script>
  // Tambahkan/ambil class 'scrolled' saat scroll
window.addEventListener("scroll", function () {
  const header = document.querySelector(".header");
  if (window.scrollY > 10) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".mobile-nav-toggle");
    const navmenu = document.getElementById("navmenu");
    const dropdowns = document.querySelectorAll(".navmenu .dropdown");

    // Toggle nav mobile
    toggle.addEventListener("click", () => {
      navmenu.classList.toggle("active");
      document.body.classList.toggle("mobile-nav-active");
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
            if (submenu) submenu.style.display = "none";

            // Reset panah
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
        // Toggle ikon panah
        const icon = drop.querySelector(".toggle-icon");
        if (icon) {
          icon.classList.toggle("bi-chevron-down");
          icon.classList.toggle("bi-chevron-up");
        }
      });
    });

    // Tutup nav dan dropdown saat klik luar
    document.addEventListener("click", function (e) {
      if (
        document.body.classList.contains("mobile-nav-active") &&
        !e.target.closest("#navmenu") &&
        !e.target.closest(".mobile-nav-toggle")
      ) {
        navmenu.classList.remove("active");
        document.body.classList.remove("mobile-nav-active");

        // Tutup semua dropdown
        dropdowns.forEach(d => {
          d.classList.remove("open");
          const submenu = d.querySelector("ul");

          // Reset ikon panah
          const icon = d.querySelector(".toggle-icon");
          if (icon) {
            icon.classList.add("bi-chevron-down");
            icon.classList.remove("bi-chevron-up");
          }
        });
      }
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
        <p class="mb-4">Satu platform untuk kemudahan rekrutmen – mulai dari mencari pelamar, menemukan kandidat hingga melatih tim rekruter.</p>
        <a href="https://api.whatsapp.com/send?phone=6289678868752" 
   class="btn btn-success rounded-pill px-4 py-2 pulse-button" target="_blank" rel="noopener noreferrer"> Pesan Layanan </a>
      </div>
      <div class="col-lg-6 text-center" data-aos="fade-left">
        <img src="assets/img/orgbener.png" class="img-fluid" style="max-height: 500px;" alt="Rekruter Image">
      </div>
    </div>
  </div>
  <script>
  const text = "Membantu Anda Merekrut Tim Masa Depan";
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

.pulse-button {
  animation: pulse 1.4s ease-in-out infinite;
  transform-origin: center;
  width: auto;
  display: inline-block;
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
      <p class="trusted-label">Telah dipercaya membantu rekrutmen berbagai perusahaan di Indonesia</p>
      <div class="trusted-logos-track">
        <!-- Logo set pertama -->
        <img src="assets/img/hokkaido3.png" alt="Hokkaido" class="trusted-logo" />
        <img src="assets/img/irij3.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka3.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama3.png" alt="Nurama" class="trusted-logo" />

        <!-- Logo set kedua (duplikat untuk loop mulus) -->
        <img src="assets/img/hokkaido3.png" alt="Hokkaido" class="trusted-logo" />
        <img src="assets/img/irij3.png" alt="Indonesia Research" class="trusted-logo" />
        <img src="assets/img/sosialoka3.png" alt="Sosialoka" class="trusted-logo" />
        <img src="assets/img/nurama3.png" alt="Nurama" class="trusted-logo" />
      </div>
    </div>
  </div>
</section>

<style>
.trusted-section {
  background-color: #e8f5fc;
  padding: 0; /* hilangin padding biar pas */
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.trusted-logos-wrapper {
  width: 1085px;       /* lebar sesuai permintaan */
  height: 204.47px;    /* tinggi sesuai permintaan */
  overflow: hidden;    /* potong hanya area luar */
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.trusted-label {
  font-family: 'Poppins', sans-serif;
  font-size: 1.1rem;
  font-weight: 600;
  color: #111;
  margin-bottom: 8px;
}

.trusted-logos-track {
  display: flex;
  gap: 30px;
  width: max-content;
  animation: scrollLeft 20s linear infinite;
}

.trusted-logo {
  height: 140px; /* scale otomatis sesuai tinggi */
  object-fit: contain;
  flex: 0 0 auto;
  transition: transform 0.3s ease;
}

.trusted-logo:hover {
  transform: scale(1.05);
}

@keyframes scrollLeft {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

/* Mobile */
/* Mobile */
@media (max-width: 767px) {
  .trusted-label {
    font-size: 0.9rem; /* lebih kecil dari 1.1rem */
    margin-bottom: 4px;
  }

  .trusted-logos-wrapper {
    width: 100%;
    height: auto;
  }

  .trusted-logo {
    height: 110px; /* kecilkan logo */
    max-height: 110px;
  }
}

</style>
<!-- reqruitment -->
<section class="service-section py-5">
  <div class="container text-center">
    <!-- Judul -->
    <h2 class="section-title mb-5 fw-bold text-white">
      Menghadirkan solusi rekrutmen berbasis layanan digital<br>
      yang memberdayakan bisnis dan talent di Indonesia
    </h2>

    <!-- Kartu Layanan -->
    <div class="row g-4 justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-card p-4 h-100">
          <img src="assets/img/awan.png" alt="Service 1" class="img-fluid mb-3 rounded">
          <h5 class="fw-bold">Recruitment Assistant Service</h5>
          <p>Rekrut dengan Bantuan Asisten Rekrutmen.</p>
          <a href="#" class="btn btn-danger rounded-pill px-4">Read More</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-card p-4 h-100">
          <img src="assets/img/awan.png" alt="Service 2" class="img-fluid mb-3 rounded">
          <h5 class="fw-bold">Recruitment Community Service</h5>
          <p>Rekrut dan Komunikasi Langsung dengan Talent Dari Berbagai Bidang.</p>
          <a href="#" class="btn btn-danger rounded-pill px-4">Read More</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-card p-4 h-100">
          <img src="assets/img/awan.png" alt="Service 3" class="img-fluid mb-3 rounded">
          <h5 class="fw-bold">Recruitment Learning Service</h5>
          <p>Belajar Rekrutmen dari Rekruter.</p>
          <a href="#" class="btn btn-danger rounded-pill px-4">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .service-section {
  background: linear-gradient(to bottom right, #5DE0E6, #004AAD);
  color: #fff;
}

.section-title {
  font-size: 1.5rem;
  line-height: 1.6;
}

.service-card {
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  color: #333;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.service-card img {
  border-radius: 10px;
  height: auto;
  max-height: 160px;
  object-fit: cover;
  width: 100%;
}

.service-card p {
  font-size: 0.95rem;
  color: #555;
}
</style>
<!-- Benefit Section -->
<section class="benefit-section">
  <div class="container text-center">
    <h2 class="benefit-title">Bagaimana <strong>KLIK Rekrut</strong> membantu perusahaan Anda?</h2>
    
    <div class="benefit-cards-wrapper">
      <div class="benefit-cards">
        
        <div class="benefit-card">
          <img src="assets/img/awan.png" alt="Awan" class="card-icon">
        </div>

        <div class="benefit-card">
          <img src="assets/img/awan.png" alt="Awan" class="card-icon">
        </div>

        <div class="benefit-card">
          <img src="assets/img/awan.png" alt="Awan" class="card-icon">
        </div>

        <div class="benefit-card">
          <img src="assets/img/awan.png" alt="Awan" class="card-icon">
        </div>

      </div>
    </div>
      <div class="container text-center">
    <h2 class="benefit-title"><strong>Biaya Rendah, Cocok Untuk Semua Bisnis, Mudah Digunakan</strong></h2>
  </div>
</section>
<style>
.benefit-section {
  background-color: #F9F8FB;
  padding: 60px 20px;
  overflow: hidden;
}

.benefit-title {
  font-size: 1.8rem;
  font-weight: 700;
  margin-bottom: 40px;
  color: #111;
}

.benefit-cards-wrapper {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.benefit-cards {
  display: flex;
  gap: 20px;
  flex-wrap: nowrap;
  padding-bottom: 10px;
  margin: 0 auto; /* Centering */
  max-width: 1080px; /* Centered container */
  justify-content: center;
}

.benefit-card {
  background-color: #cfd1d6;
  border-radius: 20px;
  padding: 20px 15px;
  height: 250px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  font-weight: 700;
  font-size: 1rem;
  text-align: center;
  transition: transform 0.3s ease;
  position: relative;
  flex: 0 0 250px; /* Default desktop width */
}

.benefit-card:hover {
  transform: translateY(-5px);
  background-color: #bfc2c7;
}

.card-icon {
  position: absolute;
  top: 20px;
  width: 60px;
  height: auto;
}

@media (max-width: 767px) {
  .benefit-cards {
    justify-content: flex-start; /* Scroll mulai dari kiri */
    padding-left: 10px;
  }

  .benefit-card {
    flex: 0 0 80%;
    margin-right: 10px;
    height: 220px;
  }
}
</style>

<!--angka-->
<section style="background-color: #e7f4fc; color: #fff; padding: 40px 20px; text-align: center;">
  <div class="container" data-aos="fade-up">
    <!-- Judul -->
    <h2 style="font-weight: 700; font-size: 1.4rem; color: #635d5e; margin-bottom: 40px;">
      Empowering Indonesia’s Talent and Business Ecosystem
    </h2>

    <!-- Statistik horizontal -->
    <div class="row justify-content-center text-center g-4">
      
      <!-- Item 1 -->
      <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-3">
        <h1 class="counter mb-0" data-target="7" style="font-size: 3rem; font-weight: 700; color: #7ed957;">0</h1>
        <div class="text-start" style="font-size: 0.85rem; color: #635d5e;">
          key positions<br>successfully filled
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-3">
        <h1 class="counter mb-0" data-target="14" style="font-size: 3rem; font-weight: 700; color: #7ed957;">0</h1>
        <div class="text-start" style="font-size: 0.85rem; color: #635d5e;">
          of talents elevate<br>their career
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-12 col-md-4 d-flex justify-content-center align-items-center gap-3">
        <h1 class="counter mb-0" data-target="90" data-suffix="%" style="font-size: 3rem; font-weight: 700; color: #7ed957;">0%</h1>
        <div class="text-start" style="font-size: 0.85rem; color: #635d5e;">
          of our client successfully<br>grows their business
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Count-Up Script -->
<script>
  const counters = document.querySelectorAll('.counter');

  counters.forEach(counter => {
    const updateCount = () => {
      const suffix = counter.getAttribute('data-suffix') || '';
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText.replace(/\D/g, '');
      
      const speed = 12; // Semakin besar, semakin lambat (default: 30)
      const increment = Math.ceil(target / 100); // Semakin besar pembagi, semakin lambat naiknya

      if (count < target) {
        counter.innerText = `${count + increment}${suffix}`;
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

<!-- What Our Clients Say Section -->
<section class="testimonial-section">
  <div class="container">
    <!-- Title -->
    <h2 class="testimonial-title">What Our Clients Say</h2>

    <!-- Cards -->
    <div class="testimonial-cards">
      <!-- Card 1 -->
      <div class="testimonial-card">
        <img src="assets/img/cat1.png" alt="Isla">
        <h4>Arneta A.</h4>
        <small class="testimonial-company">Indonesia Research Institute Japan Jakarta</small>
        <p>
Kami sangat terbantu dengan layanan asisten rekrutmen membantu saya lebih efisien dalam merekrut karyawan, karena kami hanya perlu menunggu kandidat yang telah diseleksi, tanpa harus terlibat dalam setiap tahap proses rekrutmen.”
        </p>
      </div>
      <!-- Card 2 -->
      <div class="testimonial-card">
        <img src="assets/img/cat2.png" alt="Mason">
        <h4>Mason</h4>
        <p>
          Testimonials are short quotes from people who love your brand.
          It's a great way to convince customers to try your services.
        </p>
      </div>
      <!-- Card 3 -->
      <div class="testimonial-card">
        <img src="assets/img/cat3.png" alt="Jonah">
        <h4>Jonah</h4>
        <p>
          Testimonials are short quotes from people who love your brand.
          It's a great way to convince customers to try your services.
        </p>
      </div>
    </div>
  </div>
</section>

<style>
/* Section Background */
.testimonial-section {
  background: #6abcff;
  color: #fff;
  padding: 60px 20px;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}

/* Title */
.testimonial-title {
  font-size: 2.2rem;
  font-weight: 700;
  margin-bottom: 40px;
}

/* Cards Container */
.testimonial-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

/* Card */
.testimonial-card {
  position: relative;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(10px);
  border-radius: 16px;
  border: 1px solid rgba(255,255,255,0.15);
  padding: 30px 20px;
  width: 300px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
  overflow: hidden;
}

/* Efek kilap otomatis */
.testimonial-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: -50%;
  width: 200%;
  height: 100%;
  background: linear-gradient(
    120deg,
    rgba(255, 255, 255, 0.25) 0%,
    rgba(255, 255, 255, 0) 60%
  );
  transform: skewX(-20deg);
  pointer-events: none;
  animation: shine 3s linear infinite;
}

/* Animasi geser kilap */
@keyframes shine {
  from { left: -50%; }
  to { left: 100%; }
}

/* Delay tiap kartu biar gak barengan */
.testimonial-card:nth-child(1)::before { animation-delay: 0s; }
.testimonial-card:nth-child(2)::before { animation-delay: 1s; }
.testimonial-card:nth-child(3)::before { animation-delay: 2s; }

/* Hover naik */
.testimonial-card:hover {
  transform: translateY(-6px);
}

/* Image */
.testimonial-card img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 15px;
}

/* Name */
.testimonial-card h4 {
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 10px;
}

/* Description */
.testimonial-card p {
  font-size: 0.95rem;
  color: #f1f1f1;
  line-height: 1.5;
}
</style>

<!-- CTA Section -->
<section class="cta-section position-relative">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Teks -->
      <div class="col-lg-6 text-white">
        <h2 class="mb-4" style="font-weight:700; color:white;">
          Siap untuk merekrut kandidat terbaik untuk bergabung jadi tim Anda?
        </h2>
        <p class="mb-4">
          Jangan biarkan momentum bisnis Anda hilang karena tim belum siap! 
          Klik tombol untuk mulai merekrut dan bawa bisnis Anda ke level berikutnya!
        </p>
        <a href="#" class="btn btn-success rounded-pill px-4 py-2">Hubungi Kami</a>
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
  padding: 100px 0;
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

  <script>
  const text = "#LebihUnggulLayanannya";
  const typingElement = document.getElementById("typing-text");
  let index = 0;

  function type() {
    if (index < text.length) {
      typingElement.innerHTML += text.charAt(index);
      index++;
      setTimeout(type, 100); // semakin besar = semakin lambat
    }
  }

  // Jalankan animasi saat halaman dimuat
  window.addEventListener("DOMContentLoaded", type);
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