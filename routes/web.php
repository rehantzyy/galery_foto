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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "halo laravel";
});

Route::get('welcome', [WelcomeController::class, 'index'])->name('welcome');
Route::get('dashboard', [WelcomeController::class, 'show'])->name('dashboard');
Route::get('siswa', [WelcomeController::class, 'show_siswa'])->name('siswa');
