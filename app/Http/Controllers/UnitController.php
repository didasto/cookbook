<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\Models\Unit;
use Illuminate\Http\Response;

class UnitController extends Controller
{
    public function index(): Response
    {
        return new Response();
    }

    public function create(): Response
    {
        return new Response();
    }

    public function store(StoreUnitRequest $request): Response
    {
        return new Response();
    }

    public function show(Unit $unit): Response
    {
        return new Response();
    }

    public function edit(Unit $unit): Response
    {
        return new Response();
    }

    public function update(UpdateUnitRequest $request, Unit $unit): Response
    {
        return new Response();
    }

    public function destroy(Unit $unit): Response
    {
        return new Response();
    }
}
