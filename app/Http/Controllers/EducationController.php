<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Facades\Storage;

class EducationController extends Controller
{
    public function editForm($id = null)
    {
        $educations = Education::all();
        $education = $id ? Education::findOrFail($id) : new Education();

        return view('edit_education.partials.edit', compact('educations', 'education'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'desc' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('education', 'public');
            $data['logo'] = $logoPath;
        }

        Education::create($data);

        return redirect()->route('dashboard')
            ->with('success', 'Riwayat pendidikan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $education = Education::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'desc' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            // Delete old image if it was uploaded (not a default screenshot)
            if ($education->logo && !str_starts_with($education->logo, 'Screenshot') && Storage::disk('public')->exists($education->logo)) {
                Storage::disk('public')->delete($education->logo);
            }
            $logoPath = $request->file('logo')->store('education', 'public');
            $data['logo'] = $logoPath;
        }

        $education->update($data);

        return redirect()->route('dashboard')
            ->with('success', 'Riwayat pendidikan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $education = Education::findOrFail($id);

        if ($education->logo && !str_starts_with($education->logo, 'Screenshot') && Storage::disk('public')->exists($education->logo)) {
            Storage::disk('public')->delete($education->logo);
        }

        $education->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Riwayat pendidikan berhasil dihapus!');
    }
}
