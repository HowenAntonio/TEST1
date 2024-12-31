<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/events', [App\Http\Controllers\EventController::class, 'index']);
Route::get('/terbaru', [ArticleController::class, 'list'])->defaults('sortBy', 'date');
Route::get('/populer', [ArticleController::class, 'list'])->defaults('sortBy', 'likes');

Route::get('/about', function () {
    return view('about');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/articles/article1', function () {
    return view('articles.article1');
});
Route::get('/articles/article2', function () {
    return view('articles.article2');
});
Route::get('/articles/article3', function () {
    return view('articles.article3');
});

Route::get('/events/event1', function () {
    return view('events.event1');
});
Route::get('/events/event2', function () {
    return view('events.event2');
});
Route::get('/events/event3', function () {
    return view('events.event3');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile')->middleware('auth');

