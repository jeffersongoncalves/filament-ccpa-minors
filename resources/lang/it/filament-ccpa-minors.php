<?php

return [
    'assurances' => [
        'label' => 'Verifica dell\'età',
        'plural_label' => 'Verifiche dell\'età',
    ],

    'opt_ins' => [
        'label' => 'Opt-in del minore',
        'plural_label' => 'Opt-in dei minori',
    ],

    'guardians' => [
        'label' => 'Collegamento con il tutore',
        'plural_label' => 'Collegamenti con i tutori',
    ],

    'fields' => [
        'subject' => 'Account',
        'age' => 'Età al controllo',
        'method' => 'Metodo',
        'reliable' => 'Affidabile',
        'not_reliable' => 'Non affidabile',
        'provider' => 'Fornitore',
        'assured_at' => 'Verificata il',
        'expires_at' => 'Valida fino al',
        'never' => 'Nessuna scadenza',
        'minor' => 'Minore',
        'guardian' => 'Genitore o tutore',
        'relationship' => 'Parentela',
        'verified' => 'Tutore verificato',
        'status' => 'Stato',
        'verified_at' => 'Verificato il',
        'created_at' => 'Creato il',
        'authorized_by' => 'Autorizzato da',
        'opted_in_at' => 'Opt-in il',
        'revoked_at' => 'Revocato il',
    ],

    'filters' => [
        'valid' => 'Ancora valide',
        'under_opt_in_age' => 'Sotto i 16 anni',
        'active' => 'Attivo',
    ],

    'methods' => [
        'self_declaration' => 'Autodichiarazione',
        'os_signal' => 'Segnale del sistema operativo',
        'store_signal' => 'Segnale dello store di app',
        'document' => 'Documento',
        'facial_estimation' => 'Stima facciale dell\'età',
        'verifiable_credential' => 'Credenziale verificabile',
        'guardian' => 'Indicata dal tutore',
    ],

    'authorized_by' => [
        'consumer' => 'Il consumatore (da 13 a 15 anni)',
        'parent' => 'Genitore o tutore',
    ],

    'status' => [
        'pending' => 'Verifica in attesa',
        'active' => 'Attivo',
        'revoked' => 'Revocato',
    ],

    'help' => [
        'verified' => 'Conferma solo dopo aver verificato ragionevolmente che questa persona è il genitore o il tutore del minore. Sotto i 13 anni, solo questa persona può autorizzare la vendita o la condivisione delle informazioni personali del minore (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Gli opt-in dati da questa persona restano registrati; revocali in Opt-in dei minori se non devono più valere.',
        'revoke_opt_in' => 'La vendita o la condivisione delle informazioni personali di questo minore non sarà più consentita.',
    ],

    'actions' => [
        'verify' => 'Verifica tutore',
        'revoke' => 'Revoca collegamento',
        'revoke_opt_in' => 'Revoca opt-in',
    ],

    'notifications' => [
        'verified' => 'Tutore verificato.',
        'revoked' => 'Collegamento revocato.',
        'opt_in_revoked' => 'Opt-in revocato.',
    ],
];
