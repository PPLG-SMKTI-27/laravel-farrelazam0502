<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function editForm($id = null)
    {
        $certificates = Certificate::latest()->get();
        $certificate = $id ? Certificate::findOrFail($id) : new Certificate();

        return view('edit_certificate.edit', compact('certificates', 'certificate'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'credential_id' => 'nullable|string|max:255',
            'credential_url' => 'nullable|url',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->except('image');
        $data['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('certificates', 'public');
            $data['image'] = $imagePath;
        }

        Certificate::create($data);

        return redirect()->route('dashboard')
            ->with('success', 'Sertifikat berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $certificate = Certificate::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'credential_id' => 'nullable|string|max:255',
            'credential_url' => 'nullable|url',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $request->except('image');
        $data['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($certificate->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($certificate->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($certificate->image);
            }
            $imagePath = $request->file('image')->store('certificates', 'public');
            $data['image'] = $imagePath;
        }

        $certificate->update($data);

        return redirect()->route('dashboard')
            ->with('success', 'Sertifikat berhasil diupdate!');
    }

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        
        // Delete image if exists
        if ($certificate->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($certificate->image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($certificate->image);
        }
        
        $certificate->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Sertifikat berhasil dihapus!');
    }
}
