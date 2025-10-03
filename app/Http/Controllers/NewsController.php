<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // Clear any cached news data
        Cache::forget('news_list');
        
        $query = News::query();
        
        // Apply search filter if provided
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }
        
        // Apply category filter if provided
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category', $request->category);
        }
        
        // Get paginated results - force fresh data
        $news = $query->with('author')->latest()->get();
        
        return view('pages.actualites', compact('news'));
    }

    public function show(News $news)
    {
        // Force a fresh news instance
        $news = $news->fresh(['author']);
        
        return view('pages.actualites.show', compact('news'));
    }
}
