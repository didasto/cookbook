<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Response;

class RecipeController extends Controller
{
    public function index(): Response
    {
        return new Response();
    }

    public function create(): Response
    {
        return new Response();
    }

    public function store(StoreRecipeRequest $request): Response
    {
        return new Response();
    }

    public function show(Recipe $recipe): Response
    {
        return new Response();
    }

    public function edit(Recipe $recipe): Response
    {
        return new Response();
    }

    public function update(UpdateRecipeRequest $request, Recipe $recipe): Response
    {
        return new Response();
    }

    public function destroy(Recipe $recipe): Response
    {
        return new Response();
    }
}
