<?php

namespace App\Transformers\v1;

use App\Models\v1\Car;
use League\Fractal\TransformerAbstract;

class CarTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * @param Car $car
     * @return array
     */
    public function transform(Car $car)
    {
        return [
            'uuid' => $car->uuid,
            'name' => $car->license_plate,
            'license_plate' => $car->license_plate,
            'motor_power' => $car->motor_power,
        ];
    }
}
