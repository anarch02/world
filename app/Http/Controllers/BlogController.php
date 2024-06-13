<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog',
        [
            'categories' => Category::all(),
            'articles' => Article::orderBy('created_at')->get(),
        ]);
    }

    public function article(string $slug)
    {
        $article = Article::where('slug', $slug)->first();
        $comments = $article->comments;
        $other_articles = Article::latest()->limit(3);

        return view('article', [
            'article' => $article,
            'comments' => $comments,
            'other_articles' => $other_articles
        ]);
    }
}
