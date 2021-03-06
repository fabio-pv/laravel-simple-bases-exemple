<?php

namespace App\Models\v1;

use LaravelSimpleBases\Models\ModelBase;

/**
 * @property integer $id
 * @property string $uuid
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Book extends ModelBase
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
    protected $fillable = ['uuid', 'name', 'created_at', 'updated_at', 'deleted_at'];

}
