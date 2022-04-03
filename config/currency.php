<?php

return [
    'base' => 'usd',
    'default' => 'rub',
    'rates' => [
        'usd' => [
           'rub' => 83,
           'eur' => 0.91
        ],
        'rub' => [
            'usd' => 0.012,
            'eur' => 0.011

        ],
        'eur' => [
            'rub' => 94.71,
            'usd' => 1.10
        ],
    ],
];
