<?php

return [
    \App\Models\v1\User::class => [

        'car_uuid' => [
            'model' => \App\Models\v1\Car::class,
            'property' => 'car_id'
        ],

    ]
];
