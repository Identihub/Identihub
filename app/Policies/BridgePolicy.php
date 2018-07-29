<?php

namespace App\Policies;

use App\User;
use App\Bridge;
use Illuminate\Auth\Access\HandlesAuthorization;

class BridgePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the bridge.
     *
     * @param  \App\User   $user
     * @param  \App\Bridge $bridge
     * @return mixed
     */
    public function view(User $user, Bridge $bridge)
    {
        //
    }

    /**
     * Determine whether the user can create bridges.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the bridge.
     *
     * @param  \App\User   $user
     * @param  \App\Bridge $bridge
     * @return mixed
     */
    public function update(User $user, Bridge $bridge)
    {
        return $user->isOwnerOf($bridge);
    }

    /**
     * Determine whether the user can delete the bridge.
     *
     * @param  \App\User   $user
     * @param  \App\Bridge $bridge
     * @return mixed
     */
    public function delete(User $user, Bridge $bridge)
    {
        return $user->isOwnerOf($bridge);
    }
}
