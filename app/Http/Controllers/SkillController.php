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
            'icon' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        Skill::create($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Skill berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);

        $request->validate([
            'category' => 'required|string|in:front-end,back-end,tools',
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $skill->update($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Skill berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Skill berhasil dihapus!');
    }
}
