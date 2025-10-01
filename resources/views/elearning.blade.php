@extends('layouts.app')

@section('title', 'Klik Rekrut - Belajar Rekrutmen')
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
<a href="https://chat.whatsapp.com/I3mvornLsmv96QiwlcLctQ?mode=ems_copy_t" 
   target="_blank" 
   rel="noopener noreferrer"
   class="btn btn-outline-light wa-btn rounded-pill px-3 py-1 d-flex align-items-center gap-2">
    Join to Talent Community
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
<!-- Tambahkan di layout atau halaman -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<!-- HERO SECTION -->
<section id="hero" class="hero-section">
    <div class="container text-center hero-content">
        <!-- Judul -->
        <h1 class="hero-title">
            Platform Belajar Rekrutmen: <br>
            Satu Skill untuk Pekerja dan Perekrut
        </h1>

        <!-- Tombol -->
        <a href="#materi" class="btn-hero">
            Jelajahi Materi
            <img src="assets/img/panahputih.png" alt="Panah" class="btn-icon">
        </a>
    </div>

    <!-- FITUR -->
    <div class="hero-features">
        <div class="feature-item">
            <img src="assets/img/award.png" alt="Exclusive" class="feature-icon">
            <h5>Exclusive Platform</h5>
            <p>Kami pionir e-learning untuk pembelajaran rekrutmen</p>
        </div>
        <div class="feature-item">
            <img src="assets/img/mic.png" alt="Speakers" class="feature-icon">
            <h5>Top Speakers</h5>
            <p>Dibuat oleh Profesional, Praktisi & Rekruter terkurasi</p>
        </div>
        <div class="feature-item">
            <img src="assets/img/iconorg.png" alt="2in1" class="feature-icon">
            <h5>2 in 1 Function</h5>
            <p>Materi dirancang untuk Jobseeker dan Recruiter</p>
        </div>
    </div>
</section>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
/* ===== HERO SECTION ===== */
.hero-section {
    background: url("assets/img/desktoppx.jpg") center center no-repeat;
    background-size: cover;
    background-position: top;
    background-attachment: scroll;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 80vh;
    display: flex;
    flex-direction: column; 
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-top: 70px; /* sesuaikan tinggi header */
}


/* ===== HERO CONTENT (judul + tombol) ===== */
.hero-content {
    z-index: 2;
    max-width: 800px;
    margin-top: auto;
    margin-bottom: auto;
}

/* Judul */
.hero-title {
  font-weight: 700;
  font-size: 41px;
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

/* Tombol Utama */
.btn-hero {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(90deg, #5DE0E6, #004AAD);
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 26px;
    border: none;
    border-radius: 50px;
    text-decoration: none;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    margin-top: 80px; /* sesuaikan angkanya */
}

.btn-hero .btn-icon {
    width: 14px;
    height: 14px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.btn-hero:hover {
    transform: translateY(-3px) scale(1.03);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.25);
}

.btn-hero:hover .btn-icon {
    transform: translateX(5px);
}

/* ===== HERO FEATURES (pindah ke bawah) ===== */
.hero-features {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 50px;
    position: relative;
    z-index: 2;
    max-width: 1100px;
    margin-bottom: 20px;
}

/* Item Fitur */
.feature-item {
    flex: 1;
    max-width: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;      /* icon + teks rata tengah */
    justify-content: space-between; /* bagi ruang biar rapi */
    text-align: center;
    color: #2e6bbc;
    transition: transform 0.3s ease;
}

.feature-item:hover {
    transform: scale(1.05);
}

/* Icon */
.feature-icon {
    width: 65px;
    height: 65px;
    object-fit: contain;
    margin-bottom: 12px;
}

/* Judul Fitur */
.feature-item h5 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 6px;
    color: #004AAD;
}

/* Deskripsi Fitur */
.feature-item p {
    font-size: 14px;
    color: #333;
    margin: 0;
    line-height: 1.5;
}
/* ===== MOBILE VIEW ===== */
@media (max-width: 768px) {
    /* HERO SECTION */
    .hero-section {
        background: url("assets/img/learningmobile.png") center top no-repeat; /* ✅ Ganti gambar */
        background-size: cover;          /* biar penuh */
        min-height: 60vh;
        padding: 40px 20px;
        margin-top: 60px;
    }

    /* HERO CONTENT */
    .hero-content {
        max-width: 95%;
        margin-top: 100px;
        margin-bottom: 100px;
    }

    /* Judul */
    .hero-title {
        font-size: 28px;
        line-height: 1.3;
    }

    /* Tombol */
    .btn-hero {
        font-size: 14px;
        padding: 10px 20px;
        margin-top: 40px;
    }

    /* HERO FEATURES */
    .hero-features {
        flex-direction: column;
        gap: 30px;
    }

    .feature-item {
        max-width: 90%;
        margin: 0 auto;
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }

    .feature-item h5 {
        font-size: 16px;
    }

    .feature-item p {
        font-size: 13px;
    }
}
</style>

<!-- ================= TESTIMONI SECTION ================= -->
<section class="testimoni-section">
  <div class="container">

    <!-- Judul -->
    <h2 class="section-title">Apa Kata Mereka?</h2>

    <!-- Wrapper Carousel -->
    <div class="testimoni-wrapper">
      
      <!-- Tombol Panah Kiri -->
      <button class="carousel-btn prev" aria-label="Previous">
        <i class="bi bi-chevron-left"></i>
      </button>

      <!-- Track Carousel -->
      <div class="carousel-track">
        
<!-- Card 1 -->
<div class="testimoni-card">
  <p class="testimoni-text">
    "Materinya daging"
  </p>
  <div class="profile-info">
    <h4 class="profile-name">Ela Kamilah</h4>
    <p class="profile-role">Career Switcher</p>
  </div>
</div>


<!-- Card 2 -->
<div class="testimoni-card">
  <p class="testimoni-text">
    "Tips-tipsnya sangat saya perlukan"
  </p>
  <div class="profile-info">
    <h4 class="profile-name">Nurul Firdaus</h4>
    <p class="profile-role">Freshgraduate</p>
  </div>
</div>


<!-- Card 3 -->
<div class="testimoni-card">
  <p class="testimoni-text">
    "Materinya keren!"
  </p>
  <div class="profile-info">
    <h4 class="profile-name">Virda Manik</h4>
    <p class="profile-role">Career Switcher</p>
  </div>
</div>
<!-- Card lainnya sama formatnya -->
        <!-- Card 4 -->
<div class="testimoni-card">
  <p class="testimoni-text">
    "Materi sangat menarik dan memberikan banyak wawasan baru. Penyampaian mudah dipahami"
  </p>
  <div class="profile-info">
    <h4 class="profile-name">Erdiansyah</h4>
    <p class="profile-role">Employee</p>
  </div>
</div>


<!-- Card 2 -->
<div class="testimoni-card">
  <p class="testimoni-text">
    "Terima kasih untuk materi dan ilmunya"
  </p>
  <div class="profile-info">
    <h4 class="profile-name">Riza Surya</h4>
    <p class="profile-role">Career Switcher</p>
  </div>
</div>


<!-- Card 3 -->
<div class="testimoni-card">
  <p class="testimoni-text">
    "Perbanyak lagi materi supaya membantu yang ingin melamar kerja"
  </p>
  <div class="profile-info">
    <h4 class="profile-name">Silvi</h4>
    <p class="profile-role">College Student</p>
  </div>
</div>


      <!-- Tombol Panah Kanan -->
      <button class="carousel-btn next" aria-label="Next">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- ================= CSS ================= -->
<style>
/* Section */
.testimoni-section {
  padding: 20px 80px;
  text-align: center;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #5DE0E6, #004AAD);
}

/* Judul */
.testimoni-section .section-title {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: -15px; /* lebih dekat ke card */
  color: #fff;
}
/* Wrapper Carousel */
.testimoni-wrapper {
  display: flex;
  align-items: center;
  gap: 15px;
  max-width: 1200px;
  margin: auto;
  position: relative;
  margin-top: -30px; /* geser carousel lebih dekat ke judul */
}

/* Tombol Panah */
.carousel-btn {
  background-color: #fff;
  border: none;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  z-index: 10;
  display: none !important;
}

.carousel-btn:hover {
  background-color: #004AAD;
  color: #fff;
}

/* Track Carousel */
.carousel-track {
  display: flex;
  gap: 20px;
  overflow: hidden;
  flex: 1;
  transition: transform 0.5s ease-in-out; /* animasi geser */
}


/* Card Testimoni */
.testimoni-card {
  background: #fff;
  border-radius: 12px;
  padding: 20px;
  flex: 0 0 calc((100% - 40px) / 3);
  min-height: 250px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  text-align: left;
  transition: transform 0.3s ease;
  position: relative;
}

.testimoni-card:hover {
  transform: translateY(-8px);
}

/* Foto Profil */
.profile-img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 10px;
}

/* Nama */
.profile-name {
  font-size: 16px;
  font-weight: 700;
  color: #333;
  margin: 0 0 5px 0;
}

/* Role */
.profile-role {
  font-size: 13px;
  color: #777;
  margin: 0;
}
/* Container untuk Nama & Role */
.profile-info {
  margin-top: auto; /* ✅ Nempel ke bawah */
}
/* Teks Testimoni */
.testimoni-text {
  font-size: 14px;
  color: #555;
  line-height: 1.6;
  margin-bottom: 15px;
}

/* Responsive Tablet - 2 kartu */
@media (max-width: 992px) {
  .testimoni-card {
    flex: 0 0 calc((100% - 20px) / 2);
  }
}

/* Responsive Mobile - 1 kartu */
@media (max-width: 600px) {
  .testimoni-card {
    flex: 0 0 100%;
  }
}

  /* Tampilkan tombol di mobile */
  .carousel-btn {
    display: flex; /* sebelumnya none */
    width: 35px;
    height: 35px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 20;
  }

/* Tombol Panah Kiri & Kanan */
.carousel-btn.prev {
  left: -40px; /* 🔹 Lebih menjauh dari kartu */
}

.carousel-btn.next {
  right: -40px; /* 🔹 Lebih menjauh dari kartu */
}

  .section-title {
    white-space: nowrap;       /* Supaya tidak pecah ke baris baru */
    font-size: 12px;           /* Kecilkan sedikit biar muat */
    text-align: center;        /* Pastikan teks tetap rapi di tengah */
  }
</style>

<!-- ================= JAVASCRIPT ================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const track = document.querySelector(".carousel-track");
  const prevBtn = document.querySelector(".carousel-btn.prev");
  const nextBtn = document.querySelector(".carousel-btn.next");
  const cards = document.querySelectorAll(".testimoni-card");

  let currentIndex = 0;
  let cardsPerPage = getCardsPerPage();
  const totalCards = cards.length;

  function getCardsPerPage() {
    if (window.innerWidth <= 600) return 1;   // Mobile
    if (window.innerWidth <= 992) return 2;   // Tablet
    return 3;                                // Desktop
  }

  function updateCarousel() {
    const cardWidth = cards[0].offsetWidth + 20; // jarak antar kartu
    track.scrollTo({
      left: currentIndex * cardWidth,
      behavior: "smooth"
    });
  }

  nextBtn.addEventListener("click", () => {
    if (currentIndex < totalCards - cardsPerPage) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  });

  prevBtn.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalCards - cardsPerPage;
    }
    updateCarousel();
  });

  // === Swipe Support untuk Mobile ===
  let startX = 0;
  let endX = 0;
  let isDragging = false;

  track.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
    isDragging = true;
  });

  track.addEventListener("touchmove", (e) => {
    if (!isDragging) return;
    endX = e.touches[0].clientX;
  });

  track.addEventListener("touchend", () => {
    if (!isDragging) return;
    isDragging = false;

    let diff = startX - endX;

    if (Math.abs(diff) > 50) { // Threshold minimal 50px
      if (diff > 0) {
        // Geser kiri → ke kartu berikutnya
        if (currentIndex < totalCards - cardsPerPage) {
          currentIndex++;
        }
      } else {
        // Geser kanan → ke kartu sebelumnya
        if (currentIndex > 0) {
          currentIndex--;
        }
      }
      updateCarousel();
    }
  });

  // Auto-slide setiap 3 detik
  let autoSlide = setInterval(() => {
    nextBtn.click();
  }, 3000);

  // Hentikan auto-slide saat disentuh (biar lebih natural)
  track.addEventListener("touchstart", () => {
    clearInterval(autoSlide);
  });

  // Jalanin ulang auto-slide setelah 5 detik
  track.addEventListener("touchend", () => {
    autoSlide = setInterval(() => {
      nextBtn.click();
    }, 3000);
  });

  window.addEventListener("resize", () => {
    cardsPerPage = getCardsPerPage();
    updateCarousel();
  });
});

</script>


<!-- Client & Talent Section -->
<section class="client-section">
  <div class="container">
    <h2 class="koleksi-title">KOLEKSI MATERI TERBARU</h2>

    <!-- Tab Buttons -->
    <div class="tab-buttons">
      <button class="tab active" data-target="clients">For Jobseekers</button>
      <button class="tab" data-target="talents">For Recruiters</button>
    </div>

    <!-- ====== TAB CONTENT JOBSEEKER ====== -->
    <div id="clients" class="tab-content active">
      <div class="card-container">
        <!-- Card 1 -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/andi.jpg" alt="Bang Andi" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/far.jpg" alt="Kak Faridah" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/adam.jpg" alt="Mas Adam" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ====== TAB CONTENT RECRUITER ====== -->
    <div id="talents" class="tab-content">
      <div class="card-container">
        <!-- Card 1 -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/andi.jpg" alt="Bang Andi" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/far.jpg" alt="Kak Faridah" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="materi-wrapper">
          <div class="materi-card">
            <img src="assets/img/adam.jpg" alt="Mas Adam" class="materi-img">
          </div>
          <div class="button-group">
            <button class="preview-btn">PREVIEW <br> MATERI</button>
            <button class="buy-btn">BUY NOW <br> RP 19.000</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STYLE -->
<style>
/* ===== KOLEKSI TITLE ===== */
.koleksi-title {
  font-size: 48px;
  font-weight: 700;
  color: #3c678b;
  text-align: center;
  margin-bottom: 10px;
  margin-top: 10px;
  letter-spacing: 0.5px;
}

/* ===== TAB BUTTONS ===== */
.tab-buttons {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-bottom: 40px;
  margin-top: 50px;
  flex-wrap: wrap;
}
.tab {
  padding: 10px 22px;
  border: none;
  border-radius: 8px;
  background: #f0f0f0;
  color: #333;
  cursor: pointer;
  font-weight: 600;
  font-size: 16px;
  transition: all 0.3s ease;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.tab:hover {
  background: #e0e0e0;
}
.tab.active {
  background: linear-gradient(90deg, #5DE0E6, #004AAD);
  color: #fff;
  box-shadow: 0 4px 10px rgba(93, 224, 230, 0.3);
  transform: scale(1.05);
}

/* ===== TAB CONTENT ===== */
.tab-content {
  display: none;
  margin-top: 25px;
}
.tab-content.active {
  display: block;
}

/* ===== CARD CONTAINER ===== */
.card-container {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
  margin-top: 20px;
}

/* ===== WRAPPER PER CARD ===== */
.materi-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 400px; /* 🔹 Dibuat sama kayak card poster community */
}

/* ===== MATERI CARD ===== */
.materi-card {
  width: 100%;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  padding: 0; /* 🔹 Hapus padding */
  text-align: center;
  transition: transform 0.35s ease, box-shadow 0.35s ease;
  cursor: pointer;
  position: relative;
  z-index: 1;
  border: 3px solid #5573a0ff;
  box-shadow: 0 0 8px rgba(0, 74, 173, 0.3); /* Efek glow biru */
}

.materi-card:hover {
  transform: scale(1.12); /* 🔹 Efek pop-out sama dengan poster community */
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
  z-index: 10;
}

/* ===== GAMBAR ===== */
.materi-img {
  width: 100%;
  border-radius: 12px;
  margin-bottom: 0;
}

/* ===== BUTTON GROUP (DI BAWAH CARD) ===== */
.button-group {
  display: flex;
  justify-content: center;
  gap: 12px;
  margin-top: 12px;
}

/* ===== BUTTON STYLING ===== */
.preview-btn,
.buy-btn {
  padding: 10px 16px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  font-size: 14px;
  transition: all 0.3s ease;
}

/* Preview Materi */
.preview-btn {
  background-color: #f0f0f0;
  color: #333;
}
.preview-btn:hover {
  background-color: #e0e0e0;
}

/* Buy Now */
.buy-btn {
  background-color: #333;
  color: #fff;
}
.buy-btn:hover {
  background-color: #004AAD;
}

/* ===== RESPONSIVE UNTUK MOBILE ===== */
@media (max-width: 768px) {
  .card-container {
    flex-direction: column;
    align-items: center;
  }

  /* 🔹 Kurangi ukuran pop-out di mobile agar tidak kepotong */
  .materi-card:hover {
    transform: scale(1.07);
  }

  /* 🔹 Atur ulang lebar kartu di mobile */
  .materi-wrapper {
    width: 90%;
  }
}

</style>

<!-- SCRIPT -->
<script>
  const tabs = document.querySelectorAll(".tab");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // hapus active dari semua tab
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      // tambahkan active hanya ke yang diklik
      tab.classList.add("active");
      document.getElementById(tab.dataset.target).classList.add("active");
    });
  });
</script>
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
            <li>
  <a href="https://chat.whatsapp.com/I3mvornLsmv96QiwlcLctQ?mode=ems_copy_t" 
     target="_blank" 
     rel="noopener noreferrer">
    Komunitas
  </a>
</li>

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