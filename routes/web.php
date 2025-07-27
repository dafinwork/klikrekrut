<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/find', function () {
    return view('find');
});

Route::get('/job', function () {
    return view('job');
});

Route::get('/learning', function () {
    return view('learning');
});

Route::get('/community', function () {
    return view('community');
});
