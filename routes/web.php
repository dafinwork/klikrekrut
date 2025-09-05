<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/community', function () {
    return view('community');
});
Route::get('/partner', function () {
    return view('partner');
});
Route::get('/elearning', function () {
    return view('elearning');
});