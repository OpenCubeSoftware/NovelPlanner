<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PagesController::class, 'rootRoute'])->name('root');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [\App\Http\Controllers\UserController::class, 'showDashboard'])->name('home.show');

    Route::group(['prefix' => '/novels'], function () {
        Route::get('/', [\App\Http\Controllers\NovelsController::class, 'index'])->name('novels.index');
        Route::get('/{novel}', [\App\Http\Controllers\NovelsController::class, 'show'])->name('novels.show');
    });
});

require __DIR__ . '/auth.php';
