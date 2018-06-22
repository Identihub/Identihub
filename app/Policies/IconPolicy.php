<?php

namespace App\Policies;

use App\User;
use App\Icon;
use Illuminate\Auth\Access\HandlesAuthorization;

class IconPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the icon.
     *
     * @param  \App\User $user
     * @param  \App\Icon $icon
     * @return mixed
     */
    public function view(User $user, Icon $icon)
    {
        //
    }

    /**
     * Determine whether the user can create icons.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the icon.
     *
     * @param  \App\User $user
     * @param  \App\Icon $icon
     * @return mixed
     */
    public function update(User $user, Icon $icon)
    {
        return $user->isOwnerOf($icon->bridge);
    }

    /**
     * Determine whether the user can delete the icon.
     *
     * @param  \App\User $user
     * @param  \App\Icon $icon
     * @return mixed
     */
    public function delete(User $user, Icon $icon)
    {
        return $user->isOwnerOf($icon->bridge);
    }
}
