@extends('layout.master')

@section('content')

<style>
    body {
        background-color: #f3f5f7;
    }

    .container {
        max-width: 900px;
        margin-top: 40px;
        padding-bottom: 20px;
    }

    .writer-info {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        padding: 20px;
        background-color: #f3f5f7;
        border-radius: 8px;
    }

    .writer-image {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 20px;
        object-fit: cover;
    }

    .writer-name {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
    }

    .writer-specialization {
        font-size: 16px;
        color: #777;
    }

    .article-list {
        margin-top: 20px;
    }

    .article-card {
        display: flex;
        padding: 15px;
        border-radius: 12px;
        background-color: #fff;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .article-image {
        width: 150px;
        height: 120px;
        border-radius: 12px;
        object-fit: cover;
        margin-right: 20px;
    }

    .article-content {
        flex-grow: 1;
    }

    .article-title {
        font-size: 18px;
        font-weight: bold;
        color: #1d3b99;
        margin-bottom: 5px;
    }

    .article-meta {
        font-size: 14px;
        color: #777;
        margin-bottom: 10px;
    }

    .read-more-btn {
        background-color: #001f3f;
        color: #fff;
        padding: 8px 20px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 14px;
        position: absolute;
        bottom: 15px;
        right: 15px;
    }

    .read-more-btn:hover {
        background-color: #003366;
        color: white;
        text-decoration: none;
    }
    
</style>

<div class="container">
    <!-- Writer Information -->
    <div class="writer-info">
        <img src="{{ asset('images/writers/' . $writer->id . '.jpeg') }}" alt="{{ $writer->name }}" class="writer-image">
        <div>
            <h2 class="writer-name">{{ $writer->name }}</h2>
            <p class="writer-specialization">Spesialis {{ $writer->specialization }}</p>
        </div>
    </div>

    <!-- Articles List -->
    <div class="article-list">
        @foreach($writer->articles as $article)
        <div class="article-card">
            <!-- Article Image -->
            @php
                $imagePath = asset('images/default_article.jpg'); // Default image
                foreach (['jpg', 'jpeg', 'png'] as $ext) {
                    if (file_exists(public_path("images/{$article->id}.$ext"))) {
                        $imagePath = asset("images/{$article->id}.$ext");
                        break;
                    }
                }
            @endphp
            <img src="{{ $imagePath }}" alt="{{ $article->title }}" class="article-image">

            <!-- Article Content -->
            <div class="article-content">
                <h3 class="article-title">{{ $article->title }}</h3>
                <p class="article-meta">{{ $article->created_at->format('d M Y') }} | by {{ $writer->name }}</p>
                <p>{{ Str::limit($article->content, 100) }}</p>
            </div>

            <!-- Read More Button -->
            <a href="{{ route('article', $article->id) }}" class="read-more-btn">read more...</a>
        </div>
        @endforeach
    </div>
</div>

@endsection
