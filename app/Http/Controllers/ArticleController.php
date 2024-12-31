<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function list(Request $request, $sortBy = 'date')
    {
        $articles = collect([
            ['title' => 'Article 1', 'image' => '/images/article1.png', 'link' => 'articles/article1', 'date' => '2024-12-19', 'likes' => 100],
            ['title' => 'Article 2', 'image' => '/images/article2.png', 'link' => 'articles/article2', 'date' => '2024-12-20', 'likes' => 150],
            ['title' => 'Article 3', 'image' => '/images/article3.png', 'link' => 'articles/article3', 'date' => '2024-12-21', 'likes' => 120],
            // Add more articles as needed
        ]);

        // Sort articles by date in descending order
        // $sortedArticlesTerbaru = $articles->sortByDesc('date');
        // $sortedArticlesPopuler = $articles->sortByDesc('likes');

        // Sort articles based on the provided criterion 
        if ($sortBy === 'likes') { 
            $sortedArticles = $articles->sortByDesc('likes'); 
        } else {
            $sortedArticles = $articles->sortByDesc('date'); 
        }

        // Search functionality
        if ($request->has('search')) {
            $search = $request->input('search');
            $sortedArticles = $sortedArticles->filter(function ($article) use ($search) {
                return stripos($article['title'], $search) !== false;
            });
        }

        // return view('terbaru', ['articles' => $sortedArticlesTerbaru]);
        // return view('populer', ['articles' => $sortedArticlesPopuler]);

        // Determine the view based on the sort criterion
        $view = $sortBy === 'likes' ? 'populer' : 'terbaru';
        return view($view, ['articles' => $sortedArticles]);
    }
}



