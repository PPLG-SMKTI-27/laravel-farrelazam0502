<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

use App\Http\Controllers\AuthController;

Route::get('w', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.Portofolio');
});

// Route::get('Project', function () {
//     return view('Project');
// });

Route::get('/Project', [ProjectController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLogin']);

Route::post('/login', [AuthController::class, 'storeLogin']);