<?php

return [
    'assurances' => [
        'label' => 'Altersprüfung',
        'plural_label' => 'Altersprüfungen',
    ],

    'opt_ins' => [
        'label' => 'Opt-in für Minderjährige',
        'plural_label' => 'Opt-ins für Minderjährige',
    ],

    'guardians' => [
        'label' => 'Verknüpfung mit Erziehungsberechtigten',
        'plural_label' => 'Verknüpfungen mit Erziehungsberechtigten',
    ],

    'fields' => [
        'subject' => 'Konto',
        'age' => 'Alter bei der Prüfung',
        'method' => 'Methode',
        'reliable' => 'Zuverlässig',
        'not_reliable' => 'Nicht zuverlässig',
        'provider' => 'Anbieter',
        'assured_at' => 'Geprüft am',
        'expires_at' => 'Gültig bis',
        'never' => 'Kein Ablauf',
        'minor' => 'Minderjährige Person',
        'guardian' => 'Elternteil oder Vormund',
        'relationship' => 'Beziehung',
        'verified' => 'Erziehungsberechtigung geprüft',
        'status' => 'Status',
        'verified_at' => 'Geprüft am',
        'created_at' => 'Erstellt am',
        'authorized_by' => 'Erteilt von',
        'opted_in_at' => 'Opt-in am',
        'revoked_at' => 'Widerrufen am',
    ],

    'filters' => [
        'valid' => 'Noch gültig',
        'under_opt_in_age' => 'Unter 16',
        'active' => 'Aktiv',
    ],

    'methods' => [
        'self_declaration' => 'Selbstauskunft',
        'os_signal' => 'Betriebssystem-Signal',
        'store_signal' => 'App-Store-Signal',
        'document' => 'Ausweisdokument',
        'facial_estimation' => 'Gesichtsbasierte Altersschätzung',
        'verifiable_credential' => 'Überprüfbarer Nachweis',
        'guardian' => 'Von Erziehungsberechtigten angegeben',
    ],

    'authorized_by' => [
        'consumer' => 'Der Verbraucher (13 bis 15)',
        'parent' => 'Elternteil oder Vormund',
    ],

    'status' => [
        'pending' => 'Prüfung ausstehend',
        'active' => 'Aktiv',
        'revoked' => 'Widerrufen',
    ],

    'help' => [
        'verified' => 'Bestätigen Sie erst nach einer angemessenen Prüfung, dass diese Person Elternteil oder Vormund der minderjährigen Person ist. Unter 13 kann nur diese Person in den Verkauf oder das Teilen der personenbezogenen Informationen einwilligen (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Von dieser Person erteilte Opt-ins bleiben gespeichert; widerrufen Sie sie unter Opt-ins für Minderjährige, wenn sie nicht mehr gelten sollen.',
        'revoke_opt_in' => 'Der Verkauf oder das Teilen der personenbezogenen Informationen dieser minderjährigen Person ist dann nicht mehr erlaubt.',
    ],

    'actions' => [
        'verify' => 'Erziehungsberechtigung bestätigen',
        'revoke' => 'Verknüpfung widerrufen',
        'revoke_opt_in' => 'Opt-in widerrufen',
    ],

    'notifications' => [
        'verified' => 'Erziehungsberechtigung bestätigt.',
        'revoked' => 'Verknüpfung widerrufen.',
        'opt_in_revoked' => 'Opt-in widerrufen.',
    ],
];
