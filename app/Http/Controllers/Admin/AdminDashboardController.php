<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function __invoke()
    {

        request()->ajax();

        return view('admin.dashboard.index');
    }
}
