@extends('layout.master')

@section('content')
<style>
    .article-card {
        background-color: #f9f9f9;
        /* Warna background untuk card */
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        /* Shadow */
    }

    .article-image {
        max-width: 150px;
        border-radius: 10px;
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

    /* Articles */
    .article-image {
    width: 100px; /* atau ukuran yang sesuai */
    height: 100px;
    border-radius: 8px;
    object-fit: cover; /* Agar gambar tidak terdistorsi */
    }
</style>

<div class="container-fluid container-custom tex-center d-flex justify-content-center" style="height: 500px;">
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('images/HomeBg.jpg') }}" width="100%" height="500">
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        @foreach($articles as $article)
            <div class="col-12 article-card d-flex mb-3">
                <div class="me-3">
                    <!-- Tentukan gambar berdasarkan ID artikel -->
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
                            <img src="{{ asset('images/5.PNG') }}" alt="{{ $article->title }}" class="article-image">
                            @break
                        @case(6)
                            <img src="{{ asset('images/6.jpeg') }}" alt="{{ $article->title }}" class="article-image">
                            @break
                        @default
                            <img src="{{ asset('images/7.jpg') }}" alt="{{ $article->title }}" class="article-image">
                    @endswitch
                </div>
                <div>
                    <h5 class="fw-bold">{{ $article->title }}</h5>
                    <small>{{ $article->created_at->format('d M Y') }} | by
                        {{ $article->writer->name ?? 'Unknown' }}</small>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <a href="{{ route('article', $article->id) }}" class="read-more-btn">read more...</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection