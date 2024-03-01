<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function index()
    {
        return view("home.auth");
    }

    public function reset()
    {
        return view("home.reset");
    }

    public function registerUser(Request $request)
    {

        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'email|required|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->username,
            'username' => $request->username,
            'user_id' => Str::random(16),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (!$user) {
            return redirect('/auth')->with('error', 'Sorry User Already Exits!');
        }

        return redirect('/auth#tab-item-register')->with('success', 'User created successfully!');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect('/auth')->with('error', 'Sorry User Not Found!');
        }

        if (Hash::check($request->password, $user->password)) {
            auth()->login($user);
            if ($user->role == 'admin') {
                return redirect('/admin')->with('success', 'Login Successfull!');
            }
            return redirect('/user')->with('success', 'User Logged In successfully!');
        }

        return redirect('/auth')->with('error', 'Sorry User Not Found!');
    }

    public function logOut(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/")->with("message", "Logged Out!");
    }
}
