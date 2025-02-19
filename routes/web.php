<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/faq/index', function () {
    return view('/faq.index');
});

Route::get('/posts', function () {
    return view('/posts');
});

Route::get('/posts/feedback', function () {
    return view('posts.feedback');
});

Route::get('/posts/programming', function () {
    return view('posts.programming');
});

Route::get('/posts/study', function () {
    return view('posts.study');
});

Route::get('/posts/swot', function () {
    return view('posts.swot');
});

Route::get('posts/create', function () {
    return view('posts.create');
});

Route::get('faq/create', function () {
    return view('faq.create');
});
