<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $request->validated();

        $encrypt = Hash::make($request->password);

        User::query()->create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $encrypt
        ]);

        return redirect()->route('dashboard');
    }
}
