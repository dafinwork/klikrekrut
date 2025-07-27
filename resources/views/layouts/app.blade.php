<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Klik Rekrut</title>

  <!-- CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

  @include('partials.navbar') {{-- Ini navbar kamu --}}
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
          toggle.classList.add('bi-list');
          toggle.classList.remove('bi-x');
        });
      }
    });
  </script>

</body>
</html>
