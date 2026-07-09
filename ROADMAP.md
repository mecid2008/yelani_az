# Yelani.az Development Roadmap

## Project Overview
Transformation of a PHP landing page into a premium multi-language catalogue for Azerbaijani Kelaghayi. 
**Tech Stack:** PHP, Tailwind CSS, Swiper.js, Fancybox.
**Target Markets:** Azerbaijan, Russia, International.

---

## PHASE 1: Architecture & Refactoring
- [ ] **1.1. Directory Structure:** Create folders: `/inc`, `/assets/models`, `/js`.
- [ ] **1.2. Config & Data:** Create `inc/data.php` to store the `$models` array (Momine Khatun, Natavan) with all translations, specs, and image paths.
- [ ] **1.3. Global Layout:** Split `index.php` into `inc/header.php` and `inc/footer.php` to reuse them on `model.php`.
- [ ] **1.4. Lang Logic:** Move language switching logic to a separate helper to ensure it works across all pages.

## PHASE 2: Navigation & Collection Page
- [x] **2.1. Splash Screen (index.php):** - Remove duplicate small logo in header.
    - Change "Discover" button link to `collection.php`.
- [x] **2.2. Create collection.php:**
    - Implement a clean header with a small logo and language switcher.
    - Create a premium grid for models (4:5 ratio).
    - Loop through `$models` from `data.php`.
- [x] **2.3. Hover Effects:** - Add smooth transitions on model cards (show inspiration on hover).

## PHASE 3: Product Page Development (model.php)
- [ ] **3.1. Dynamic Routing:** Setup `model.php` to accept `?id=slug`.
- [ ] **3.2. Storytelling Block:** Layout for "Inspiration" text (History/Art) and "Specifications" (Size/Material).
- [ ] **3.3. Media Integration:**
    - Integrate **Swiper.js** for a premium touch-enabled slider (5-10 photos).
    - Integrate **Fancybox** for high-res zoom.
    - Add a Video block (YouTube embed or self-hosted background video).
- [ ] **3.4. Regional Ordering System:**
    - Logic to show "Order in Baku (WA)" vs "Order in Russia (Distributor)".
    - Placeholder for International shipping (Stripe/Contact form).

## PHASE 4: SEO, GEO & Performance
- [ ] **4.1. Technical SEO:** Implement `hreflang` tags, canonical URLs, and dynamic Meta titles/descriptions for each model.
- [ ] **4.2. JSON-LD:** Add structured data for `Product` and `Organization`.
- [ ] **4.3. Assets Optimization:** Instructions to use WebP and Lazy Loading for all images.
- [ ] **4.4. Social Tags:** Ensure OpenGraph (OG) tags work perfectly for sharing on Instagram/WhatsApp.

## PHASE 5: Final Polish
- [ ] **5.1. Smooth Transitions:** Add "page fade-in" animations.
- [ ] **5.2. Mobile UX:** Final check of touch targets and menu readability.