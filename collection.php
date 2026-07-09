<?php
require __DIR__ . '/inc/data.php';
require __DIR__ . '/inc/lang.php';
require __DIR__ . '/inc/images.php';

$lang = resolve_lang($allowed_langs);

$page_title = $seo_collection[$lang]['title'] ?? $seo_collection['az']['title'];
$page_desc = $seo_collection[$lang]['desc'] ?? $seo_collection['az']['desc'];
$og_locale = $og_locale_map[$lang] ?? 'az_AZ';
$og_url = 'https://yelani.az/collection.php';
$lang_switch_script = 'collection.php';
$main_layout_class = 'items-stretch text-left';

require __DIR__ . '/inc/header.php';
?>
            <div class="mx-auto w-full max-w-5xl px-4 pb-16 md:px-0">
                <header class="reveal mb-10 border-b border-gold/20 pb-6">
                    <h1 class="text-[10px] md:text-xs tracking-[0.45em] uppercase text-gold">
                        <?php echo htmlspecialchars($content[$lang]['collection_title'], ENT_QUOTES, 'UTF-8'); ?>
                    </h1>
                </header>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-10">
                    <?php foreach ($models as $model): ?>
                        <?php
                        $name = $model['name'][$lang] ?? $model['name']['az'];
                        $raw0 = $model['images'][0] ?? '';
                        $raw1 = $model['images'][1] ?? '';
                        $has0 = $raw0 !== '' && public_asset_exists($raw0);
                        $has1 = $raw1 !== '' && public_asset_exists($raw1);
                        $src0 = $has0 ? resolve_public_image($raw0) : '';
                        $src1 = $has1 ? resolve_public_image($raw1) : '';
                        ?>
                        <article class="model-card group border border-gold/15 bg-black/25 backdrop-blur-sm transition-colors duration-500 hover:border-gold/35">
                            <?php if ($has0 && $has1): ?>
                                <div class="model-card-media">
                                    <img class="model-img-product" src="<?php echo htmlspecialchars($src0, ENT_QUOTES, 'UTF-8'); ?>"
                                         alt="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?> — <?php echo htmlspecialchars($content[$lang]['label_product'], ENT_QUOTES, 'UTF-8'); ?>"
                                         loading="lazy" decoding="async" width="800" height="1000">
                                    <img class="model-img-inspiration" src="<?php echo htmlspecialchars($src1, ENT_QUOTES, 'UTF-8'); ?>"
                                         alt="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?> — <?php echo htmlspecialchars($content[$lang]['label_inspiration'], ENT_QUOTES, 'UTF-8'); ?>"
                                         loading="lazy" decoding="async" width="800" height="1000">
                                    <div class="pointer-events-none absolute inset-x-0 bottom-0 flex justify-between bg-gradient-to-t from-black/70 to-transparent px-4 py-4 text-[9px] tracking-[0.35em] uppercase text-white/70">
                                        <span><?php echo htmlspecialchars($content[$lang]['label_product'], ENT_QUOTES, 'UTF-8'); ?></span>
                                        <span class="opacity-0 transition-opacity duration-500 group-hover:opacity-100"><?php echo htmlspecialchars($content[$lang]['label_inspiration'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    </div>
                                </div>
                            <?php elseif ($has0): ?>
                                <div class="model-card-media">
                                    <img class="model-img-single" src="<?php echo htmlspecialchars($src0, ENT_QUOTES, 'UTF-8'); ?>"
                                         alt="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>"
                                         loading="lazy" decoding="async" width="800" height="1000">
                                </div>
                            <?php else: ?>
                                <div class="model-card-media flex items-center justify-center bg-white/5">
                                    <span class="px-6 text-center text-[10px] tracking-[0.3em] uppercase text-white/35"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            <?php endif; ?>

                            <div class="p-6 md:p-8">
                                <h2 class="serif text-xl text-white/95 md:text-2xl"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></h2>
                                <p class="mt-3 text-sm leading-relaxed text-white/55">
                                    <?php echo htmlspecialchars($model['inspiration'][$lang] ?? $model['inspiration']['az'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
<?php require __DIR__ . '/inc/footer.php'; ?>
