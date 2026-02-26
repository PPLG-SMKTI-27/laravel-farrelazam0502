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

    public function editList()
{
    $projects = Project::all();
    return view('edit_project.partials.edit', compact('project'));
}

public function editForm($id = null)
{
    $projects = Project::all(); // semua data
    $project = $id ? Project::findOrFail($id) : null; // yang dipilih

    return view('edit_project.partials.edit', compact('projects', 'project'));
}

public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);

    $project->update([
        'name' => $request->name,
    ]);

    return redirect()->route('dashboard')
                     ->with('success', 'Project berhasil diupdate!');
}

}