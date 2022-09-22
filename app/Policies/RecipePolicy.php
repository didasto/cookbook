<?php

namespace App\Policies;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class RecipePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response|bool
    {
        return false;
    }

    public function view(User $user, Recipe $info): Response|bool
    {
        return false;
    }

    public function create(User $user): Response|bool
    {
        return false;
    }

    public function update(User $user, Recipe $info): Response|bool
    {
        return false;
    }

    public function delete(User $user, Recipe $info): Response|bool
    {
        return false;
    }

    public function restore(User $user, Recipe $info): Response|bool
    {
        return false;
    }

    public function forceDelete(User $user, Recipe $info): Response|bool
    {
        return false;
    }
}
