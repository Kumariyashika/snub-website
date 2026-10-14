@extends('layouts.app')

@section('title', 'Why Gut Health Matters — Snüb Foods | Rule Your Gut')
@section('meta_description', 'Why Gut Health Matters — Because your gut does more than digest. It drives everything. Snüb delivers live, active probiotics from real fermented veggies.')

@section('content')
  <!-- 1. Hero Section matching live site -->
  <section class="gut-hero-section">
    <div class="gut-hero-container">
      <span class="gut-hero-badge">🥗 Microbiome First • 100% Real Food</span>
      <h1 class="gut-hero-title">Why Gut Health Matters</h1>
      <p class="gut-hero-sub">Because your gut does more than digest. It drives everything.</p>
    </div>
  </section>

  <!-- 2. Statement Section -->
  <section class="gut-statement-section">
    <div class="gut-statement-container">
      <p class="gut-statement-text">
        At <strong>Snüb</strong>, we believe gut health isn’t a trend — it’s the foundation of your entire well-being. That’s why every pouch we make is naturally fermented and designed to support your gut from the inside out.
      </p>
    </div>
  </section>

  <!-- 3. What Exactly Is Gut Health? (Two Column) -->
  <section class="gut-two-col-section">
    <div class="gut-two-col-container">
      <div class="gut-two-col-content">
        <h2 class="gut-section-title">💡 What Exactly Is Gut Health?</h2>
        <p class="gut-body-text">
          Your gut (a.k.a. your digestive system) is home to <strong>trillions of bacteria</strong> that make up your <strong>microbiome</strong>. This ecosystem affects way more than digestion — it plays a critical role in:
        </p>
        <ul class="gut-check-list">
          <li>
            <span class="gut-check-icon">✓</span>
            <span>Breaking down nutrients</span>
          </li>
          <li>
            <span class="gut-check-icon">✓</span>
            <span>Regulating the immune system</span>
          </li>
          <li>
            <span class="gut-check-icon">✓</span>
            <span>Balancing hormones</span>
          </li>
          <li>
            <span class="gut-check-icon">✓</span>
            <span>Influencing mood and brain function</span>
          </li>
        </ul>
        <p class="gut-body-text">
          When your gut is balanced and thriving, the rest of you tends to thrive too.
        </p>
      </div>

      <div class="gut-two-col-media">
        <div class="gut-img-card">
          <img src="{{ asset('images/gut-microbiome-diagram.png') }}" alt="What Exactly Is Gut Health - Microbiome Diagram">
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Why It's More Important Than Ever (Callout Box) -->
  <section class="gut-callout-section">
    <div class="gut-callout-box">
      <h3 class="gut-callout-title">Why It’s More Important Than Ever</h3>
      <p class="gut-callout-desc">
        Modern diets and processed foods have damaged many people’s gut health.<br>
        <strong>Sugar</strong>, additives, antibiotics, and stress all disrupt the balance of good bacteria in your microbiome.<br>
        That’s where <strong>fermented foods</strong> come in — and why Snüb was born.
      </p>
    </div>
  </section>

  <!-- 5. Benefits of a Healthy Gut (And How Fermentation Helps) -->
  <section class="gut-benefits-section">
    <div class="gut-benefits-header">
      <h2 class="gut-benefits-title">Benefits of a Healthy Gut</h2>
      <span class="gut-benefits-sub">(And How Fermentation Helps)</span>
    </div>

    <div class="gut-benefits-grid">
      <!-- Benefit Card 1 -->
      <article class="gut-benefit-card">
        <div class="gut-benefit-icon-wrap">🥗</div>
        <h3 class="gut-benefit-card-title">Boosts Digestion</h3>
        <p class="gut-benefit-card-desc">
          Fermented veggies are full of natural probiotics — good bacteria that help your body digest and absorb nutrients better.
        </p>
      </article>

      <!-- Benefit Card 2 -->
      <article class="gut-benefit-card">
        <div class="gut-benefit-icon-wrap">🛡️</div>
        <h3 class="gut-benefit-card-title">Reduces Inflammation</h3>
        <p class="gut-benefit-card-desc">
          Ingredients like garlic, carrots, and cabbage are naturally anti-inflammatory — and fermentation enhances their healing power.
        </p>
      </article>

      <!-- Benefit Card 3 -->
      <article class="gut-benefit-card">
        <div class="gut-benefit-icon-wrap">💧</div>
        <h3 class="gut-benefit-card-title">Supports Natural Detox</h3>
        <p class="gut-benefit-card-desc">
          A healthy gut helps clear out toxins and keeps things “moving.” Think of it as your body’s natural cleanse — no powders required.
        </p>
      </article>

      <!-- Benefit Card 4 -->
      <article class="gut-benefit-card">
        <div class="gut-benefit-icon-wrap">⚡</div>
        <h3 class="gut-benefit-card-title">Boosts Mood &amp; Brain Function</h3>
        <p class="gut-benefit-card-desc">
          Thanks to the gut-brain connection, a happy gut = better mood, focus, and mental clarity.
        </p>
      </article>
    </div>
  </section>

  <!-- 6. Why Snüb? (Deep Purple Section) -->
  <section class="gut-why-snub-section">
    <div class="gut-why-snub-container">
      <h2 class="gut-why-snub-title">Why Snüb?</h2>
      <p class="gut-why-snub-lead">Because we don’t fake wellness — we ferment it.</p>
      <p class="gut-why-snub-desc">
        <strong>Snüb</strong> pouches deliver <strong>live, active probiotics</strong> from real fermented veggies — no pills, powders, or preservatives.<br>
        Just raw, crunchy, tangy goodness made to fuel your gut and fit your life.
      </p>
    </div>
  </section>

  <!-- 7. What You Get in Every Pouch: (Two Column) -->
  <section class="gut-pouch-section">
    <div class="gut-pouch-container">
      <div class="gut-pouch-media">
        <div class="gut-img-card">
          <img src="{{ asset('images/gut-pouch-features.png') }}" alt="Snüb What You Get in Every Pouch">
        </div>
      </div>

      <div class="gut-pouch-content">
        <h2 class="gut-section-title">What You Get in Every Pouch:</h2>
        <ul class="gut-pouch-features-list">
          <li class="gut-pouch-feature-item">
            <span class="gut-pouch-check">✓</span>
            <span>Naturally fermented veggies</span>
          </li>
          <li class="gut-pouch-feature-item">
            <span class="gut-pouch-check">✓</span>
            <span>No added sugar</span>
          </li>
          <li class="gut-pouch-feature-item">
            <span class="gut-pouch-check">✓</span>
            <span>No fake flavors or shelf-stable nonsense</span>
          </li>
          <li class="gut-pouch-feature-item">
            <span class="gut-pouch-check">✓</span>
            <span>Just food that works — and tastes bold doing it</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 8. Gut Health Isn’t Optional — It’s Foundational. -->
  <section class="gut-foundational-section">
    <div class="gut-foundational-container">
      <h2 class="gut-foundational-title">Gut Health Isn’t Optional — It’s Foundational.</h2>
      <p class="gut-foundational-sub">
        We make it easy, portable, and powerful. So you can stop guessing, stop gut-struggling, and start feeling the difference.
      </p>
      <a class="gut-foundational-btn" href="{{ route('home') }}#shop">
        <span>Shop Real Ferments &amp; Snacks</span>
        <span>→</span>
      </a>
    </div>
  </section>

  <!-- 9. Join the Crunch Club (Newsletter) -->
  <section class="story-newsletter-section">
    <div class="story-newsletter-container">
      <h2 class="story-newsletter-title">Join the Crunch Club</h2>
      <p class="story-newsletter-sub">Never miss a new drop, deal, or flavor — straight from Snüb HQ.</p>
      <form class="story-newsletter-form" onsubmit="event.preventDefault(); window.SnubCart.showToast('🎉 Welcome to the Crunch Club!'); this.reset();">
        <input class="story-newsletter-input" type="email" placeholder="Enter your email address here" required>
        <button class="story-newsletter-btn" type="submit">SUBSCRIBE</button>
      </form>
    </div>
  </section>
@endsection
