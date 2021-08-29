<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () { return redirect()->route('login');});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
