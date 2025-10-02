<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Open Graph Tags -->
  <meta property="og:title" content="Klik Rekrut">
  <meta property="og:description" content="Platform assisten rekrutmen">
  <meta property="og:image" content="https://klikrekrut.com/assets/img/square.png">
  <meta property="og:url" content="https://klikrekrut.com">
  <meta property="og:type" content="website">

  <!-- Untuk Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Klik Rekrut">
  <meta name="twitter:description" content="Platform assisten rekrutmen">
  <meta name="twitter:image" content="https://klikrekrut.com/assets/img/square.png">

  <!-- Meta Utama -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title & Meta -->
  <title>@yield('title', 'Klik Rekrut')</title>
  <meta name="description" content="@yield('description', 'Platform assisten rekrutmen')">
  <meta name="keywords" content="@yield('keywords', 'job, career, klik rekrut')">

  <!-- Favicons -->
  <link rel="icon" href="https://klikrekrut.com/assets/img/square.png" type="image/png" sizes="32x32">
  <link rel="icon" href="https://klikrekrut.com/assets/img/square.png" type="image/png" sizes="192x192">
  <link rel="apple-touch-icon" href="https://klikrekrut.com/assets/img/apple-touch-icon.png" sizes="180x180">
  <link rel="shortcut icon" href="https://klikrekrut.com/assets/img/square.png">

  <!-- Structured Data (Organization) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Klik Rekrut",
    "url": "https://klikrekrut.com",
    "logo": "https://klikrekrut.com/assets/img/square.png",
    "sameAs": [
      "https://www.facebook.com/klikrekrut",
      "https://www.instagram.com/klikrekrut",
      "https://www.linkedin.com/company/klikrekrut"
    ]
  }
  </script>

  <!-- CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

  @include('partials.navbar') {{-- Navbar global --}}
  @yield('content')

  <!-- JS -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Burger Menu Script -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toggle = document.querySelector('.mobile-nav-toggle');
      const nav = document.querySelector('.navmenu');
      const overlay = document.querySelector('#nav-overlay');

      if (toggle && nav && overlay) {
        toggle.addEventListener('click', function () {
          nav.classList.toggle('active');
          overlay.classList.toggle('active');
          toggle.classList.toggle('bi-x');
          toggle.classList.toggle('bi-list');
        });

        overlay.addEventListener('click', function () {
          nav.classList.remove('active');
          overlay.classList.remove('active');
          toggle.classList.remove('bi-x');
          toggle.classList.add('bi-list');
        });
      }
    });
  </script>
</body>
</html>
