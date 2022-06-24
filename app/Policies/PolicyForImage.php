<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PolicyForImage
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function update(User $user, Image $image)
    {
        return $user->id === $image->user_id || $user->role === Role::Editor;
    }
}
