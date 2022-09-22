<?php

namespace App\Policies;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UnitPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response|bool
    {
        return false;
    }

    public function view(User $user, Unit $info): Response|bool
    {
        return false;
    }

    public function create(User $user): Response|bool
    {
        return false;
    }

    public function update(User $user, Unit $info): Response|bool
    {
        return false;
    }

    public function delete(User $user, Unit $info): Response|bool
    {
        return false;
    }

    public function restore(User $user, Unit $info): Response|bool
    {
        return false;
    }

    public function forceDelete(User $user, Unit $info): Response|bool
    {
        return false;
    }
}
