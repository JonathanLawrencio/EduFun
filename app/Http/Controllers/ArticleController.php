<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Menampilkan halaman detail artikel
    public function show(Article $article)
    {
        return view('article', compact('article'));
    }

    public function popular()
    {
        // Ambil artikel dan urutkan berdasarkan ID secara ascending
        $articles = Article::orderBy('id', 'asc')->get();

        return view('popular', compact('articles'));
    }

}
