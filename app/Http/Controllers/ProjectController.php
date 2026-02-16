<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $nama = 'Farrel';
        $umur = "20 Tahun";

        return view('pages.Portofolio', [
            'projects' => $projects,
            'nama' => $nama,
            'umur' => $umur
        ]);
    }

    // ✅ HARUS di dalam class
    // ✅ nama harus sama dengan route (detail)
    public function detail()
    {
        $projects = Project::all();

        return view('pages.project_detail', compact('projects'));
    }
}