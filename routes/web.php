<?php

use App\Http\Controllers\Blog\PostsController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::resource('/blog', PostsController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'isAdmin'])->name('dashboard');

require __DIR__ . '/auth.php';
