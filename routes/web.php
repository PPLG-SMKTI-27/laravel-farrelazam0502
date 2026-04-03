<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificateController;


// Language Switch Route
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

// Home route
Route::get('/', [ProjectController::class, 'index'])->name('home');

// project route detail
Route::get('/project-detail', [ProjectController::class, 'detail'])
    ->name('project_detail');

    

// project route
Route::get('/Project', [ProjectController::class, 'index'])->name('project');


// route for dashboard
use App\Models\Project;
use App\Models\Certificate;

Route::get('/dashboard', function () {
    $projects = Project::all();
    $certificates = Certificate::all();
    $totalSkills = 6; // From skill.blade.php
    return view('dashboard', compact('projects', 'certificates', 'totalSkills'));
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

Route::post('/project', [ProjectController::class, 'store'])
    ->name('project.store');

Route::put('/project/{id}', [ProjectController::class, 'update'])
    ->name('project.update');

Route::delete('/project/{id}', [ProjectController::class, 'destroy'])
    ->name('project.destroy');

// Certificate CRUD routes
Route::get('/certificate/edit/{id?}', [CertificateController::class, 'editForm'])
    ->name('certificate.editForm');

Route::post('/certificate', [CertificateController::class, 'store'])
    ->name('certificate.store');

Route::put('/certificate/{id}', [CertificateController::class, 'update'])
    ->name('certificate.update');

Route::delete('/certificate/{id}', [CertificateController::class, 'destroy'])
    ->name('certificate.destroy');

require __DIR__.'/auth.php';
