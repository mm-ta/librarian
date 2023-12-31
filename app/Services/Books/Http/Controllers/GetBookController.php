<?php

namespace App\Services\Books\Http\Controllers;

use App\Domains\Book\Requests\FetchBooksRequest;
use App\Services\Books\Features\FetchBooksByFiltersFeature;
use App\Services\Books\Features\GetBookWithAllRelationshipsFeature;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Lucid\Units\Controller;

class GetBookController extends Controller
{
    public function __construct(
        private readonly GetBookWithAllRelationshipsFeature $getBookWithAllFeature,
        private readonly FetchBooksByFiltersFeature $fetchBooksByFiltersFeature
    )
    {
    }

    public function index(FetchBooksRequest $request): Application|View|Factory|Response|ApplicationContract
    {
        return $this->fetchBooksByFiltersFeature->handle($request);
    }

    public function show(Request $request, int $bookId): View|Application|Factory|ApplicationContract|Response
    {
        return $this->getBookWithAllFeature->handle($request, $bookId);
    }
}
