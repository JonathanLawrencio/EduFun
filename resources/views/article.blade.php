@extends('layout.master')

@section('content')

<style>
    .container {
        max-width: 800px;
    }

    h2.fw-bold {
        font-size: 24px;
        color: #333;
    }

    .img-fluid {
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .article-meta p {
        font-size: 14px;
        color: #777;
        margin-top: 10px;
    }

    .article-content .lead {
        font-size: 18px;
        color: #555;
        line-height: 1.6;
        margin-top: 20px;
        margin-bottom: 0;
    }

</style>

<div class="container mt-5">
    <!-- Judul Kategori Artikel -->
    <h2 class="fw-bold mb-4">{{ $article->title }}</h2>

    <!-- Gambar Artikel -->
    <!-- Gambar Artikel -->
    @php
        // Tentukan path dasar gambar
        $basePath = 'images/' . $article->id;

        // Coba temukan file dengan ekstensi yang sesuai
        $imagePath = '';
        if (file_exists(public_path($basePath . '.jpg'))) {
            $imagePath = asset($basePath . '.jpg');
        } elseif (file_exists(public_path($basePath . '.jpeg'))) {
            $imagePath = asset($basePath . '.jpeg');
        } elseif (file_exists(public_path($basePath . '.png'))) {
            $imagePath = asset($basePath . '.png');
        } else {
            // Jika tidak ada gambar yang ditemukan, gunakan gambar default
            $imagePath = asset('images/default_article.jpg');
        }
    @endphp
    <img src="{{ $imagePath }}" alt="{{ $article->title }}" class="img-fluid rounded mb-4"
        style="width: 100%; max-height: 400px; object-fit: cover;">

    <!-- Tanggal, Penulis, dan Konten Artikel -->
    <div class="article-meta">
        <p class="text-muted">
            {{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name ?? 'Unknown' }}
        </p>
    </div>

    <div class="article-content">
        <p class="lead">{{ $article->content }}</p>
    </div>
    @endsection