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
  Jelajahi Komunitas 
  <img src="assets/img/panahputih.png" alt="panah" class="icon-panah">
</a>

  </div>
</section>

<style>
  .btn-hero .icon-panah {
  width: 16px;    /* sesuaikan */
  height: auto;
  margin-left: 8px; /* kasih jarak dari teks */
  vertical-align: middle;
}

.hero-section {
    background: url("assets/img/raw.jpg") center center no-repeat;
    background-size: contain;
    background-position: top;
    background-attachment: scroll;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 79.8vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: 70px; /* sesuaikan tinggi header */
}


.hero-title {
  font-weight: 700;
  font-size: 4rem;
  line-height: 1.4;
  color: #2e6bbc;  
  text-shadow: 
    -1px -1px 0 #fff,  
     1px -1px 0 #fff,
    -1px  1px 0 #fff,
     1px  1px 0 #fff,
    -2px -2px 0 #fff,  
     2px -2px 0 #fff,
    -2px  2px 0 #fff,
     2px  2px 0 #fff; /* tambahan biar makin tebal */
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
/* Versi mobile */
@media (max-width: 768px) {
  .hero-section {
    background: url("assets/img/communitymobile.jpg") center center no-repeat;
    background-size: cover;
    background-attachment: scroll;
    margin-top: 60px; /* kalau perlu lebih kecil di mobile */
    padding: 0 20px;  /* kasih padding biar teks gak mepet */
  }

  .hero-title {
    font-size: 2rem; /* kecilkan ukuran teks biar pas di mobile */
    line-height: 1.2;
  }

  .btn-hero {
    padding: 10px 20px;
    font-size: 0.9rem;
  }

  .btn-hero .icon-panah {
    width: 14px;
    margin-left: 6px;
  }
}
</style>

<!-- UPCOMING EVENT SECTION -->
<section class="event-section py-5">
  <div class="container text-center">
    <div class="event-header mb-4">
      <h2 class="text-white">Upcoming Event for Members</h2>
    </div>

    <div id="eventCarousel" class="carousel slide">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4 justify-content-center">
            
            <!-- Kartu 1 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/andi.jpg" class="w-100 rounded-top" alt="Event 1">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE CLASS</h3>
                <p class="text-info">JUMAT, 18 APRIL 2025</p>
              </div>
            </div>

            <!-- Kartu 2 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/adam.jpg" class="w-100 rounded-top" alt="Event 2">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE HIRING</h3>
                <p class="text-info">JUMAT, 09 MEI 2025</p>
              </div>
            </div>

            <!-- Kartu 3 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/far.jpg" class="w-100 rounded-top" alt="Event 3">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE CLASS</h3>
                <p class="text-info">KAMIS, 12 JUNI 2025</p>
              </div>
            </div>

          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            
            <!-- Kartu 4 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/andi.jpg" class="w-100 rounded-top" alt="Event 4">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE HIRING</h3>
                <p class="text-info">JUMAT, 20 JUNI 2025</p>
              </div>
            </div>

            <!-- Kartu 5 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/adam.jpg" class="w-100 rounded-top" alt="Event 5">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE CLASS</h3>
                <p class="text-info">JUMAT, 25 JULI 2025</p>
              </div>
            </div>

            <!-- Kartu 6 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/far.jpg" class="w-100 rounded-top" alt="Event 6">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE HIRING</h3>
                <p class="text-info">JUMAT, 15 AGUSTUS 2025</p>
              </div>
            </div>

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
/* Section background */
/* Section background */
.event-section {
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
  padding: 60px 20px;
  text-align: center;
  color: white;
  font-family: Arial, sans-serif;
}

/* Judul */
.event-header h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 5px;
  color: #fff;
}

.event-header p {
  margin-bottom: 40px;
  color: #fff;
}

/* Slider Container */
.slider-container {
  position: relative;
  max-width: 1000px;
  margin: 0 auto;
  overflow: hidden;
}

/* Track */
.slider-track {
  display: flex;
  transition: transform 0.5s ease;
}

/* Wrapper untuk kartu */
.event-wrapper {
  flex: 0 0 calc(100% / 3); /* tampil 3 kartu */
  padding: 0 10px;
  box-sizing: border-box;
}

/* Efek Pop-Up pada Card */
.event-card {
  background: white;
  border-radius: 16px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
  overflow: hidden;
  transition: all 0.35s ease;
  cursor: pointer;
  transform-style: preserve-3d;
  backface-visibility: hidden;
}

/* Saat kursor diarahkan ke kartu */
.event-card:hover {
  transform: scale(1.08) translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
  z-index: 10;
}

/* Biar gambar ikut smooth */
.event-card img {
  width: 100%;
  height: auto;
  object-fit: cover;
  transition: transform 0.35s ease;
}

/* Gambar sedikit zoom pas hover */
.event-card:hover img {
  transform: scale(1.05);
}

/* Caption */
.event-caption {
  margin-top: 12px;
  text-align: center;
  color: white;
}

.event-caption h3 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 4px;
  color: #fff;
}

.event-caption p {
  font-size: 14px;
  opacity: 0.9;
  color: #5de0e6;
}

/* Tombol Navigasi */
.slider-btn {
  position: absolute;
  top: 40%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.5);
  border: none;
  color: white;
  font-size: 24px;
  padding: 10px;
  cursor: pointer;
  border-radius: 50%;
}

.slider-btn:hover {
  background: rgba(0,0,0,0.8);
}

.slider-btn.prev {
  left: 15px;
}

.slider-btn.next {
  right: 15px;
}
/* Geser tombol panah keluar area kartu */
.carousel-control-prev,
.carousel-control-next {
  top: 50%;                        /* tetap di tengah vertikal */
  transform: translateY(-50%);     /* biar benar-benar center */
  width: auto;                     
  height: auto;
}

.carousel-control-prev {
  left: -60px;   /* geser keluar ke kiri */
}

.carousel-control-next {
  right: -60px;  /* geser keluar ke kanan */
}

/* Styling ikon biar tetap kelihatan */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-size: 30px 30px;
  filter: invert(1); /* bikin putih */
}

</style>
<!-- BENEFIT MEMBER SECTION -->
<section class="benefit-section py-5" style="background-color: #E9F5FB;">
  <div class="container">

    <!-- Judul -->
    <h2 class="text-center fw-bold mb-5">Member Benefit </h2>

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
  .benefit-section h2 {
  color: #000;        /* warna hitam pekat */
  font-weight: 700;   /* bold tebal */
}
  .check-icon {
    width: 28px;   /* atur ukuran icon checklist */
    height: 28px;
    flex-shrink: 0;
  }

.benefit-item p {
  margin: 0;
  font-size: 18px;
  line-height: 1.6;
  text-align: justify;  /* bikin teks rata kiri-kanan */
}

</style>
<!-- PRICING SECTION -->
<section class="pricing-section py-5">
  <div class="container text-center" data-aos="fade-up">

<!-- Badge Pricing -->
<span class="badge">Pricing</span>

    <!-- Judul -->
    <h2 class="fw-bold mb-3 title-heading">Join to Community</h2>
    <p class="mb-5 pricing-desc">Untuk freshgraduate, freelancer dan jobseeker</p>

    <div class="row justify-content-center g-1">
      
<!-- Pre-launch -->
<div class="col-md-3">
  <div class="card pricing-card border-0 shadow-lg h-100 text-white bg-gradient-blue">
    <div class="card-body d-flex flex-column text-start"> <!-- text-start -->
      <div>
        <h5 class="fw-bold">Pre-launch</h5>
        <p class="text-decoration-line-through small">Rp 99.000</p>
        <h2 class="fw-bold">Rp 49.000</h2>
        <p>Akses semua benefit sekali bayar</p>
      </div>

      <div class="mt-auto">
        <a href="#" class="btn btn-light fw-semibold pilih-btn">Pilih →</a>
        <ul class="list-unstyled mt-3">
          <li class="mb-2"><img src="assets/img/check.png" width="18" class="me-2"> Akses Komunitas</li>
          <li class="mb-2"><img src="assets/img/check.png" width="18" class="me-2"> Exclusive Event</li>
          <li class="mb-2"><img src="assets/img/check.png" width="18" class="me-2"> Grup Support</li>
        </ul>
      </div>
    </div>
  </div>
</div>

      <!-- Normal Price -->
      <div class="col-md-3">
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
  .pricing-card {
  max-width: 280px; /* bisa disesuaikan, misalnya 260–300px */
  margin: 0 auto;   /* biar tetap center di col */
}

  .pilih-btn {
  display: inline-block;
  padding: 12px 50px  ; /* atur ukuran tombol */
  border-radius: 30px; /* biar tetap rounded */
  font-weight: 600;
  font-size: 0.95rem;
  color: #2e6bbc;
}

.pricing-card .card-body {
  padding: 1rem; /* kecilin padding (default biasanya 1.5rem/24px) */
}

.pricing-card h5 {
  font-size: 1rem;
  margin-bottom: 0.25rem;
}

.pricing-card h2 {
  font-size: 1.6rem;
  margin: 0.25rem 0;
}

.pricing-card p {
  margin-bottom: 0.4rem; /* jarak antar paragraf kecil */
  font-size: 0.9rem;
}

.pricing-card ul li {
  font-size: 0.9rem; /* list lebih kecil */
}


.badge {
  display: inline-block;
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
  padding: 14px 32px;
  font-size: 14px;
  font-weight: 600;
  border-radius: 50px; /* bikin bentuk kapsul */
  color: #fff; /* warna teks putih */
  margin-bottom: 20px; /* kasih gap bawah */
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
/* Perbesar ukuran judul dan rapatkan jaraknya */
.pricing-section .title-heading {
  font-size: 3.4rem;      /* Tetap besar */
  font-weight: 700;
  margin-bottom: 4px;     /* Jarak ke subjudul lebih dekat lagi */
  color: #3c678b;
  line-height: 1.1;       /* Supaya teks besar terlihat lebih rapi */
}

/* Subjudul */
.pricing-section .pricing-desc {
  font-size: 1rem;
  margin-top: 0;          /* Pastikan tidak ada jarak atas bawaan */
  margin-bottom: 12px !important; /* Rapatkan ke bawah */
  color: #555;
}


</style>
<!-- COMMUNITY SECTION -->
<section class="community-section py-5 text-center text-white">
  <div class="container" data-aos="fade-up">

    <!-- Judul -->
    <h2 class="fw-bold mb-5 klik-heading-white">Rasanya Gabung Komunitas KLIK Rekrut</h2>

    <!-- Card List -->
    <div class="row g-4 justify-content-center">

      <!-- Card 1 -->
      <div class="col-md-3">
        <div class="card h-100 shadow-lg border-0">
          <img src="assets/img/1.jpg" class="card-img-top" alt="Community">
          <div class="card-body">
            <p class="fw-semibold">Punya temen seperjuangan menghadapi kegagalan rekrutmen</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3">
        <div class="card h-100 shadow-lg border-0">
          <img src="assets/img/2.jpg" class="card-img-top" alt="Live Hiring">
          <div class="card-body">
            <p class="fw-semibold">Bisa interview langsung sama rekruter perusahaan di Live Hiring</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3">
        <div class="card h-100 shadow-lg border-0">
          <img src="assets/img/3.jpg" class="card-img-top" alt="Portofolio">
          <div class="card-body">
            <p class="fw-semibold">Bisa bangun portofolio dari project yang di share member lain</p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-3">
        <div class="card h-100 shadow-lg border-0">
          <img src="assets/img/4.jpg" class="card-img-top" alt="Networking">
          <div class="card-body">
            <p class="fw-semibold">Ngobrol dan Networking bareng member lain dari lintas bidang</p>
          </div>
        </div>
      </div>

    </div>

<!-- CTA Button -->
<div class="mt-5">
  <a href="#" class="btn btn-light px-4 py-2 fw-semibold rounded-pill shadow heartbeat-btn">
    → Gabung Sekarang ←
  </a>
</div>


  </div>
</section>

<!-- CSS -->
<style>
  .klik-heading-white {
  color: #fff;
}

  .community-section {
    background: linear-gradient(135deg, #5DE0E6, #004AAD);
  }

  .community-section h2 {
    font-family: 'Poppins', sans-serif;
  }

.community-section .card {
    padding: 10px;         /* masih bisa diganti sesuai kebutuhan */
    border-radius: 15px;   /* biar tetap rounded */
    overflow: hidden;      /* biar gambar dan isi rapih */
}

.community-section .card-body {
    padding: 10px;         /* kecilkan padding biar compact */
}
.community-section .card-body p {
    margin: 0;             /* hilangkan margin bawaan <p> */
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 600;      /* sama seperti fw-semibold */
}

  .community-section .btn {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
  }
  /* Efek Detak Jantung */
.heartbeat-btn {
  animation: heartbeat 1.3s ease-in-out infinite;
  transform-origin: center; /* titik pusat detak */
  display: inline-block;
}

/* Keyframes untuk efek detak */
@keyframes heartbeat {
  0% {
    transform: scale(1);
  }
  14% {
    transform: scale(1.15);
  }
  28% {
    transform: scale(1);
  }
  42% {
    transform: scale(1.15);
  }
  70% {
    transform: scale(1);
  }
  100% {
    transform: scale(1);
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