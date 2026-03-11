<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil 3 project yang ditandai sebagai featured
        $projects = Project::where('is_featured', true)->latest()->take(3)->get();
        
        // Fallback: Jika tidak ada featured, ambil 3 terbaru saja
        if ($projects->isEmpty()) {
            $projects = Project::latest()->take(3)->get();
        }

        $nama = 'Farrel';
        $umur = "20 Tahun";

        return view('pages.Portofolio', [
            'projects' => $projects,
            'nama' => $nama,
            'umur' => $umur
        ]);
    }

    public function detail()
    {
        $projects = Project::all();
        return view('pages.project_detail', compact('projects'));
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

        $data = $request->all();
        $data['is_featured'] = $request->has('is_featured');

        Project::create($data);

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

        $data = $request->all();
        $data['is_featured'] = $request->has('is_featured');

        $project->update($data);

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