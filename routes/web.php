<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
