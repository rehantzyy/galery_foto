<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/halo', function () {
//     return "halo laravel";
// });



Route::get('/', [WelcomeController::class, 'index'])->name('beranda');
Route::get('/beranda', [WelcomeController::class, 'beranda'])->name('beranda');
Route::get('/galery', [WelcomeController::class, 'galery'])->name('galery');
Route::get('/singlegalery', [WelcomeController::class, 'singlegalery'])->name('singlegalery');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-proses', [AuthController::class, 'register_proses'])->name('register-proses');



Route::get('/postingan', [WelcomeController::class, 'postingan'])->name('postingan');
Route::get('/profil', [WelcomeController::class, 'profil'])->name('profil');
Route::get('/tambahpostingan', [WelcomeController::class, 'tambahpostingan'])->name('tambahpostingan');
Route::get('/album', [WelcomeController::class, 'album'])->name('album');
