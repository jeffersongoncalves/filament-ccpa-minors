<?php

return [
    'assurances' => [
        'label' => 'Yosh tekshiruvi',
        'plural_label' => 'Yosh tekshiruvlari',
    ],

    'opt_ins' => [
        'label' => 'Voyaga yetmaganning roziligi',
        'plural_label' => 'Voyaga yetmaganlarning roziliklari',
    ],

    'guardians' => [
        'label' => 'Vasiy bilan bog\'lanish',
        'plural_label' => 'Vasiylar bilan bog\'lanishlar',
    ],

    'fields' => [
        'subject' => 'Hisob',
        'age' => 'Tekshiruv paytidagi yosh',
        'method' => 'Usul',
        'reliable' => 'Ishonchli',
        'not_reliable' => 'Ishonchsiz',
        'provider' => 'Provayder',
        'assured_at' => 'Tekshirilgan sana',
        'expires_at' => 'Amal qiladi',
        'never' => 'Muddatsiz',
        'minor' => 'Voyaga yetmagan',
        'guardian' => 'Ota-ona yoki vasiy',
        'relationship' => 'Qarindoshlik',
        'verified' => 'Vasiy tasdiqlangan',
        'status' => 'Holat',
        'verified_at' => 'Tasdiqlangan sana',
        'created_at' => 'Yaratilgan',
        'authorized_by' => 'Kim tomonidan ruxsat berilgan',
        'opted_in_at' => 'Rozilik berilgan vaqt',
        'revoked_at' => 'Bekor qilingan vaqt',
    ],

    'filters' => [
        'valid' => 'Hali amal qiladi',
        'under_opt_in_age' => '16 yoshdan kichik',
        'active' => 'Faol',
    ],

    'methods' => [
        'self_declaration' => 'O\'zini bayon qilish',
        'os_signal' => 'Operatsion tizim signali',
        'store_signal' => 'Ilovalar do\'koni signali',
        'document' => 'Hujjat',
        'facial_estimation' => 'Yuz orqali yoshni baholash',
        'verifiable_credential' => 'Tekshiriladigan guvohnoma',
        'guardian' => 'Vasiy ko\'rsatgan',
    ],

    'authorized_by' => [
        'consumer' => 'Isteʼmolchi (13–15 yosh)',
        'parent' => 'Ota-ona yoki vasiy',
    ],

    'status' => [
        'pending' => 'Tasdiq kutilmoqda',
        'active' => 'Faol',
        'revoked' => 'Bekor qilingan',
    ],

    'help' => [
        'verified' => 'Faqat bu shaxs voyaga yetmaganning ota-onasi yoki vasiysi ekanini oqilona tekshirgandan keyin tasdiqlang. 13 yoshgacha faqat shu shaxs voyaga yetmaganning shaxsiy maʼlumotlarini sotish yoki ulashishga rozilik bera oladi (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Bu shaxs bergan roziliklar qayd etilgan holda qoladi; ular endi hisobga olinmasligi kerak boʻlsa, Voyaga yetmaganlarning roziliklari boʻlimida bekor qiling.',
        'revoke_opt_in' => 'Bu voyaga yetmaganning shaxsiy maʼlumotlarini sotish yoki ulashishga endi ruxsat berilmaydi.',
    ],

    'actions' => [
        'verify' => 'Vasiyni tasdiqlash',
        'revoke' => 'Bog\'lanishni bekor qilish',
        'revoke_opt_in' => 'Rozilikni bekor qilish',
    ],

    'notifications' => [
        'verified' => 'Vasiy tasdiqlandi.',
        'revoked' => 'Bog\'lanish bekor qilindi.',
        'opt_in_revoked' => 'Rozilik bekor qilindi.',
    ],
];
