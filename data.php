<?php
$user_name = 'Алексей Онипко'; // укажите здесь ваше имя
$is_auth = rand(0, 1);
$index = 0;

$unit_of_time = [
    [
        'минуту',
        'минуты',
        'минут'
    ],
    [
        'час',
        'часа',
        'часов'
    ],
    [
        'день',
        'дня',
        'дней'
    ],
    [
        'неделя',
        'недели',
        'недель'
    ],
    [
        'месяц',
        'месяца',
        'месяцев'
    ]
];

$db = [
    'host' => '127.0.0.1',
    'login' => 'root',
    'password' => 'root',
    'base' => 'readme'
];

$filter = "";
$button_class =  "filters__button--active";
