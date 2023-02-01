<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function FacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $data = User::where('email', $user->email)->first();
        if (is_null($data)) {
            $userData['name'] = $user->name;
            $userData['email'] = $user->email;
            $userData['password'] = '12345';
            $data = User::create($userData);
        }
        Auth::login($data);
        return redirect('dashboard');
    }

    public function redirectToGoogle()
    {

        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {

        $user = Socialite::driver('google')->user();
        $data = User::where('email', $user->email)->first();

        if (is_null($data)) {
            $userData['name'] = $user->name;
            $userData['email'] = $user->email;
            $userData['password'] = '12345';
            $data = User::create($userData);
        }

        Auth::login($data);
        return redirect('dashboard');
    }
}
