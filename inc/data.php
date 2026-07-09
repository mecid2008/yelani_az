<?php
// Shared project data/config for all pages.

$whatsapp_number = "994105199009";

$allowed_langs = ['az', 'en', 'ru'];

$content = [
    'az' => [
        'slogan' => 'İpəkdə zəriflik, naxışda tarix',
        'title' => 'Tezliklə açılış',
        'subtitle' => 'Yeləni — Azərbaycan kəlağayı sənətinin zərifliyi və mirası.',
        'discover' => 'Kolleksiyanı kəşf et',
        'collection_title' => 'Kolleksiya',
        'label_product' => 'Məhsul',
        'label_inspiration' => 'İlham',
        'button' => 'WhatsApp-da yazın',
        'wa_msg' => 'Salam! Yeləni kəlağayıları ilə maraqlanıram. Yeniliklər barədə mənə məlumat verin.'
    ],
    'en' => [
        'slogan' => 'Elegance in silk, history in patterns',
        'title' => 'Coming Soon',
        'subtitle' => 'Yeləni — The elegance and heritage of Azerbaijani Kelaghayi art.',
        'discover' => 'Explore the collection',
        'collection_title' => 'Collection',
        'label_product' => 'Product',
        'label_inspiration' => 'Inspiration',
        'button' => 'Contact via WhatsApp',
        'wa_msg' => 'Hello! I am interested in Yeləni kelaghayis. Please keep me updated.'
    ],
    'ru' => [
        'slogan' => 'Изящество в шелке, история в узорах',
        'title' => 'Скоро открытие',
        'subtitle' => 'Yeləni — элегантность и наследие азербайджанского искусства келагаи.',
        'discover' => 'Исследовать коллекцию',
        'collection_title' => 'Коллекция',
        'label_product' => 'Изделие',
        'label_inspiration' => 'Вдохновение',
        'button' => 'Написать в WhatsApp',
        'wa_msg' => 'Здравствуйте! Меня интересуют келагаи Yeləni. Сообщите мне об открытии.'
    ]
];

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

$seo_collection = [
    'az' => [
        'title' => 'Yeləni — Kəlağayı kolleksiyası | Yelani.az',
        'desc'  => 'Əl işi kəlağayılar: Möminə Xatun, Natəvan və kolleksiyanın məhsulları. İlham və məhsul şəkilləri ilə premium vitrin.'
    ],
    'en' => [
        'title' => 'Yelani — Kelaghayi Collection | Yelani.az',
        'desc'  => 'Handmade kelaghayi scarves: Momine Khatun, Natavan, and the full collection. A premium showcase with inspiration and product views.'
    ],
    'ru' => [
        'title' => 'Yelani — Коллекция келагаи | Yelani.az',
        'desc'  => 'Келагаи ручной работы: Момине Хатун, Натаван и вся коллекция. Премиальная витрина с ракурсами вдохновения и изделия.'
    ]
];

$instagram_url = 'https://www.instagram.com/yeleni_kelagayi/';

$og_locale_map = [
    'az' => 'az_AZ',
    'en' => 'en_US',
    'ru' => 'ru_RU'
];

$models = [
    [
        'id' => 'momine-xatun',
        'name' => [
            'az' => 'Möminə Xatun',
            'en' => 'Momine Khatun',
            'ru' => 'Момине Хатун'
        ],
        'inspiration' => [
            'az' => 'Naxçıvanda yerləşən Möminə Xatun türbəsinin memarlıq ornamentlərindən ilhamlanan kompozisiya.',
            'en' => 'A composition inspired by the architectural ornaments of the Momine Khatun Mausoleum in Nakhchivan.',
            'ru' => 'Композиция, вдохновленная архитектурными орнаментами мавзолея Момине Хатун в Нахчыване.'
        ],
        'specs' => [
            'size' => '140x140 cm',
            'material' => [
                'az' => '100% təbii ipək',
                'en' => '100% natural silk',
                'ru' => '100% натуральный шелк'
            ]
        ],
        'images' => [
            'assets/models/momine-xatun/main.png',
            'assets/models/momine-xatun/Detail_1.png',
            'assets/models/momine-xatun/Full_body.png',
            'assets/models/momine-xatun/Back_view.png'
        ]
    ],
    [
        'id' => 'natavan',
        'name' => [
            'az' => 'Natəvan',
            'en' => 'Natavan',
            'ru' => 'Натаван'
        ],
        'inspiration' => [
            'az' => 'Xurşidbanu Natəvanın poetik dünyası və Qarabağ xalça naxışlarının harmoniyası ilə hazırlanmış dizayn.',
            'en' => 'A design shaped by the poetic world of Khurshidbanu Natavan and the harmony of Karabakh carpet motifs.',
            'ru' => 'Дизайн, созданный под влиянием поэтического мира Хуршидбану Натаван и гармонии карабахских ковровых мотивов.'
        ],
        'specs' => [
            'size' => '140x140 cm',
            'material' => [
                'az' => '100% təbii ipək',
                'en' => '100% natural silk',
                'ru' => '100% натуральный шелк'
            ]
        ],
        'images' => [
            'assets/models/natavan/inspiration-1.jpg',
            'assets/models/natavan/product-1.jpg'
        ]
    ]
];
