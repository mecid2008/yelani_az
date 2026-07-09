# Project Progress Log (DONESTEPS)

## Completed Tasks
* [x] Initial `index.php` setup with silk animation and basic SEO.
* [x] Phase 1.1: Created project folders `inc`, `assets/models`, and `js`.
* [x] Phase 1.2: Created `inc/data.php` and moved shared content/SEO/model data there; connected `index.php` to load data from this file.
* [x] Phase 1.3: Split global layout into reusable `inc/header.php` and `inc/footer.php`, and updated `index.php` to include them.
* [x] Phase 1.4: Added shared helper `inc/lang.php` with `resolve_lang()` and switched `index.php` to use centralized language resolution.
* [x] Phase 2.1: Updated Hero section by removing WhatsApp CTA, adding localized `Discover Collection` button, and enabling smooth-scroll to the next section.
* [x] Phase 2.2: Added responsive model grid on `index.php` (1 column mobile / 2 desktop) driven by `$models`, with product↔inspiration image swap on hover, lazy-loaded images, and `Discover` link targeting `#collection` with `scroll-behavior: smooth`. Updated Möminə Xatun asset paths to `assets/models/momine-xatun/` (real filenames). Added `inc/images.php` (`resolve_public_image`, `public_asset_exists`) to prefer `.webp` when present. Added CLI tool `tools/convert_momine_xatun_webp.php` to batch-convert that folder to WebP. Adjusted layout (`overflow-x-hidden`, hero-only float animation) so the page scrolls to the collection.
* [x] Phase 2.3: Replaced the old top nav with a fixed site header (`inc/header.php`); left side compact logo linking to `index.php` with preserved `lang`, right side language switcher (`aria-current` on active code). Added `scroll-padding-top` on `html`, top padding on the page shell, and semi-transparent backdrop so hero/collection scroll sits below the bar.

## Current Focus
* ROADMAP Phase 2: Splash (`index.php`) vs catalog (`collection.php`); mark checklist items as done when verified in browser.

## Notes
* Main catalog URL: `collection.php?lang=…`. Splash no longer embeds the model grid; header on splash shows only the language switcher (no small logo).

## Pending Decisions
* Final list of images for Möminə Xatun and Natəvan.
* Russian distributor contact details.