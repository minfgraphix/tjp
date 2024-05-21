<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index3');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services'); 

