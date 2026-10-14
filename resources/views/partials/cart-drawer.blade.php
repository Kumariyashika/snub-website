<!-- Interactive Slide-Over Cart Drawer -->
<div class="cart-drawer-overlay" id="cart-drawer-overlay"></div>
<aside class="cart-drawer" id="cart-drawer" aria-label="Shopping Cart">
  <div class="cart-drawer-header">
    <h3>
      <span>🛒</span>
      <span>Your Crunch Cart (<span id="cart-drawer-count">0</span>)</span>
    </h3>
    <button class="btn-close-cart" id="btn-close-cart" aria-label="Close Cart">✕</button>
  </div>

  <div class="shipping-meter-wrap">
    <div class="shipping-meter-text">
      <span id="shipping-meter-msg">🚚 Add $50.00 more for FREE SHIPPING!</span>
    </div>
    <div class="shipping-meter-bar">
      <div class="shipping-meter-fill" id="shipping-meter-fill"></div>
    </div>
  </div>

  <div class="cart-drawer-body" id="cart-drawer-body">
    <!-- Rendered dynamically by cart.js -->
  </div>

  <div class="cart-drawer-footer">
    <div class="cart-subtotal-row">
      <span>Estimated Subtotal:</span>
      <span class="cart-subtotal-val" id="cart-subtotal">$0.00</span>
    </div>
    <button class="btn-checkout" id="btn-checkout">PROCEED TO SECURE CHECKOUT →</button>
  </div>
</aside>

<!-- Toast Notification -->
<div class="toast-msg" id="toast-msg" role="status" aria-live="polite">
  <span>🛒</span>
  <span id="toast-text">Item added to cart!</span>
</div>
