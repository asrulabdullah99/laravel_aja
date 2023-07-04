<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        //validating
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // //cari user
        $user = User::where('email', $request->email)->first();

        //dd($user);

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return $user->createToken('user login')->plainTextToken;  //create token
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();  //hapus token
        return response()->json('Token berhasil dihapus'); //api
    }
}
