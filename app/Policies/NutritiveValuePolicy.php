<?php

namespace App\Policies;

use App\Models\NutritiveValue;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class NutritiveValuePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response|bool
    {
        return false;
    }

    public function view(User $user, NutritiveValue $info): Response|bool
    {
        return false;
    }

    public function create(User $user): Response|bool
    {
        return false;
    }

    public function update(User $user, NutritiveValue $info): Response|bool
    {
        return false;
    }

    public function delete(User $user, NutritiveValue $info): Response|bool
    {
        return false;
    }

    public function restore(User $user, NutritiveValue $info): Response|bool
    {
        return false;
    }

    public function forceDelete(User $user, NutritiveValue $info): Response|bool
    {
        return false;
    }
}
