<?php

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