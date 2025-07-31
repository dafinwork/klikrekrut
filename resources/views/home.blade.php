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
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- hero section -->
<header class="header fixed-top">
  <div class="container d-flex justify-content-between align-items-center py-2">
<a href="#" class="logo d-flex align-items-center">
  <img src="assets/img/logoklik.png" alt="Klikrekrut Logo" class="logo-full" />
</a> <!-- di css namanya logo -->

    <!-- Mobile toggle button -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- Navigation Menu -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <li class="dropdown">
          <a href="#">Services <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Assistant</a></li>
            <li><a href="{{ url('community') }}">Community</a></li>
            <li><a href="{{ url('learning') }}">E-learning</a></li>
          </ul>
        </li>
        <li><a href="#">Free Resources</a></li>
        <li class="dropdown">
          <a href="#">Company <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Partner with us</a></li>
          </ul>
        </li>
        <li><a href="#" class="btn btn-outline-light rounded-pill px-3 py-1">Book Free Consultation</a></li>
      </ul>
    </nav>
  </div>
</header>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".mobile-nav-toggle");
    const navmenu = document.getElementById("navmenu");
    const dropdowns = document.querySelectorAll(".navmenu .dropdown");

    toggle.addEventListener("click", () => {
      navmenu.classList.toggle("active");
      document.body.classList.toggle("mobile-nav-active");
    });

    // Tutup dropdown saat klik dropdown lain
    dropdowns.forEach(drop => {
      const link = drop.querySelector("a");

      link.addEventListener("click", (e) => {
        e.preventDefault();

        // Tutup semua dulu
        dropdowns.forEach(d => {
          if (d !== drop) {
            d.classList.remove("open");
          }
        });

        // Toggle yang sekarang
        drop.classList.toggle("open");

        // Toggle tampilan dropdownnya
        const submenu = drop.querySelector("ul");
        submenu.style.display = drop.classList.contains("open") ? "block" : "none";
      });
    });

    // Tutup nav saat klik luar
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
          if (submenu) submenu.style.display = "none";
        });
      }
    });
  });
</script>
<main class="main">
<!-- Tambahkan di layout atau halaman -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Hero Section -->
<section id="hero" class="hero section position-relative" style="background: linear-gradient(to right, #5DE0E6, #004AAD); padding: 100px 0 0 0; overflow: hidden;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 text-white" data-aos="fade-right">
        <h1 class="mb-4 hero-title">
          <span class="animated-word" style="--delay: 0.6s;">Membantu</span>
          <span class="animated-word" style="--delay: 0.8s;">Anda</span><br>
          <span class="animated-word" style="--delay: 1.2s;">Merekrut</span>
          <span class="animated-word" style="--delay: 1.4s;">Tim Masa Depan</span>
        </h1>
        <p class="mb-4">Satu platform untuk kemudahan rekrutmen – mulai dari mencari pelamar, menemukan kandidat hingga melatih tim rekruter.</p>
        <a href="#" class="btn btn-success rounded-pill px-4 py-2 pulse-button">Pesan Layanan</a>
      </div>
      <div class="col-lg-6 text-center" data-aos="fade-left">
        <img src="assets/img/org1.png" class="img-fluid" style="max-height: 500px;" alt="Rekruter Image">
      </div>
    </div>
  </div>
<style>
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
    display: block;
    margin: 0 auto;
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
</style>

</section>

<!-- KLIK Rekrut by Numbers Section -->
<section style="background-color: #363636; color: #fff; padding: 60px 20px; text-align: center;">
  <div class="container" data-aos="fade-up">

    <!-- Title -->
    <h2 style="font-weight: 700; font-size: 1.6rem; color: #fff;">
  Empowering Indonesia’s Talent and Business Ecosystem
</h2>


    <!-- Statistics -->
    <div class="row justify-content-center mt-5 g-4">

      <!-- Stat 1 -->
      <div class="col-md-3 col-10">
        <h1 class="counter" data-target="7" style="font-size: 3rem; font-weight: 700; color: #7ed797;">0</h1>
        <p style="color: #e0e0e0; font-size: 0.95rem;">of successfully filled<br>our client needs</p>
      </div>

      <!-- Stat 2 -->
      <div class="col-md-3 col-10">
        <h1 class="counter" data-target="14" style="font-size: 3rem; font-weight: 700; color: #7ed797;">0</h1>
        <p style="color: #e0e0e0; font-size: 0.95rem;">of talent elevate<br>their career</p>
      </div>

      <!-- Stat 3 -->
      <div class="col-md-3 col-10">
        <h1 class="counter" data-target="90" data-suffix="%" style="font-size: 3rem; font-weight: 700; color: #7ed797;">0%</h1>
        <p style="color: #e0e0e0; font-size: 0.95rem;">of our client successfully<br>grows their business</p>
      </div>

    </div>
  </div>
</section>

<!-- rekrutmen -->
<section class="bg-gradient-to-b from-cyan-400 to-blue-700 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-4xl font-bold mb-10">
            Menghadirkan solusi rekrutmen berbasis layanan digital <br>
            yang memberdayakan bisnis dan talent di Indonesia
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-lg text-black p-6 flex flex-col items-center">
                <h3 class="text-xl font-bold text-center">
                    <span class="block">Recruitment</span>
                    <span class="block">Assistant Service</span>
                </h3>
                <p class="text-center mt-4">Rekrut dengan Bantuan Asisten Rekrutmen.</p>
                <a href="#" class="mt-6 text-blue-600 font-semibold">Read More</a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-lg text-black p-6 flex flex-col items-center">
                <h3 class="text-xl font-bold text-center">
                    <span class="block">Recruitment</span>
                    <span class="block">Community Service</span>
                </h3>
                <p class="text-center mt-4">Rekrut dan Komunikasi Langsung dengan Talent Dari Berbagai Bidang.</p>
                <a href="#" class="mt-6 text-blue-600 font-semibold">Read More</a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-lg text-black p-6 flex flex-col items-center">
                <h3 class="text-xl font-bold text-center">
                    <span class="block">Recruitment</span>
                    <span class="block">Learning Service</span>
                </h3>
                <p class="text-center mt-4">Belajar Rekrutmen dari Rekruter.</p>
                <a href="#" class="mt-6 text-blue-600 font-semibold">Read More</a>
            </div>
        </div>
    </div>
</section>

<style>
  </style>
<!-- Count-Up Script -->
<script>
  const counters = document.querySelectorAll('.counter');

  counters.forEach(counter => {
    const updateCount = () => {
      const suffix = counter.getAttribute('data-suffix') || '';
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText.replace(/\D/g, '');
      
      const speed = 50; // Semakin besar, semakin lambat (default: 30)
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
<section style="background-color: #000; color: #fff; padding: 60px 20px; text-align: center; font-family: 'Inter', sans-serif;">
  <div class="container" data-aos="fade-up">
    <!-- Title -->
    <h2 style="font-weight: 700; font-size: 40px; margin-bottom: 40px;">What Our Clients Say</h2>

    <!-- Testimonial Cards -->
    <div class="row justify-content-center g-4">
      
      <!-- Card 1 -->
      <div class="col-md-4 col-10">
        <div style="
          background: rgba(255, 255, 255, 0.05);
          backdrop-filter: blur(10px);
          padding: 30px;
          border-radius: 20px;
          border: 1px solid rgba(255, 255, 255, 0.1);
          box-shadow: 0 8px 20px rgba(255, 255, 255, 0.1);
          transition: transform 0.3s ease;
        " onmouseover="this.style.transform='translateY(-8px)'" onmouseout="this.style.transform='none'">
          <img src="assets/img/cat1.png" alt="Isla" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-bottom: 20px;">
          <h4 style="font-weight: 600; font-size: 20px;">Isla</h4>
          <p style="color: #ddd; font-size: 15px;">
            Testimonials are short quotes from people who love your brand.
            It's a great way to convince customers to try your services.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 col-10">
        <div style="
          background: rgba(255, 255, 255, 0.05);
          backdrop-filter: blur(10px);
          padding: 30px;
          border-radius: 20px;
          border: 1px solid rgba(255, 255, 255, 0.1);
          box-shadow: 0 8px 20px rgba(255, 255, 255, 0.1);
          transition: transform 0.3s ease;
        " onmouseover="this.style.transform='translateY(-8px)'" onmouseout="this.style.transform='none'">
          <img src="assets/img/cat2.png" alt="Mason" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-bottom: 20px;">
          <h4 style="font-weight: 600; font-size: 20px;">Mason</h4>
          <p style="color: #ddd; font-size: 15px;">
            Testimonials are short quotes from people who love your brand.
            It's a great way to convince customers to try your services.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 col-10">
        <div style="
          background: rgba(255, 255, 255, 0.05);
          backdrop-filter: blur(10px);
          padding: 30px;
          border-radius: 20px;
          border: 1px solid rgba(255, 255, 255, 0.1);
          box-shadow: 0 8px 20px rgba(255, 255, 255, 0.1);
          transition: transform 0.3s ease;
        " onmouseover="this.style.transform='translateY(-8px)'" onmouseout="this.style.transform='none'">
          <img src="assets/img/cat3.png" alt="Jonah" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-bottom: 20px;">
          <h4 style="font-weight: 600; font-size: 20px;">Jonah</h4>
          <p style="color: #ddd; font-size: 15px;">
            Testimonials are short quotes from people who love your brand.
            It's a great way to convince customers to try your services.
          </p>
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