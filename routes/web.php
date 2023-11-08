<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

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

Route::get('/', function () {return view('home');});

Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');

Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');

Route::get('/auth/news', [LoginRegisterController::class, 'news'])->name('auth.news');

Route::get('/auth/lulus', [LoginRegisterController::class, 'lulus'])->name('auth.lulus');

Route::get('/auth/dosen', [LoginRegisterController::class, 'dosen'])->name('auth.dosen');