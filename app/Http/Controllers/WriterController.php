<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        // Ambil semua data penulis
        $writers = Writer::all();

        return view('writer', compact('writers'));
    }

    public function show($id)
    {
        $writer = Writer::findOrFail($id);
        $articles = $writer->articles; // Asumsikan relasi articles sudah didefinisikan di model Writer

        return view('writerDetail', compact('writer', 'articles'));
    }

}
