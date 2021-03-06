<?php

namespace App\Transformers\v1;

use App\Models\v1\User;
use LaravelSimpleBases\Transformers\FileTransformer;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
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
     * @param User $user
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'uuid' => $user->uuid,
            'name' => $user->name,
            'email' => $user->email,
            'files' => $user->filesToTransformer(),
            'car' => fractal_transformer(
                $user->car,
                CarTransformer::class,
                null
            ),
        ];
    }
}
