<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Login form (demo - accepts any credentials)
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Demo behavior: ignore credentials and go to home
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/productos', function () {
    return view('productos.index');
});

// Resource routes for productos (CRUD)
use App\Http\Controllers\ProductoController;
Route::resource('productos', ProductoController::class);

// Resource routes for tipos (CRUD)
use App\Http\Controllers\TipoController;
Route::resource('tipos', TipoController::class);
