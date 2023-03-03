<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class UserController extends Controller
{
    public function register_view() {
        return view('auth.register');
    }
    public function register(RegisterRequest $registerRequest) {
        $registerRequest->validated($registerRequest->all());

        User::create([
            'name' => $registerRequest->name,
            'email' => $registerRequest->email,
            'password' => \Hash::make($registerRequest->password)
        ]);

        return redirect(route('login.view'));
    }
    public function login_view() {
        return view('auth.login');
    }
    public function login(LoginRequest $loginRequest) {
        $loginRequest->validated($loginRequest->all());

        $data = $loginRequest->only(['name', 'password']);

        if (\Auth::attempt($data)) {
            return redirect()->intended('dashboard');
        }

        return redirect(route('root'));
    }
    public function dashboard() {
        if (\Auth::check()) {
            return view('dashboard.dashboard');
        }

        return redirect(route('root'));
    }
    public function logout() {
        \Session::flush();
        \Auth::logout();

        return redirect(route('root'));
    }
}
