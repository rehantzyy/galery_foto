<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AlbumController;
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
Route::get('/galery', [WelcomeController::class, 'galery'])->name('galery');
Route::get('/singlegalery', [WelcomeController::class, 'singlegalery'])->name('singlegalery');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('logout',function (){
    return redirect()->route('login')->with(['danger'=> 'Anda harus tekan tombol logout']);
});



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-proses', [AuthController::class, 'register_proses'])->name('register-proses');



Route::get('/postingan/{postingan}', [WelcomeController::class, 'postingan'])->name('postingan');

Route::get('/profil', [WelcomeController::class, 'profil'])->name('profil')->middleware('auth');

Route::get('/album', [WelcomeController::class, 'album'])->name('album');

Route::get('/tambahpostingan', [WelcomeController::class, 'tambahpostingan']);

Route::post('/posting', [PhotoController::class,'store'])->name('tambahpostingan');

Route::post('/like/{photo}', [PhotoController::class,'like'])->name('like')->middleware('auth');
Route::post('/comments/{photo}', [PhotoController::class,'comments'])->name('comments')->middleware('auth');

Route::delete('/delete_comment/{comment}', [PhotoController::class,'delete_comment'])->name('delete_comment')->middleware('auth');
Route::put('/edit_comment/{comment}', [PhotoController::class,'edit_comment'])->name('edit_comment')->middleware('auth');
Route::post('/tambah_album', [AlbumController::class,'tambah_album'])->name('tambah_album')->middleware('auth');
Route::put('/edit_foto/{foto}', [PhotoController::class,'edit_foto'])->name('edit_foto')->middleware('auth');
Route::get('/detail_album/{album}', [AlbumController::class, 'detail_album']);
