<?php

return [
    'assurances' => [
        'label' => '年龄核验',
        'plural_label' => '年龄核验',
    ],

    'opt_ins' => [
        'label' => '未成年人选择加入',
        'plural_label' => '未成年人选择加入记录',
    ],

    'guardians' => [
        'label' => '监护人关联',
        'plural_label' => '监护人关联',
    ],

    'fields' => [
        'subject' => '账户',
        'age' => '检查时的年龄',
        'method' => '方式',
        'reliable' => '可靠',
        'not_reliable' => '不可靠',
        'provider' => '提供方',
        'assured_at' => '核验时间',
        'expires_at' => '有效期至',
        'never' => '长期有效',
        'minor' => '未成年人',
        'guardian' => '父母或监护人',
        'relationship' => '关系',
        'verified' => '监护人已核实',
        'status' => '状态',
        'verified_at' => '核实时间',
        'created_at' => '创建时间',
        'authorized_by' => '授权人',
        'opted_in_at' => '选择加入时间',
        'revoked_at' => '撤销时间',
    ],

    'filters' => [
        'valid' => '仍有效',
        'under_opt_in_age' => '未满 16 岁',
        'active' => '有效',
    ],

    'methods' => [
        'self_declaration' => '自我声明',
        'os_signal' => '操作系统信号',
        'store_signal' => '应用商店信号',
        'document' => '证件',
        'facial_estimation' => '人脸年龄估计',
        'verifiable_credential' => '可验证凭证',
        'guardian' => '由监护人提供',
    ],

    'authorized_by' => [
        'consumer' => '消费者本人（13 至 15 岁）',
        'parent' => '父母或监护人',
    ],

    'status' => [
        'pending' => '待核实',
        'active' => '有效',
        'revoked' => '已撤销',
    ],

    'help' => [
        'verified' => '请在合理核实此人是该未成年人的父母或监护人后再确认。未满 13 岁时，只有此人可以同意出售或共享该未成年人的个人信息（Cal. Civ. Code §1798.120(c)）。',
        'revoke' => '此人给予的选择加入仍会保留记录；如不应再生效，请在“未成年人选择加入记录”中撤销。',
        'revoke_opt_in' => '将不再允许出售或共享该未成年人的个人信息。',
    ],

    'actions' => [
        'verify' => '核实监护人',
        'revoke' => '撤销关联',
        'revoke_opt_in' => '撤销选择加入',
    ],

    'notifications' => [
        'verified' => '监护人已核实。',
        'revoked' => '关联已撤销。',
        'opt_in_revoked' => '已撤销选择加入。',
    ],
];
