<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response|bool
    {
        return false;
    }

    public function view(User $user, Role $info): Response|bool
    {
        return false;
    }

    public function create(User $user): Response|bool
    {
        return false;
    }

    public function update(User $user, Role $info): Response|bool
    {
        return false;
    }

    public function delete(User $user, Role $info): Response|bool
    {
        return false;
    }

    public function restore(User $user, Role $info): Response|bool
    {
        return false;
    }

    public function forceDelete(User $user, Role $info): Response|bool
    {
        return false;
    }
}
