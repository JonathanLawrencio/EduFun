<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function index()
    {
        // Ambil artikel dan urutkan berdasarkan ID secara ascending, dengan 3 artikel per halaman
        $articles = Article::orderBy('id', 'asc')->paginate(3);

        return view('popular', compact('articles'));
    }
}
