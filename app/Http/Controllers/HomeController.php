<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();
        $events = Event::where('date', '>=', now())->orderBy('date')->take(3)->get();
        $clubs = Club::withCount('members')->orderByDesc('members_count')->take(3)->get();
        
        // Récupérer les formations (données statiques pour la démonstration)
        $formations = [
            [
                'id' => 1,
                'code' => 'GI',
                'nom' => 'Génie Informatique',
                'description' => 'Formation en développement logiciel, réseaux et systèmes d\'information',
                'duree' => '3 ans',
                'niveau' => 'Licence'
            ],
            [
                'id' => 2,
                'code' => 'GEM',
                'nom' => 'Génie Électrique et Mécanique',
                'description' => 'Formation en électronique, automatismes et mécanique',
                'duree' => '3 ans',
                'niveau' => 'Licence'
            ],
            [
                'id' => 4,
                'code' => 'GIND',
                'nom' => 'Génie Industriel',
                'description' => 'Formation en optimisation des processus industriels et gestion de la production',
                'duree' => '3 ans',
                'niveau' => 'Licence'
            ]
        ];

        // If user is authenticated, check their participation status for events
        if (auth()->check()) {
            $userId = auth()->id();
            foreach ($events as $event) {
                $event->is_participant = $event->participants->contains($userId);
            }
        }

        return view('pages.home', compact('news', 'events', 'clubs', 'formations'));
    }

    public function dashboard()
    {
        $user = auth()->user();
        
        $userClubs = $user->clubs;
        $userEvents = $user->events;
        
        $upcomingEvents = Event::where('start_date', '>', now())
            ->whereIn('id', $userEvents->pluck('id'))
            ->orderBy('start_date', 'asc')
            ->get();

        return view('dashboard', compact('userClubs', 'upcomingEvents'));
    }
}
