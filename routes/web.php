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

Route::get('/feedback', function () {
    return view('feedback',[
        "title" => "Feedback"
    ]);
});

Route::get('/giveFeedback', function () {
    return view('feedback',[
        "title" => "Feedback"
    ]);
});

