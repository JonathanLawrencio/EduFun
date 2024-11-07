<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
         // Ambil beberapa artikel dari database, misalnya hanya 6 artikel terbaru
         $articles = Article::latest()->take(6)->get();

         // Kirim data artikel ke view home
         return view('home', compact('articles'));
    }
}
