@extends('layouts.app')

@section('title', 'Contact Us — Snüb Foods | Richmond, Texas')
@section('meta_description', 'Contact Snüb Foods. Reach out for retail, wholesale, press, media kits, or customer feedback. Richmond, Texas.')

@section('content')
  <!-- Contact Hero Section -->
  <section class="contact-hero-section">
    <div class="contact-hero-container">
      <span class="section-pill-badge">We'd Love to Hear From You</span>
      <h1 class="contact-hero-title">Contact Snüb Foods</h1>
      <p class="contact-hero-desc">
        Got questions? Flavor ideas? Wanna stock us on your retail shelves? Our Austin &amp; Richmond Texas team is here for you.
      </p>
    </div>
  </section>

  <!-- Main Contact Section -->
  <section class="contact-main-section">
    <div class="contact-grid">

      <!-- Left Column: Official Contact Cards -->
      <div class="contact-info-col">

        <!-- Mailing Address -->
        <article class="contact-info-card">
          <div class="contact-icon-bubble">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          </div>
          <div class="contact-card-content">
            <h3>Mailing Address</h3>
            <p>
              <strong>Snüb Foods</strong> (Earth's Treat LLC)<br>
              Richmond, Texas 77406<br>
              United States of America
            </p>
          </div>
        </article>

        <!-- Departmental Email Contacts -->
        <article class="contact-info-card">
          <div class="contact-icon-bubble">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </div>
          <div class="contact-card-content">
            <h3>Direct Email Inquiries</h3>
            <p>
              <strong>General Inquiries:</strong><br>
              <a href="mailto:hello@snubfoods.com">hello@snubfoods.com</a>
            </p>
            <p style="margin-top: 8px;">
              <strong>Wholesale &amp; Retailers:</strong><br>
              <a href="mailto:partners@snubfoods.com">partners@snubfoods.com</a>
            </p>
            <p style="margin-top: 8px;">
              <strong>Press &amp; Media Requests:</strong><br>
              <a href="mailto:press@snubfoods.com">press@snubfoods.com</a>
            </p>
          </div>
        </article>

        <!-- Phone & Operating Hours -->
        <article class="contact-info-card">
          <div class="contact-icon-bubble">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          </div>
          <div class="contact-card-content">
            <h3>Call Snüb HQ</h3>
            <p>
              <strong>Direct Line:</strong> <a href="tel:+19723586197">+1 (972) 358-6197</a><br>
              <span class="badge-status-open">● Mon – Fri, 9:00 AM – 5:00 PM CST</span>
            </p>
          </div>
        </article>

        <!-- Social Channels -->
        <article class="contact-info-card">
          <div class="contact-icon-bubble">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
          </div>
          <div class="contact-card-content">
            <h3>Connect on Social</h3>
            <p>
              Tag us, DM us, or rave about Caroonch:<br>
              <strong>Instagram / TikTok / Facebook:</strong> <a href="https://www.instagram.com/snubfoods/" target="_blank" rel="noopener noreferrer">@snubfoods</a>
            </p>
          </div>
        </article>

      </div>

      <!-- Right Column: Interactive Form Card -->
      <div class="contact-form-col">
        <div class="contact-form-card">
          <h2>Send Us a Message</h2>
          <p>Fill out the form below and a real human at Snüb will get back to you within 1–2 business days.</p>

          @if (session('success'))
            <div class="alert-success-banner" role="alert">
              <span class="alert-success-icon">🎉</span>
              <div>
                <strong>Thank you! Your message has been sent.</strong>
                <p>{{ session('success') }}</p>
              </div>
            </div>
          @endif

          @if ($errors->any())
            <div class="alert-error-banner" role="alert">
              <strong>Please correct the following errors:</strong>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('contact.submit') }}" method="POST" class="inquiry-form" novalidate>
            @csrf

            <!-- Full Name -->
            <div class="form-group">
              <label for="name">Your Name <span class="req">*</span></label>
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Jane Doe" value="{{ old('name') }}" required>
              @error('name')
                <span class="field-error">{{ $message }}</span>
              @enderror
            </div>

            <!-- Email & Phone Grid -->
            <div class="form-row">
              <div class="form-group">
                <label for="email">Email Address <span class="req">*</span></label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="jane@example.com" value="{{ old('email') }}" required>
                @error('email')
                  <span class="field-error">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+1 (555) 000-0000" value="{{ old('phone') }}">
                @error('phone')
                  <span class="field-error">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <!-- Inquiry Type Radio Selector -->
            <div class="form-group">
              <label>Inquiry Type <span class="req">*</span></label>
              <div class="inquiry-type-grid">
                <label class="inquiry-radio-pill {{ old('inquiry_type', 'general') === 'retail_wholesale' ? 'selected' : '' }}">
                  <input type="radio" name="inquiry_type" value="retail_wholesale" {{ old('inquiry_type') === 'retail_wholesale' ? 'checked' : '' }}>
                  <span>🏪 Retail / Wholesale</span>
                </label>
                <label class="inquiry-radio-pill {{ old('inquiry_type') === 'media_press' ? 'selected' : '' }}">
                  <input type="radio" name="inquiry_type" value="media_press" {{ old('inquiry_type') === 'media_press' ? 'checked' : '' }}>
                  <span>🎙️ Media / Press</span>
                </label>
                <label class="inquiry-radio-pill {{ old('inquiry_type', 'general') === 'general' ? 'selected' : '' }}">
                  <input type="radio" name="inquiry_type" value="general" {{ old('inquiry_type', 'general') === 'general' ? 'checked' : '' }}>
                  <span>💬 General Question</span>
                </label>
                <label class="inquiry-radio-pill {{ old('inquiry_type') === 'collaboration' ? 'selected' : '' }}">
                  <input type="radio" name="inquiry_type" value="collaboration" {{ old('inquiry_type') === 'collaboration' ? 'checked' : '' }}>
                  <span>🤝 Collaboration Idea</span>
                </label>
              </div>
              @error('inquiry_type')
                <span class="field-error">{{ $message }}</span>
              @enderror
            </div>

            <!-- Message -->
            <div class="form-group">
              <label for="message">Your Message <span class="req">*</span></label>
              <textarea id="message" name="message" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="Tell us how we can help or collaborate..." required>{{ old('message') }}</textarea>
              @error('message')
                <span class="field-error">{{ $message }}</span>
              @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-submit-contact" id="btn-submit-contact">
              <span>SEND MESSAGE</span>
              <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- Join the Crunch Club Banner -->
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

@push('scripts')
  <script>
    // Radio Pill Active State Highlighter
    document.querySelectorAll('.inquiry-radio-pill input[type="radio"]').forEach(radio => {
      radio.addEventListener('change', () => {
        document.querySelectorAll('.inquiry-radio-pill').forEach(pill => pill.classList.remove('selected'));
        if (radio.checked) {
          radio.closest('.inquiry-radio-pill').classList.add('selected');
        }
      });
    });
  </script>
@endpush
