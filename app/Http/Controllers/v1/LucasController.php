<?php

namespace App\Http\Controllers\v1;

use App\Http\Validations\v1\LucasValidation;
use App\Models\v1\Lucas;
use App\Services\v1\LucasService;
use App\Transformers\v1\LucasTransformer;
use LaravelSimpleBases\Http\Controllers\BaseController;

class LucasController extends BaseController
{
    public function __construct(
        Lucas $lucas,
        LucasTransformer $lucasTransformer,
        LucasValidation $lucasValidation
    )
    {
        $this->model = $lucas;
        $this->service = new LucasService($this->model);
        $this->transformer = $lucasTransformer;
        $this->validation = $lucasValidation;
    }
}
