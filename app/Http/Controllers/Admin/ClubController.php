<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::latest()->paginate(10);
        return view('admin.clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('admin.clubs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'meeting_schedule' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('clubs', 'public');
            $validated['image'] = $path;
        }

        $validated['creation_date'] = now();

        Club::create($validated);

        return redirect()->route('admin.clubs.index')
            ->with('success', 'Club créé avec succès.');
    }

    public function edit(Club $club)
    {
        return view('admin.clubs.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'meeting_schedule' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($club->image) {
                Storage::disk('public')->delete($club->image);
            }
            $path = $request->file('image')->store('clubs', 'public');
            $validated['image'] = $path;
        }

        $club->update($validated);

        return redirect()->route('admin.clubs.index')
            ->with('success', 'Club mis à jour avec succès.');
    }

    public function destroy(Club $club)
    {
        if ($club->image) {
            Storage::disk('public')->delete($club->image);
        }
        
        $club->delete();

        return redirect()->route('admin.clubs.index')
            ->with('success', 'Club supprimé avec succès.');
    }
} 