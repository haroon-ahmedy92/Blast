<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/tanzania-jobs', function () {
    return view('pages.tanzania-jobs');
})->name('tanzania-jobs');
