<?php

namespace App\Policies;

use App\Receipe;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReceipePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any receipes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the receipe.
     *
     * @param  \App\User  $user
     * @param  \App\Receipe  $receipe
     * @return mixed
     */
    public function view(User $user, Receipe $receipe)
    {
        return $receipe->author_id == $user->id;
    }

    /**
     * Determine whether the user can create receipes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the receipe.
     *
     * @param  \App\User  $user
     * @param  \App\Receipe  $receipe
     * @return mixed
     */
    public function update(User $user, Receipe $receipe)
    {
        //
    }

    /**
     * Determine whether the user can delete the receipe.
     *
     * @param  \App\User  $user
     * @param  \App\Receipe  $receipe
     * @return mixed
     */
    public function delete(User $user, Receipe $receipe)
    {
        //
    }

    /**
     * Determine whether the user can restore the receipe.
     *
     * @param  \App\User  $user
     * @param  \App\Receipe  $receipe
     * @return mixed
     */
    public function restore(User $user, Receipe $receipe)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the receipe.
     *
     * @param  \App\User  $user
     * @param  \App\Receipe  $receipe
     * @return mixed
     */
    public function forceDelete(User $user, Receipe $receipe)
    {
        //
    }
}
