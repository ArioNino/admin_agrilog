<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/user-management', function () {
    return view('user');
});

Route::get('/forum', function () {
    return view('iforum/index');
});

Route::get('/forum/create', function () {
    return view('iforum/create');
});

Route::prefix('artikel')->group(function () {
    Route::get('/', [ArtikelController::class, 'index']);
    Route::get('/create', [ArtikelController::class, 'create']);
    Route::get('/edit', [ArtikelController::class, 'edit']);
});