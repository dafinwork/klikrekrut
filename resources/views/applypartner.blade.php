@extends('layouts.app')

@section('title', 'Klik Rekrut - Kemitraan')
@section('description', 'Temukan pekerjaan impianmu di Klik Rekrut')
@section('keywords', 'find job, lowongan kerja, klik rekrut')

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
    <li><a href="applypartner">Apply as partner</a></li>
    <li>
<a href="community"
   class="btn btn-outline wa-btn rounded-pill px-3 py-1 d-flex align-items-center gap-2"
   id="joinBtn">
    Join to Talent Community ➝
</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<!-- Overlay untuk mobile -->
 <script>
  document.addEventListener("DOMContentLoaded", function () {
    const joinBtn = document.getElementById("joinBtn");
    joinBtn.addEventListener("click", function (e) {
      // Tambahkan kelas loading
      this.classList.add("loading");

      // Optional: kalau mau otomatis balik normal setelah 3 detik
      // setTimeout(() => {
      //   this.classList.remove("loading");
      // }, 3000);
    });
  });
</script>

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

<!-- ==================== HERO PARTNER SECTION ==================== -->
<section class="hero-partner">
  <div class="container hero-content" data-aos="fade-up">

    <!-- Judul -->
    <h1 class="hero-title">
Let's Become Our Partner!
    </h1>

<!-- Partner Cards -->
<div class="partner-cards">

  <!-- Recruiter -->
  <div class="partner-card" data-aos="fade-up" data-aos-delay="100">
    <h3 class="card-title">Recruiter</h3>
    <div class="card-divider"></div>
    <p class="card-desc">
      <strong>Kamu bertugas memproses permintaan talenta dari klien melalui sistem manajemen rekrutmen kami.</strong><br><br>
      Kamu akan ikut mendukung misi kami untuk menempatkan talenta terbaik di tempat yang tepat.
    </p>
    <a href="#" class="btn-apply">Apply here →</a>
  </div>

  <!-- Sales -->
  <div class="partner-card" data-aos="fade-up" data-aos-delay="200">
    <h3 class="card-title">Sales</h3>
    <div class="card-divider"></div>
    <p class="card-desc">
      <strong>Kamu bertugas mencari perusahaan yang lagi butuh kandidat terbaik.</strong><br><br>
      Kamu akan ikut mendukung misi kami memberikan akses talenta terampil untuk bisnis di Indonesia.
    </p>
    <a href="#" class="btn-apply">Apply here →</a>
  </div>

  <!-- Affiliate -->
  <div class="partner-card" data-aos="fade-up" data-aos-delay="300">
    <h3 class="card-title">Affiliate</h3>
    <div class="card-divider"></div>
    <p class="card-desc">
      <strong>Kamu bertugas merekomendasikan pembelajaran rekrutmen kami ke recruiter dan jobseeker.</strong><br><br>
      Kamu akan ikut mendukung misi kami untuk membantu mereka lebih jago cari pekerja dan cari kerja.
    </p>
    <a href="#" class="btn-apply">Apply here →</a>
  </div>

</div>
<!-- Tombol WhatsApp -->
<div class="whatsapp-button" data-aos="fade-up" data-aos-delay="400">
  <a href="https://wa.me/6281234567890" target="_blank">
    <img src="assets/img/wa.png" alt="WhatsApp">
    Punya pertanyaan seputar kemitraan?
  </a>
</div>
</section>

<!-- ==================== CSS HERO PARTNER ==================== -->
<style>
/* Hero Wrapper */
.hero-partner {
    background: url("assets/img/partner.jpg") center center no-repeat;
    background-size: cover;
    background-position: center top;
    background-attachment: scroll;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 80vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: 50px; /* sesuaikan tinggi header */
    padding-top: 150px; /* kasih jarak pasti dari atas */
    position: relative;
    overflow: hidden;
    }
.hero-title {
  font-weight: 700;
  font-size: 4rem;
  line-height: 1.4;
  color: #2e6bbc;  
  margin-top: 40px; /* ✨ Tambahin jarak dari atas */
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
.hero-title span {
  color: #5DE0E6;
}

/* Partner Cards */
/* Container Cards */
/* Partner Cards Container */
.partner-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 25px;
  margin-top: 100px;
  max-width: 1100px;   /* ✨ kasih batas */
  margin-left: auto;
  margin-right: auto;  /* biar center */
}


/* Partner Card */
.partner-card {
  background: #fff;
  padding: 25px 20px;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;

  /* Border tipis di dalam */
  border: 1.5px solid #ddd;

  /* Outline hitam */
  outline: 2px solid #000;

  /* Supaya tombol Apply rata di bawah */
  display: flex;
  flex-direction: column;
  justify-content: space-between;

  transition: all 0.3s ease;
}

.partner-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  outline: 2px solid #000;
}

/* Judul */
.card-title {
  font-size: 22px;
  font-weight: 700;
  color: #1c64f2;
  margin-bottom: 12px;
}

/* Divider */
.card-divider {
  width: 100%;
  height: 3px;
  background-color: #000;
  margin-bottom: 15px;
  border-radius: 5px;
}

/* Deskripsi */
.card-desc {
  font-size: 14px;
  color: #333;
  line-height: 1.6;
  margin-bottom: 25px;
  text-align: center; /* Supaya teks lebih rapi */
}

/* Tombol Apply */
.btn-apply {
  display: inline-block;
  background: linear-gradient(90deg, #5DE0E6, #004AAD);
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  padding: 12px 28px;
  border-radius: 25px;
  text-decoration: none;
  transition: all 0.3s ease;

  /* Supaya semua tombol ukurannya sama dan sejajar */
  align-self: center;
  min-width: 140px;
  text-align: center;
}

.btn-apply:hover {
  opacity: 0.9;
  transform: scale(1.05);
}
/* Tombol WhatsApp */
.whatsapp-button {
  margin-top: 30px;
  display: flex;
  justify-content: center;
}

.whatsapp-button a {
  display: flex;
  align-items: center;
  gap: 10px;
  background-color: #25D366;
  color: white;
  font-size: 16px;
  font-weight: 600;
  padding: 12px 24px;
  border-radius: 50px;
  text-decoration: none;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  transition: all 0.3s ease;
}

.whatsapp-button a:hover {
  background-color: #1ebe5d;
  transform: scale(1.05);
}

.whatsapp-button img {
  width: 28px;
  height: 28px;
}
@media (max-width: 768px) {
  .hero-partner {
    background: url("assets/img/applymobile.png") center center no-repeat;
    background-size: cover;
    background-position: center top;
    background-attachment: scroll;
    background-repeat: no-repeat;
  }

  .hero-title {
    font-size: 36px;
    margin-top: 40px; /* ✨ Tambahin jarak dari atas */
  }

.hero-content {
  max-width: 1200px;   /* batas lebar */
  margin: 0 auto;      /* biar center */
  padding: 0 20px;     /* biar ada ruang kanan kiri */
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
  <p><strong>Klik Rekrut</strong> hadir sebagai solusi rekrutmen yang ergonomis untuk mendapatkan talenta Siap Kerja.</p>
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