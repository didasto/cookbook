<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index(): Response
    {
        return new Response();
    }

    public function create(): Response
    {
        return new Response();
    }

    public function store(StoreCategoryRequest $request): Response
    {
        return new Response();
    }

    public function show(Category $category): Response
    {
        return new Response();
    }

    public function edit(Category $category): Response
    {
        return new Response();
    }

    public function update(UpdateCategoryRequest $request, Category $category): Response
    {
        return new Response();
    }

    public function destroy(Category $category): Response
    {
        return new Response();
    }
}
