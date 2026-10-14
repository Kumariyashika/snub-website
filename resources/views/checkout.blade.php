@extends('layouts.app')

@section('title', 'Checkout — Snüb Foods')
@section('meta_description', 'Complete your order of clean-label, real-root snacks from Snüb Foods. Secure SSL encrypted checkout.')

@section('content')
<div class="snub-checkout-wrapper">
  <div class="snub-checkout-container">

    <!-- Empty Cart Notice (Matching WooCommerce live behavior) -->
    <div id="snub-checkout-empty" style="display: none; background: #ffffff; border: 1px solid #e0e0e0; border-radius: 12px; padding: 60px 24px; text-align: center; margin: 40px auto; max-width: 800px;">
      <div style="font-size: 3rem; margin-bottom: 16px;">🛒</div>
      <h2 style="font-family: inherit; font-size: 1.8rem; font-weight: 700; color: #1a0826; margin-bottom: 12px;">Your cart is currently empty.</h2>
      <p style="color: #666; font-size: 1.05rem; margin-bottom: 24px;">Before proceeding to checkout you must add some products to your shopping cart.</p>
      <a href="{{ route('home') }}#shop" class="snub-place-order-btn" style="display: inline-block; text-decoration: none; max-width: 260px; padding: 14px 28px; text-align: center;">RETURN TO SHOP</a>
    </div>

    <!-- Active Checkout Form (Exact Match to live snubfoods.com/checkout-2/) -->
    <div id="snub-checkout-form-wrap" class="snub-checkout-grid">

      <!-- LEFT COLUMN: Shipping / Billing Address & Order Notes -->
      <div class="snub-checkout-left">

        <!-- Shipping Address Card -->
        <div class="snub-checkout-card">
          <h2 class="snub-checkout-card-title">Shipping Address</h2>

          <form id="snub-live-checkout-form" onsubmit="handleSnubOrderSubmit(event)">
            <!-- First Name & Last Name -->
            <div class="snub-form-row snub-form-two-col">
              <div class="snub-form-group">
                <label for="billing_first_name">First Name <span class="required-star">*</span></label>
                <input type="text" id="billing_first_name" name="billing_first_name" placeholder="First Name" required class="snub-input">
              </div>
              <div class="snub-form-group">
                <label for="billing_last_name">Last Name <span class="required-star">*</span></label>
                <input type="text" id="billing_last_name" name="billing_last_name" placeholder="Last Name" required class="snub-input">
              </div>
            </div>

            <!-- Company Name -->
            <div class="snub-form-row">
              <div class="snub-form-group">
                <label for="billing_company">Company Name (optional)</label>
                <input type="text" id="billing_company" name="billing_company" placeholder="Company Name" class="snub-input">
              </div>
            </div>

            <!-- Country / Region -->
            <div class="snub-form-row">
              <div class="snub-form-group">
                <label for="billing_country">Country / Region <span class="required-star">*</span></label>
                <div class="snub-select-wrapper">
                  <select id="billing_country" name="billing_country" required class="snub-input snub-select">
                    <option value="US" selected>United States (US)</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Street Address -->
            <div class="snub-form-row">
              <div class="snub-form-group">
                <label for="billing_address_1">Street address <span class="required-star">*</span></label>
                <input type="text" id="billing_address_1" name="billing_address_1" placeholder="House number and street name" required class="snub-input" style="margin-bottom: 12px;">
                <input type="text" id="billing_address_2" name="billing_address_2" placeholder="Apartment, suite, unit, etc. (optional)" class="snub-input">
              </div>
            </div>

            <!-- Town / City -->
            <div class="snub-form-row">
              <div class="snub-form-group">
                <label for="billing_city">Town / City <span class="required-star">*</span></label>
                <input type="text" id="billing_city" name="billing_city" required class="snub-input">
              </div>
            </div>

            <!-- State -->
            <div class="snub-form-row">
              <div class="snub-form-group">
                <label for="billing_state">State <span class="required-star">*</span></label>
                <div class="snub-select-wrapper">
                  <select id="billing_state" name="billing_state" required class="snub-input snub-select" onchange="updateShippingState(this.value)">
                    <option value="TX" selected>Texas</option>
                    <option value="CA">California</option>
                    <option value="NY">New York</option>
                    <option value="FL">Florida</option>
                    <option value="IL">Illinois</option>
                    <option value="WA">Washington</option>
                    <option value="CO">Colorado</option>
                    <option value="GA">Georgia</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="OTHER">Other State</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- ZIP Code -->
            <div class="snub-form-row">
              <div class="snub-form-group">
                <label for="billing_postcode">ZIP Code <span class="required-star">*</span></label>
                <input type="text" id="billing_postcode" name="billing_postcode" required class="snub-input">
              </div>
            </div>

            <!-- Phone -->
            <div class="snub-form-row">
              <div class="snub-form-group">
                <label for="billing_phone">Phone (optional)</label>
                <input type="tel" id="billing_phone" name="billing_phone" placeholder="Phone" class="snub-input">
              </div>
            </div>

            <!-- Email Address -->
            <div class="snub-form-row">
              <div class="snub-form-group">
                <label for="billing_email">Email Address <span class="required-star">*</span></label>
                <input type="email" id="billing_email" name="billing_email" placeholder="Email Address" required class="snub-input">
              </div>
            </div>
        </div>

        <!-- Ship to different address checkbox -->
        <div class="snub-diff-address-wrap">
          <label class="snub-checkbox-label">
            <input type="checkbox" id="ship_different_address" onchange="toggleDiffAddress(this)">
            <span>Ship to a different address?</span>
          </label>
        </div>

        <!-- Order Notes Card -->
        <div class="snub-checkout-card" style="margin-top: 24px;">
          <h2 class="snub-checkout-card-title" style="font-size: 1.25rem;">Order notes (optional)</h2>
          <div class="snub-form-group" style="margin-top: 14px;">
            <textarea id="order_comments" name="order_comments" rows="3" placeholder="Notes about your order, e.g. special notes for delivery." class="snub-input snub-textarea"></textarea>
          </div>
        </div>

      </div>

      <!-- RIGHT COLUMN: Your Order & Payment Gateways -->
      <div class="snub-checkout-right">

        <!-- 1. Your Order Table Box -->
        <div class="snub-checkout-card">
          <h2 class="snub-checkout-card-title">Your Order</h2>

          <div class="snub-order-table">
            <div class="snub-order-header">
              <span class="snub-col-left">Product</span>
              <span class="snub-col-right">Subtotal</span>
            </div>

            <!-- Live Product Rows -->
            <div id="snub-order-items-rows">
              <!-- Dynamically populated from localStorage snub_cart -->
            </div>

            <!-- Subtotal Row -->
            <div class="snub-order-row">
              <span class="snub-col-left">Subtotal</span>
              <span class="snub-col-right" id="snub-calc-subtotal">$0.00</span>
            </div>

            <!-- Discount Row (if promo applied) -->
            <div class="snub-order-row" id="snub-discount-row" style="display: none; color: #16a34a;">
              <span class="snub-col-left">Coupon: <strong id="snub-coupon-tag"></strong></span>
              <span class="snub-col-right" id="snub-calc-discount">-$0.00</span>
            </div>

            <!-- Shipment Row -->
            <div class="snub-order-row">
              <span class="snub-col-left">Shipment</span>
              <span class="snub-col-right" id="snub-calc-shipment" style="font-size: 0.92rem; color: #555;">
                Enter your address to view shipping options.
              </span>
            </div>

            <!-- Total Row -->
            <div class="snub-order-row snub-order-total-row">
              <span class="snub-col-left">Total</span>
              <span class="snub-col-right snub-total-amount" id="snub-calc-total">$0.00</span>
            </div>
          </div>
        </div>

        <!-- 2. Coupon Collapsible Box -->
        <div class="snub-checkout-card snub-coupon-card">
          <div class="snub-coupon-toggle-text">
            Have a coupon? <a href="javascript:void(0)" onclick="toggleCouponBox()" class="snub-purple-link">Click here to enter your coupon code</a>
          </div>

          <div id="snub-coupon-collapse" style="display: none; margin-top: 16px;">
            <div style="display: flex; gap: 8px;">
              <input type="text" id="snub-coupon-code" placeholder="Coupon code" class="snub-input" style="flex: 1;">
              <button type="button" onclick="applySnubCoupon()" class="snub-apply-coupon-btn">Apply coupon</button>
            </div>
            <div id="snub-coupon-feedback" style="display: none; margin-top: 10px; font-size: 0.88rem; font-weight: 600;"></div>
          </div>
        </div>

        <!-- 3. Payment Methods Box -->
        <div class="snub-checkout-card snub-payment-card">
          
          <!-- Option 1: Credit / Debit Card -->
          <div class="snub-payment-method">
            <label class="snub-radio-label">
              <input type="radio" name="payment_method" value="stripe" checked onchange="togglePaymentTab('stripe')">
              <span class="snub-payment-method-title">Credit / Debit Card</span>
              <span class="snub-card-symbol">💳</span>
            </label>

            <!-- Embedded Card Fields (Matching Live Stripe UPE design) -->
            <div id="stripe-fields-box" class="snub-stripe-box">
              <div class="snub-stripe-row">
                <label class="snub-stripe-label">Card number</label>
                <div class="snub-card-num-wrap">
                  <input type="text" class="snub-stripe-input" placeholder="1234 1234 1234 1234" value="4242 4242 4242 4242" maxlength="19">
                  <div class="snub-card-icons">
                    <span class="card-badge visa">VISA</span>
                    <span class="card-badge mastercard">MC</span>
                    <span class="card-badge amex">AMEX</span>
                    <span class="card-badge discover">DISC</span>
                  </div>
                </div>
              </div>

              <div class="snub-stripe-two-col">
                <div>
                  <label class="snub-stripe-label">Expiration date</label>
                  <input type="text" class="snub-stripe-input" placeholder="MM / YY" value="12 / 28" maxlength="7">
                </div>
                <div>
                  <label class="snub-stripe-label">Security code</label>
                  <div style="position: relative;">
                    <input type="text" class="snub-stripe-input" placeholder="CVC" value="123" maxlength="4">
                    <span style="position: absolute; right: 12px; top: 12px; color: #999; font-size: 0.85rem;">💳 123</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Option 2: Klarna -->
          <div class="snub-payment-method" style="margin-top: 18px; border-top: 1px solid #f0f0f0; padding-top: 16px;">
            <label class="snub-radio-label">
              <input type="radio" name="payment_method" value="klarna" onchange="togglePaymentTab('klarna')">
              <span class="snub-payment-method-title">Klarna</span>
              <span class="snub-klarna-badge">K</span>
            </label>
            <div id="klarna-fields-box" style="display: none; padding: 12px 0 0 28px; font-size: 0.88rem; color: #666;">
              Pay in 4 interest-free payments with Klarna. You will be redirected after clicking "Place order".
            </div>
          </div>

          <!-- Privacy text -->
          <div class="snub-privacy-policy-text">
            Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="{{ route('story') }}" class="snub-purple-link">privacy policy</a>.
          </div>

          <!-- Submit Button -->
          <button type="submit" id="snub-submit-order-btn" class="snub-place-order-btn">
            Place order
          </button>
          </form>

        </div>

      </div>

    </div>

    <!-- Order Confirmed Modal -->
    <div id="snub-order-success-overlay" class="snub-modal-overlay" style="display: none;">
      <div class="snub-modal-box">
        <div style="font-size: 3.5rem; margin-bottom: 16px;">🎉</div>
        <h2 style="font-family: inherit; font-size: 1.85rem; font-weight: 800; color: #1a0826; margin-bottom: 10px;">
          Order Received!
        </h2>
        <p style="color: #4b5563; font-size: 1.05rem; line-height: 1.5; margin-bottom: 24px;">
          Thank you. Your order <strong id="confirmed-order-number" style="color: #5b078b;">#SNUB-10482</strong> has been placed and is being prepared in our Texas kitchen.
        </p>
        <div style="background: #fdfaf6; border: 1px solid #ebdccb; border-radius: 12px; padding: 18px 20px; text-align: left; font-size: 0.95rem; margin-bottom: 24px;">
          <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
            <span>Order Status:</span>
            <strong style="color: #10b981;">Processing (Cold-Chain Insulated)</strong>
          </div>
          <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
            <span>Payment Method:</span>
            <strong id="confirmed-method">Credit / Debit Card</strong>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <span>Total:</span>
            <strong id="confirmed-total" style="color: #5b078b; font-size: 1.15rem;">$0.00</strong>
          </div>
        </div>
        <a href="{{ route('home') }}" class="snub-place-order-btn" style="display: block; text-decoration: none; padding: 14px; text-align: center; border-radius: 8px;">
          BACK TO HOMEPAGE
        </a>
      </div>
    </div>

  </div>
</div>

<style>
/* ========================================================
   snubfoods.com/checkout-2/ Exact Replica Stylesheet
   ======================================================== */
.snub-checkout-wrapper {
  background-color: #f7f7f9;
  min-height: 85vh;
  padding: 40px 24px 90px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  color: #2b2b2b;
}

.snub-checkout-container {
  max-width: 1200px;
  margin: 0 auto;
}

.snub-checkout-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: 36px;
  align-items: start;
}

/* Card Containers */
.snub-checkout-card {
  background: #ffffff;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
  padding: 32px 30px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
}

.snub-checkout-card-title {
  font-size: 1.4rem;
  font-weight: 700;
  color: #1a0826;
  margin: 0 0 24px 0;
  line-height: 1.2;
}

/* Form Groups & Inputs */
.snub-form-row {
  margin-bottom: 20px;
}

.snub-form-two-col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}

.snub-form-group {
  display: flex;
  flex-direction: column;
}

.snub-form-group label {
  font-size: 0.92rem;
  font-weight: 500;
  color: #333333;
  margin-bottom: 8px;
}

.required-star {
  color: #e11d48;
  font-weight: bold;
}

.snub-input {
  width: 100%;
  height: 48px;
  background-color: #f4f4f6;
  border: 1px solid #e2e2e6;
  border-radius: 6px;
  padding: 0 16px;
  font-size: 0.95rem;
  font-family: inherit;
  color: #222;
  outline: none;
  box-sizing: border-box;
  transition: border-color 0.2s ease, background-color 0.2s ease;
}

.snub-input::placeholder {
  color: #9999a3;
  font-weight: 400;
}

.snub-input:focus {
  background-color: #ffffff;
  border-color: #5b078b;
  box-shadow: 0 0 0 3px rgba(91, 7, 139, 0.1);
}

.snub-select-wrapper {
  position: relative;
}

.snub-select {
  appearance: none;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%23666' d='M1.41 0L6 4.58 10.59 0 12 1.41l-6 6-6-6z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 16px center;
  padding-right: 40px;
  cursor: pointer;
}

.snub-textarea {
  height: 90px;
  padding: 12px 16px;
  resize: vertical;
}

/* Checkbox */
.snub-diff-address-wrap {
  margin-top: 18px;
  padding-left: 4px;
}

.snub-checkbox-label {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size: 0.95rem;
  color: #444;
  cursor: pointer;
}

.snub-checkbox-label input[type="checkbox"] {
  width: 18px;
  height: 18px;
  accent-color: #5b078b;
  cursor: pointer;
}

/* Order Review Table */
.snub-order-table {
  display: flex;
  flex-direction: column;
}

.snub-order-header {
  display: flex;
  justify-content: space-between;
  font-size: 0.95rem;
  font-weight: 600;
  color: #666;
  border-bottom: 1px solid #e0e0e0;
  padding-bottom: 14px;
  margin-bottom: 14px;
}

.snub-order-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.95rem;
  padding: 12px 0;
  border-bottom: 1px solid #f0f0f0;
  color: #333;
}

.snub-order-product-item {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 12px 0;
  border-bottom: 1px solid #f0f0f0;
  font-size: 0.94rem;
  color: #222;
  gap: 12px;
}

.snub-order-total-row {
  border-bottom: none;
  border-top: 1px solid #e0e0e0;
  margin-top: 10px;
  padding-top: 18px;
}

.snub-order-total-row .snub-col-left {
  font-size: 1.1rem;
  font-weight: 700;
  color: #1a0826;
}

.snub-total-amount {
  font-size: 1.35rem;
  font-weight: 800;
  color: #1a0826;
}

/* Coupon Box */
.snub-coupon-card {
  margin-top: 24px;
  padding: 22px 28px;
}

.snub-coupon-toggle-text {
  font-size: 0.95rem;
  color: #555;
}

.snub-purple-link {
  color: #5b078b;
  font-weight: 600;
  text-decoration: none;
}

.snub-purple-link:hover {
  text-decoration: underline;
}

.snub-apply-coupon-btn {
  background: #5b078b;
  color: #ffffff;
  border: none;
  border-radius: 6px;
  padding: 0 20px;
  font-size: 0.9rem;
  font-weight: 700;
  cursor: pointer;
  transition: background 0.2s ease;
}

.snub-apply-coupon-btn:hover {
  background: #47046e;
}

/* Payment Card */
.snub-payment-card {
  margin-top: 24px;
}

.snub-radio-label {
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
  font-weight: 600;
  font-size: 1rem;
  color: #111;
}

.snub-radio-label input[type="radio"] {
  width: 18px;
  height: 18px;
  accent-color: #5b078b;
}

.snub-klarna-badge {
  background: #ffb3c7;
  color: #000;
  font-size: 0.75rem;
  font-weight: 900;
  padding: 2px 7px;
  border-radius: 4px;
  margin-left: 6px;
}

.snub-stripe-box {
  margin-top: 14px;
  background: #fbfbfd;
  border: 1px solid #e2e2e8;
  border-radius: 8px;
  padding: 18px 20px;
}

.snub-stripe-label {
  display: block;
  font-size: 0.85rem;
  color: #555;
  margin-bottom: 6px;
}

.snub-card-num-wrap {
  position: relative;
  display: flex;
  align-items: center;
}

.snub-stripe-input {
  width: 100%;
  height: 44px;
  background: #ffffff;
  border: 1px solid #d5d5dc;
  border-radius: 6px;
  padding: 0 14px;
  font-family: inherit;
  font-size: 0.95rem;
  color: #222;
  box-sizing: border-box;
}

.snub-card-icons {
  position: absolute;
  right: 10px;
  display: flex;
  gap: 4px;
}

.card-badge {
  font-size: 0.65rem;
  font-weight: 800;
  padding: 2px 5px;
  border-radius: 3px;
  background: #eee;
  color: #333;
}

.card-badge.visa { background: #1a1f71; color: #fff; }
.card-badge.mastercard { background: #eb001b; color: #fff; }
.card-badge.amex { background: #006fcf; color: #fff; }
.card-badge.discover { background: #f9a01b; color: #fff; }

.snub-stripe-two-col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  margin-top: 14px;
}

.snub-privacy-policy-text {
  font-size: 0.82rem;
  color: #777;
  line-height: 1.5;
  margin: 22px 0 20px;
}

.snub-place-order-btn {
  width: 100%;
  background: #5b078b;
  color: #ffffff;
  border: none;
  border-radius: 6px;
  padding: 16px;
  font-size: 1.05rem;
  font-weight: 700;
  cursor: pointer;
  letter-spacing: 0.3px;
  transition: background 0.2s ease, transform 0.1s ease;
}

.snub-place-order-btn:hover {
  background: #47046e;
}

.snub-place-order-btn:active {
  transform: scale(0.99);
}

/* Modal Overlay */
.snub-modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.65);
  backdrop-filter: blur(4px);
  z-index: 999999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
}

.snub-modal-box {
  background: #ffffff;
  border-radius: 16px;
  max-width: 520px;
  width: 100%;
  padding: 44px 32px;
  text-align: center;
  box-shadow: 0 25px 60px rgba(0,0,0,0.25);
  animation: modalFadeIn 0.3s ease;
}

@keyframes modalFadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

/* Responsive */
@media (max-width: 900px) {
  .snub-checkout-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }
}
@media (max-width: 540px) {
  .snub-form-two-col {
    grid-template-columns: 1fr;
  }
}
</style>

<script>
let discountRate = 0;
let appliedCode = '';

function renderSnubCheckout() {
  const cart = JSON.parse(localStorage.getItem('snub_cart')) || [];
  const emptyBox = document.getElementById('snub-checkout-empty');
  const formWrap = document.getElementById('snub-checkout-form-wrap');
  const itemsContainer = document.getElementById('snub-order-items-rows');

  if (cart.length === 0) {
    emptyBox.style.display = 'block';
    formWrap.style.display = 'none';
    return;
  }

  emptyBox.style.display = 'none';
  formWrap.style.display = 'grid';

  let subtotal = 0;
  itemsContainer.innerHTML = cart.map(item => {
    const lineTotal = item.price * item.qty;
    subtotal += lineTotal;
    return `
      <div class="snub-order-product-item">
        <span class="snub-col-left" style="line-height: 1.4;">
          ${item.name} <strong style="color: #666;">× ${item.qty}</strong>
        </span>
        <span class="snub-col-right" style="font-weight: 600; white-space: nowrap;">
          $${lineTotal.toFixed(2)}
        </span>
      </div>
    `;
  }).join('');

  document.getElementById('snub-calc-subtotal').textContent = '$' + subtotal.toFixed(2);

  // Discount
  const discountAmount = subtotal * discountRate;
  const discountRow = document.getElementById('snub-discount-row');
  if (discountRate > 0) {
    discountRow.style.display = 'flex';
    document.getElementById('snub-coupon-tag').textContent = appliedCode;
    document.getElementById('snub-calc-discount').textContent = '-$' + discountAmount.toFixed(2);
  } else {
    discountRow.style.display = 'none';
  }

  // Shipping
  const taxableSubtotal = Math.max(0, subtotal - discountAmount);
  const shipmentSpan = document.getElementById('snub-calc-shipment');
  let shippingCost = 0;

  if (subtotal >= 50) {
    shippingCost = 0;
    shipmentSpan.innerHTML = '<strong style="color: #10b981;">Free shipping</strong>';
  } else {
    shippingCost = 9.99;
    shipmentSpan.innerHTML = 'Standard cold-chain shipping: <strong>$9.99</strong>';
  }

  const finalTotal = taxableSubtotal + shippingCost;
  document.getElementById('snub-calc-total').textContent = '$' + finalTotal.toFixed(2);
}

function toggleCouponBox() {
  const box = document.getElementById('snub-coupon-collapse');
  box.style.display = (box.style.display === 'none' || box.style.display === '') ? 'block' : 'none';
}

function applySnubCoupon() {
  const code = document.getElementById('snub-coupon-code').value.trim().toUpperCase();
  const feedback = document.getElementById('snub-coupon-feedback');
  feedback.style.display = 'block';

  if (code === 'SNUB10' || code === 'CRUNCH10' || code === 'WELCOME10') {
    discountRate = 0.10;
    appliedCode = code;
    feedback.style.color = '#10b981';
    feedback.textContent = `Coupon code "${code}" applied (10% OFF)!`;
    renderSnubCheckout();
  } else if (code === 'CRUNCH20' || code === 'SNUB20') {
    discountRate = 0.20;
    appliedCode = code;
    feedback.style.color = '#10b981';
    feedback.textContent = `Coupon code "${code}" applied (20% OFF)!`;
    renderSnubCheckout();
  } else {
    feedback.style.color = '#e11d48';
    feedback.textContent = `Coupon "${code}" does not exist! Try SNUB10.`;
  }
}

function togglePaymentTab(method) {
  const stripeBox = document.getElementById('stripe-fields-box');
  const klarnaBox = document.getElementById('klarna-fields-box');

  if (method === 'stripe') {
    stripeBox.style.display = 'block';
    klarnaBox.style.display = 'none';
  } else {
    stripeBox.style.display = 'none';
    klarnaBox.style.display = 'block';
  }
}

function toggleDiffAddress(cb) {
  // Optional extension: show alternate shipping fields if checked
}

function updateShippingState(state) {
  renderSnubCheckout();
}

function handleSnubOrderSubmit(e) {
  e.preventDefault();
  const randomOrderNum = Math.floor(10000 + Math.random() * 90000);
  const totalStr = document.getElementById('snub-calc-total').textContent;
  const isKlarna = document.querySelector('input[name="payment_method"]:checked').value === 'klarna';

  document.getElementById('confirmed-order-number').textContent = '#SNUB-' + randomOrderNum;
  document.getElementById('confirmed-total').textContent = totalStr;
  document.getElementById('confirmed-method').textContent = isKlarna ? 'Klarna (4 Installments)' : 'Credit / Debit Card (Stripe)';
  document.getElementById('snub-order-success-overlay').style.display = 'flex';

  // Empty cart
  localStorage.removeItem('snub_cart');
  if (window.SnubCart && window.SnubCart.updateCartUI) {
    window.SnubCart.updateCartUI();
  }
}

document.addEventListener('DOMContentLoaded', renderSnubCheckout);
</script>
@endsection
