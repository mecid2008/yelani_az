<?php
// --- НАСТРОЙКИ ---
$whatsapp_number = "994559919009"; // Ваш номер (без +, только цифры)

$allowed_langs = ['az', 'en', 'ru'];
$lang = $_GET['lang'] ?? 'az';
if (!in_array($lang, $allowed_langs)) { $lang = 'az'; }

$content = [
    'az' => [
        'slogan' => 'İpəkdə zəriflik, naxışda tarix',
        'title' => 'Tezliklə açılış',
        'subtitle' => 'Yeləni — Azərbaycan kəlağayı sənətinin zərifliyi və mirası.',
        'button' => 'WhatsApp-da yazın',
        'wa_msg' => 'Salam! Yeləni kəlağayıları ilə maraqlanıram. Yeniliklər barədə mənə məlumat verin.'
    ],
    'en' => [
        'slogan' => 'Elegance in silk, history in patterns',
        'title' => 'Coming Soon',
        'subtitle' => 'Yeləni — The elegance and heritage of Azerbaijani Kelaghayi art.',
        'button' => 'Contact via WhatsApp',
        'wa_msg' => 'Hello! I am interested in Yeləni kelaghayis. Please keep me updated.'
    ],
    'ru' => [
        'slogan' => 'Изящество в шелке, история в узорах',
        'title' => 'Скоро открытие',
        'subtitle' => 'Yeləni — элегантность и наследие азербайджанского искусства келагаи.',
        'button' => 'Написать в WhatsApp',
        'wa_msg' => 'Здравствуйте! Меня интересуют келагаи Yeləni. Сообщите мне об открытии.'
    ]
];

$wa_link = "https://wa.me/" . $whatsapp_number . "?text=" . urlencode($content[$lang]['wa_msg']);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$seo = [
    'az' => [
        'title' => 'Yeləni — Azərbaycan kəlağayıları | Bakı, Nizami küçəsi',
        'desc'  => 'İpəkdə zəriflik, naxışda tarix. Bakının mərkəzində, Nizami küçəsində yerləşən Yeləni butikində əl işi olan eksklüziv kəlağayılar.'
    ],
    'en' => [
        'title' => 'Yelani — Exclusive Azerbaijani Kelaghayi | Nizami St, Baku',
        'desc'  => 'Elegance in silk, history in patterns. Discover handmade silk scarves at the Yelani boutique on Nizami Street, Baku center.'
    ],
    'ru' => [
        'title' => 'Yelani — Азербайджанские келагаи | Баку, улица Низами',
        'desc'  => 'Изящество в шелке, история в узорах. Эксклюзивные шелковые платки ручной работы в бутике Yelani на улице Низами, Баку.'
    ]
];

$page_title = $seo[$lang]['title'] ?? $seo['az']['title'];
$page_desc  = $seo[$lang]['desc'] ?? $seo['az']['desc'];
?>

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_desc; ?>">
    <meta property="og:image" content="https://yelani.az/assets/logo.jpeg">
    <meta property="og:url" content="https://yelani.az">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <style>



        :root {

            --yelani-gold: #D2AE6E; 

            --yelani-dark: #284653;

        }

        body { font-family: 'Montserrat', sans-serif; background-color: var(--yelani-dark); color: white; }

        .serif { font-family: 'Playfair Display', serif; }

        /* Эффект живого шелка (сложное движение) */

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

        /* Мягкое парение контента (Floating) */

        @keyframes float {

            0%, 100% { transform: translateY(0); }

            50% { transform: translateY(-10px); }

        }

        .floating-content {

            animation: float 6s ease-in-out infinite;

        }

        /* Золотое мерцание логотипа */

        @keyframes goldGlow {

            0%, 100% { filter: drop-shadow(0 0 15px rgba(210, 174, 110, 0.2)); opacity: 0.9; }

            50% { filter: drop-shadow(0 0 30px rgba(210, 174, 110, 0.5)); opacity: 1; }

        }

        .logo-glow {

            animation: goldGlow 4s ease-in-out infinite;

        }

        /* Плавное появление */

        @keyframes revealUp {

            from { opacity: 0; transform: translateY(30px); filter: blur(10px); }

            to { opacity: 1; transform: translateY(0); filter: blur(0); }

        }

        .reveal { opacity: 0; animation: revealUp 1.5s cubic-bezier(0.2, 0.8, 0.2, 1) forwards; }

        .reveal-1 { animation-delay: 0.2s; }

        .reveal-2 { animation-delay: 0.5s; }

        .reveal-3 { animation-delay: 0.8s; }

        .text-gold { color: var(--yelani-gold); }

    </style>
</head>
<body class="overflow-hidden">

    <div class="fixed inset-0 z-0">
        <img src="assets/bg.png" alt="" class="w-full h-full object-cover animate-silk opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#284653]/80 to-[#284653]"></div>
    </div>

    <div class="relative z-10 min-h-screen flex flex-col justify-between p-6 md:p-12">
        
        <nav class="flex justify-end gap-6 text-[10px] tracking-[0.3em] reveal">
            <?php foreach($allowed_langs as $l): ?>
                <a href="?lang=<?php echo $l; ?>" 
                   class="<?php echo $lang === $l ? 'text-gold font-bold' : 'text-white/40 hover:text-white'; ?> transition-all duration-500 uppercase">
                   <?php echo $l; ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <main class="flex flex-col items-center text-center floating-content">
            
            <div class="reveal reveal-1 mb-8">
                <div class="relative inline-block">
                    <div class="absolute -inset-4 border border-gold/20 scale-95 group-hover:scale-100 transition-transform duration-700"></div>
                    <img src="assets/logo.jpeg" alt="Yeləni Logo" class="w-48 md:w-64 h-auto drop-shadow-2xl logo-glow">
                </div>
            </div>

            <div class="reveal reveal-2 max-w-2xl px-4">
                <p class="serif italic text-2xl md:text-4xl text-white/90 mb-4 tracking-wide leading-tight">
                    «<?php echo $content[$lang]['slogan']; ?>»
                </p>
                <div class="h-[1px] w-12 bg-gold/50 mx-auto mb-8"></div>
                
                <h2 class="text-[10px] md:text-xs tracking-[0.6em] uppercase text-gold mb-4 opacity-80">
                    <?php echo $content[$lang]['title']; ?>
                </h2>
                <p class="text-[11px] md:text-xs text-white/40 uppercase tracking-[0.3em] font-light leading-loose mb-10">
                    <?php echo $content[$lang]['subtitle']; ?>
                </p>
            </div>

            <div class="reveal reveal-3">
                <a href="<?php echo $wa_link; ?>" target="_blank" 
                   class="group relative inline-flex items-center gap-4 px-12 py-5 border border-gold/30 hover:border-gold transition-all duration-700">
                    <span class="text-gold text-[10px] tracking-[0.4em] uppercase group-hover:text-white transition-colors relative z-10">
                        <?php echo $content[$lang]['button']; ?>
                    </span>
                    <div class="absolute inset-0 bg-gold origin-bottom scale-y-0 group-hover:scale-y-100 transition-transform duration-500"></div>
                </a>
            </div>

        </main>

        <footer class="reveal reveal-3 text-center">
            <p class="text-[8px] tracking-[0.5em] text-white/20 uppercase">
                Yeləni &middot; Baku &middot; Azerbaijan &middot; 2026
            </p>
        </footer>
    </div>

</body>
</html>