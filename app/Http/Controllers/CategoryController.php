<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   // Menampilkan artikel dalam kategori yang dipilih
   public function show(Category $category)
   {
       // Ambil semua artikel dalam kategori ini
       $articles = $category->articles;
       return view('category', compact('category', 'articles'));
   }
}
