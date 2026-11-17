<?php

return [
    'assurances' => [
        'label' => 'Aferição de idade',
        'plural_label' => 'Aferições de idade',
    ],

    'opt_ins' => [
        'label' => 'Opt-in de menor',
        'plural_label' => 'Opt-ins de menores',
    ],

    'guardians' => [
        'label' => 'Vínculo com responsável',
        'plural_label' => 'Vínculos com responsáveis',
    ],

    'fields' => [
        'subject' => 'Conta',
        'age' => 'Idade na aferição',
        'method' => 'Método',
        'reliable' => 'Confiável',
        'not_reliable' => 'Não confiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Aferida em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Menor',
        'guardian' => 'Pai, mãe ou responsável',
        'relationship' => 'Parentesco',
        'verified' => 'Responsável verificado',
        'status' => 'Situação',
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
        'os_signal' => 'Sinal do sistema operacional',
        'store_signal' => 'Sinal da loja de aplicativos',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial de idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Informada pelo responsável',
    ],

    'authorized_by' => [
        'consumer' => 'O consumidor (13 a 15 anos)',
        'parent' => 'Pai, mãe ou responsável',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
    ],

    'help' => [
        'verified' => 'Só confirme depois de verificar razoavelmente que esta pessoa é pai, mãe ou responsável pelo menor. Abaixo de 13 anos, só ela pode autorizar a venda ou o compartilhamento das informações pessoais do menor (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Os opt-ins dados por esta pessoa continuam registrados; revogue-os em Opt-ins de menores se não devem mais valer.',
        'revoke_opt_in' => 'A venda ou o compartilhamento das informações pessoais deste menor deixa de ser permitido.',
    ],

    'actions' => [
        'verify' => 'Verificar responsável',
        'revoke' => 'Revogar vínculo',
        'revoke_opt_in' => 'Revogar opt-in',
    ],

    'notifications' => [
        'verified' => 'Responsável verificado.',
        'revoked' => 'Vínculo revogado.',
        'opt_in_revoked' => 'Opt-in revogado.',
    ],
];
