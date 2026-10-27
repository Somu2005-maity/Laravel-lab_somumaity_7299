<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Welcome to Home Page';
});


Route::get('/about', function () {
    return 'Welcome to About Page';
});


Route::get('/contact', function () {
    return 'Welcome to Contact Page';
});


Route::get('/page/{name}', function ($name) {
    return 'Welcome to ' . $name . ' Page';
});