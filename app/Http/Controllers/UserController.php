<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(User $user)
    {
        $dataUser = $user->get();

        return view('viewUser', compact('dataUser'));
    }
    public function saveUser()
    {
    }
    public function deleteUser()
    {
    }
    public function updateUser()
    {
    }
}
