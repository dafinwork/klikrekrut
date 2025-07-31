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
<!-- Tambahkan di layout atau halaman -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background" style="font-family: 'Poppins', sans-serif; background: linear-gradient(to bottom, #004AAD, #5DE0E6); min-height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center" data-aos="fade-up">
    <h4 class="mb-4" style="font-weight: 600; font-size: 1.1rem; color: white;">
      <span style="color: white;">klik</span><span style="color: #ccc;">rekrut</span>
    </h4>
    <h1 class="mb-4" style="font-weight: 700; font-size: 2.7rem; line-height: 1.3; color: white;">
      Making it Easy<br>
      for Everyone to Get<br>
      <span class="exclusive-text">Employees and Jobs.</span>
    </h1>
    <p id="typing-text" class="mb-5" style="font-size: 1rem; color: #f0f0f0;"></p>
    <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
      <a href="https://api.whatsapp.com/send?phone=6289678868752" target="_blank" class="btn btn-outline-light rounded-pill px-4 py-2" style="font-weight: 500; border: 2px solid #fff;">
        Hubungi Kami
      </a>
    </div>
  </div>
</section>

<!-- Custom Slider Section -->
<section id="flip-cards-section" style="background-color: #ffffffff; padding: 60px 0;">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center g-4" >
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <div>
                <h5>Layanan Asisten</h5>
                <p style="font-size: 0.9rem;">Rekrut Karyawan Lebih Mudah</p>
              </div>
            </div>
            <div class="card-back">
              <a href="{{ url('/find') }}" class="btn btn-light">START FIND EMPLOYEE</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <div>
                <h5>Loker Cepat</h5>
                <p style="font-size: 0.9rem;">Apply & Kami Proses ke Client</p>
              </div>
            </div>
            <div class="card-back">
              <a href="{{ url('/job') }}" class="btn btn-light">START FIND JOB</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <div>
                <h5>Belajar Rekrutmen</h5>
                <p style="font-size: 0.9rem;">Materi dari Rekruter</p>
              </div>
            </div>
            <div class="card-back">
              <a href="{{ url('/learning') }}" class="btn btn-light">START LEARNING</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-inner">
            <div class="card-front">
              <div>
                <h5>Komunitas Jobseeker</h5>
                <p style="font-size: 0.9rem;">Gabung dan Terhubung</p>
              </div>
            </div>
            <div class="card-back">
              <a href="{{ url('/community') }}" class="btn btn-light">MEET OUR COMMUNITY</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Trusted By Section -->
<section class="trusted-section" style="background-color: #f4f7fa; padding: 60px 0;">
  <div class="trusted-container" data-aos="fade-up">
    <h3 class="trusted-title text-center mb-5">
      Telah dipercaya membantu rekrutmen<br>berbagai perusahaan di Indonesia
    </h3>

    <div class="row justify-content-center g-4">
      
      <!-- Item 1 - Hokkaido -->
      <div class="col-md-6 col-lg-3">
        <div class="trusted-card text-center p-3 bg-white shadow rounded h-100">
          <img src="assets/img/hokp.png" alt="Hokkaido Logo" class="trusted-img mb-3">
          <a href="https://id.cheesetart.com/" target="_blank" class="text-decoration-none">
            <h5 class="fw-bold text-dark">Hokkaido</h5>
          </a>
          <p class="text-muted" style="font-size: 0.9rem;">
            Hokkaido adalah jaringan restoran Jepang yang terkenal dengan menu berkualitas dan pelayanan terbaik. Klik Rekrut dipercaya membantu merekrut staff operasional di beberapa cabangnya di Indonesia.
          </p>
        </div>
      </div>

      <!-- Item 2 - IRIJ -->
      <div class="col-md-6 col-lg-3">
        <div class="trusted-card text-center p-3 bg-white shadow rounded h-100">
          <img src="assets/img/irij.png" alt="Indonesia Research Institute Logo" class="trusted-img mb-3">
          <a href="https://irij-jakarta.com/" target="_blank" class="text-decoration-none">
            <h5 class="fw-bold text-dark">Indonesia Research Institute</h5>
          </a>
          <p class="text-muted" style="font-size: 0.9rem;">
            Lembaga riset independen yang bergerak di bidang sosial, ekonomi, dan teknologi. Klik Rekrut terlibat dalam rekrutmen peneliti dan analis proyek nasional.
          </p>
        </div>
      </div>

      <!-- Item 3 - Sosialoka -->
      <div class="col-md-6 col-lg-3">
        <div class="trusted-card text-center p-3 bg-white shadow rounded h-100">
          <img src="assets/img/sosi.png" alt="Sosialoka Logo" class="trusted-img mb-3">
          <a href="https://sosialoka.id/" target="_blank" class="text-decoration-none">
            <h5 class="fw-bold text-dark">Sosialoka</h5>
          </a>
          <p class="text-muted" style="font-size: 0.9rem;">
            Sosialoka adalah agensi digital marketing yang melayani brand lokal dan internasional. Klik Rekrut menyediakan talenta di bidang konten kreatif dan strategi digital.
          </p>
        </div>
      </div>

      <!-- Item 4 - Nurama -->
      <div class="col-md-6 col-lg-3">
        <div class="trusted-card text-center p-3 bg-white shadow rounded h-100">
          <img src="assets/img/nur.png" alt="Nurama Logo" class="trusted-img mb-3">
          <a href="https://www.instagram.com/nurama.clo/" target="_blank" class="text-decoration-none">
            <h5 class="fw-bold text-dark">Nurama</h5>
          </a>
          <p class="text-muted" style="font-size: 0.9rem;">
            Nurama adalah perusahaan desain arsitektur dan interior modern. Kami membantu rekrutmen desainer dan project coordinator untuk proyek properti besar di Jakarta dan sekitarnya.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Animasi Hover Logo -->
<style>
  .trusted-img {
    max-height: 60px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .trusted-card:hover .trusted-img {
    transform: scale(1.1);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }
</style>



<!-- KLIK Rekrut by Numbers Section -->
<section style="background-color: #4A7CA9; color: #fff; padding: 60px 20px; text-align: center;">
  <div class="container" data-aos="fade-up">
    <!-- Title -->
    <h2 style="font-weight: 700;">KLIK Rekrut by Numbers</h2>
    <p style="margin-top: 10px; font-size: 18px; font-weight: 300;">
      Empowering Indonesia’s Talent and Business Ecosystem.
    </p>

    <!-- Statistic Cards -->
    <div class="row justify-content-center mt-5 g-4">

      <!-- Card 1 -->
      <div class="col-md-3 col-10">
        <div style="background-color: #ffffff; padding: 30px 20px; border-radius: 20px;">
          <h3 class="counter" data-target="7" style="font-size: 48px; font-weight: 700; color: #000;">0</h3>
          <p style="margin: 0; font-weight: 500; color: #000;">Position Filled</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3 col-10">
        <div style="background-color: #ffffff; padding: 30px 20px; border-radius: 20px;">
          <h3 class="counter" data-target="14" style="font-size: 48px; font-weight: 700; color: #000;">0</h3>
          <p style="margin: 0; font-weight: 500; color: #000;">Talent Placement</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 col-10">
        <div style="background-color: #ffffff; padding: 30px 20px; border-radius: 20px;">
          <h3 class="counter" data-target="90" data-suffix="%" style="font-size: 48px; font-weight: 700; color: #000;">0%</h3>
          <p style="margin: 0; font-weight: 500; color: #000;">of our client successfully grows their business</p>
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
      const speed = 40; // semakin besar, semakin lambat tiap update
      const increment = Math.ceil(target / 100); // semakin besar pembagi, semakin halus/lambat

      if (count < target) {
        counter.innerText = `${count + increment}${suffix}`;
        setTimeout(updateCount, speed);
      } else {
        counter.innerText = `${target}${suffix}`;
      }
    };

    // Trigger only when element is visible
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          updateCount();
          observer.unobserve(counter);
        }
      });
    }, { threshold: 1.0 });

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