@extends('layouts.app')

@section('title', $product->name . ' — Snüb Foods')
@section('meta_description', $product->description)

@section('content')
  <section class="pdp-page">
    <div class="pdp-breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <a href="{{ route('home') }}#shop">Snacks</a>
      <span>/</span>
      <span>{{ $product->name }}</span>
    </div>

    <div class="pdp-grid">
      <div class="pdp-gallery-wrap">
        <img class="pdp-main-img" src="{{ asset($product->image_path ?? 'images/prod-plantain-crunchlets.png') }}" alt="{{ $product->name }}">
      </div>

      <div class="pdp-info">
        <span class="pdp-category-pill">🌱 {{ strtoupper($product->category) }} • 100% WHOLE ROOT</span>
        <h1 class="pdp-title">{{ $product->name }}</h1>

        <div class="pdp-rating-row">
          <span class="pdp-stars">★★★★★</span>
          <span style="font-weight:700;">4.9 / 5.0</span>
          <span style="color:var(--color-muted);">(128 Verified Ratings)</span>
        </div>

        <div class="pdp-price">${{ number_format((float)$product->price, 2) }}</div>
        <p class="pdp-desc">{{ $product->description }}</p>

        <div class="pdp-trust-grid">
          <div class="pdp-trust-item">
            <span>✨</span> Air-Fryer Ready in 8 mins
          </div>
          <div class="pdp-trust-item">
            <span>🌱</span> 100% Plant-Based &amp; Vegan
          </div>
          <div class="pdp-trust-item">
            <span>🚫</span> Certified Gluten-Free &amp; Non-GMO
          </div>
          <div class="pdp-trust-item">
            <span>🤠</span> Small-Batch Texas Sourced
          </div>
        </div>

        <div class="pdp-cta-wrap">
          <div class="pdp-qty-control">
            <button class="pdp-qty-btn" id="pdp-qty-minus" aria-label="Decrease quantity">-</button>
            <span class="pdp-qty-val" id="pdp-qty-val">1</span>
            <button class="pdp-qty-btn" id="pdp-qty-plus" aria-label="Increase quantity">+</button>
          </div>

          <button class="pdp-add-btn" id="pdp-add-btn">
            + ADD TO CART • ${{ number_format((float)$product->price, 2) }}
          </button>
        </div>

        <a href="{{ route('home') }}#shop" style="font-weight:700; color:var(--color-primary); margin-top:10px; display:inline-block;">
          ← Back to All Snacks
        </a>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script>
    let currentQty = 1;
    const basePrice = {{ (float)$product->price }};
    const qtyVal = document.getElementById('pdp-qty-val');
    const pdpAddBtn = document.getElementById('pdp-add-btn');

    document.getElementById('pdp-qty-minus')?.addEventListener('click', () => {
      if (currentQty > 1) {
        currentQty--;
        qtyVal.textContent = currentQty;
        updatePdpBtnPrice();
      }
    });

    document.getElementById('pdp-qty-plus')?.addEventListener('click', () => {
      currentQty++;
      qtyVal.textContent = currentQty;
      updatePdpBtnPrice();
    });

    function updatePdpBtnPrice() {
      if (pdpAddBtn) {
        pdpAddBtn.textContent = `+ ADD TO CART • $${(basePrice * currentQty).toFixed(2)}`;
      }
    }

    pdpAddBtn?.addEventListener('click', () => {
      const name = "{{ $product->name }}";
      const img = "{{ asset($product->image_path ?? 'images/prod-plantain-crunchlets.png') }}";

      for (let i = 0; i < currentQty; i++) {
        window.SnubCart.add(name, basePrice, img);
      }
    });
  </script>
@endpush
