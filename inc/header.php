<?php
if (!isset($lang, $page_title, $page_desc, $og_locale, $instagram_url, $allowed_langs)) {
    http_response_code(500);
    exit('Header variables are not initialized.');
}

$is_splash_page = !empty($is_splash_page);
$lang_switch_script = $lang_switch_script ?? basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$og_url_page = $og_url ?? 'https://yelani.az/';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_desc; ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?php echo $og_locale; ?>">
    <meta property="og:image" content="https://yelani.az/assets/logo.png">
    <meta property="og:url" content="<?php echo htmlspecialchars($og_url_page, ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $page_desc; ?>">
    <meta name="twitter:image" content="https://yelani.az/assets/logo.png">
    <link rel="me" href="<?php echo $instagram_url; ?>">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Yeləni",
            "url": "https://yelani.az",
            "sameAs": ["<?php echo $instagram_url; ?>"]
        }
    </script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            gold: '#D2AE6E',
            dark: '#284653',
          }
        }
      }
    }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <style>
        :root {
            --yelani-gold: #D2AE6E;
            --yelani-dark: #284653;
        }

        body { font-family: 'Montserrat', sans-serif; background-color: var(--yelani-dark); color: white; }
        .serif { font-family: 'Playfair Display', serif; }

        @keyframes silkFlow {
            0% { transform: scale(1) translate(0, 0) rotate(0deg); filter: brightness(1); }
            33% { transform: scale(1.08) translate(-2%, 1%) rotate(0.5deg); filter: brightness(1.1); }
            66% { transform: scale(1.05) translate(1%, -1%) rotate(-0.5deg); filter: brightness(0.9); }
            100% { transform: scale(1) translate(0, 0) rotate(0deg); filter: brightness(1); }
        }

        .animate-silk {
            animation: silkFlow 20s ease-in-out infinite;
            will-change: transform, filter;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .floating-content { animation: float 6s ease-in-out infinite; }

        @keyframes goldGlow {
            0%, 100% { filter: drop-shadow(0 0 15px rgba(210, 174, 110, 0.2)); opacity: 0.9; }
            50% { filter: drop-shadow(0 0 30px rgba(210, 174, 110, 0.5)); opacity: 1; }
        }

        .logo-glow { animation: goldGlow 4s ease-in-out infinite; }

        @keyframes revealUp {
            from { opacity: 0; transform: translateY(30px); filter: blur(10px); }
            to { opacity: 1; transform: translateY(0); filter: blur(0); }
        }

        .reveal { opacity: 0; animation: revealUp 1.5s cubic-bezier(0.2, 0.8, 0.2, 1) forwards; }
        .reveal-1 { animation-delay: 0.2s; }
        .reveal-2 { animation-delay: 0.5s; }
        .reveal-3 { animation-delay: 0.8s; }
        .text-gold { color: var(--yelani-gold); }

        .model-card-media {
            position: relative;
            aspect-ratio: 4 / 5;
            overflow: hidden;
        }
        .model-card-media img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.7s ease, transform 0.9s ease;
        }
        .model-card-media .model-img-product {
            opacity: 1;
            transform: scale(1);
        }
        .model-card-media .model-img-inspiration {
            opacity: 0;
            transform: scale(1.04);
        }
        .model-card:hover .model-card-media .model-img-product {
            opacity: 0;
            transform: scale(1.05);
        }
        .model-card:hover .model-card-media .model-img-inspiration {
            opacity: 1;
            transform: scale(1);
        }
        .model-card-media img.model-img-single {
            opacity: 1;
            transform: none;
        }

        .site-header-logo {
            filter: drop-shadow(0 0 10px rgba(210, 174, 110, 0.18));
        }
    </style>
</head>
<body class="min-h-screen overflow-x-hidden">
    <div class="fixed inset-0 z-0">
        <img src="assets/bg.png" alt="" class="w-full h-full object-cover animate-silk opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#284653]/80 to-[#284653]"></div>
    </div>

    <?php
    $home_href = 'index.php?' . http_build_query(['lang' => $lang]);
    $header_shell_pt = $is_splash_page ? 'pt-14 md:pt-16' : 'pt-[4.75rem] md:pt-[5.25rem]';
    ?>
    <header class="fixed top-0 left-0 right-0 z-50 <?php echo $is_splash_page ? '' : 'border-b border-gold/15'; ?> bg-[#284653]/88 backdrop-blur-md">
        <div class="mx-auto flex max-w-6xl items-center gap-6 px-4 py-2.5 md:px-8 md:py-3.5 <?php echo $is_splash_page ? 'justify-end' : 'justify-between'; ?>">
            <?php if (!$is_splash_page): ?>
            <a href="<?php echo htmlspecialchars($home_href, ENT_QUOTES, 'UTF-8'); ?>"
               class="site-header-logo block shrink-0 opacity-95 transition-opacity duration-300 hover:opacity-100">
                <img src="assets/logo.png?v=1.1" alt="Yeləni" width="120" height="48" class="h-8 w-auto md:h-10">
            </a>
            <?php endif; ?>
            <nav class="flex shrink-0 items-center gap-4 text-[10px] tracking-[0.28em] md:gap-7" aria-label="Language">
                <?php foreach ($allowed_langs as $l): ?>
                    <?php
                    $lang_href = $lang_switch_script . '?' . http_build_query(['lang' => $l]);
                    $is_active = $lang === $l;
                    ?>
                    <a href="<?php echo htmlspecialchars($lang_href, ENT_QUOTES, 'UTF-8'); ?>"
                       <?php if ($is_active): ?>aria-current="true"<?php endif; ?>
                       class="<?php echo $is_active ? 'text-gold font-bold' : 'text-white/45 hover:text-white'; ?> min-w-[2.25rem] text-center uppercase transition-colors duration-500">
                        <?php echo htmlspecialchars($l, ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>

    <div class="relative z-10 flex min-h-screen flex-col justify-between px-4 pb-8 <?php echo $header_shell_pt; ?> md:px-12 md:pb-12">
        <main class="flex w-full flex-grow flex-col <?php echo !empty($main_layout_class) ? htmlspecialchars($main_layout_class, ENT_QUOTES, 'UTF-8') : 'items-center text-center'; ?>">
