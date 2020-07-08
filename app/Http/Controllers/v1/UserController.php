<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Validations\v1\UserValidation;
use App\Models\v1\User;
use App\Services\v1\UserService;
use App\Transformers\v1\UserTransformer;
use Illuminate\Http\Request;
use LaravelSimpleBases\Http\Controllers\BaseController;

class UserController extends BaseController
{
    public function __construct(
        User $user,
        UserTransformer $userTransformer,
        UserValidation $userValidation
    )
    {
        $this->model = $user;
        $this->service = new UserService($this->model);
        $this->transformer = $userTransformer;
        $this->validation = $userValidation;
    }
}
