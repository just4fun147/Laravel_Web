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

