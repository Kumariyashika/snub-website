<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Explore Our Fermentation Process — Snüb Foods | Real Food. Naturally Transformed.</title>
  <meta name="description" content="Discover our authentic 5-step natural fermentation process. Handcrafted in Texas using sea salt, time, and living cultures — zero powders.">
  <link rel="icon" href="{{ asset('images/logo.jpeg') }}" type="image/jpeg">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>

  <!-- Top Announcement Bar -->
  <div class="announcement-bar">
    <div class="announcement-marquee">
      <div class="announcement-track">
        <span>🚚 Unlock FREE SHIPPING on $50+ orders 🚛💨</span>
        <span class="announcement-dot">●</span>
        <span>🌱 GLUTEN-FREE • VEGAN • CLEAN FOODS</span>
        <span class="announcement-dot">●</span>
        <span>🤠 MADE REAL IN TEXAS • WOMAN-LED</span>
        <span class="announcement-dot">●</span>
        <span>🚫 ZERO JUNK • WHOLE ROOTS ONLY</span>
      </div>
      <div class="announcement-track">
        <span>🚚 Unlock FREE SHIPPING on $50+ orders 🚛💨</span>
        <span class="announcement-dot">●</span>
        <span>🌱 GLUTEN-FREE • VEGAN • CLEAN FOODS</span>
        <span class="announcement-dot">●</span>
        <span>🤠 MADE REAL IN TEXAS • WOMAN-LED</span>
        <span class="announcement-dot">●</span>
        <span>🚫 ZERO JUNK • WHOLE ROOTS ONLY</span>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="site-header">
    <div class="header-container">
      <nav class="header-nav">
        <a class="nav-link" href="{{ route('home') }}#shop">Shop Snacks</a>
        <a class="nav-link" href="{{ route('mission') }}">Our Mission</a>
        <a class="nav-link" href="{{ route('story') }}">Our Story</a>
      </nav>

      <a class="brand-logo-wrap" href="{{ route('home') }}" aria-label="SNÜB Foods Home">
        <img class="brand-logo-img" src="{{ asset('images/snub-logo.png') }}" alt="SNÜB - Snub the Junk. Eat Real.">
      </a>

      <div class="header-right">
        <nav class="header-nav">
          <a class="nav-link" href="{{ route('gut-health') }}">Why Gut Health</a>
          <a class="nav-link" href="{{ route('fermentation') }}" style="color:#ffd166; font-weight:800;">Fermentation</a>
          <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
        </nav>

        <button class="cart-btn" id="open-cart-btn" aria-label="Open Shopping Cart">
          <span class="cart-icon">🛒</span>
          <span>Cart</span>
          <span class="cart-badge" id="header-cart-count">0</span>
        </button>

        <a class="shop-pill-btn" href="{{ route('home') }}#shop">Shop Now</a>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="inner-page-hero">
    <div class="inner-page-hero-container">
      <span class="inner-page-pill">🥬 Artisanal Texas Fermenting</span>
      <h1 class="inner-page-title">Explore Our Fermentation Process</h1>
      <p class="inner-page-subtitle">
        Real Food. Naturally Transformed. No powders, no shortcuts — just ancient bio-fermentation honoring whole vegetables.
      </p>
      <div class="inner-page-badges">
        <span class="inner-page-badge">⏳ 5-10 Day Ferment</span>
        <span class="inner-page-badge">🧂 Pure Sea Salt + Water</span>
        <span class="inner-page-badge">❄️ Cold-Chilled Freshness</span>
      </div>
    </div>
  </section>

  <!-- Content Section -->
  <main class="inner-content-section">
    <div class="inner-container">

      <!-- What is Fermentation Section -->
      <div style="background: #ffffff; border-radius: var(--radius-xl); padding: 50px 40px; box-shadow: var(--shadow-sm); border: 1.5px solid var(--color-card-border); margin-bottom: 60px;">
        <span class="section-pill-badge" style="margin-bottom: 14px;">Nature's Kitchen</span>
        <h2 style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--color-primary-dark); margin-bottom: 20px;">
          🥬 What Is Fermentation?
        </h2>
        <p style="font-size: 1.15rem; color: #4b5563; line-height: 1.8; margin-bottom: 24px;">
          Fermentation is a natural process where beneficial bacteria (like <em>Lactobacillus</em>) break down natural sugars in vegetables. This creates a signature tangy flavor and, more importantly, powerful bio-active compounds:
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; margin-bottom: 28px;">
          <div style="background: #ecfdf5; border: 1.5px solid #a7f3d0; padding: 24px; border-radius: var(--radius-md);">
            <strong style="color: #065f46; font-size: 1.15rem; display: block; margin-bottom: 8px;">Living Probiotics</strong>
            <p style="color: #047857; font-size: 0.95rem; margin: 0;">Trillions of active beneficial organisms that enrich your intestinal flora.</p>
          </div>
          <div style="background: #eff6ff; border: 1.5px solid #bfdbfe; padding: 24px; border-radius: var(--radius-md);">
            <strong style="color: #1e40af; font-size: 1.15rem; display: block; margin-bottom: 8px;">Organic Acids</strong>
            <p style="color: #1d4ed8; font-size: 0.95rem; margin: 0;">Natural lactic and acetic acids that balance gut pH and assist digestion.</p>
          </div>
          <div style="background: #faf5ff; border: 1.5px solid #e9d5ff; padding: 24px; border-radius: var(--radius-md);">
            <strong style="color: #6b21a8; font-size: 1.15rem; display: block; margin-bottom: 8px;">Bioactive Enzymes</strong>
            <p style="color: #7e22ce; font-size: 0.95rem; margin: 0;">Potent natural antioxidants that reduce systemic inflammation.</p>
          </div>
        </div>

        <p style="font-size: 1.15rem; font-weight: 700; color: var(--color-primary);">
          At Snüb, we use this age-old method — not powders or pills — to create snacks that genuinely work.
        </p>
      </div>

      <!-- 5-Step Process Section -->
      <div style="margin-bottom: 70px;">
        <div style="text-align: center; margin-bottom: 40px;">
          <span class="section-pill-badge">Step-by-Step</span>
          <h2 style="font-family: var(--font-display); font-size: 2.2rem; font-weight: 900; color: var(--color-primary-dark);">
            Our 5-Step Fermentation Process
          </h2>
          <p style="font-size: 1.1rem; color: #6b7280;">From Texas farm harvest to living, cold-chilled crunch.</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 24px; max-width: 880px; margin: 0 auto;">
          <div style="background: #ffffff; border: 1.5px solid var(--color-card-border); border-radius: var(--radius-lg); padding: 32px 36px; display: flex; align-items: flex-start; gap: 24px; box-shadow: var(--shadow-sm);">
            <div class="step-number-badge" style="margin: 0; flex-shrink: 0;">01</div>
            <div>
              <h3 style="font-family: var(--font-display); font-size: 1.4rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 8px;">Harvest Whole Veggies</h3>
              <p style="color: #4b5563; font-size: 1.05rem; line-height: 1.6; margin: 0;">We partner with Texas growers for fresh, clean carrots, cabbage, garlic &amp; fresh herbs harvested at peak crispness.</p>
            </div>
          </div>

          <div style="background: #ffffff; border: 1.5px solid var(--color-card-border); border-radius: var(--radius-lg); padding: 32px 36px; display: flex; align-items: flex-start; gap: 24px; box-shadow: var(--shadow-sm);">
            <div class="step-number-badge" style="margin: 0; flex-shrink: 0; background:#fef3c7; color:#b45309;">02</div>
            <div>
              <h3 style="font-family: var(--font-display); font-size: 1.4rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 8px;">Simple Prep</h3>
              <p style="color: #4b5563; font-size: 1.05rem; line-height: 1.6; margin: 0;">Hand-washed, shredded and sliced in small kitchen batches. No sugar. No chemical preservatives. No fake stuff.</p>
            </div>
          </div>

          <div style="background: #ffffff; border: 1.5px solid var(--color-card-border); border-radius: var(--radius-lg); padding: 32px 36px; display: flex; align-items: flex-start; gap: 24px; box-shadow: var(--shadow-sm);">
            <div class="step-number-badge" style="margin: 0; flex-shrink: 0; background:#eff6ff; color:#1d4ed8;">03</div>
            <div>
              <h3 style="font-family: var(--font-display); font-size: 1.4rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 8px;">Salt, Brine &amp; Time</h3>
              <p style="color: #4b5563; font-size: 1.05rem; line-height: 1.6; margin: 0;">Veggies are packed with mineral-rich sea salt and filtered Texas water, sealed in airtight fermentation crocks.</p>
            </div>
          </div>

          <div style="background: #ffffff; border: 1.5px solid var(--color-card-border); border-radius: var(--radius-lg); padding: 32px 36px; display: flex; align-items: flex-start; gap: 24px; box-shadow: var(--shadow-sm);">
            <div class="step-number-badge" style="margin: 0; flex-shrink: 0; background:#f0fdf4; color:#15803d;">04</div>
            <div>
              <h3 style="font-family: var(--font-display); font-size: 1.4rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 8px;">Let It Ferment</h3>
              <p style="color: #4b5563; font-size: 1.05rem; line-height: 1.6; margin: 0;">We give the good bacteria 5–10 days to work their magic at controlled temperatures until the flavor and probiotic count are peak.</p>
            </div>
          </div>

          <div style="background: #ffffff; border: 1.5px solid var(--color-card-border); border-radius: var(--radius-lg); padding: 32px 36px; display: flex; align-items: flex-start; gap: 24px; box-shadow: var(--shadow-sm);">
            <div class="step-number-badge" style="margin: 0; flex-shrink: 0; background:#fff1f2; color:#be123c;">05</div>
            <div>
              <h3 style="font-family: var(--font-display); font-size: 1.4rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 8px;">Pouch It &amp; Chill</h3>
              <p style="color: #4b5563; font-size: 1.05rem; line-height: 1.6; margin: 0;">We pack it fresh into grab-and-go pouches, refrigerate it immediately, and keep those living cultures thriving until you pop the seal.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Why This Matters Callout -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 36px; margin-bottom: 60px;">
        <div style="background: #ffffff; border-radius: var(--radius-lg); padding: 40px; box-shadow: var(--shadow-sm); border: 1.5px solid var(--color-card-border);">
          <span class="section-pill-badge" style="margin-bottom: 14px;">The Biological Difference</span>
          <h3 style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 16px;">
            Why This Matters
          </h3>
          <p style="font-size: 1.1rem; color: #4b5563; line-height: 1.8;">
            Unlike shelf-stable commercial snacks heated to high temperatures that kill all microbial life, our refrigerated fermented veggies keep their <strong>live probiotics active and flourishing</strong> — supporting your gut with every crunchy bite.
          </p>
        </div>

        <div style="background: #ffffff; border-radius: var(--radius-lg); padding: 40px; box-shadow: var(--shadow-sm); border: 1.5px solid var(--color-card-border);">
          <span class="section-pill-badge" style="margin-bottom: 14px;">What You Get in Every Pouch</span>
          <h3 style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 16px;">
            What You Get
          </h3>
          <ul style="list-style: none; display: flex; flex-direction: column; gap: 14px;">
            <li style="display: flex; align-items: center; gap: 12px; font-weight: 700; color: #1e293b;">
              <span style="color: #16a34a; font-size: 1.2rem;">✔</span> Naturally preserved fresh veggies
            </li>
            <li style="display: flex; align-items: center; gap: 12px; font-weight: 700; color: #1e293b;">
              <span style="color: #16a34a; font-size: 1.2rem;">✔</span> Real live probiotics — never powders
            </li>
            <li style="display: flex; align-items: center; gap: 12px; font-weight: 700; color: #1e293b;">
              <span style="color: #16a34a; font-size: 1.2rem;">✔</span> Big flavor, bold crunch, addictive texture
            </li>
            <li style="display: flex; align-items: center; gap: 12px; font-weight: 700; color: #1e293b;">
              <span style="color: #16a34a; font-size: 1.2rem;">✔</span> Clean, craveable everyday gut food
            </li>
          </ul>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="footer-container">
      <img class="brand-footer-logo" src="{{ asset('images/snub-logo.png') }}" alt="SNÜB Foods">

      <nav class="footer-links">
        <a href="{{ route('home') }}#shop">Shop All</a>
        <a href="{{ route('mission') }}">Our Mission</a>
        <a href="{{ route('story') }}">Our Story</a>
        <a href="{{ route('gut-health') }}">Why Gut Health</a>
        <a href="{{ route('fermentation') }}">Fermentation Process</a>
        <a href="{{ route('contact') }}">Contact Us</a>
      </nav>

      <div class="footer-tagline">
        Proudly Made in Texas • Woman-Owned • Whole Roots • Gut-First
      </div>

      <div class="footer-socials">
        <a class="social-circle" href="https://www.facebook.com/profile.php?id=61578112284688" target="_blank" aria-label="Facebook">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H7v-3h3V9.5C10 6.46 11.82 5 14.54 5c1.3 0 2.68.23 2.68.23v2.95h-1.51c-1.5 0-1.96.93-1.96 1.89V12h3.32l-.53 3h-2.79v6.8c4.56-.93 8-4.96 8-9.8z"/></svg>
        </a>
        <a class="social-circle" href="https://www.instagram.com/snubfoods/" target="_blank" aria-label="Instagram">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
        <a class="social-circle" href="https://www.tiktok.com/@snubfoods" target="_blank" aria-label="TikTok">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.97-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.16 1.18 2.09 2.35 2.29.9.17 1.85-.05 2.56-.63.76-.6 1.18-1.53 1.18-2.5V.02z"/></svg>
        </a>
      </div>

      <div class="footer-handle">@snubfoods • Austin, Texas</div>
    </div>
  </footer>

  <div class="bottom-copyright-bar">
    © 2025 Snüb Foods. All Rights Reserved. Snub the Junk™ is an independent food brand.
  </div>

  <script>
    let cart = JSON.parse(localStorage.getItem('snub_cart') || '[]');
    const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
    const badge = document.getElementById('header-cart-count');
    if (badge) badge.textContent = totalItems;
    document.getElementById('open-cart-btn')?.addEventListener('click', () => {
      window.location.href = "{{ route('home') }}#shop";
    });
  </script>
</body>
</html>
