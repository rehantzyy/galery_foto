<?php
use App\Http\Controllers\WelcomeController;
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
Route::get('/login', [WelcomeController::class, 'login'])->name('login');
Route::get('/register', [WelcomeController::class, 'register'])->name('register');
Route::get('/postingan', [WelcomeController::class, 'postingan'])->name('postingan');
Route::get('/profil', [WelcomeController::class, 'profil'])->name('profil');
Route::get('/tambahpostingan', [WelcomeController::class, 'tambahpostingan'])->name('tambahpostingan');
Route::get('/album', [WelcomeController::class, 'album'])->name('album');
