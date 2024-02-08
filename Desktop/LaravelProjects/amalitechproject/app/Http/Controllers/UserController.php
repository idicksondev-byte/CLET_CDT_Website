<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(User $user) {
        $users = User::all();
        return $users;
    }

    public function getUserById($id) {
        $us = User::find($id);
        return $us;
    }
}
