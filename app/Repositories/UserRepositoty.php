<?php

namespace App\Http\Repositories;

use \App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function findUser($input)
    {

        $user = UserModel::where([
            ['username', $input['username']],
            ['password',  Hash::make($input['password'])]
        ]);

        return $user;
    }

    public function createUser()
    {
        try {
        } catch (\Exception $e) {
            error_log($e->getMessage());
        }
    }
}
