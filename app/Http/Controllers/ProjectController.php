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

    public function editForm($id = null)
    {
        $projects = Project::all();
        $project = $id ? Project::findOrFail($id) : new Project();

        return view('edit_project.partials.edit', compact('projects', 'project'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technology' => 'required|string',
            'demo_link' => 'nullable|url',
        ]);

        Project::create($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Project berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technology' => 'required|string',
            'demo_link' => 'nullable|url',
        ]);

        $project->update($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Project berhasil diupdate!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Project berhasil dihapus!');
    }
}