<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        // Force a fresh user instance
        $user = Auth::user()->fresh();
        
        // Clear any cached data for this user
        $userId = $user->id;
        Cache::forget("user_clubs_{$userId}");
        Cache::forget("user_events_{$userId}");
        
        // Get user's clubs - force a fresh query
        $userClubs = $user->clubs()->with('members')->get();
        $clubsCount = $userClubs->count();
        
        // Get user's participating events - force a fresh query
        $participatingEvents = $user->participatingEvents()
            ->wherePivot('statut', 'inscrit')
            ->get();
        $eventsCount = $participatingEvents->count();
        
        // Get upcoming events list for display
        $upcomingEventsList = $participatingEvents->take(5);
        
        return view('pages.dashboard', compact(
            'userClubs', 
            'clubsCount', 
            'eventsCount',
            'upcomingEventsList'
        ));
    }
} 