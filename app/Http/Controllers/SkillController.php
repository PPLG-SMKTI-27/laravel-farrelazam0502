<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function editForm($id = null)
    {
        $skills = Skill::all();
        $skill = $id ? Skill::findOrFail($id) : new Skill();

        return view('edit_skill.partials.edit', compact('skills', 'skill'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|in:front-end,back-end,tools',
            'name' => 'required|string|max:255',
            'icon_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'icon_text' => 'nullable|string|max:255',
            'desc' => 'required|string',
        ]);

        $data = $request->only(['category', 'name', 'desc']);

        if ($request->hasFile('icon_file')) {
            $filename = time() . '_' . $request->file('icon_file')->getClientOriginalName();
            $request->file('icon_file')->move(public_path('uploads/skills'), $filename);
            $data['icon'] = 'uploads/skills/' . $filename;
        } elseif ($request->filled('icon_text')) {
            $data['icon'] = $request->input('icon_text');
        }

        Skill::create($data);

        return redirect()->route('dashboard')
            ->with('success', 'Skill berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);

        $request->validate([
            'category' => 'required|string|in:front-end,back-end,tools',
            'name' => 'required|string|max:255',
            'icon_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'icon_text' => 'nullable|string|max:255',
            'desc' => 'required|string',
        ]);

        $data = $request->only(['category', 'name', 'desc']);

        if ($request->hasFile('icon_file')) {
            // Delete old image if it was an uploaded file
            if ($skill->icon && str_starts_with($skill->icon, 'uploads/') && file_exists(public_path($skill->icon))) {
                unlink(public_path($skill->icon));
            }
            $filename = time() . '_' . $request->file('icon_file')->getClientOriginalName();
            $request->file('icon_file')->move(public_path('uploads/skills'), $filename);
            $data['icon'] = 'uploads/skills/' . $filename;
        } elseif ($request->filled('icon_text')) {
            // If using text icon, delete old image if it was uploaded
            if ($skill->icon && str_starts_with($skill->icon, 'uploads/') && file_exists(public_path($skill->icon))) {
                unlink(public_path($skill->icon));
            }
            $data['icon'] = $request->input('icon_text');
        }

        $skill->update($data);

        return redirect()->route('dashboard')
            ->with('success', 'Skill berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);

        // Delete uploaded image if exists
        if ($skill->icon && str_starts_with($skill->icon, 'uploads/') && file_exists(public_path($skill->icon))) {
            unlink(public_path($skill->icon));
        }

        $skill->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Skill berhasil dihapus!');
    }
}
