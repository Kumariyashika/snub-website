# Snüb Foods — Web Application (Laravel 11)

A full-fidelity, production-grade replica and expansion of the official **[Snüb Foods](https://snubfoods.com/)** e-commerce brand experience, built with **Laravel 11**, Blade templates, custom modern responsive CSS, interactive slide-out cart drawer, and live WooCommerce checkout replica.

---

## 🌿 Overview & Highlights

- **100% Authentic Content & Assets**: Direct replica of live content from [snubfoods.com](https://snubfoods.com/), including founder backstory, fermentation methodologies, gut-health science, authentic product & bundle photography, and brand identity badges.
- **Dynamic Product & Bundle Catalog**: Driven by Eloquent models (`Product`), database migrations, and seeders loaded with 7 individual live products and 7 signature bundles.
- **Interactive Cart & Drawer System**: Client-side slide-over cart drawer with free-shipping threshold tracker ($50+), dynamic quantity controls, promo coupon discounts, and instant badge sync.
- **Full WooCommerce Checkout Replica (`/checkout` & `/checkout-2`)**: Matches live checkout with billing/shipping address forms, interactive order summary, coupon application (`SNUB10`, `CRUNCH20`), payment simulation (Credit Card via Stripe mock & Klarna), and order confirmation modal.
- **Working Contact Form**: Database-persisted inquiry submissions with validation and flash notifications.

---

## 🚀 Pages & Routes

| Route | Description | Live Source Counterpart |
|---|---|---|
| `/` | Homepage (Hero, Born in Texas, 7 Products, Moods, 7 Bundles, Process, Reels, Newsletter) | `snubfoods.com/` |
| `/our-mission` | Brand Mission, Core Values, What We Stand For, Texas Sourcing, Impact in Motion | `snubfoods.com/our-mission/` |
| `/our-story` | Meet the Mom Behind Snüb — 10 Milestones, Family Journey & Kitchen Genesis | `snubfoods.com/meet-the-mom-behind-snub/` |
| `/why-gut-health-matters` | Microbiome science, prebiotic resistant starch, gut-brain axis, clinical breakdown | `snubfoods.com/why-gut-health-matters/` |
| `/fermentation-process` | 5-Step fermentation methodology, cold-culture preservation | `snubfoods.com/explore-our-fermentation-process/` |
| `/contact` | Working contact form, customer care hotline, wholesale inquiries & Texas HQ | `snubfoods.com/contact-us/` |
| `/checkout` / `/checkout-2` | Interactive live checkout page with order review & payment methods | `snubfoods.com/checkout-2/` |

---

## 🛠️ Tech Stack & Architecture

- **Backend**: PHP 8.2+ / Laravel 11
- **Database**: SQLite (default zero-config) / MySQL compatible
- **Frontend**: Blade Templating with reusable layouts (`layouts.app`, `partials.header`, `partials.cart-drawer`, `partials.footer`, `partials.announcement`)
- **Styling**: Vanilla CSS with modern custom design system, HSL color tokens, responsive flex/grid layouts, micro-animations
- **Interactivity**: Vanilla JavaScript with `localStorage` state persistence for the shopping cart

---

## ⚙️ Installation & Local Setup

### 1. Clone the repository
```bash
git clone https://github.com/Kumariyashika/snub-website.git
cd snub-website
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Environment Configuration
```bash
copy .env.example .env
php artisan key:generate
```

### 4. Database Setup & Seeding
```bash
# Creates SQLite database and seeds all 14 authentic Snüb products & bundles
php artisan migrate --seed
```

### 5. Start the Local Server
```bash
php artisan serve
```

Open your browser at [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## 📁 Project Structure

```
snubfoods-laravel/
├── app/
│   ├── Http/Controllers/
│   │   ├── PageController.php      # Pages & routes handler
│   │   ├── ProductController.php   # Product catalog & details
│   │   └── ContactController.php   # Form validation & inquiry saving
│   └── Models/
│       ├── Product.php
│       └── ContactInquiry.php
├── database/
│   ├── migrations/                 # Products & inquiries schema
│   └── seeders/
│       └── ProductSeeder.php       # All 14 authentic items with images
├── public/
│   ├── assets/
│   │   ├── css/styles.css          # Design system & responsive layout styles
│   │   └── js/cart.js              # Cart drawer & local storage logic
│   └── images/                     # Authentic Snüb products, founder & banners
├── resources/views/
│   ├── layouts/app.blade.php       # Master layout with drawer & header
│   ├── partials/                   # Header, Announcement, Cart Drawer, Footer
│   ├── pages/                      # Mission, Story, Gut Health, Fermentation
│   ├── home.blade.php              # Full Homepage
│   ├── checkout.blade.php          # Checkout-2 replica
│   └── contact.blade.php           # Working contact page
└── routes/
    └── web.php                     # Clean SEO-optimized routes
```

---

## 📜 License
Open-sourced under the [MIT License](LICENSE).
