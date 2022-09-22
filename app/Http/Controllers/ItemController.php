<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    public function index(): Response
    {
        return new Response();
    }

    public function create(): Response
    {
        return new Response();
    }

    public function store(StoreItemRequest $request): Response
    {
        return new Response();
    }

    public function show(Item $item): Response
    {
        return new Response();
    }

    public function edit(Item $item): Response
    {
        return new Response();
    }

    public function update(UpdateItemRequest $request, Item $item): Response
    {
        return new Response();
    }

    public function destroy(Item $item): Response
    {
        return new Response();
    }
}
