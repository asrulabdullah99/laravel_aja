<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(User $user)
    {
        $dataUser = $user->get();
        return view('admin.user.viewUser', compact('dataUser'));
    }
    public function tambahForm()
    {
        return view('admin.user.tambahForm');
    }
    public function saveUser(User $user, Request $userRequest)
    {
        $data = $userRequest->all();
        $data['password'] = bcrypt($userRequest->password);
        $user->create($data);
        return redirect(route('user.getUser'))->with('success', 'Data user berhasil ditambahkan');
    }
    public function deleteUser(User $user)
    {
        $user->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
    }
    public function updateUser()
    {
    }
}
