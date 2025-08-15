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

Route::get('/all-jobs', function () {
    return view('pages.all-jobs');
})->name('all-jobs');

Route::get('/tenders', function () {
    return view('pages.tenders');
})->name('tenders');

Route::get('/post', function () {
    return view('pages.post');
})->name('post');

Route::get('/job-form', function () {
    return view('pages.job-form');
})->name('job-form');
