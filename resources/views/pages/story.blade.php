@extends('layouts.app')

@section('title', 'Our Story — Snüb Foods | Meet the Mom Behind Snüb')
@section('meta_description', 'A Mom. A Daughter. A Promise to Keep It Real. We couldn’t find clean-label snacks that were bold, honest, and actually delicious — so a mom and daughter made them.')

@section('content')
  <!-- Hero Section -->
  <section class="story-page-hero">
    <div class="story-hero-container">
      <h1 class="story-hero-title">
        A Mom. A Daughter. <br>A Promise to Keep It Real.
      </h1>
      <p class="story-hero-subtitle">
        We couldn’t find clean‑label snacks that were bold, honest, and actually delicious — so a mom and daughter made them. Texas born. Woman powered. Built for real life.
      </p>

      <!-- 3 Pill Badges matching live site -->
      <div class="story-pill-tags">
        <span class="story-pill-tag">👩‍🍳 Woman-Led</span>
        <span class="story-pill-tag">❤️ Mom &amp; Daughter Story</span>
        <span class="story-pill-tag">✨ Clean-Label Promise</span>
      </div>
    </div>

    <!-- Authentic Family Photo of Mom & Daughter -->
    <div class="story-family-photo-wrap">
      <div class="story-family-photo-card">
        <img src="{{ asset('images/story-mother-daughter.jpeg') }}" alt="Mom and Daughter behind Snüb Foods">
      </div>
    </div>
  </section>

  <!-- Section 3: The Shelf Frustration (2 Columns) -->
  <section class="story-row-section">
    <div class="story-row-container">
      <div class="story-row-text">
        <span class="section-pill-badge" style="margin-bottom: 16px;">The Reality</span>
        <h3>We read every label — and still couldn’t trust the shelf.</h3>
        <p>
          Late‑night grocery runs. Hidden gums and preservatives. “Natural” flavors that weren’t. We wanted snacks our family could crush without a lecture — <strong>bold flavor, clean label, zero pretend</strong>.
        </p>

        <!-- 3 Feature Stat Boxes matching live site -->
        <div class="story-stat-boxes">
          <div class="story-stat-box">
            <div class="story-stat-label">NO POWDERS</div>
            <div class="story-stat-val">Whole roots only</div>
          </div>
          <div class="story-stat-box">
            <div class="story-stat-label">NO PRESERVATIVES</div>
            <div class="story-stat-val">Label‑proud</div>
          </div>
          <div class="story-stat-box">
            <div class="story-stat-label">NO PRETEND</div>
            <div class="story-stat-val">Flavor first</div>
          </div>
        </div>
      </div>

      <div class="story-row-img-wrap">
        <img src="{{ asset('images/story-shelf-labels.png') }}" alt="Grocery shelf label comparison">
      </div>
    </div>
  </section>

  <!-- Section 4: Before vs After Split -->
  <section class="story-split-section">
    <div class="story-split-container">
      <div class="story-split-grid">
        <div class="story-split-card before">
          <span class="story-split-pill">⚠️ Before Snüb</span>
          <h4>The Snack Aisle We Faced</h4>
          <p>Bleached starches, powders pretending to be veggies, and ingredient lists that read like a chemical lab test.</p>
        </div>
        <div class="story-split-card after">
          <span class="story-split-pill">✅ Built by Snüb</span>
          <h4>The Snacks We Built</h4>
          <p>Real green plantains, whole carrots, and fresh cabbage fermented and crisped to uncompromising perfection.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Kitchen Table to Freezer Aisle -->
  <section class="story-row-section">
    <div class="story-row-container reverse">
      <div class="story-row-img-wrap">
        <img src="{{ asset('images/story-kitchen-table.png') }}" alt="Snüb test kitchen roots prep">
      </div>

      <div class="story-row-text">
        <span class="section-pill-badge" style="margin-bottom: 16px;">From Our Kitchen</span>
        <h3>From our kitchen table to your freezer aisle.</h3>
        <p>
          We didn’t hire a food lab. We chopped real roots at home, tested air‑fry times with my daughter, and built recipes that earn our own family’s trust before they ever reach yours.
        </p>

        <div class="story-pill-tags" style="justify-content: flex-start; margin-top: 10px;">
          <span class="story-pill-tag">👩‍👧 Mom-Built</span>
          <span class="story-pill-tag">🧒 Kid-Tested</span>
          <span class="story-pill-tag">🏡 Community-Loved</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Mother & Daughter Journey Timeline (6 Milestones) -->
  <section class="story-timeline-section">
    <div class="story-timeline-container">
      <div class="section-header-wrap" style="text-align: center; margin-bottom: 50px;">
        <span class="section-pill-badge">Our Journey</span>
        <h2 class="section-title">A Timeline Built on Grit, Roots &amp; Family</h2>
        <p class="section-subtitle">How a mother and daughter took clean snacking from Texas kitchens to households nationwide.</p>
      </div>

      <div class="story-timeline-grid">
        <div class="story-timeline-card">
          <span class="timeline-year">2019</span>
          <h4>The Picky Eater Spark</h4>
          <p>My daughter chose fermented carrots over candy at the farmers market. A mom’s lightbulb went off: kids actually crave real flavor when it’s made honest.</p>
        </div>

        <div class="story-timeline-card">
          <span class="timeline-year">2020</span>
          <h4>The Kitchen Counter Lab</h4>
          <p>Dozens of small-batch tests with Texas green plantains, taro, and local cabbage. Burning pans, dialing in air-fryer times, and zero compromises.</p>
        </div>

        <div class="story-timeline-card">
          <span class="timeline-year">2022</span>
          <h4>First Farmers Market Sell-Out</h4>
          <p>Our very first pop-up booth in Richmond, Texas sold out in 90 minutes. Neighbors returned demanding pouches for their kids’ lunches.</p>
        </div>

        <div class="story-timeline-card">
          <span class="timeline-year">2024</span>
          <h4>Commercial Small-Batch Scale</h4>
          <p>Partnered with local family farms across Texas to scale our frozen reserve crunchlets and raw refrigerated ferments without chemicals or powders.</p>
        </div>

        <div class="story-timeline-card">
          <span class="timeline-year">2025</span>
          <h4>The Snüb National Drop</h4>
          <p>Shipped directly across the US in cold-pack insulated boxes. Proving clean-label, woman-founded food can stand tall against corporate junk food.</p>
        </div>

        <div class="story-timeline-card" style="background: linear-gradient(135deg, #fbf4ff 0%, #f4e8fa 100%); border-color: #d1a8e6;">
          <span class="timeline-year" style="color: #7b1fa2;">Future</span>
          <h4>The Food Revolution</h4>
          <p>Expanding whole-root grain-free wraps and fearless live-probiotic ferments so every pantry and lunchbox in America has clean options.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Journey Graphic Banner -->
  <section class="story-journey-banner-wrap">
    <div class="story-journey-banner-card">
      <img src="{{ asset('images/story-journey-banner.png') }}" alt="Mother and Daughter Milestone Journey Banner">
    </div>
  </section>

  <!-- Section 8: Bold Brand Typography Callout -->
  <section class="story-statement-section">
    <div class="story-statement-container">
      <h2>REAL FOOD. REAL WOMEN. REAL CRUNCH.</h2>
      <p>We didn’t build Snüb to follow corporate grocery trends. We built it because our kids deserved honest food — and so do yours.</p>
    </div>
  </section>

  <!-- Section 9: Personal Letter / Founder Quote Box -->
  <section class="story-letter-section">
    <div class="story-letter-card">
      <span class="story-letter-badge">A NOTE FROM THE FOUNDER</span>
      <p class="story-letter-highlight">“If we can’t feed it to our own kids with complete pride, it never leaves our kitchen.”</p>
      <p class="story-letter-body">
        When my daughter was growing up, grocery aisles felt like a minefield of misleading claims and synthetic powders. Building Snüb has been about proving that motherly instinct and clean Texas roots can disrupt a multibillion-dollar junk food industry. Thank you for welcoming us to your family’s table.
      </p>
      <div class="story-letter-sign">
        — The Mom Behind Snüb Foods • Richmond, Texas
      </div>
    </div>
  </section>

  <!-- Section 10: Newsletter Section -->
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
