<?php


namespace App\Http\Permissions;


use App\Models\v1\User;
use LaravelSimpleBases\Http\Permissions\HandlePermissionInterface;

class HandlePermission implements HandlePermissionInterface
{
    public static function handle($user)
    {
        /**
         * @var User $user
         */
        return $user->userRole->id;
    }

    public static function message(): string
    {
        return 'Your users do not have access to this feature';
    }
}
