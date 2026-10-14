<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>@yield('title', 'Snüb Foods — Snub the Junk. Eat Real.')</title>
  <meta name="description" content="@yield('meta_description', 'Texas-made. Woman-led. Clean-label snacks for real people. Real roots, bold crunch, zero junk.')">
  
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('images/logo.jpeg') }}" type="image/jpeg">
  
  <!-- Global Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  
  @stack('styles')
</head>
<body>

  <!-- Top Announcement Bar -->
  @include('partials.announcement')

  <!-- Global Header Navigation -->
  @include('partials.header')

  <!-- Main Page Content -->
  <main id="main-content">
    @yield('content')
  </main>

  <!-- Global Footer -->
  @include('partials.footer')

  <!-- Slide-Over Shopping Cart & Toast -->
  @include('partials.cart-drawer')

  <!-- Global Cart Controller JS -->
  <script src="{{ asset('assets/js/cart.js') }}"></script>

  @stack('scripts')
</body>
</html>
