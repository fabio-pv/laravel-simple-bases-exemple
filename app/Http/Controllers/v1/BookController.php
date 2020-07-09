<?php

namespace App\Http\Controllers\v1;

use App\Http\Validations\v1\BookValidation;
use App\Models\v1\Book;
use App\Services\v1\BookService;
use App\Transformers\v1\BookTransformer;
use LaravelSimpleBases\Http\Controllers\BaseController;

class BookController extends BaseController
{
    public function __construct(
        Book $book,
        BookTransformer $bookTransformer,
        BookValidation $bookValidation
    )
    {
        $this->model = $book;
        $this->service = new BookService($this->model);
        $this->transformer = $bookTransformer;
        $this->validation = $bookValidation;
    }
}
