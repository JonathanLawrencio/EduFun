@extends('layout.master')

@section('content')
<style>
    .article-container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }

    .article-card {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        align-items: flex-start;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .article-image {
        width: 150px;
        height: 100px;
        border-radius: 8px;
        object-fit: cover;
        margin-right: 20px;
    }

    .article-details {
        flex: 1;
    }

    .article-title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .article-meta {
        font-size: 14px;
        color: #777;
        margin-bottom: 15px;
    }

    .read-more-btn {
        background-color: #001f3f;
        color: white;
        font-weight: bold;
        border-radius: 20px;
        padding: 8px 20px;
        align-self: flex-start;
        text-decoration: none;
        
    }

    .read-more-btn:hover {
        background-color: #003366;
        color: white;
        text-decoration: none;
    }

    /* Custom Pagination Style */
    .custom-pagination {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #333;
    }

    .custom-pagination a {
        color: #333;
        margin: 0 5px;
        text-decoration: none;
    }

    .custom-pagination .current-page {
        font-weight: bold;
    }
</style>

<div class="article-container">
    <h2 class="text-center mb-5">Popular Articles</h2>

    @foreach($articles as $article)
    <div class="article-card">
        @switch($article->id)
            @case(1)
                <img src="{{ asset('images/1.png') }}" alt="{{ $article->title }}" class="article-image">
                @break
            @case(2)
                <img src="{{ asset('images/2.jpeg') }}" alt="{{ $article->title }}" class="article-image">
                @break
            @case(3)
                <img src="{{ asset('images/3.jpeg') }}" alt="{{ $article->title }}" class="article-image">
                @break
            @case(4)
                <img src="{{ asset('images/4.jpeg') }}" alt="{{ $article->title }}" class="article-image">
                @break
            @case(5)
                <img src="{{ asset('images/5.png') }}" alt="{{ $article->title }}" class="article-image">
                @break
            @case(6)
                <img src="{{ asset('images/6.jpeg') }}" alt="{{ $article->title }}" class="article-image">
                @break
            @default
                <img src="{{ asset('images/default_article.jpg') }}" alt="{{ $article->title }}" class="article-image">
        @endswitch

        <div class="article-details">
            <div class="article-title">{{ $article->title }}</div>
            <div class="article-meta">
                {{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name ?? 'Unknown' }}
            </div>
            <p>{{ Str::limit($article->content, 150) }}</p>
            <a href="{{ route('article', $article->id) }}" class="read-more-btn">Read more...</a>
        </div>
    </div>
    @endforeach

    <!-- Custom Pagination -->
    <div class="custom-pagination">
        Page |
        @for ($i = 1; $i <= $articles->lastPage(); $i++)
            @if ($i == $articles->currentPage())
                <span class="current-page">{{ $i }}</span>
            @else
                <a href="{{ $articles->url($i) }}">{{ $i }}</a>
            @endif
        @endfor
    </div>
</div>
@endsection
