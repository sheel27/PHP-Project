<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
// Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::middleware(['auth'])->group(function () {
    Route::get('/account', 'UserController@account')->name('account');
    Route::patch('/account', 'UserController@updateAccount')->name('account.update');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'showDashboard']);
});

