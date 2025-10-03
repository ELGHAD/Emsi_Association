<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class EventController extends Controller
{
    public function index(Request $request)
    {
        // Clear any cached events data
        Cache::forget('events_list');
        
        $query = Event::query();
        
        // Apply search filter if provided
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        
        // Apply type filter if provided
        if ($request->has('type') && !empty($request->type)) {
            $query->where('type', $request->type);
        }
        
        // Get all events without pagination
        $events = $query->with('participants')->latest()->get();
        
        // If user is authenticated, check their participation status
        if (Auth::check()) {
            $userId = Auth::id();
            foreach ($events as $event) {
                $event->is_participant = $event->participants->contains('id', $userId);
            }
        }
        
        return view('pages.evenements', compact('events'));
    }

    public function show(Event $event)
    {
        // Force a fresh event instance with eager loading of participants
        $event = $event->fresh(['participants']);
        
        // If user is authenticated, check their participation status
        if (Auth::check()) {
            $userId = Auth::id();
            $event->is_participant = $event->participants->contains('id', $userId);
        }
        
        return view('pages.evenements.show', compact('event'));
    }

    public function participate(Event $event)
    {
        try {
            // Check if event is not full
            if ($event->participants()->count() >= $event->capacity) {
                return back()->with('error', 'Désolé, l\'événement est complet.');
            }
            
            // Check if user is already participating
            if ($event->participants()->where('user_id', Auth::id())->exists()) {
                return back()->with('error', 'Vous êtes déjà inscrit à cet événement.');
            }
            
            $event->participants()->attach(Auth::id(), [
                'date_inscription' => now(),
                'statut' => 'inscrit'
            ]);
            
            // Clear any cached data
            Cache::forget('events_list');
            Cache::forget("user_events_" . Auth::id());
            
            return back()->with('success', 'Vous êtes inscrit à l\'événement.');
        } catch (\Exception $e) {
            \Log::error('Erreur lors de la participation à l\'événement: ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de l\'inscription.');
        }
    }

    public function cancel(Event $event)
    {
        try {
            $event->participants()->detach(Auth::id());
            
            // Clear any cached data
            Cache::forget('events_list');
            Cache::forget("user_events_" . Auth::id());
            
            return back()->with('success', 'Votre participation a été annulée.');
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de l\'annulation.');
        }
    }
}
