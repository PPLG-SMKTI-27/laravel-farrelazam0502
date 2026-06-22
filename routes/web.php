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
use App\Models\Education;
use App\Models\Skill;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;

Route::get('/dashboard', function () {
    $projects = Project::all();
    $certificates = Certificate::all();
    $educations = Education::all();
    $skills = Skill::all();
    $totalSkills = $skills->count();

    // Generate chart data for the last 7 days
    $chartData = [
        'labels' => [],
        'projects' => [],
        'certificates' => [],
        'educations' => [],
        'skills' => [],
        'totals' => []
    ];

    for ($i = 6; $i >= 0; $i--) {
        $date = now()->subDays($i)->format('Y-m-d');
        // English/Indonesian format
        $dateLabel = now()->subDays($i)->translatedFormat('d M');

        $projCount = Project::whereDate('created_at', $date)->count();
        $certCount = Certificate::whereDate('created_at', $date)->count();
        $eduCount = Education::whereDate('created_at', $date)->count();
        $skillCount = Skill::whereDate('created_at', $date)->count();
        $total = $projCount + $certCount + $eduCount + $skillCount;

        $chartData['labels'][] = $dateLabel;
        $chartData['projects'][] = $projCount;
        $chartData['certificates'][] = $certCount;
        $chartData['educations'][] = $eduCount;
        $chartData['skills'][] = $skillCount;
        $chartData['totals'][] = $total;
    }

    $chartDataJson = json_encode($chartData);

    return view('dashboard', compact('projects', 'certificates', 'educations', 'skills', 'totalSkills', 'chartDataJson'));
})->middleware(['auth', 'verified'])->name('dashboard');    

// profile routes
// profile & CRUD routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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

    // Education CRUD routes
    Route::get('/education/edit/{id?}', [EducationController::class, 'editForm'])
        ->name('education.editForm');

    Route::post('/education', [EducationController::class, 'store'])
        ->name('education.store');

    Route::put('/education/{id}', [EducationController::class, 'update'])
        ->name('education.update');

    Route::delete('/education/{id}', [EducationController::class, 'destroy'])
        ->name('education.destroy');

    // Skill CRUD routes
    Route::get('/skill/edit/{id?}', [SkillController::class, 'editForm'])
        ->name('skill.editForm');

    Route::post('/skill', [SkillController::class, 'store'])
        ->name('skill.store');

    Route::put('/skill/{id}', [SkillController::class, 'update'])
        ->name('skill.update');

    Route::delete('/skill/{id}', [SkillController::class, 'destroy'])
        ->name('skill.destroy');
});

require __DIR__.'/auth.php';
