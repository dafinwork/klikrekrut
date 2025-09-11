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

<style>
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
    <a href="/" class="logo d-flex align-items-center">
      <img src="assets/img/footer.png" alt="Klikrekrut Logo" class="logo-full" />
    </a>

    <!-- Mobile Toggle -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- Nav Menu -->
<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="/">Services</a></li>
    <li><a href="elearning">E-learning</a></li>
    <li><a href="partner">Apply as partner</a></li>
    <li>
<a href="community"
   class="btn btn-outline wa-btn rounded-pill px-3 py-1 d-flex align-items-center gap-2">
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
                <p class="event-date">JUMAT, 18 APRIL 2025</p>
              </div>
            </div>

            <!-- Kartu 2 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/adam.jpg" class="w-100 rounded-top" alt="Event 2">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE HIRING</h3>
                <p class="event-date">JUMAT, 09 MEI 2025</p>
              </div>
            </div>

            <!-- Kartu 3 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/far.jpg" class="w-100 rounded-top" alt="Event 3">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE CLASS</h3>
                <p class="event-date">KAMIS, 12 JUNI 2025</p>
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
                <p class="event-date">JUMAT, 20 JUNI 2025</p>
              </div>
            </div>

            <!-- Kartu 5 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/adam.jpg" class="w-100 rounded-top" alt="Event 5">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE CLASS</h3>
                <p class="event-date">JUMAT, 25 JULI 2025</p>
              </div>
            </div>

            <!-- Kartu 6 -->
            <div class="col-md-4">
              <div class="event-card bg-white rounded-3 shadow">
                <img src="assets/img/far.jpg" class="w-100 rounded-top" alt="Event 6">
              </div>
              <div class="event-caption mt-2">
                <h3 class="text-white mb-1">LIVE HIRING</h3>
                <p class="event-date">JUMAT, 15 AGUSTUS 2025</p>
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
.event-section {
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
  padding: 60px 20px;
  text-align: center;
  color: white;
  font-family: Arial, sans-serif;
}

/* Judul */
.event-header h2 {
  font-size: 42px;
  font-weight: bold;
  margin-bottom: 5px;
  color: #fff;
}

.event-header p {
  margin-bottom: 40px;
  color: #fff;
}

/* Kartu Event */
.event-card {
  background: white;
  border-radius: 16px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  overflow: hidden;
  cursor: pointer;
  padding-bottom: 12px;
  transition: transform 0.35s ease, box-shadow 0.35s ease;
  position: relative;
  z-index: 1;
}

/* Hapus animasi zoom gambar */
.event-card img {
  width: 100%;
  height: auto;
  display: block;
  transition: none !important; /* Tidak ada zoom */
}

/* Saat diarahkan ke kartu */
.event-card:hover {
  transform: scale(1.12); /* Membesar lebih signifikan */
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
  z-index: 10; /* Supaya kartu berada di atas yang lain */
}

/* Supaya kartu tidak kepotong */
.carousel-inner {
  overflow: visible !important;
}

/* Supaya container punya ruang */
.carousel-item {
  padding: 15px 5px; /* Tambah ruang biar nggak mentok */
}

/* Jika pakai gap antar kartu */
.event-card-container {
  display: flex;
  gap: 20px; /* Cukup ruang antar kartu */
}


/* Caption */
.event-caption {
  margin-top: 12px;
  text-align: center;
}

.event-caption h3 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 4px;
  color: #fff;
}

.event-caption p {
  font-size: 14px;
  opacity: 0.9;
  color: #5de0e6;
}

/* Tombol Navigasi Carousel */
.carousel-control-prev,
.carousel-control-next {
  top: 50%;
  transform: translateY(-50%);
  width: auto;
  height: auto;
}

.carousel-control-prev {
  left: -60px;
}

.carousel-control-next {
  right: -60px;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-size: 30px 30px;
  filter: invert(1);
}
/* Styling untuk tanggal kapsul */
.event-date {
  display: inline-block;
  background: #fff; /* Kapsul putih */
  color: #2E6BBC; /* Warna biru */
  font-family: 'Poppins', sans-serif; /* ✅ Font khusus untuk teks tanggal */
  font-weight: 600;
  font-size: 14px;
  padding: 6px 18px;
  border-radius: 50px; /* Bentuk kapsul */
  border: 1.5px solid #fff; /* Tetap putih biar clean */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Efek bayangan halus */
  transition: all 0.3s ease-in-out;
}

/* Efek hover interaktif */
.event-date:hover {
  background: #ffffffff; /* Biru saat hover */
  color: #fff; /* Teks jadi putih saat hover */
  transform: scale(1.05);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
}
.event-section .event-date {
  color: #2E6BBC !important;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
}

/* Responsif Mobile */
@media (max-width: 768px) {
  /* Judul */
  .event-header h2 {
    font-size: 26px;
  }

  .event-header p {
    font-size: 14px;
    margin-bottom: 25px;
  }

  .event-caption h3 {
    font-size: 22px;
  }

  .event-caption p {
    font-size: 22px;
  }

  .event-section {
    padding: 40px 15px;
  }

  /* Pop-out lebih kecil di mobile */
  .event-card:hover {
    transform: scale(1.07);
  }

  /* ==== POSISI PANAH DI MOBILE ==== */
  .carousel-control-prev,
  .carousel-control-next {
    top: auto;
    bottom: -40px;
    transform: none;
    position: absolute;
  }

  .carousel-control-prev {
    left: 30%;
  }

  .carousel-control-next {
    right: 30%;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-size: 24px 24px;
    padding: 12px;
  }

  /* Ukuran font kapsul tanggal di mobile */
  .event-date {
    font-size: 12px !important;   /* ✅ Pasti mengecil */
    padding: 4px 12px !important; /* ✅ Kapsul lebih ramping */
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }
}

</style>


<!-- BENEFIT MEMBER SECTION -->
<section class="benefit-section py-5" style="background-color: #E9F5FB;">
  <div class="container">

    <!-- Judul -->
    <h2 class="text-center fw-bold mb-5">Member Benefit</h2>

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
/* ===== HEADING ===== */
.benefit-section h2 {
  color: #000;
  font-weight: 700;
}

/* ===== ICON CHECKLIST ===== */
.check-icon {
  width: 28px;
  height: 28px;
  flex-shrink: 0;
}

/* ===== TEKS BENEFIT ===== */
.benefit-item p {
  margin: 0;
  font-size: 18px;
  line-height: 1.6;
  text-align: justify;
}

/* ===== ATUR SPASI UNTUK MOBILE ===== */
@media (max-width: 768px) {
  .benefit-section {
    padding: 40px 18px; /* tambahin ruang kiri-kanan */
  }

  .benefit-item {
    align-items: flex-start; /* biar teksnya rapi di bawah icon */
  }

  .benefit-item p {
    font-size: 16px;  /* sedikit lebih kecil di mobile */
    line-height: 1.7; /* jarak antarbaris lebih lega */
  }

  .check-icon {
    width: 24px; /* perkecil icon supaya proporsional */
    height: 24px;
    margin-top: 3px;
  }
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

    <div class="row justify-content-center">
      
<!-- Pre-launch -->
<div class="col-md-3">
  <div class="prelaunch-wrapper">
    <div class="prelaunch-card">
      <!-- Header Pre-Launch -->
      <div class="prelaunch-header">
        <h5>Pre-Launch</h5>
      </div>

      <!-- Body -->
      <div class="prelaunch-body">
        <div class="prelaunch-original-price">Rp 99.000</div>
        <div class="prelaunch-current-price">Rp 49.000</div>
        <div class="prelaunch-description">Akses semua benefit sekali bayar</div>

        <ul class="prelaunch-benefits">
          <li><div class="prelaunch-check"></div> Masuk Komunitas</li>
          <li><div class="prelaunch-check"></div> Live Class</li>
          <li><div class="prelaunch-check"></div> Grup Support</li>
        </ul>
      </div>
    </div>

    <!-- Tombol di tengah outline -->
    <div class="prelaunch-btn-wrapper">
      <button class="prelaunch-btn">Daftar Sekarang</button>
    </div>
  </div>
</div>

  <!-- Normal Price -->
  <div class="col-md-3">
    <div class="normal-price-card">
      <h5 class="title">Normal Price</h5>
      <h2 class="price">Rp 99.000</h2>
      <button class="coming-soon" disabled>Coming Soon</button>
      <p class="desc">Akses semua benefit sekali bayar</p>
      <ul class="benefits">
<li>Masuk Komunitas</li>
<li>Live Class</li>
<li>Grup Support</li>

      </ul>
    </div>
  </div>

</div>

</section>
<!-- CSS -->
<style>
/* Wrapper untuk efek border gradient */
.prelaunch-wrapper {
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
  padding: 4px;
  border-radius: 0px;
  width: 340px;   /* sebelumnya 280px → dibesarkan */
  margin: 0 auto;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.prelaunch-card {
  border-radius: 0px;
  overflow: hidden;
  background: #fff;
  width: 100%;
  min-height: auto;   /* biar gak kepaksa panjang */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}
.prelaunch-btn-wrapper {
  position: absolute;
  bottom: -20px; /* keluar sedikit dari wrapper */
  left: 50%;
  transform: translateX(-50%);
}

.prelaunch-header {
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
  padding: 16px;
  text-align: center;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.prelaunch-header h5 {
  color: white;
  font-size: 18px;
  font-weight: bold;
  margin: 0;
}

.prelaunch-body {
  padding: 24px 20px;  /* lebih kecil, jadi ringkas */
  text-align: center;
}

.prelaunch-original-price {
  text-decoration: line-through;
  color: #999;
  font-size: 16px;
  margin-bottom: 5px;
}

.prelaunch-current-price {
  font-size: 28px;   /* sedikit lebih kecil */
  font-weight: bold;
  color: #333;
  margin: 8px 0;
}

.prelaunch-description {
  color: #666;
  font-size: 14px;
  margin: 20px 0 30px 0;
  line-height: 1.4;
}

.prelaunch-benefits {
  list-style: none;
  padding: 0;
  margin: 0 0 30px 0;
  text-align: left;
}

.prelaunch-benefits li {
  display: flex;
  align-items: center;
  margin-bottom: 12px;
  color: #333;
  font-size: 14px;
}

/* Prelaunch ceklis */
.prelaunch-check {
  width: 20px;
  height: 20px;
  background: url('assets/img/check.png') no-repeat center center;
  background-size: contain; /* biar pas */
  margin-right: 12px;
  flex-shrink: 0;
}

/* Hilangkan pseudo-element ✓ bawaan */
.prelaunch-check::after {
  content: none;
}
/* Normal price ceklis */
.normal-price-card .benefits li::before {
  content: "";
  display: inline-block;
  width: 20px;
  height: 20px;
  background: url('assets/img/check.png') no-repeat center center;
  background-size: contain;
  margin-right: 8px;
}

.prelaunch-btn {
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
  color: white;
  border: none;
  border-radius: 25px;
  padding: 12px 24px;
  font-size: 14px;
  font-weight: 600;
  width: 220px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.prelaunch-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(93, 224, 230, 0.4);
}
  .pricing-section .row {
  row-gap: 24px; /* jarak vertikal antar card */
  column-gap: 60px; /* jarak horizontal antar card */
}
.normal-price-card {
  background: #f4f4f4;
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 20px;
  text-align: center;
  width: 350px;   /* besarin kartunya */
  font-family: 'Poppins', sans-serif;
  margin: auto;
}


.normal-price-card .title {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 8px;
}

.normal-price-card .price {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 15px;
}

.normal-price-card .coming-soon {
  background: #fff;
  border: 1px solid #000;
  padding: 8px 16px;
  border-radius: 6px;
  font-weight: 600;
  cursor: not-allowed;
  margin-bottom: 15px;
}

.normal-price-card .desc {
  font-size: 14px;
  margin-bottom: 15px;
}

.normal-price-card .benefits {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: left;
}

.normal-price-card .benefits li {
  font-size: 14px;
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 8px;
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
  margin-bottom: 30px !important; /* Rapatkan ke bawah */
  color: #555;
}
@media (max-width: 768px) {
  .pricing-section .row {
    row-gap: 42px; /* lebih lega di mobile */
  }
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
            <li><a href="/">e-Recruitment</a></li>
            <li><a href="elearning">e-Learning</a></li>
          </ul>
        </div>
        <!-- Komunitas -->
        <div class="footer-column">
          <h6>LAINNYA</h6>
          <ul>
            <li><a href="community">Komunitas</a></li>
            <li><a href="partner">Kemitraan</a></li>
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