<?php

namespace App\Models\v1;

use LaravelSimpleBases\Models\ModelBase;

/**
 * @property integer $id
 * @property integer $car_type_id
 * @property string $uuid
 * @property string $name
 * @property string $license_plate
 * @property int $motor_power
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CarType $carType
 * @property User[] $users
 */
class Car extends ModelBase
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
    protected $fillable = ['car_type_id', 'uuid', 'name', 'license_plate', 'motor_power', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carType()
    {
        return $this->belongsTo('App\Models\v1\CarType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\v1\User');
    }
}
