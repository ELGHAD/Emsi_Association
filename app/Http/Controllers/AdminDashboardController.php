<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Club;
use App\Models\Event;
use App\Models\News;

class AdminDashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        $clubs = Club::all();
        $events = Event::all();
        $news = News::all();
        $recentActivities = collect(); // Pour l'instant, on utilise une collection vide

        return view('admin.dashboard', compact(
            'users',
            'clubs',
            'events',
            'news',
            'recentActivities'
        ));
    }
} 