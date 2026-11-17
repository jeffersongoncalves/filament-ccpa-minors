<?php

return [
    'assurances' => [
        'label' => 'Vérification d\'âge',
        'plural_label' => 'Vérifications d\'âge',
    ],

    'opt_ins' => [
        'label' => 'Opt-in d\'un mineur',
        'plural_label' => 'Opt-in des mineurs',
    ],

    'guardians' => [
        'label' => 'Lien avec un responsable légal',
        'plural_label' => 'Liens avec des responsables légaux',
    ],

    'fields' => [
        'subject' => 'Compte',
        'age' => 'Âge lors de la vérification',
        'method' => 'Méthode',
        'reliable' => 'Fiable',
        'not_reliable' => 'Non fiable',
        'provider' => 'Fournisseur',
        'assured_at' => 'Vérifiée le',
        'expires_at' => 'Valide jusqu\'au',
        'never' => 'Sans expiration',
        'minor' => 'Mineur',
        'guardian' => 'Parent ou tuteur',
        'relationship' => 'Lien de parenté',
        'verified' => 'Responsable vérifié',
        'status' => 'Statut',
        'verified_at' => 'Vérifié le',
        'created_at' => 'Créé le',
        'authorized_by' => 'Autorisé par',
        'opted_in_at' => 'Opt-in le',
        'revoked_at' => 'Révoqué le',
    ],

    'filters' => [
        'valid' => 'Encore valides',
        'under_opt_in_age' => 'Moins de 16 ans',
        'active' => 'Actif',
    ],

    'methods' => [
        'self_declaration' => 'Autodéclaration',
        'os_signal' => 'Signal du système d\'exploitation',
        'store_signal' => 'Signal de la boutique d\'applications',
        'document' => 'Pièce d\'identité',
        'facial_estimation' => 'Estimation faciale de l\'âge',
        'verifiable_credential' => 'Attestation vérifiable',
        'guardian' => 'Déclarée par le responsable',
    ],

    'authorized_by' => [
        'consumer' => 'Le consommateur (13 à 15 ans)',
        'parent' => 'Parent ou tuteur',
    ],

    'status' => [
        'pending' => 'Vérification en attente',
        'active' => 'Actif',
        'revoked' => 'Révoqué',
    ],

    'help' => [
        'verified' => 'Ne confirmez qu\'après avoir raisonnablement vérifié que cette personne est le parent ou le tuteur du mineur. Avant 13 ans, seule cette personne peut autoriser la vente ou le partage des informations personnelles du mineur (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Les opt-in donnés par cette personne restent enregistrés ; révoquez-les dans Opt-in des mineurs s\'ils ne doivent plus compter.',
        'revoke_opt_in' => 'La vente ou le partage des informations personnelles de ce mineur ne sera plus autorisé.',
    ],

    'actions' => [
        'verify' => 'Vérifier le responsable',
        'revoke' => 'Révoquer le lien',
        'revoke_opt_in' => 'Révoquer l\'opt-in',
    ],

    'notifications' => [
        'verified' => 'Responsable vérifié.',
        'revoked' => 'Lien révoqué.',
        'opt_in_revoked' => 'Opt-in révoqué.',
    ],
];
