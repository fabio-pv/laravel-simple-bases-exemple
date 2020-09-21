<?php


namespace App\Http\Permissions\v1;


use App\Models\v1\UserRole;
use LaravelSimpleBases\Http\Permissions\BasePermission;

class CarPermission extends BasePermission
{

     protected $permissions = [
        'index' => [
            UserRole::ADMIN,
            UserRole::COMMON
        ],
        'show' => [
            UserRole::ADMIN,
            UserRole::COMMON
        ],
        'store' => [
            UserRole::ADMIN,
        ],
        'update' => [
            UserRole::ADMIN,
        ],
        'destroy' => [
            UserRole::ADMIN,
        ],
    ];

}
