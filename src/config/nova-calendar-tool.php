<?php

return [
    'renderNavigation'    => true,
    'dateTimeFormat'      => 'YYYY-MM-DD HH:mm',
    'pickerDisplayFormat' => 'Y-m-d H:i',
    'model'               => \App\Event::class,

//     FullCalendar options: https://fullcalendar.io/docs
    'options'             => [
        'locale'     => 'en',
        'firstDay'   => 0,
        'buttonText' => [
            'today' => 'today',
            'month' => 'month',
            'week'  => 'week',
            'day'   => 'day',
            'list'  => 'list',
        ],
    ],
];