<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

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