<?php

return [
    'assurances' => [
        'label' => 'Age check',
        'plural_label' => 'Age checks',
    ],
    'opt_ins' => [
        'label' => 'Minor opt-in',
        'plural_label' => 'Minor opt-ins',
    ],
    'guardians' => [
        'label' => 'Guardian link',
        'plural_label' => 'Guardian links',
    ],
    'fields' => [
        'subject' => 'Account',
        'age' => 'Age at the check',
        'method' => 'Method',
        'reliable' => 'Reliable',
        'not_reliable' => 'Not reliable',
        'provider' => 'Provider',
        'assured_at' => 'Checked at',
        'expires_at' => 'Valid until',
        'never' => 'No expiry',
        'minor' => 'Minor',
        'guardian' => 'Parent or guardian',
        'relationship' => 'Relationship',
        'verified' => 'Guardian verified',
        'status' => 'Status',
        'verified_at' => 'Verified at',
        'created_at' => 'Created at',
        'authorized_by' => 'Authorized by',
        'opted_in_at' => 'Opted in at',
        'revoked_at' => 'Revoked at',
    ],
    'filters' => [
        'valid' => 'Still valid',
        'under_opt_in_age' => 'Under 16',
        'active' => 'Active',
    ],
    'methods' => [
        'self_declaration' => 'Self-declaration',
        'os_signal' => 'Operating system signal',
        'store_signal' => 'App store signal',
        'document' => 'Document',
        'facial_estimation' => 'Facial age estimation',
        'verifiable_credential' => 'Verifiable credential',
        'guardian' => 'Stated by the guardian',
    ],
    'authorized_by' => [
        'consumer' => 'The consumer (13 to 15)',
        'parent' => 'Parent or guardian',
    ],
    'status' => [
        'pending' => 'Pending verification',
        'active' => 'Active',
        'revoked' => 'Revoked',
    ],
    'help' => [
        'verified' => 'Only confirm after a reasonable check that this person is the parent or guardian of the minor. Under 13, only this person can opt in to the sale or sharing of the minor\'s personal information (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Opt-ins this person gave stay recorded; revoke them in Minor opt-ins if they should stop counting.',
        'revoke_opt_in' => 'The sale or sharing of this minor\'s personal information stops being allowed.',
    ],
    'actions' => [
        'verify' => 'Verify guardian',
        'revoke' => 'Revoke link',
        'revoke_opt_in' => 'Revoke opt-in',
    ],
    'notifications' => [
        'verified' => 'Guardian verified.',
        'revoked' => 'Link revoked.',
        'opt_in_revoked' => 'Opt-in revoked.',
    ],
];
