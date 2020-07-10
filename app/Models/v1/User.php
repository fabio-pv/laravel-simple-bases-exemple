<?php

namespace App\Models\v1;

use LaravelSimpleBases\Models\ModelAuthenticatableBase;
use LaravelSimpleBases\Models\ModelBase;

/**
 * @property integer $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class User extends ModelAuthenticatableBase
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['uuid', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];

}
