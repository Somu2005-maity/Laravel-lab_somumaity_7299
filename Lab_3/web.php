<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
| Public page lookup
| GET /pages/about or /pages/company/team
| The wildcard accepts nested page paths.
*/
Route::get('/pages/{path}', [PageController::class, 'show'])
    ->where('path', '.*')
    ->name('pages.show');

/*
| Update page content
| PUT /pages/about or /pages/company/team
| Keep mutations authenticated and protected by Laravel's CSRF middleware.
*/
Route::put('/pages/{path}', [PageController::class, 'update'])
    ->where('path', '.*')
    ->middleware('auth')
    ->name('pages.update');
