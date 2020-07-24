<?php

namespace App\Http\Controllers\v1;

use App\Http\Validations\v1\CarTypeValidation;
use App\Models\v1\CarType;
use App\Services\v1\CarTypeService;
use App\Transformers\v1\CarTypeTransformer;
use LaravelSimpleBases\Http\Controllers\BaseController;

class CarTypeController extends BaseController
{
    public function __construct(
        CarType $carType,
        CarTypeTransformer $carTypeTransformer,
        CarTypeValidation $carTypeValidation
    )
    {
        $this->model = $carType;
        $this->service = new CarTypeService($this->model);
        $this->transformer = $carTypeTransformer;
        $this->validation = $carTypeValidation;
    }
}
