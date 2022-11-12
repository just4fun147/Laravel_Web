<?php

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
Route::resource('/feedback', \App\Http\Controllers\FeedbackController::class);
Route::resource('/movie', \App\Http\Controllers\MovieController::class);
Route::resource('/buku', \App\Http\Controllers\BukuController::class);
Route::resource('/dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('/user', \App\Http\Controllers\UserController::class);
Route::resource('/majalah', \App\Http\Controllers\MajalahController::class);
Route::resource('/perpus', \App\Http\Controllers\PerpusController::class)->middleware('guest');
Route::resource('/register', \App\Http\Controllers\RegisterController::class)->middleware('guest');

Route::controller(\App\Http\Controllers\DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/listBuku', 'listBuku');
    Route::get('/listPeminjam', 'listPeminjam');
    Route::get('/listPembeli', 'listPembeli');
    Route::get('/listPeminjaman', 'listPeminjaman');
    Route::get('/listPembelianMajalah', 'listPembelianMajalah');
    Route::get('/listMajalah', 'listMajalah');
    Route::get('/profile', 'profile'); 
});

Route::controller(\App\Http\Controllers\LoginController::class)->group(function () {
    Route::get('/login', 'index')->middleware('guest');
    Route::post('/login', 'store');
    Route::post('/logout', 'logout');
});
Route::controller(\App\Http\Controllers\PeminjamanController::class)->group(function () {
    Route::post('/pinjam', 'pinjam');
    Route::post('/balik', 'balik');
});

Route::controller(\App\Http\Controllers\PembelianController::class)->group(function () {
    Route::post('/beli', 'beli');
    Route::post('/bayar', 'bayar');
    Route::post('/batal', 'batal');
});

Route::group(['middleware' => 'auth:api'], function(){
    
});

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Paulus Pandu Windito"
    ]);
});

Route::get('/education', function () {
    return view('education', [
        "title" => "Education"
    ]);
});

Route::get('/work', function () {
    return view('work', [
        "title" => "Work"
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/vueJs/numberGuessing', function () {
    return view('/vueJs/numberGuessing', [
        "title" => "Number Guessing"
    ]);
});

Route::get('/vueJs/todo', function () {
    return view('/vueJs/todo', [
        "title" => "To Do List"
    ]);
});

Route::get('/perpus/index', function () {
    return view('/perpus/index', [
        "title" => "Perpustakaan Jalur Literasi"
    ]);
});


Route::get('/perpus/page/dashboard', function () {
    return view('/perpus/page/dashboard', [
        "title" => "Perpustakaan Jalur Literasi"
    ]);
});


