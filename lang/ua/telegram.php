<?php

/**
 * Translation file may have language keys that is associated with a list of translated lines.
 * In that case only one line will be rendered and will be chosen in a random way.
 * Emoji are allowed
 */
return [
    'error'  => [
        'Почекайте, почекайте.. ',
        'шось голова болить, психічне порушення',
    ],

    'error-nickname-empty' => [
        'Без нікнейма не берем, сорян',
        'Спочатку додай собі нікнейм в тєлєгу',
    ],

    // Command /pidarreg
    'pidar-reg-ok' => [
        'Записав, маладєц, маєш яйця',
        'Вітаю, ти в списку, будь готов стати підаром',
    ],
    'pidar-reg-already-registered' => [
        'Вже записаний, готуй очко',
    ],

    // Command /pidarall
    'pidar-all-no-records' => [
        'Нема підарів 😢',
    ],
    'pidar-all-header' => "<b>Топ підарів за весь час:</b>\n",
    'pidar-all-times' => '{0} |{1} (1 раз)|[2,4] (:count рази)|[5,*] (:count разів)',
    'pidar-all-line-emoji' => '{1} 🥇|{2} 🥈|{3} 🥉|[4,*] 🏅',
    'pidar-all-line' => ":emoji :position місце - <b>:username</b> :times\n",

    // Command /pidar
    'pidar-already-exists' => [
        'Підар дня вже є, і це :username 👏',
        'За моєю інформацією :username вже підар дня',
        'Астрологи вже оголосили підаром дня :username',
    ],
    'pidar-triggered-not-registered' => [
        'Не зарегався і трігериш мене? Ну ти і підар, я тебе запомнив',
        'Ого, бач який підар, готуй очко',
    ],
    'pidar-start' => [
        'Опа опа',
        'Всім ховатись',
    ],
    'pidar-step-1' => [
        'Охрана отмєна',
        'Охрана в дорозі',
    ],
    'pidar-step-2' => [
        'Наводжу справки з воєнкомата..',
        'Розрахунок цілі',
    ],
    'pidar-result' => [
        'Підар дня :username 👏',
        'Привітайте підара дня :username',
    ],
];
