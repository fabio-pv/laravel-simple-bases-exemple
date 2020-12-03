<?php

return [

    \App\Models\v1\User::class => [
        [
            'fantasy_property' => 'photo',
            'extension' => '.png',
            'name' => 'profile_photo',
        ]
    ],

    \App\Models\v1\Car::class => [
        'fantasy_property' => 'photo',
        'extension' => '.png',
        'name' => 'car_photo',
    ],

];
