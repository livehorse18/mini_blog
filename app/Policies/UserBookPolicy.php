<?php

namespace App\Policies;

use App\Models\User;
use App\Policies\UserBook;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserBookPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any user books.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the user book.
     *
     * @param  \App\Models\User  $user
     * @param  \App\UserBook  $userBook
     * @return mixed
     */
    public function view(User $user, UserBook $userBook)
    {
        //
    }

    /**
     * Determine whether the user can create user books.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the user book.
     *
     * @param  \App\Models\User  $user
     * @param  \App\UserBook  $userBook
     * @return mixed
     */
    public function update(User $user, UserBook $userBook)
    {
        //
    }

    /**
     * Determine whether the user can delete the user book.
     *
     * @param  \App\Models\User  $user
     * @param  \App\UserBook  $userBook
     * @return mixed
     */
    public function delete(User $user, UserBook $userBook)
    {
        //if ($user->id == $userBook->user_id) {
        //    return true;
        //}

    }

    /**
     * Determine whether the user can restore the user book.
     *
     * @param  \App\Models\User  $user
     * @param  \App\UserBook  $userBook
     * @return mixed
     */
    public function restore(User $user, UserBook $userBook)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the user book.
     *
     * @param  \App\Models\User  $user
     * @param  \App\UserBook  $userBook
     * @return mixed
     */
    public function forceDelete(User $user, UserBook $userBook)
    {
        //
    }
}
