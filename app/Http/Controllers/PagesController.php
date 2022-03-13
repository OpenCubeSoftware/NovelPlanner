<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function rootRoute()
    {
        if (Auth::hasUser()) {
            $user = Auth::user();
            return Inertia::render('Planner/Novels', ['novels' => $user->novels]);
        }
        return Inertia::render('Welcome');
    }
}
