<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get("/dashboard", AdminDashboardController::class)->name('dashboard');

Route::get("/user", function() {

    if(request()->ajax()){
        $users = User::query();

        return DataTables::of($users)->make();
    }

    return view('admin.user.index');

})->name('user');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class,'register']);