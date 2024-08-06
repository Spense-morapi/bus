<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Sample;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/sample',Sample::class)->name('sample.index');
require __DIR__.'/auth.php';
