<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


// Home route
Route::get('/', [ProjectController::class, 'index'])->name('home');

// project route detail
Route::get('/project-detail', [ProjectController::class, 'detail'])
    ->name('project_detail');

    

// project route
Route::get('/Project', [ProjectController::class, 'index'])->name('project');


// route for dashboard
use App\Models\Project;

Route::get('/dashboard', function () {
    $projects = Project::all();
    return view('dashboard', compact('projects'));
})->middleware(['auth', 'verified'])->name('dashboard');    

// profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

// edit project route
Route::get('/project/edit/{id?}', [ProjectController::class, 'editForm'])
    ->name('project.editForm');

Route::put('/project/{id}', [ProjectController::class, 'update'])
    ->name('project.update');
require __DIR__.'/auth.php';
