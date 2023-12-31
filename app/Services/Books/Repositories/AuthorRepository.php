<?php

namespace App\Services\Books\Repositories;

use App\Data\Models\Author;
use App\Foundation\Composables\Repositories\ImplementsGenericRepository;
use App\Services\Books\Contracts\Repositories\AuthorRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AuthorRepository implements AuthorRepositoryInterface
{
    use ImplementsGenericRepository;

    /**
     * @var class-string<Model> $model
     */
    private string $model = Author::class;
}
