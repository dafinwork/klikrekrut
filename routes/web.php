<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/partner', function () {
    return view('partner');
});
Route::get('/elearning', function () {
    return view('elearning');
});
Route::get('/applypartner', function () {
    return view('applypartner');
});