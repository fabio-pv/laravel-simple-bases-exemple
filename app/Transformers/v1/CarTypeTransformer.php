<?php

namespace App\Transformers\v1;

use App\Models\v1\CarType;
use League\Fractal\TransformerAbstract;

class CarTypeTransformer extends TransformerAbstract
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
     * @param CarType $carType
     * @return array
     */
    public function transform(CarType $carType)
    {
        return [
            'uuid' => $carType->uuid,
            'name' => $carType->name,
        ];
    }
}
