<?php

return [
    'assurances' => [
        'label' => 'Verificação de idade',
        'plural_label' => 'Verificações de idade',
    ],

    'opt_ins' => [
        'label' => 'Opt-in de menor',
        'plural_label' => 'Opt-ins de menores',
    ],

    'guardians' => [
        'label' => 'Ligação a responsável',
        'plural_label' => 'Ligações a responsáveis',
    ],

    'fields' => [
        'subject' => 'Conta',
        'age' => 'Idade na verificação',
        'method' => 'Método',
        'reliable' => 'Fiável',
        'not_reliable' => 'Não fiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Verificada em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Menor',
        'guardian' => 'Pai, mãe ou tutor',
        'relationship' => 'Parentesco',
        'verified' => 'Responsável verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado em',
        'created_at' => 'Criado em',
        'authorized_by' => 'Autorizado por',
        'opted_in_at' => 'Opt-in em',
        'revoked_at' => 'Revogado em',
    ],

    'filters' => [
        'valid' => 'Ainda válidas',
        'under_opt_in_age' => 'Menores de 16',
        'active' => 'Ativo',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaração',
        'os_signal' => 'Sinal do sistema operativo',
        'store_signal' => 'Sinal da loja de aplicações',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial da idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Indicada pelo responsável',
    ],

    'authorized_by' => [
        'consumer' => 'O consumidor (13 a 15 anos)',
        'parent' => 'Pai, mãe ou tutor',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
    ],

    'help' => [
        'verified' => 'Confirme apenas depois de verificar razoavelmente que esta pessoa é pai, mãe ou tutor do menor. Abaixo dos 13 anos, só ela pode autorizar a venda ou a partilha das informações pessoais do menor (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Os opt-ins dados por esta pessoa continuam registados; revogue-os em Opt-ins de menores se deixarem de dever contar.',
        'revoke_opt_in' => 'A venda ou a partilha das informações pessoais deste menor deixa de ser permitida.',
    ],

    'actions' => [
        'verify' => 'Verificar responsável',
        'revoke' => 'Revogar ligação',
        'revoke_opt_in' => 'Revogar opt-in',
    ],

    'notifications' => [
        'verified' => 'Responsável verificado.',
        'revoked' => 'Ligação revogada.',
        'opt_in_revoked' => 'Opt-in revogado.',
    ],
];
