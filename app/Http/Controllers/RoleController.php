<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    public function index(): Response
    {
        return new Response();
    }

    public function create(): Response
    {
        return new Response();
    }

    public function store(StoreRoleRequest $request): Response
    {
        return new Response();
    }

    public function show(Role $role): Response
    {
        return new Response();
    }

    public function edit(Role $role): Response
    {
        return new Response();
    }

    public function update(UpdateRoleRequest $request, Role $role): Response
    {
        return new Response();
    }

    public function destroy(Role $role): Response
    {
        return new Response();
    }
}
