<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    public function index(Request $request)
    {
        $query = Club::query()->with('members');
        
        // Apply search filter if provided
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        
        // Apply category filter if provided
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category', $request->category);
        }
        
        // Get all clubs without pagination
        $clubs = $query->get();
        
        // If user is authenticated, check their membership status
        if (Auth::check()) {
            $userId = Auth::id();
            foreach ($clubs as $club) {
                $club->is_member = $club->members->contains('id', $userId);
            }
        }
        
        return view('pages.clubs', compact('clubs'));
    }

    public function show(Club $club)
    {
        return view('pages.clubs.show', compact('club'));
    }

    public function join(Club $club)
    {
        try {
            $club->members()->attach(Auth::id(), [
                'date_inscription' => now(),
                'role' => 'membre'
            ]);
            return back()->with('success', 'Vous avez rejoint le club avec succès.');
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de l\'adhésion au club.');
        }
    }

    public function leave(Club $club)
    {
        try {
            $club->members()->detach(Auth::id());
            return back()->with('success', 'Vous avez quitté le club.');
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors du départ du club.');
        }
    }
}
