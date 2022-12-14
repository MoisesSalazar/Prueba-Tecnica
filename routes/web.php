<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginContoller;
use App\Http\Controllers\AutenticadoController;
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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('login',[LoginContoller::class, 'index'])->name('login');

Route::post('login', [LoginContoller::class, 'SignIn'])->name('autenticar')->middleware('guest');
Route::get('logout', [LoginContoller::class, 'logout'])->name('logout');

Route::get('home',[AutenticadoController::class, 'index'])->name('autenticado')->middleware('auth');