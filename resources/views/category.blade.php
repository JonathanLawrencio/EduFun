<!-- resources/views/categories/category.blade.php -->
@extends('layout.master')

@section('content')
<style>
    /* CSS untuk Container Kategori */
.container {
    margin-top: 20px;
}

/* Judul Kategori */
h2.fw-bold {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Style untuk Card Artikel */
.card {
    border: none;
    background-color: #f7f8fc; 
    border-radius: 10px; 
    padding: 20px;
    /* transition: transform 0.3s ease;  */
}

.card:hover {
    /* transform: scale(1.02);  */
}

/* Style untuk Gambar Artikel */
.article-image {
    width: 150px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style untuk Teks dalam Card */
.card h5 {
    font-size: 18px;
    color: #1e1e1e;
}

.card small {
    color: #777;
}

.card p {
    color: #555;
}

/* Style Tombol Read More */
.btn-dark {
    background-color: #0d2f51; /* Warna tombol yang lebih gelap */
    border: none;
    font-weight: bold;
    border-radius: 20px;
    padding: 5px 15px;
    transition: background-color 0.3s ease; /* Animasi transisi warna */
}

.btn-dark:hover {
    background-color: #0a2340; /* Warna tombol saat hover */
}

/* Atur posisi tombol Read More agar berada di kanan bawah */
.card .btn-dark {
    align-self: flex-end;
    margin-top: auto; /* Mendorong tombol ke bawah */
}
</style>

<div class="container mt-5">
    <!-- Menampilkan Judul Kategori -->
    <h2 class="fw-bold">{{ $category->name }}</h2>
    
    <!-- Menampilkan Artikel dalam Kategori -->
    <div class="row">
        @foreach($articles as $article)
            <div class="col-12 mb-4">
                <div class="card shadow-sm p-3 d-flex flex-row align-items-center">
                    <!-- Tentukan gambar berdasarkan ID artikel -->
                    @switch($article->id)
                        @case(1)
                            <img src="{{ asset('images/1.png') }}" alt="{{ $article->title }}" class="article-image me-3">
                            @break
                        @case(2)
                            <img src="{{ asset('images/2.jpeg') }}" alt="{{ $article->title }}" class="article-image me-3">
                            @break
                        @case(3)
                            <img src="{{ asset('images/3.jpeg') }}" alt="{{ $article->title }}" class="article-image me-3">
                            @break
                        @case(4)
                            <img src="{{ asset('images/4.jpeg') }}" alt="{{ $article->title }}" class="article-image me-3">
                            @break
                        @case(5)
                            <img src="{{ asset('images/5.PNG') }}" alt="{{ $article->title }}" class="article-image me-3">
                            @break
                        @case(6)
                            <img src="{{ asset('images/6.jpeg') }}" alt="{{ $article->title }}" class="article-image me-3">
                            @break
                        @default
                            <img src="{{ asset('images/7.jpg') }}" alt="{{ $article->title }}" class="article-image me-3">
                    @endswitch

                    <div class="flex-grow-1">
                        <h5 class="fw-bold">{{ $article->title }}</h5>
                        <small>{{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name ?? 'Unknown' }}</small>
                        <p>{{ Str::limit($article->content, 100) }}</p>
                    </div>
                    <a href="{{ route('article', $article->id) }}" class="btn btn-dark">read more...</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
