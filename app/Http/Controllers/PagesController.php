<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function rootRoute()
    {
        return Inertia::render('Welcome');
    }
}
