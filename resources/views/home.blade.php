@extends('layouts.app')

@section('title', 'Snüb Foods | Real Roots. Bold Crunch. Zero Junk.')
@section('meta_description', 'Snub the junk! Delicious, gut-friendly snacks crafted from real whole Texas roots. Gluten-free, vegan, and air-fryer ready.')

@section('content')
  <!-- Marquee Ribbon -->
  <div style="background: #2a033d; color: #ffd166; padding: 12px 0; overflow: hidden; white-space: nowrap; font-family: var(--font-display); font-weight: 800; font-size: 0.9rem; letter-spacing: 1.5px; border-bottom: 1px solid rgba(255,209,102,0.2);">
    <div style="display: inline-block; animation: marqueeScroll 25s linear infinite;">
      <span>GLUTEN-FREE</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>VEGAN</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>CLEAN FOOD</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>MADE REAL IN TEXAS</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>WOMAN-LED</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>ZERO JUNK</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>WHOLE ROOTS ONLY</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>FREE SHIPPING OVER $50</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
    </div>
    <div style="display: inline-block; animation: marqueeScroll 25s linear infinite;">
      <span>GLUTEN-FREE</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>VEGAN</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>CLEAN FOOD</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>MADE REAL IN TEXAS</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>WOMAN-LED</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>ZERO JUNK</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>WHOLE ROOTS ONLY</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
      <span>FREE SHIPPING OVER $50</span> <span style="color: #ff5722; margin: 0 12px;">●</span>
    </div>
  </div>

  <!-- 1. Hero Section -->
  <section class="hero-section">
    <div class="hero-bg-blobs">
      <div class="blob blob-1"></div>
      <div class="blob blob-2"></div>
    </div>

    <div class="hero-container">
      <div class="hero-content-side">
        <div class="hero-pill-tag">
          <span class="hero-pill-dot"></span>
          <span>100% Real Roots • Made Real in Texas • Woman-Led</span>
        </div>

        <h1 class="hero-title-main">
          Real Roots. Bold Crunch. <br>
          <span class="hero-title-gradient">Zero Junk.</span>
        </h1>

        <p class="hero-subtitle-bold">
          Texas-made. Woman-led. Clean-label snacks for real people.
        </p>

        <p class="hero-desc">
          From real roots to bold bites — snub the junk. We craft craveable, gut-friendly ferments and frozen root bites from whole roots and honest ingredients. Bold flavor, simple labels, transparent crunch.
        </p>

        <div class="hero-cta-group">
          <a class="btn-hero-primary" href="#shop">
            <span>Shop Snacks</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a class="btn-hero-secondary" href="{{ route('story') }}">
            <span>Our Story</span>
          </a>
        </div>

        <!-- Trust Badges Row -->
        <div class="hero-trust-row">
          <div class="trust-badge-item">
            <span class="trust-badge-icon">🌱</span>
            <div class="trust-badge-text">
              <strong>100% Roots</strong>
              <small>Never powders</small>
            </div>
          </div>
          <div class="trust-badge-item">
            <span class="trust-badge-icon">🚫</span>
            <div class="trust-badge-text">
              <strong>Zero Junk</strong>
              <small>No preservatives</small>
            </div>
          </div>
          <div class="trust-badge-item">
            <span class="trust-badge-icon">⚡</span>
            <div class="trust-badge-text">
              <strong>8 Min Crunch</strong>
              <small>Air-fryer ready</small>
            </div>
          </div>
        </div>
      </div>

      <!-- Hero Visual Side -->
      <div class="hero-visual-side">
        <div class="hero-card-display">
          <div class="hero-badge-floating floating-1">
            <span class="badge-emoji">🤠</span>
            <div>
              <strong>Texas Proud</strong>
              <small>Austin Born</small>
            </div>
          </div>

          <div class="hero-badge-floating floating-2">
            <span class="badge-emoji">🥗</span>
            <div>
              <strong>Gut Health First</strong>
              <small>Live Probiotics</small>
            </div>
          </div>

          <img class="hero-showcase-img" src="{{ asset('images/hero-bags.png') }}" alt="Snüb Foods Clean-Label Snacks Product Line" loading="eager">
        </div>
      </div>
    </div>
  </section>

  <!-- 2. Mission Spotlight (Born in Texas. Built by Woman.) -->
  <section style="background: #ffffff; padding: 75px 24px; border-bottom: 1px solid #ebdccb;">
    <div style="max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 0.95fr 1.05fr; gap: 48px; align-items: center;">
      <!-- Founder Photo -->
      <div style="position: relative;">
        <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 16px 40px rgba(0,0,0,0.12); border: 4px solid #ffffff;">
          <img src="{{ asset('images/founder-texas.jpeg') }}" alt="Born in Texas. Built by Woman. — Snüb Foods Founder" style="width: 100%; height: auto; display: block; object-fit: cover;">
        </div>
        <div style="position: absolute; bottom: -16px; right: 20px; background: #5b078b; color: #ffffff; padding: 8px 18px; border-radius: var(--radius-pill); font-family: var(--font-display); font-size: 0.85rem; font-weight: 800; box-shadow: 0 8px 20px rgba(91,7,139,0.35);">
          👩‍🍳 Texas Born • Woman-Owned
        </div>
      </div>

      <!-- Content Side -->
      <div>
        <span class="section-pill-badge" style="background: #fdf2f8; color: #be185d; margin-bottom: 14px;">The Snüb Mission</span>
        <h2 style="font-family: var(--font-display); font-size: clamp(2rem, 3.8vw, 2.7rem); font-weight: 900; color: #1a0826; margin-bottom: 16px; line-height: 1.2;">
          Born in Texas. Built by Woman.
        </h2>
        <p style="font-size: 1.15rem; line-height: 1.7; color: #4b5563; margin-bottom: 24px;">
          At Snüb, we snub the fake and celebrate the real — crafting bold, gut-friendly snacks made from whole roots, not powders. Proudly local, woman-led, and fueled by clean ingredients.
        </p>

        <!-- 5 Authentic Badges Row -->
        <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 28px;">
          <img src="{{ asset('images/badge-28.png') }}" alt="Whole Roots" style="width: 52px; height: 52px; border-radius: 12px;" title="Whole Roots">
          <img src="{{ asset('images/badge-29.png') }}" alt="Zero Junk" style="width: 52px; height: 52px; border-radius: 12px;" title="Zero Junk">
          <img src="{{ asset('images/badge-25.png') }}" alt="Gluten-Free" style="width: 52px; height: 52px; border-radius: 12px;" title="Gluten-Free">
          <img src="{{ asset('images/badge-26.png') }}" alt="Vegan" style="width: 52px; height: 52px; border-radius: 12px;" title="Vegan">
          <img src="{{ asset('images/badge-27.png') }}" alt="Texas Proud" style="width: 52px; height: 52px; border-radius: 12px;" title="Texas Proud">
        </div>

        <div style="display: flex; gap: 16px; flex-wrap: wrap;">
          <a href="{{ route('mission') }}" class="btn-hero-primary" style="padding: 14px 28px; font-size: 0.98rem; text-decoration: none;">Explore Our Mission →</a>
          <a href="{{ route('story') }}" class="btn-hero-secondary" style="padding: 14px 28px; font-size: 0.98rem; text-decoration: none;">Meet the Mom Behind Snüb</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. The Snüb Collection (Interactive Product Grid) -->
  <section class="collection-section" id="shop">
    <div class="collection-container">
      <div class="section-header-wrap">
        <span class="section-pill-badge">Whole Roots • Bold Flavor</span>
        <h2 class="section-heading-main">The Snüb Collection</h2>
        <p class="section-subheading">
          Hand-crafted snacks made from real roots and live ferments. Clean labels you can read, flavor you crave.
        </p>

        <!-- Category Filters -->
        <div class="filter-tabs-row" role="tablist">
          <button class="filter-tab active" data-filter="all" role="tab">All Snacks ({{ $products->count() }})</button>
          <button class="filter-tab" data-filter="fermented" role="tab">Fermented Salads</button>
          <button class="filter-tab" data-filter="crunchlets" role="tab">Frozen Crunchlets</button>
          <button class="filter-tab" data-filter="fries" role="tab">Root Fries</button>
          <button class="filter-tab" data-filter="tortillas" role="tab">Plantain Tortillas</button>
        </div>
      </div>

      <!-- Products Grid -->
      <div class="products-grid" id="products-grid">
        @foreach($products as $product)
          <div class="product-card" data-category="{{ $product->category }}">
            <div class="product-img-wrapper">
              <span class="product-badge-tag">
                @if(str_contains(strtolower($product->category), 'ferment'))
                  Refrigerated • Live Ferment
                @elseif(str_contains(strtolower($product->category), 'tortilla'))
                  Grain-Free • Olive Oil
                @else
                  Crispy Frozen • Air-Fryer Ready
                @endif
              </span>
              <a href="{{ route('products.show', $product) }}">
                <img class="product-img" src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" loading="lazy">
              </a>
            </div>

            <div class="product-card-body">
              <div class="product-stars-rating">
                <span class="stars-gold">★★★★★</span>
                <span class="review-count">(5.0)</span>
              </div>

              <h3 class="product-title">
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
              </h3>

              <div class="product-price-row">
                <span class="price-val">${{ number_format($product->price, 2) }}</span>
                <span class="pack-badge">Full Pack</span>
              </div>

              <button class="btn-add-to-cart"
                      data-name="{{ $product->name }}"
                      data-price="{{ $product->price }}"
                      data-img="{{ asset($product->image_path) }}">
                <span>ADD TO CART</span>
                <span class="btn-cart-icon">+</span>
              </button>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- 4. Shop by Mood - Every Mood Has a Snüb -->
  <section class="mood-section">
    <div class="mood-container">
      <div class="section-header-wrap">
        <span class="section-pill-badge">Personalized Cravings</span>
        <h2 class="section-heading-main">Shop by Mood - Every Mood Has a Snüb.</h2>
        <p class="section-subheading">
          Energy. Comfort. Clean Living. Celebration — we’ve got it all.
        </p>

        <!-- Mood Switcher Tabs -->
        <div class="mood-tabs-wrap">
          <button class="mood-tab active" data-mood="energy">⚡ On-The-Go Energy</button>
          <button class="mood-tab" data-mood="movie">🍿 Movie Night Binge</button>
          <button class="mood-tab" data-mood="clean">🥗 Clean-Living Fuel</button>
          <button class="mood-tab" data-mood="party">🎉 Party Crunch</button>
        </div>
      </div>

      <div class="mood-desc-box" id="mood-desc">
        <h3>⚡ On-The-Go Energy</h3>
        <p>Fuel your active day with clean, real-ingredient energy — perfect for busy schedules and quick bites.</p>
      </div>

      <!-- Mood Curated Grid -->
      <div class="mood-products-grid" id="mood-products-grid">
        @foreach($products->take(4) as $product)
          <div class="product-card">
            <div class="product-img-wrapper">
              <a href="{{ route('products.show', $product) }}">
                <img class="product-img" src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" loading="lazy">
              </a>
            </div>
            <div class="product-card-body">
              <h3 class="product-title">
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
              </h3>
              <div class="product-price-row">
                <span class="price-val">${{ number_format($product->price, 2) }}</span>
              </div>
              <button class="btn-add-to-cart"
                      data-name="{{ $product->name }}"
                      data-price="{{ $product->price }}"
                      data-img="{{ asset($product->image_path) }}">
                ADD TO CART +
              </button>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- 5. Snüb Signature Bundles -->
  <section class="bundles-section">
    <div class="bundles-container">
      <div class="section-header-wrap">
        <span class="section-pill-badge" style="background:#fef3c7; color:#92400e;">Save Up to 25%</span>
        <h2 class="section-heading-main">Snüb Signature Bundles</h2>
        <p class="section-subheading">
          Curated combinations designed to stock your fridge and freezer with uncompromising crunch.
        </p>
      </div>

      <div class="bundles-grid">
        @foreach($bundles as $bundle)
          <div class="bundle-card">
            <div class="bundle-badge">BUNDLE VALUE</div>
            <div class="bundle-img-wrap">
              <a href="{{ route('products.show', $bundle) }}">
                <img class="bundle-img" src="{{ asset($bundle->image_path) }}" alt="{{ $bundle->name }}" loading="lazy">
              </a>
            </div>
            <div class="bundle-content">
              <h3 class="bundle-title">
                <a href="{{ route('products.show', $bundle) }}">{{ $bundle->name }}</a>
              </h3>
              <p class="bundle-desc">
                {{ Str::limit($bundle->description, 100) }}
              </p>
              <div class="bundle-price-action">
                <div>
                  <span class="bundle-price">${{ number_format($bundle->price, 2) }}</span>
                </div>
                <button class="btn-bundle-cart"
                        data-name="{{ $bundle->name }}"
                        data-price="{{ $bundle->price }}"
                        data-img="{{ asset($bundle->image_path) }}">
                  ADD BUNDLE +
                </button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- 6. Why Snüb (The Texas Standard) -->
  <section style="background: #ffffff; padding: 85px 24px; border-bottom: 1px solid #ebdccb;">
    <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
      <span class="section-pill-badge" style="background: #fdf4ff; color: #86198f; margin-bottom: 14px;">The Snüb Standard</span>
      <h2 style="font-family: var(--font-display); font-size: clamp(2.2rem, 4vw, 2.9rem); font-weight: 900; color: #1a0826; margin-bottom: 16px;">
        Why Snüb
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.7; color: #4b5563; max-width: 800px; margin: 0 auto 50px;">
        We don’t fake flavor — we make it. We don’t follow trends — we set them. Snüb stands for real ingredients, bold flavor, and fearless snacking made the Texas way.
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 24px; text-align: left;">
        <div style="background: #fdfaf6; border: 1.5px solid #eee5d8; border-radius: 20px; padding: 30px 24px;">
          <div style="font-size: 2.2rem; margin-bottom: 14px;">🌱</div>
          <h3 style="font-family: var(--font-display); font-size: 1.25rem; font-weight: 800; color: #1a0826; margin-bottom: 8px;">Real Ingredients</h3>
          <p style="color: #6b7280; font-size: 0.95rem; line-height: 1.6; margin: 0;">Whole roots, never powders or mystery purees.</p>
        </div>

        <div style="background: #fdfaf6; border: 1.5px solid #eee5d8; border-radius: 20px; padding: 30px 24px;">
          <div style="font-size: 2.2rem; margin-bottom: 14px;">🌶️</div>
          <h3 style="font-family: var(--font-display); font-size: 1.25rem; font-weight: 800; color: #1a0826; margin-bottom: 8px;">Bold Flavor</h3>
          <p style="color: #6b7280; font-size: 0.95rem; line-height: 1.6; margin: 0;">Naturally fermented tang and honest spices that bite back.</p>
        </div>

        <div style="background: #fdfaf6; border: 1.5px solid #eee5d8; border-radius: 20px; padding: 30px 24px;">
          <div style="font-size: 2.2rem; margin-bottom: 14px;">🥣</div>
          <h3 style="font-family: var(--font-display); font-size: 1.25rem; font-weight: 800; color: #1a0826; margin-bottom: 8px;">Clean Process</h3>
          <p style="color: #6b7280; font-size: 0.95rem; line-height: 1.6; margin: 0;">Small-batch crafted, transparent labels, zero preservatives.</p>
        </div>

        <div style="background: #fdfaf6; border: 1.5px solid #eee5d8; border-radius: 20px; padding: 30px 24px;">
          <div style="font-size: 2.2rem; margin-bottom: 14px;">⭐</div>
          <h3 style="font-family: var(--font-display); font-size: 1.25rem; font-weight: 800; color: #1a0826; margin-bottom: 8px;">Texas Spirit</h3>
          <p style="color: #6b7280; font-size: 0.95rem; line-height: 1.6; margin: 0;">Family-built in Austin, Texas with fearless ambition.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Made Different (The 5-Step Process) -->
  <section class="process-section">
    <div class="process-container">
      <div class="section-header-wrap">
        <span class="section-pill-badge">From Farm to Crunch</span>
        <h2 class="section-heading-main">Made Different</h2>
        <p class="section-subheading">
          Whether refrigerated or frozen, every Snüb product goes through the same uncompromising standards — from sourcing to packing. Here’s how we do real, bold, clean food differently.
        </p>
      </div>

      <div class="process-steps-row">
        <div class="process-step-card">
          <div class="process-step-num">01</div>
          <h3 class="process-step-title">Sourced with Purpose</h3>
          <p class="process-step-desc">Texas-grown whole roots and fresh produce from trusted agricultural partners.</p>
        </div>

        <div class="process-step-card">
          <div class="process-step-num">02</div>
          <h3 class="process-step-title">Prepped Fresh</h3>
          <p class="process-step-desc">Hand-trimmed, washed, and naturally prepared — never dehydrated powders.</p>
        </div>

        <div class="process-step-card">
          <div class="process-step-num">03</div>
          <h3 class="process-step-title">Crafted to Perfection</h3>
          <p class="process-step-desc">Artisanal live fermentation and slow flash freezing to lock in nutrients.</p>
        </div>

        <div class="process-step-card">
          <div class="process-step-num">04</div>
          <h3 class="process-step-title">Stored Right</h3>
          <p class="process-step-desc">Cold-chain maintained from our kitchen to your door in eco-insulated shippers.</p>
        </div>

        <div class="process-step-card">
          <div class="process-step-num">05</div>
          <h3 class="process-step-title">Ready to Enjoy</h3>
          <p class="process-step-desc">Straight from the jar or crispy in 8 minutes flat in your home air-fryer.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Gallery & Playlist (Reels Showcase) -->
  <section style="background: #faf6ef; padding: 85px 24px; border-bottom: 1px solid #ebdccb;">
    <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
      <span class="section-pill-badge" style="background: #ede9fe; color: #5b21b6; margin-bottom: 14px;">Community In Action</span>
      <h2 style="font-family: var(--font-display); font-size: clamp(2.2rem, 4vw, 2.9rem); font-weight: 900; color: #1a0826; margin-bottom: 12px;">
        Gallery &amp; Playlist
      </h2>
      <p style="font-size: 1.15rem; color: #6b7280; margin-bottom: 46px;">
        See how crunch lovers across the nation snack real with Snüb.
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
        <div class="gallery-card" onclick="alert('🎥 Playing Snüb Community Reel: Plantain Crunchlets in the Air Fryer!')" style="cursor: pointer; position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); background: #000;">
          <img src="{{ asset('images/video-thumb-1.png') }}" alt="Community Reel 1" style="width: 100%; height: 320px; object-fit: cover; opacity: 0.85; transition: transform 0.3s ease;">
          <div style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 20px; background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.7) 100%);">
            <span style="background: rgba(0,0,0,0.6); color: #fff; padding: 4px 10px; border-radius: 6px; font-size: 0.8rem; font-weight: 700; align-self: flex-start;">0:16</span>
            <div style="text-align: left;">
              <div style="font-size: 2.2rem; color: #ffd166; margin-bottom: 6px;">▶</div>
              <h4 style="color: #fff; font-family: var(--font-display); font-size: 1.1rem; font-weight: 800; margin: 0;">Plantain Crunchlets Demo</h4>
            </div>
          </div>
        </div>

        <div class="gallery-card" onclick="alert('🎥 Playing Snüb Community Reel: Smoky Garlic Cabbu Slaw!')" style="cursor: pointer; position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); background: #000;">
          <img src="{{ asset('images/video-thumb-2.png') }}" alt="Community Reel 2" style="width: 100%; height: 320px; object-fit: cover; opacity: 0.85; transition: transform 0.3s ease;">
          <div style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 20px; background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.7) 100%);">
            <span style="background: rgba(0,0,0,0.6); color: #fff; padding: 4px 10px; border-radius: 6px; font-size: 0.8rem; font-weight: 700; align-self: flex-start;">0:16</span>
            <div style="text-align: left;">
              <div style="font-size: 2.2rem; color: #ffd166; margin-bottom: 6px;">▶</div>
              <h4 style="color: #fff; font-family: var(--font-display); font-size: 1.1rem; font-weight: 800; margin: 0;">Cabbu Slaw Recipe</h4>
            </div>
          </div>
        </div>

        <div class="gallery-card" onclick="alert('🎥 Playing Snüb Community Reel: Behind the Scenes in Austin Kitchen!')" style="cursor: pointer; position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); background: #000;">
          <img src="{{ asset('images/video-thumb-3.jpeg') }}" alt="Community Reel 3" style="width: 100%; height: 320px; object-fit: cover; opacity: 0.85; transition: transform 0.3s ease;">
          <div style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 20px; background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.7) 100%);">
            <span style="background: rgba(0,0,0,0.6); color: #fff; padding: 4px 10px; border-radius: 6px; font-size: 0.8rem; font-weight: 700; align-self: flex-start;">0:16</span>
            <div style="text-align: left;">
              <div style="font-size: 2.2rem; color: #ffd166; margin-bottom: 6px;">▶</div>
              <h4 style="color: #fff; font-family: var(--font-display); font-size: 1.1rem; font-weight: 800; margin: 0;">Behind the Kitchen</h4>
            </div>
          </div>
        </div>

        <div class="gallery-card" onclick="alert('🎥 Playing Snüb Community Reel: Plantain Tortilla Street Tacos!')" style="cursor: pointer; position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); background: #000;">
          <img src="{{ asset('images/video-thumb-4.png') }}" alt="Community Reel 4" style="width: 100%; height: 320px; object-fit: cover; opacity: 0.85; transition: transform 0.3s ease;">
          <div style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 20px; background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.7) 100%);">
            <span style="background: rgba(0,0,0,0.6); color: #fff; padding: 4px 10px; border-radius: 6px; font-size: 0.8rem; font-weight: 700; align-self: flex-start;">0:16</span>
            <div style="text-align: left;">
              <div style="font-size: 2.2rem; color: #ffd166; margin-bottom: 6px;">▶</div>
              <h4 style="color: #fff; font-family: var(--font-display); font-size: 1.1rem; font-weight: 800; margin: 0;">Plantain Taco Night</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Join the Crunch Club -->
  <section class="newsletter-section">
    <div class="newsletter-container">
      <span class="section-pill-badge" style="background: #fef3c7; color: #b45309; margin-bottom: 14px;">VIP Crunchers</span>
      <h2 class="newsletter-title">Join the Crunch Club</h2>
      <p class="newsletter-subtitle">
        Never miss a new drop, deal, or flavor — straight from Snüb HQ.
      </p>

      <form class="newsletter-form-box" onsubmit="event.preventDefault(); window.SnubCart ? window.SnubCart.showToast('🎉 Welcome to the Crunch Club! Check your inbox for 15% OFF.') : alert('Welcome!'); this.reset();">
        <input class="newsletter-input" type="email" placeholder="Enter your email address here" required>
        <button class="btn-newsletter-submit" type="submit">SUBSCRIBE</button>
      </form>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  // Category Filter Tabs
  document.querySelectorAll('.filter-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const filter = tab.getAttribute('data-filter');

      document.querySelectorAll('#products-grid .product-card').forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter || category.includes(filter)) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Mood Tabs Switcher
  const moodDescriptions = {
    'energy': {
      title: '⚡ On-The-Go Energy',
      text: 'Fuel your day with clean, real-ingredient energy — perfect for busy schedules and quick bites.'
    },
    'movie': {
      title: '🍿 Movie Night Binge',
      text: 'Snack smarter while you relax — bold, crunchy, and guilt-free treats for every craving.'
    },
    'clean': {
      title: '🥗 Clean-Living Fuel',
      text: 'Wholesome choices that support gut health, balance, and mindful eating.'
    },
    'party': {
      title: '🎉 Party Crunch',
      text: 'Turn any moment into a celebration — bold, crisp, and crowd-pleasing bites.'
    }
  };

  document.querySelectorAll('.mood-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.mood-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const mood = tab.getAttribute('data-mood');
      const desc = moodDescriptions[mood];
      if (desc) {
        document.getElementById('mood-desc').innerHTML = `<h3>${desc.title}</h3><p>${desc.text}</p>`;
      }
    });
  });
</script>
@endpush
