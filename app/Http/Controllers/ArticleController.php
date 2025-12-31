<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Ambil artikel terbaru, pagination 9 per halaman
        $articles = Article::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        // Cari artikel by slug
        $article = Article::where('slug', $slug)->firstOrFail();

        // (Opsional) Ambil artikel lain buat rekomendasi di bawah
        $relatedArticles = Article::where('id', '!=', $article->id)
            ->whereNotNull('published_at')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('articles.show', compact('article', 'relatedArticles'));
    }
}