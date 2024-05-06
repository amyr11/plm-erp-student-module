<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/credential-generation-dashboard', 'credential-generation-dashboard')
    ->middleware(['auth', 'verified'])
    ->name('credential-generation-dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';