<?php

return [
    'assurances' => [
        'label' => 'احراز سن',
        'plural_label' => 'احرازهای سن',
    ],

    'opt_ins' => [
        'label' => 'رضایت صغیر',
        'plural_label' => 'رضایت‌های صغار',
    ],

    'guardians' => [
        'label' => 'پیوند با ولی',
        'plural_label' => 'پیوندهای ولی',
    ],

    'fields' => [
        'subject' => 'حساب',
        'age' => 'سن هنگام بررسی',
        'method' => 'روش',
        'reliable' => 'قابل اعتماد',
        'not_reliable' => 'غیرقابل اعتماد',
        'provider' => 'ارائه‌دهنده',
        'assured_at' => 'تاریخ احراز',
        'expires_at' => 'معتبر تا',
        'never' => 'بدون انقضا',
        'minor' => 'صغیر',
        'guardian' => 'والد یا سرپرست',
        'relationship' => 'نسبت',
        'verified' => 'ولی تأیید شد',
        'status' => 'وضعیت',
        'verified_at' => 'تاریخ تأیید',
        'created_at' => 'تاریخ ایجاد',
        'authorized_by' => 'مجوز از سوی',
        'opted_in_at' => 'زمان رضایت',
        'revoked_at' => 'زمان لغو',
    ],

    'filters' => [
        'valid' => 'هنوز معتبر',
        'under_opt_in_age' => 'زیر 16 سال',
        'active' => 'فعال',
    ],

    'methods' => [
        'self_declaration' => 'خوداظهاری',
        'os_signal' => 'سیگنال سیستم‌عامل',
        'store_signal' => 'سیگنال فروشگاه برنامه',
        'document' => 'مدرک',
        'facial_estimation' => 'تخمین سن با چهره',
        'verifiable_credential' => 'اعتبارنامه قابل‌تأیید',
        'guardian' => 'اعلام‌شده توسط ولی',
    ],

    'authorized_by' => [
        'consumer' => 'مصرف‌کننده (13 تا 15 سال)',
        'parent' => 'والد یا سرپرست',
    ],

    'status' => [
        'pending' => 'در انتظار تأیید',
        'active' => 'فعال',
        'revoked' => 'لغوشده',
    ],

    'help' => [
        'verified' => 'فقط پس از بررسی معقول اینکه این شخص والد یا سرپرست صغیر است تأیید کنید. برای زیر 13 سال، فقط این شخص می‌تواند با فروش یا اشتراک‌گذاری اطلاعات شخصی صغیر موافقت کند (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'رضایت‌هایی که این شخص داده ثبت‌شده باقی می‌مانند؛ اگر نباید دیگر معتبر باشند، آن‌ها را در رضایت‌های صغار لغو کنید.',
        'revoke_opt_in' => 'فروش یا اشتراک‌گذاری اطلاعات شخصی این صغیر دیگر مجاز نخواهد بود.',
    ],

    'actions' => [
        'verify' => 'تأیید ولی',
        'revoke' => 'لغو پیوند',
        'revoke_opt_in' => 'لغو رضایت',
    ],

    'notifications' => [
        'verified' => 'ولی تأیید شد.',
        'revoked' => 'پیوند لغو شد.',
        'opt_in_revoked' => 'رضایت لغو شد.',
    ],
];
