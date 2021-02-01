<?php


namespace App\Http\Permissions\v1;


use App\Models\v1\UserRole;
use LaravelSimpleBases\Http\Permissions\BasePermission;

class UserPermission extends BasePermission
{

     protected $permissions = [

        'index' => [
            UserRole::ADMIN,
        ],

        'show' => [
            UserRole::ADMIN,
        ],
        'store' => [],
        'update' => [],
        'destroy' => [],
    ];

}
