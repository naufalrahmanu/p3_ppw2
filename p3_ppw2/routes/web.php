<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'John Doe',
        'email' => 'l4S2N@example.com'
    ]);
});