@extends('layouts.app')

@section('title', 'Our Mission & Values — Snüb Foods | Real Roots. Bold Bites.')
@section('meta_description', 'To snub the junk and elevate real food. We craft clean-label snacks from whole roots and honest ingredients — bold in flavor, simple in composition, and transparent on the label.')

@section('content')
  <!-- 1. Hero Section -->
  <section class="mission-hero-section">
    <div class="mission-hero-container">
      <span class="mission-hero-pill">⭐ Purpose &amp; Purposeful Crunch</span>
      <h1 class="mission-hero-title">Our Mission &amp; Values</h1>
      <p class="mission-hero-subtitle">
        Texas Born. Woman Powered. We make bold, clean snacks from real roots — so families can snack with confidence and joy.
      </p>
      <div class="mission-hero-badges">
        <span class="mission-hero-badge-btn">🚫 Zero Junk</span>
        <span class="mission-hero-badge-btn">👩‍🍳 Woman-Led</span>
        <span class="mission-hero-badge-btn">🌱 Real Roots</span>
      </div>
    </div>
  </section>

  <!-- 2. Two-Card Mission & Brand Promise Section -->
  <section class="mission-cards-section">
    <div class="mission-cards-container">
      
      <!-- Card 1: Our Mission -->
      <div class="mission-card">
        <span class="mission-card-badge">The Core Standard</span>
        <h2 class="mission-card-title">Our Mission</h2>
        <p class="mission-card-text">
          To <strong>snub the junk</strong> and elevate real food. We craft clean‑label snacks from whole roots and honest ingredients — bold in flavor, simple in composition, and transparent on the label — so every bite earns your trust.
        </p>

        <div class="mission-pillars-row">
          <div class="mission-pillar-box">
            <div class="mission-pillar-tag">Real Ingredients</div>
            <div class="mission-pillar-bold">Whole roots. No powders.</div>
          </div>
          <div class="mission-pillar-box">
            <div class="mission-pillar-tag">Clean Process</div>
            <div class="mission-pillar-bold">Small batch. Label‑proud.</div>
          </div>
          <div class="mission-pillar-box">
            <div class="mission-pillar-tag">Joyful Crunch</div>
            <div class="mission-pillar-bold">Bold, memorable flavor.</div>
          </div>
        </div>
      </div>

      <!-- Card 2: Brand Promise -->
      <div class="mission-card">
        <span class="mission-card-badge">Uncompromising Standards</span>
        <h2 class="mission-card-title">Brand Promise</h2>
        <p class="mission-card-text">
          If it isn’t clean, bold, and honestly made — it isn’t Snüb. Every pouch reflects our standards: <em style="font-weight: 700; color: #5b078b;">real, fearless, transparent</em>.
        </p>

        <ul class="mission-checklist">
          <li>
            <span class="mission-check-icon">✓</span>
            <span>Clear ingredients you can pronounce</span>
          </li>
          <li>
            <span class="mission-check-icon">✓</span>
            <span>No artificial preservatives or fake flavors</span>
          </li>
          <li>
            <span class="mission-check-icon">✓</span>
            <span>Sourced with care, crafted with pride</span>
          </li>
        </ul>
      </div>

    </div>
  </section>

  <!-- 3. Our Core Values (5 Cards Grid) -->
  <section class="mission-values-section">
    <div class="mission-section-header">
      <h2 class="mission-section-heading">Our Core Values</h2>
      <p class="mission-section-desc">
        Every bite we produce is guided by five foundational principles that never get compromised.
      </p>
    </div>

    <div class="mission-values-grid">
      <!-- 1: Real Ingredients -->
      <div class="mission-value-card">
        <div class="mission-value-icon-wrap" style="color: #ea580c;">🌱</div>
        <h3 class="mission-value-title">Real Ingredients</h3>
        <p class="mission-value-desc">Whole roots, never powders or purees.</p>
      </div>

      <!-- 2: Bold Flavor -->
      <div class="mission-value-card">
        <div class="mission-value-icon-wrap" style="color: #e11d48;">🌶️</div>
        <h3 class="mission-value-title">Bold Flavor</h3>
        <p class="mission-value-desc">Memorable crunch with honest seasonings.</p>
      </div>

      <!-- 3: Woman-Led -->
      <div class="mission-value-card">
        <div class="mission-value-icon-wrap" style="color: #7c3aed;">👩‍🍳</div>
        <h3 class="mission-value-title">Woman‑Led</h3>
        <p class="mission-value-desc">Built by woman with grit and care.</p>
      </div>

      <!-- 4: Texas Proud -->
      <div class="mission-value-card">
        <div class="mission-value-icon-wrap" style="color: #2563eb;">⭐</div>
        <h3 class="mission-value-title">Texas Proud</h3>
        <p class="mission-value-desc">Local spirit, national standards.</p>
      </div>

      <!-- 5: Zero Junk -->
      <div class="mission-value-card">
        <div class="mission-value-icon-wrap" style="color: #059669;">🛡️</div>
        <h3 class="mission-value-title">Zero Junk</h3>
        <p class="mission-value-desc">No fake claims. No shortcuts.</p>
      </div>
    </div>
  </section>

  <!-- 4. What We Stand For (3 Columns) -->
  <section class="mission-stand-section">
    <div class="mission-section-header">
      <h2 class="mission-section-heading">What We Stand For</h2>
      <p class="mission-section-desc">Rooted in purpose, made with unyielding integrity.</p>
    </div>

    <div class="mission-stand-grid">
      <!-- Pillar 1 -->
      <div class="mission-stand-card">
        <span class="mission-stand-icon">🔍</span>
        <h3 class="mission-stand-title">Transparency</h3>
        <p class="mission-stand-desc">
          Every label tells the truth. If it’s in the pouch, it’s on the label — clearly.
        </p>
      </div>

      <!-- Pillar 2 -->
      <div class="mission-stand-card">
        <span class="mission-stand-icon">🥣</span>
        <h3 class="mission-stand-title">Craft</h3>
        <p class="mission-stand-desc">
          Small‑batch processes designed for texture, quality, and flavor integrity.
        </p>
      </div>

      <!-- Pillar 3 -->
      <div class="mission-stand-card">
        <span class="mission-stand-icon">🤝</span>
        <h3 class="mission-stand-title">Community</h3>
        <p class="mission-stand-desc">
          We build relationships with growers, partners, and families who value real food.
        </p>
      </div>
    </div>
  </section>

  <!-- 5. Sourcing with Purpose (Texas Farm Partnership) -->
  <section class="mission-sourcing-section">
    <div class="mission-sourcing-container">
      <div class="mission-sourcing-content">
        <span class="mission-card-badge" style="background: #ecfdf5; color: #047857;">Farm to Crunch</span>
        <h2>Sourcing with Purpose</h2>
        <p>
          We partner with trusted growers and suppliers who share our standards. From Texas farms to carefully vetted ingredients, our chain is built on <strong>traceability</strong> and <strong>respect</strong>.
        </p>

        <ul class="mission-sourcing-list">
          <li>
            <span class="mission-check-icon">✓</span>
            <span>Preference for local and regional producers</span>
          </li>
          <li>
            <span class="mission-check-icon">✓</span>
            <span>Strict specification &amp; lot tracking</span>
          </li>
          <li>
            <span class="mission-check-icon">✓</span>
            <span>Continuous QA and third‑party certifications</span>
          </li>
        </ul>
      </div>

      <div class="mission-sourcing-media">
        <div class="mission-sourcing-img-card">
          <img src="{{ asset('images/mission-sourcing.png') }}" alt="Sourcing with Purpose — Texas Farm Partnership" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Impact in Motion (Small Bites. Big Impact.) -->
  <section class="mission-impact-section">
    <div class="mission-section-header" style="margin-bottom: 30px;">
      <span class="mission-card-badge" style="background: #fff1f2; color: #be123c;">Grassroots Action</span>
      <h2 class="mission-section-heading">Impact in Motion</h2>
      <div class="mission-impact-subtitle">Small Bites. Big Impact.</div>
      <p class="mission-impact-desc">
        Every pouch is a step toward cleaner, bolder snacking — built with integrity from Texas to your table.
      </p>
    </div>

    <div class="mission-impact-grid">
      <div class="mission-impact-card">
        <img src="{{ asset('images/impact-1.png') }}" alt="Impact in Motion - Snüb Foods Community Pack 1" loading="lazy">
      </div>
      <div class="mission-impact-card">
        <img src="{{ asset('images/impact-2.png') }}" alt="Impact in Motion - Snüb Foods Community Pack 2" loading="lazy">
      </div>
      <div class="mission-impact-card">
        <img src="{{ asset('images/impact-3.png') }}" alt="Impact in Motion - Snüb Foods Community Pack 3" loading="lazy">
      </div>
      <div class="mission-impact-card">
        <img src="{{ asset('images/impact-4.png') }}" alt="Impact in Motion - Snüb Foods Community Pack 4" loading="lazy">
      </div>
    </div>
  </section>

  <!-- 7. The Snüb Promise (Manifesto Banner) -->
  <section class="mission-promise-section">
    <div class="mission-promise-container">
      <span class="mission-hero-pill" style="margin-bottom: 16px;">Our Ironclad Commitment</span>
      <h2 class="mission-promise-title">The Snüb Promise</h2>
      <p class="mission-promise-sub">
        If we can’t make it <strong>clean</strong>, we won’t make it at all. Every decision — from the farm to the final crunch — is filtered through three non‑negotiables.
      </p>

      <!-- 3 Non-Negotiables -->
      <div class="mission-negotiables-row">
        <div class="mission-negotiable-pill">Real over Easy</div>
        <div class="mission-negotiable-pill">Flavor without Fake</div>
        <div class="mission-negotiable-pill">Labels that Tell the Truth</div>
      </div>

      <!-- 4 Guarantee Cards -->
      <div class="mission-guarantee-grid">
        <div class="mission-guarantee-card">
          <span style="color: #ffd166; font-size: 1.4rem;">✓</span>
          <span>Whole roots. Never powders or mystery blends.</span>
        </div>
        <div class="mission-guarantee-card">
          <span style="color: #ffd166; font-size: 1.4rem;">✓</span>
          <span>No artificial preservatives, colors, or “natural flavor” loopholes.</span>
        </div>
        <div class="mission-guarantee-card">
          <span style="color: #ffd166; font-size: 1.4rem;">✓</span>
          <span>Small‑batch processes designed for texture and quality.</span>
        </div>
        <div class="mission-guarantee-card">
          <span style="color: #ffd166; font-size: 1.4rem;">✓</span>
          <span>Clear, readable labels — if it’s in the pouch, it’s on the label.</span>
        </div>
      </div>

      <!-- Tag Badges -->
      <div class="mission-promise-badges">
        <span class="mission-badge-tag">👩‍🍳 Woman‑Led</span>
        <span class="mission-badge-tag">⭐ Texas Born</span>
        <span class="mission-badge-tag">🌿 Clean‑Label</span>
        <span class="mission-badge-tag">🥣 Small‑Batch</span>
      </div>

      <!-- Guarantee Callout -->
      <div class="mission-guarantee-callout">
        <div class="mission-callout-heading">No Junk. No Shortcuts. No Secrets.</div>
        <p class="mission-callout-sub">
          That’s our guarantee — to our families, and to yours. Hold us to it.
        </p>
      </div>
    </div>
  </section>

  <!-- 8. Join the Crunch Club -->
  <section class="mission-club-section">
    <div class="mission-club-container">
      <span class="mission-card-badge" style="background: #fef3c7; color: #b45309; margin: 0 auto 16px;">VIP Crunchers</span>
      <h2 class="mission-club-title">Join the Crunch Club</h2>
      <p class="mission-club-sub">
        Never miss a new drop, deal, or flavor — straight from Snüb HQ.
      </p>

      <form class="mission-club-form" onsubmit="event.preventDefault(); window.SnubCart ? window.SnubCart.showToast('🎉 Welcome to the Crunch Club!') : alert('Welcome to the Crunch Club!'); this.reset();">
        <input type="email" class="mission-club-input" placeholder="Enter your email address here" required>
        <button type="submit" class="mission-club-btn">SUBSCRIBE</button>
      </form>
    </div>
  </section>
@endsection
