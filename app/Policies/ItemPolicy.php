<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ItemPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response|bool
    {
        return false;
    }

    public function view(User $user, Item $info): Response|bool
    {
        return false;
    }

    public function create(User $user): Response|bool
    {
        return false;
    }

    public function update(User $user, Item $info): Response|bool
    {
        return false;
    }

    public function delete(User $user, Item $info): Response|bool
    {
        return false;
    }

    public function restore(User $user, Item $info): Response|bool
    {
        return false;
    }

    public function forceDelete(User $user, Item $info): Response|bool
    {
        return false;
    }
}
