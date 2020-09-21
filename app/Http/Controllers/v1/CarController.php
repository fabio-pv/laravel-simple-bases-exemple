<?php

namespace App\Http\Controllers\v1;

use App\Http\Permissions\v1\CarPermission;
use App\Http\Validations\v1\CarValidation;
use App\Models\v1\Car;
use App\Services\v1\CarService;
use App\Transformers\v1\CarTransformer;
use LaravelSimpleBases\Http\Controllers\BaseController;

class CarController extends BaseController
{
    public function __construct(
        Car $car,
        CarTransformer $carTransformer,
        CarValidation $carValidation,
        CarPermission $carPermission
    )
    {
        $this->model = $car;
        $this->service = new CarService($this->model);
        $this->transformer = $carTransformer;
        $this->validation = $carValidation;
        $this->permission = $carPermission;
    }
}
