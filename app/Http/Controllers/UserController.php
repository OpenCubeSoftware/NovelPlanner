<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();
        $novels = $user->novels;
    }
}
