<?php

return [
    'assurances' => [
        'label' => 'Weryfikacja wieku',
        'plural_label' => 'Weryfikacje wieku',
    ],

    'opt_ins' => [
        'label' => 'Zgoda małoletniego',
        'plural_label' => 'Zgody małoletnich',
    ],

    'guardians' => [
        'label' => 'Powiązanie z opiekunem',
        'plural_label' => 'Powiązania z opiekunami',
    ],

    'fields' => [
        'subject' => 'Konto',
        'age' => 'Wiek w chwili weryfikacji',
        'method' => 'Metoda',
        'reliable' => 'Wiarygodna',
        'not_reliable' => 'Niewiarygodna',
        'provider' => 'Dostawca',
        'assured_at' => 'Zweryfikowano',
        'expires_at' => 'Ważna do',
        'never' => 'Bez wygaśnięcia',
        'minor' => 'Małoletni',
        'guardian' => 'Rodzic lub opiekun',
        'relationship' => 'Pokrewieństwo',
        'verified' => 'Opiekun zweryfikowany',
        'status' => 'Status',
        'verified_at' => 'Zweryfikowano',
        'created_at' => 'Utworzono',
        'authorized_by' => 'Udzielone przez',
        'opted_in_at' => 'Zgoda udzielona',
        'revoked_at' => 'Odwołano',
    ],

    'filters' => [
        'valid' => 'Nadal ważne',
        'under_opt_in_age' => 'Poniżej 16 lat',
        'active' => 'Aktywne',
    ],

    'methods' => [
        'self_declaration' => 'Oświadczenie własne',
        'os_signal' => 'Sygnał systemu operacyjnego',
        'store_signal' => 'Sygnał sklepu z aplikacjami',
        'document' => 'Dokument',
        'facial_estimation' => 'Szacowanie wieku na podstawie twarzy',
        'verifiable_credential' => 'Weryfikowalne poświadczenie',
        'guardian' => 'Podany przez opiekuna',
    ],

    'authorized_by' => [
        'consumer' => 'Konsument (13–15 lat)',
        'parent' => 'Rodzic lub opiekun',
    ],

    'status' => [
        'pending' => 'Oczekuje na weryfikację',
        'active' => 'Aktywne',
        'revoked' => 'Odwołane',
    ],

    'help' => [
        'verified' => 'Potwierdź dopiero po rozsądnym sprawdzeniu, że ta osoba jest rodzicem lub opiekunem małoletniego. Poniżej 13 lat tylko ona może wyrazić zgodę na sprzedaż lub udostępnianie danych osobowych małoletniego (Cal. Civ. Code §1798.120(c)).',
        'revoke' => 'Zgody udzielone przez tę osobę pozostają zapisane; odwołaj je w sekcji Zgody małoletnich, jeśli nie powinny już obowiązywać.',
        'revoke_opt_in' => 'Sprzedaż lub udostępnianie danych osobowych tego małoletniego przestaje być dozwolone.',
    ],

    'actions' => [
        'verify' => 'Zweryfikuj opiekuna',
        'revoke' => 'Odwołaj powiązanie',
        'revoke_opt_in' => 'Odwołaj zgodę',
    ],

    'notifications' => [
        'verified' => 'Opiekun zweryfikowany.',
        'revoked' => 'Powiązanie odwołane.',
        'opt_in_revoked' => 'Zgoda odwołana.',
    ],
];
