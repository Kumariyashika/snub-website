/**
 * Snüb Foods - Global Shopping Cart & Drawer Controller
 * Handles persistent cart state via localStorage, free shipping meter,
 * slide-over drawer toggles, and toast notifications.
 */
(() => {
  'use strict';

  // State
  let cart = JSON.parse(localStorage.getItem('snub_cart') || '[]');

  // DOM Elements
  const cartDrawer = document.getElementById('cart-drawer');
  const cartOverlay = document.getElementById('cart-drawer-overlay');
  const openCartBtn = document.getElementById('open-cart-btn');
  const closeCartBtn = document.getElementById('btn-close-cart');
  const headerCartCount = document.getElementById('header-cart-count');
  const drawerCartCount = document.getElementById('cart-drawer-count');
  const cartBody = document.getElementById('cart-drawer-body');
  const cartSubtotal = document.getElementById('cart-subtotal');
  const shippingMsg = document.getElementById('shipping-meter-msg');
  const shippingFill = document.getElementById('shipping-meter-fill');
  const toast = document.getElementById('toast-msg');
  const toastText = document.getElementById('toast-text');

  /**
   * Save cart array to localStorage and refresh UI
   */
  function saveCart() {
    localStorage.setItem('snub_cart', JSON.stringify(cart));
    updateCartUI();
  }

  /**
   * Update all cart UI representations (badge, drawer body, subtotal, shipping meter)
   */
  function updateCartUI() {
    const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
    const subtotal = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);

    if (headerCartCount) headerCartCount.textContent = totalItems;
    if (drawerCartCount) drawerCartCount.textContent = totalItems;
    if (cartSubtotal) cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;

    // Free shipping threshold ($50.00)
    const freeShipGoal = 50.00;
    if (shippingMsg && shippingFill) {
      if (subtotal >= freeShipGoal) {
        shippingMsg.innerHTML = '🎉 <strong>CONGRATS! You unlocked FREE SHIPPING!</strong>';
        shippingFill.style.width = '100%';
      } else {
        const remaining = (freeShipGoal - subtotal).toFixed(2);
        const percent = Math.min(100, (subtotal / freeShipGoal) * 100);
        shippingMsg.textContent = `🚚 Add $${remaining} more for FREE SHIPPING!`;
        shippingFill.style.width = `${percent}%`;
      }
    }

    // Render Cart Drawer Body
    if (cartBody) {
      if (cart.length === 0) {
        cartBody.innerHTML = `
          <div class="cart-empty-state">
            <span class="cart-empty-icon">🧺</span>
            <p style="font-weight:700; color:#222; font-size:1.1rem;">Your crunch cart is empty</p>
            <p style="font-size:0.9rem; color:#6b7280;">Add some real-root snacks to get the party started!</p>
            <a class="cart-empty-btn" href="/#shop" onclick="window.SnubCart.close()">Browse Snacks</a>
          </div>
        `;
      } else {
        cartBody.innerHTML = cart.map((item, idx) => `
          <div class="cart-item-card">
            <img class="cart-item-img" src="${item.img || '/images/prod-plantain-crunchlets.png'}" alt="${item.name}">
            <div class="cart-item-info">
              <strong>${item.name}</strong>
              <div class="cart-item-price">$${(item.price * item.qty).toFixed(2)}</div>
              <div class="cart-item-controls">
                <button class="qty-btn" onclick="window.SnubCart.changeQty(${idx}, -1)" aria-label="Decrease quantity">-</button>
                <span class="qty-display">${item.qty}</span>
                <button class="qty-btn" onclick="window.SnubCart.changeQty(${idx}, 1)" aria-label="Increase quantity">+</button>
              </div>
            </div>
            <button class="btn-remove-item" onclick="window.SnubCart.removeItem(${idx})" aria-label="Remove item">✕</button>
          </div>
        `).join('');
      }
    }
  }

  /**
   * Open the slide-over cart drawer
   */
  function openCart() {
    if (!cartDrawer) return;
    cartDrawer.classList.add('open');
    cartOverlay?.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  /**
   * Close the slide-over cart drawer
   */
  function closeCart() {
    if (!cartDrawer) return;
    cartDrawer.classList.remove('open');
    cartOverlay?.classList.remove('open');
    document.body.style.overflow = '';
  }

  /**
   * Display toast popup notification
   */
  function showToast(msg) {
    if (!toast || !toastText) return;
    toastText.textContent = msg;
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 3500);
  }

  /**
   * Add an item to the cart
   */
  function addToCart(name, price, img) {
    const existing = cart.find(item => item.name === name);
    if (existing) {
      existing.qty += 1;
    } else {
      cart.push({ name, price: parseFloat(price), img: img || '', qty: 1 });
    }
    saveCart();
    showToast(`${name} added to cart!`);
    openCart();
  }

  /**
   * Adjust item quantity by delta (+1 or -1)
   */
  function changeQty(idx, delta) {
    if (!cart[idx]) return;
    cart[idx].qty += delta;
    if (cart[idx].qty <= 0) {
      cart.splice(idx, 1);
    }
    saveCart();
  }

  /**
   * Remove item from cart by index
   */
  function removeItem(idx) {
    cart.splice(idx, 1);
    saveCart();
  }

  // Global event delegation for Add-to-Cart buttons
  document.addEventListener('click', (e) => {
    const addBtn = e.target.closest('.btn-add-to-cart, .btn-bundle-cart');
    if (addBtn) {
      const name = addBtn.getAttribute('data-name');
      const price = addBtn.getAttribute('data-price');
      const img = addBtn.getAttribute('data-img');
      addToCart(name, price, img);
    }
  });

  // Bind Open/Close Triggers
  openCartBtn?.addEventListener('click', openCart);
  closeCartBtn?.addEventListener('click', closeCart);
  cartOverlay?.addEventListener('click', closeCart);

  // Bind Checkout Trigger
  document.getElementById('btn-checkout')?.addEventListener('click', () => {
    if (cart.length === 0) {
      showToast('Please add items to your cart first!');
      return;
    }
    window.location.href = '/checkout';
  });

  // Expose global methods
  window.SnubCart = {
    add: addToCart,
    open: openCart,
    close: closeCart,
    changeQty: changeQty,
    removeItem: removeItem,
    showToast: showToast,
    getCart: () => cart
  };

  // Initial render on page load
  document.addEventListener('DOMContentLoaded', updateCartUI);
  updateCartUI();
})();
