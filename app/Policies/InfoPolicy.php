<?php

namespace App\Policies;

use App\Models\Info;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class InfoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response|bool
    {
        return false;
    }

    public function view(User $user, Info $info): Response|bool
    {
        return false;
    }

    public function create(User $user): Response|bool
    {
        return false;
    }

    public function update(User $user, Info $info): Response|bool
    {
        return false;
    }

    public function delete(User $user, Info $info): Response|bool
    {
        return false;
    }

    public function restore(User $user, Info $info): Response|bool
    {
        return false;
    }

    public function forceDelete(User $user, Info $info): Response|bool
    {
        return false;
    }
}
