<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;
use App\Models\Info;
use Illuminate\Support\Facades\Response;

class InfoController extends Controller
{
    public function index(): Response
    {
        return new Response();
    }

    public function create(): Response
    {
        return new Response();
    }

    public function store(StoreInfoRequest $request): Response
    {
        return new Response();
    }

    public function show(Info $info): Response
    {
        return new Response();
    }

    public function edit(Info $info): Response
    {
        return new Response();
    }

    public function update(UpdateInfoRequest $request, Info $info): Response
    {
        return new Response();
    }

    public function destroy(Info $info): Response
    {
        return new Response();
    }
}
