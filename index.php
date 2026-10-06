<?php
require __DIR__ . '/inc/data.php';
require __DIR__ . '/inc/lang.php';

$lang = resolve_lang($allowed_langs);

$page_title = $seo[$lang]['title'] ?? $seo['az']['title'];
$page_desc = $seo[$lang]['desc'] ?? $seo['az']['desc'];
$og_locale = $og_locale_map[$lang] ?? 'az_AZ';
$og_url = 'https://yelani.az/';
$is_splash_page = true;
$lang_switch_script = 'index.php';

$contact_href = 'https://wa.me/' . $whatsapp_number . '?' . http_build_query(
    ['text' => $content[$lang]['wa_msg']],
    '',
    '&',
    PHP_QUERY_RFC3986
);

require __DIR__ . '/inc/header.php';
?>
            <div class="floating-content flex w-full max-w-3xl flex-col items-center px-4">
            <div class="reveal reveal-1 mb-8">
                <div class="relative inline-block">
                    <div class="absolute -inset-4 border border-gold/20 scale-95 group-hover:scale-100 transition-transform duration-700"></div>
                    <img src="assets/logo.png?v=1.1" alt="Yeləni Logo" class="w-48 md:w-64 h-auto drop-shadow-2xl logo-glow">
                </div>
            </div>

            <div class="reveal reveal-2 max-w-2xl px-4">
                <p class="serif italic text-2xl md:text-4xl text-white/90 mb-4 tracking-wide leading-tight">
                    «<?php echo htmlspecialchars($content[$lang]['slogan'], ENT_QUOTES, 'UTF-8'); ?>»
                </p>
                <div class="h-[1px] w-12 bg-gold/50 mx-auto mb-8"></div>

                <h2 class="text-[10px] md:text-xs tracking-[0.6em] uppercase text-gold mb-4 opacity-80">
                    <?php echo htmlspecialchars($content[$lang]['title'], ENT_QUOTES, 'UTF-8'); ?>
                </h2>
                <p class="text-[11px] md:text-xs text-white/40 uppercase tracking-[0.3em] font-light leading-loose mb-10">
                    <?php echo htmlspecialchars($content[$lang]['subtitle'], ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </div>

            <div class="reveal reveal-3">
                <a href="<?php echo htmlspecialchars($contact_href, ENT_QUOTES, 'UTF-8'); ?>"
                   class="group relative inline-flex items-center gap-4 px-12 py-5 border border-gold/30 hover:border-gold transition-all duration-700">
                    <span class="text-gold text-[10px] tracking-[0.4em] uppercase group-hover:text-white transition-colors relative z-10">
                        <?php echo htmlspecialchars($content[$lang]['button'], ENT_QUOTES, 'UTF-8'); ?>
                    </span>
                    <div class="absolute inset-0 bg-gold origin-bottom scale-y-0 group-hover:scale-y-100 transition-transform duration-500"></div>
                </a>
            </div>
            </div>
<?php require __DIR__ . '/inc/footer.php'; ?>
