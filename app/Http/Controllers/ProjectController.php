<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Certificate;

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil semua project yang ditandai sebagai featured
        $projects = Project::where('is_featured', true)->latest()->get();
        
        // Fallback: Jika tidak ada featured, ambil semua project terbaru
        if ($projects->isEmpty()) {
            $projects = Project::latest()->get();
        }

        $certificates = Certificate::where('is_featured', true)->latest()->get();
        if ($certificates->isEmpty()) {
            $certificates = Certificate::latest()->get();
        }

        $nama = 'Farrel';
        $umur = "20 Tahun";
        $totalProjects = Project::count();
        $totalCertificates = Certificate::count();
        $educations = \App\Models\Education::orderBy('id', 'asc')->get();
        $skills = \App\Models\Skill::all();

        return view('pages.Portofolio', [
            'projects' => $projects,
            'certificates' => $certificates,
            'educations' => $educations,
            'skills' => $skills,
            'nama' => $nama,
            'umur' => $umur,
            'totalProjects' => $totalProjects,
            'totalCertificates' => $totalCertificates
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->except('image');
        $data['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('image')) {
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/projects'), $filename);
            $data['image'] = 'uploads/projects/' . $filename;
        }

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->except('image');
        $data['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/projects'), $filename);
            $data['image'] = 'uploads/projects/' . $filename;
        }

        $project->update($data);

        return redirect()->route('dashboard')
            ->with('success', 'Project berhasil diupdate!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        
        // Delete image if exists
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }
        
        $project->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Project berhasil dihapus!');
    }
}