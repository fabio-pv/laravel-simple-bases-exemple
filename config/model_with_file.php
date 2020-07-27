<?php

return [

    \App\Models\v1\User::class => [
        'fantasy_property' => 'photo',
        'save_location' => '/photos/user',
        'extension' => '.png'
    ],

    \App\Models\v1\Car::class => [
        'fantasy_property' => 'photo',
        'save_location' => '/photos/car',
        'extension' => '.png'
    ],

];
