<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public $table = 'users';
    public function getModel()
    {
        return User::class;
    }

}
