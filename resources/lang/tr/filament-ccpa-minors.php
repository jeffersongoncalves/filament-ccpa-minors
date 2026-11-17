<?php

return [
    'assurances' => [
        'label' => 'Yaş doğrulama',
        'plural_label' => 'Yaş doğrulamaları',
    ],

    'opt_ins' => [
        'label' => 'Reşit olmayanın onayı',
        'plural_label' => 'Reşit olmayanların onayları',
    ],

    'guardians' => [
        'label' => 'Veli bağlantısı',
        'plural_label' => 'Veli bağlantıları',
    ],

    'fields' => [
        'subject' => 'Hesap',
        'age' => 'Kontrol anındaki yaş',
        'method' => 'Yöntem',
        'reliable' => 'Güvenilir',
        'not_reliable' => 'Güvenilir değil',
        'provider' => 'Sağlayıcı',
        'assured_at' => 'Doğrulama tarihi',
        'expires_at' => 'Geçerlilik sonu',
        'never' => 'Süresiz',
        'minor' => 'Reşit olmayan',
        'guardian' => 'Ebeveyn veya vasi',
        'relationship' => 'Yakınlık',
        'verified' => 'Veli doğrulandı',
        'status' => 'Durum',
        'verified_at' => 'Doğrulama tarihi',
        'created_at' => 'Oluşturulma',
        'authorized_by' => 'Onaylayan',
        'opted_in_at' => 'Onay zamanı',
        'revoked_at' => 'İptal zamanı',
    ],

    'filters' => [
        'valid' => 'Hâlâ geçerli',
        'under_opt_in_age' => '16 yaş altı',
        'active' => 'Etkin',
    ],

    'methods' => [
        'self_declaration' => 'Beyan',
        'os_signal' => 'İşletim sistemi sinyali',
        'store_signal' => 'Uygulama mağazası sinyali',
        'document' => 'Belge',
        'facial_estimation' => 'Yüzden yaş tahmini',
        'verifiable_credential' => 'Doğrulanabilir kimlik bilgisi',
        'guardian' => 'Veli tarafından bildirildi',
    ],

    'authorized_by' => [
        'consumer' => 'Tüketici (13-15 yaş)',
        'parent' => 'Ebeveyn veya vasi',
    ],

    'status' => [
        'pending' => 'Doğrulama bekliyor',
        'active' => 'Etkin',
        'revoked' => 'İptal edildi',
    ],

    'help' => [
        'verified' => 'Bu kişinin reşit olmayanın ebeveyni veya vasisi olduğunu makul şekilde doğruladıktan sonra onaylayın. 13 yaşın altında, reşit olmayanın kişisel bilgilerinin satılmasına veya paylaşılmasına yalnızca bu kişi onay verebilir (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Bu kişinin verdiği onaylar kayıtlı kalır; artık geçerli olmamaları gerekiyorsa Reşit olmayanların onayları bölümünden iptal edin.',
        'revoke_opt_in' => 'Bu reşit olmayanın kişisel bilgilerinin satılmasına veya paylaşılmasına artık izin verilmez.',
    ],

    'actions' => [
        'verify' => 'Veliyi doğrula',
        'revoke' => 'Bağlantıyı iptal et',
        'revoke_opt_in' => 'Onayı iptal et',
    ],

    'notifications' => [
        'verified' => 'Veli doğrulandı.',
        'revoked' => 'Bağlantı iptal edildi.',
        'opt_in_revoked' => 'Onay iptal edildi.',
    ],
];
