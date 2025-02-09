<?php

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

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/feedback', function () {
    return view('feedback');
});

Route::get('/blog/programming', function () {
    return view('programming');
});

Route::get('/blog/study', function () {
    return view('study');
});

Route::get('/blog/swot', function () {
    return view('swot');
});
