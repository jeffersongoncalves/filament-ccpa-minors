<?php

return [
    'assurances' => [
        'label' => 'Leeftijdscontrole',
        'plural_label' => 'Leeftijdscontroles',
    ],

    'opt_ins' => [
        'label' => 'Opt-in van minderjarige',
        'plural_label' => 'Opt-ins van minderjarigen',
    ],

    'guardians' => [
        'label' => 'Koppeling met voogd',
        'plural_label' => 'Koppelingen met voogden',
    ],

    'fields' => [
        'subject' => 'Account',
        'age' => 'Leeftijd bij de controle',
        'method' => 'Methode',
        'reliable' => 'Betrouwbaar',
        'not_reliable' => 'Niet betrouwbaar',
        'provider' => 'Aanbieder',
        'assured_at' => 'Gecontroleerd op',
        'expires_at' => 'Geldig tot',
        'never' => 'Verloopt niet',
        'minor' => 'Minderjarige',
        'guardian' => 'Ouder of voogd',
        'relationship' => 'Relatie',
        'verified' => 'Voogd geverifieerd',
        'status' => 'Status',
        'verified_at' => 'Geverifieerd op',
        'created_at' => 'Aangemaakt op',
        'authorized_by' => 'Gegeven door',
        'opted_in_at' => 'Opt-in op',
        'revoked_at' => 'Ingetrokken op',
    ],

    'filters' => [
        'valid' => 'Nog geldig',
        'under_opt_in_age' => 'Jonger dan 16',
        'active' => 'Actief',
    ],

    'methods' => [
        'self_declaration' => 'Zelfverklaring',
        'os_signal' => 'Signaal van het besturingssysteem',
        'store_signal' => 'Signaal van de app store',
        'document' => 'Identiteitsdocument',
        'facial_estimation' => 'Leeftijdsschatting via gezicht',
        'verifiable_credential' => 'Verifieerbaar bewijs',
        'guardian' => 'Opgegeven door de voogd',
    ],

    'authorized_by' => [
        'consumer' => 'De consument (13 tot 15)',
        'parent' => 'Ouder of voogd',
    ],

    'status' => [
        'pending' => 'Verificatie in afwachting',
        'active' => 'Actief',
        'revoked' => 'Ingetrokken',
    ],

    'help' => [
        'verified' => 'Bevestig pas na een redelijke controle dat deze persoon de ouder of voogd van de minderjarige is. Onder de 13 kan alleen deze persoon instemmen met de verkoop of het delen van de persoonsgegevens van de minderjarige (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Opt-ins die deze persoon gaf, blijven vastgelegd; trek ze in bij Opt-ins van minderjarigen als ze niet meer mogen gelden.',
        'revoke_opt_in' => 'De verkoop of het delen van de persoonsgegevens van deze minderjarige is dan niet meer toegestaan.',
    ],

    'actions' => [
        'verify' => 'Voogd verifiëren',
        'revoke' => 'Koppeling intrekken',
        'revoke_opt_in' => 'Opt-in intrekken',
    ],

    'notifications' => [
        'verified' => 'Voogd geverifieerd.',
        'revoked' => 'Koppeling ingetrokken.',
        'opt_in_revoked' => 'Opt-in ingetrokken.',
    ],
];
