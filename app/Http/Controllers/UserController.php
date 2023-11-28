<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegister() {
        return view('Register.register');
    }

    public function register(Request $request) {
        $user = User::query()->create([
            'name' => $request['name'],
            'password' => Hash::make($request['password']),
        ]);

        Auth::login($user);

        return redirect()->route('profile');
    }

    public function profile() {
        return view('Register.profile');
    }

}
