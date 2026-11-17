<?php

return [
    'assurances' => [
        'label' => 'Yaş yoxlaması',
        'plural_label' => 'Yaş yoxlamaları',
    ],

    'opt_ins' => [
        'label' => 'Yetkinlik yaşına çatmayanın razılığı',
        'plural_label' => 'Yetkinlik yaşına çatmayanların razılıqları',
    ],

    'guardians' => [
        'label' => 'Valideyn bağlantısı',
        'plural_label' => 'Valideyn bağlantıları',
    ],

    'fields' => [
        'subject' => 'Hesab',
        'age' => 'Yoxlama zamanı yaş',
        'method' => 'Üsul',
        'reliable' => 'Etibarlı',
        'not_reliable' => 'Etibarsız',
        'provider' => 'Provayder',
        'assured_at' => 'Yoxlanılıb',
        'expires_at' => 'Etibarlıdır',
        'never' => 'Müddətsiz',
        'minor' => 'Yetkinlik yaşına çatmayan',
        'guardian' => 'Valideyn və ya qəyyum',
        'relationship' => 'Qohumluq',
        'verified' => 'Valideyn təsdiqlənib',
        'status' => 'Status',
        'verified_at' => 'Təsdiqlənib',
        'created_at' => 'Yaradılıb',
        'authorized_by' => 'İcazə verən',
        'opted_in_at' => 'Razılıq vaxtı',
        'revoked_at' => 'Ləğv edilmə vaxtı',
    ],

    'filters' => [
        'valid' => 'Hələ etibarlı',
        'under_opt_in_age' => '16 yaşdan kiçik',
        'active' => 'Aktiv',
    ],

    'methods' => [
        'self_declaration' => 'Özünü bəyan',
        'os_signal' => 'Əməliyyat sistemi siqnalı',
        'store_signal' => 'Tətbiq mağazası siqnalı',
        'document' => 'Sənəd',
        'facial_estimation' => 'Üzlə yaş təxmini',
        'verifiable_credential' => 'Yoxlanıla bilən etimadnamə',
        'guardian' => 'Valideyn tərəfindən bildirilib',
    ],

    'authorized_by' => [
        'consumer' => 'İstehlakçı (13–15 yaş)',
        'parent' => 'Valideyn və ya qəyyum',
    ],

    'status' => [
        'pending' => 'Təsdiq gözlənilir',
        'active' => 'Aktiv',
        'revoked' => 'Ləğv edilib',
    ],

    'help' => [
        'verified' => 'Yalnız bu şəxsin yetkinlik yaşına çatmayanın valideyni və ya qəyyumu olduğunu ağlabatan şəkildə yoxladıqdan sonra təsdiqləyin. 13 yaşdan kiçiklər üçün yalnız bu şəxs onların şəxsi məlumatlarının satılmasına və ya paylaşılmasına razılıq verə bilər (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Bu şəxsin verdiyi razılıqlar qeydə alınmış qalır; artıq nəzərə alınmamalıdırsa, onları Yetkinlik yaşına çatmayanların razılıqları bölməsində ləğv edin.',
        'revoke_opt_in' => 'Bu yetkinlik yaşına çatmayanın şəxsi məlumatlarının satılmasına və ya paylaşılmasına artıq icazə verilmir.',
    ],

    'actions' => [
        'verify' => 'Valideyni təsdiqlə',
        'revoke' => 'Bağlantını ləğv et',
        'revoke_opt_in' => 'Razılığı ləğv etmək',
    ],

    'notifications' => [
        'verified' => 'Valideyn təsdiqləndi.',
        'revoked' => 'Bağlantı ləğv edildi.',
        'opt_in_revoked' => 'Razılıq ləğv edildi.',
    ],
];
