<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;
use App\Models\Event;

class LandingController extends Controller
{
    public function index()
    {
        $events = Event::where('start_datetime', '>=', now()) 
                       ->orderBy('start_datetime', 'asc')
                       ->take(3)
                       ->get();

        $articles = Article::orderBy('published_at', 'desc')
                       ->take(3)
                       ->get();

    return view('welcome', compact('events', 'articles'));
    }
}