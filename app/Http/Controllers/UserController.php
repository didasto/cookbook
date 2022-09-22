<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index(): Response
    {
        return new Response();
    }

    public function create(): Response
    {
        return new Response();
    }

    public function store(StoreUserRequest $request): Response
    {
        return new Response();
    }

    public function show(User $user): Response
    {
        return new Response();
    }

    public function edit(User $user): Response
    {
        return new Response();
    }

    public function update(UpdateUserRequest $request, User $user): Response
    {
        return new Response();
    }

    public function destroy(User $user): Response
    {
        return new Response();
    }
}
