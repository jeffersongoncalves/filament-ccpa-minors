<?php

return [
    'assurances' => [
        'label' => 'Verificación de edad',
        'plural_label' => 'Verificaciones de edad',
    ],

    'opt_ins' => [
        'label' => 'Opt-in de menor',
        'plural_label' => 'Opt-ins de menores',
    ],

    'guardians' => [
        'label' => 'Vínculo con tutor',
        'plural_label' => 'Vínculos con tutores',
    ],

    'fields' => [
        'subject' => 'Cuenta',
        'age' => 'Edad en la verificación',
        'method' => 'Método',
        'reliable' => 'Fiable',
        'not_reliable' => 'No fiable',
        'provider' => 'Proveedor',
        'assured_at' => 'Verificada el',
        'expires_at' => 'Válida hasta',
        'never' => 'Sin vencimiento',
        'minor' => 'Menor',
        'guardian' => 'Padre, madre o tutor',
        'relationship' => 'Parentesco',
        'verified' => 'Tutor verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado el',
        'created_at' => 'Creado el',
        'authorized_by' => 'Autorizado por',
        'opted_in_at' => 'Opt-in el',
        'revoked_at' => 'Revocado el',
    ],

    'filters' => [
        'valid' => 'Aún válidas',
        'under_opt_in_age' => 'Menores de 16',
        'active' => 'Activo',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaración',
        'os_signal' => 'Señal del sistema operativo',
        'store_signal' => 'Señal de la tienda de aplicaciones',
        'document' => 'Documento',
        'facial_estimation' => 'Estimación facial de edad',
        'verifiable_credential' => 'Credencial verificable',
        'guardian' => 'Indicada por el tutor',
    ],

    'authorized_by' => [
        'consumer' => 'El consumidor (13 a 15 años)',
        'parent' => 'Padre, madre o tutor',
    ],

    'status' => [
        'pending' => 'Verificación pendiente',
        'active' => 'Activo',
        'revoked' => 'Revocado',
    ],

    'help' => [
        'verified' => 'Confirma solo tras comprobar razonablemente que esta persona es el padre, la madre o el tutor del menor. Por debajo de 13 años, solo ella puede autorizar la venta o el intercambio de la información personal del menor (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Los opt-ins que dio esta persona siguen registrados; revócalos en Opt-ins de menores si ya no deben contar.',
        'revoke_opt_in' => 'La venta o el intercambio de la información personal de este menor deja de estar permitido.',
    ],

    'actions' => [
        'verify' => 'Verificar tutor',
        'revoke' => 'Revocar vínculo',
        'revoke_opt_in' => 'Revocar opt-in',
    ],

    'notifications' => [
        'verified' => 'Tutor verificado.',
        'revoked' => 'Vínculo revocado.',
        'opt_in_revoked' => 'Opt-in revocado.',
    ],
];
