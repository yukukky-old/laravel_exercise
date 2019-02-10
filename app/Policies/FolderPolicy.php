<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Folder;

class FolderPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * フォルダの閲覧権限
     * @param User $user
     * @param Folder $folder
     * @return book
     */
    public function view(User $user, Folder $folder)
    {
        return $user->id === $folder->user_id;
    }
}
