<?php

namespace App\Http\Controllers\v1;

use App\Http\Validations\v1\UserRoleValidation;
use App\Models\v1\UserRole;
use App\Services\v1\UserRoleService;
use App\Transformers\v1\UserRoleTransformer;
use LaravelSimpleBases\Http\Controllers\BaseController;

class UserRoleController extends BaseController
{
    public function __construct(
        UserRole $userRole,
        UserRoleTransformer $userRoleTransformer,
        UserRoleValidation $userRoleValidation
    )
    {
        $this->model = $userRole;
        $this->service = new UserRoleService($this->model);
        $this->transformer = $userRoleTransformer;
        $this->validation = $userRoleValidation;
    }
}
