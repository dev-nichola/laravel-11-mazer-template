<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'name' => $request->name,
            'email' => $request->email,
            'password' => $encrypt,
        ]);

        return redirect()->route('dashboard');
    }
}
