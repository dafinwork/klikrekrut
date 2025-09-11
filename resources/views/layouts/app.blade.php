<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title & Meta -->
  <title>@yield('title', 'Klik Rekrut')</title>
  <meta name="description" content="@yield('description', 'Platform pencarian kerja dan komunitas talenta')">
  <meta name="keywords" content="@yield('keywords', 'job, career, klik rekrut')">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('assets/img/square.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

  <!-- CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- Bootstrap Icons (CDN, 1x aja cukup) -->
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

        overlay.addEven
