<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNutritiveValueRequest;
use App\Http\Requests\UpdateNutritiveValueRequest;
use App\Models\NutritiveValue;
use Illuminate\Http\Response;

class NutritiveValueController extends Controller
{
    public function index(): Response
    {
        return new Response();
    }

    public function create(): Response
    {
        return new Response();
    }

    public function store(StoreNutritiveValueRequest $request): Response
    {
        return new Response();
    }

    public function show(NutritiveValue $nutritiveValue): Response
    {
        return new Response();
    }

    public function edit(NutritiveValue $nutritiveValue): Response
    {
        return new Response();
    }

    public function update(UpdateNutritiveValueRequest $request, NutritiveValue $nutritiveValue): Response
    {
        return new Response();
    }

    public function destroy(NutritiveValue $nutritiveValue): Response
    {
        return new Response();
    }
}
