<?php

use App\Http\Controllers\Auth\Forgot_passwordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostMainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('index'); 
})->name('index');

Route::get('/login', [LoginController::class, 'displayLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'displayRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/forgot_password', [Forgot_passwordController::class, 'displayForgot_passwordForm'])->name('forgot_password');
Route::post('/forgot_password', [Forgot_passwordController::class, 'forgot_password']);


Route::get('/profile', [UserController::class, 'displayProfile'])->name('profile');
Route::post('/profile',[UserController::class,'update_user_profile'])->name('update');

Route::post('/logout',[LogoutController::class, 'completeLogout'])->name('logout');

Route::post('/delete',[LogoutController::class, 'deleteUser'])->name('deleteUser');

Route::get('/post',[PostController::class, 'display'])->name('post');
Route::post('/post',[PostController::class, 'postArticle']);

Route::get('/post_main',[PostMainController::class, 'display'])->name('post_main');
