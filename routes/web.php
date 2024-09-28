<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password.get');
    Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgot.password.post'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('destinations', DestinationController::class)->middleware('auth');
Route::resource('reviews', ReviewController::class)->middleware('auth');

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/list', [ListController::class, 'index'])->name('list');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('sliders', SliderController::class);
    Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
    Route::post('destinations', [DestinationController::class, 'store'])->name('destinations.store');
    Route::get('destinations/{destination}/edit', [DestinationController::class, 'edit'])->name('destinations.edit');
    Route::put('destinations/{destination}', [DestinationController::class, 'update'])->name('destinations.update');
    Route::delete('destinations/{destination}', [DestinationController::class, 'destroy'])->name('destinations.destroy');
});