<!-- Sticky Glass Header -->
<header class="site-header">
  <div class="header-container">
    <nav class="header-nav" aria-label="Main Navigation Left">
      <a class="nav-link {{ request()->routeIs('mission') ? 'active' : '' }}" href="{{ route('mission') }}">Our Mission</a>
      <a class="nav-link {{ request()->routeIs('story') ? 'active' : '' }}" href="{{ route('story') }}">Our Story</a>
    </nav>

    <a class="brand-logo-wrap" href="{{ route('home') }}" aria-label="SNÜB Foods Home">
      <img class="brand-logo-img" src="{{ asset('images/snub-logo.png') }}" alt="SNÜB - Snub the Junk. Eat Real.">
    </a>

    <div class="header-right">
      <nav class="header-nav" aria-label="Main Navigation Right">
        <a class="nav-link {{ request()->routeIs('gut-health') ? 'active' : '' }}" href="{{ route('gut-health') }}">Why Gut Health Matters</a>
        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
      </nav>

      <!-- Cart Icon Button with Live Counter Badge -->
      <button class="cart-icon-btn" id="open-cart-btn" aria-label="Open Shopping Cart">
        <svg class="cart-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="9" cy="21" r="1"></circle>
          <circle cx="20" cy="21" r="1"></circle>
          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
        </svg>
        <span class="cart-badge" id="header-cart-count">0</span>
      </button>

      <!-- Shop Button (Translucent chip matching reference) -->
      <a class="shop-btn" href="{{ route('home') }}#shop">Shop</a>
    </div>
  </div>
</header>
