<!-- resources/views/writers/index.blade.php -->
@extends('layout.master')

@section('content')

<style>
    .container {
        max-width: 1000px;
        margin-top: 80px;
        /* Jarak dari navbar */
    }

    .card {
        border-radius: 10px;
        background-color: #f9f9f9;
        width: 100%;
        max-width: 300px;
        /* Batasi lebar kartu */
        padding: 20px;
    }

    .writer-link {
        text-decoration: none;
        /* Removes underline */
        color: inherit;
        /* Keeps the color as defined without applying link styling */
    }

    .writer-link:hover {
        color: #1d3b99;
        /* Adds a hover effect if needed */
    }

    h2.fw-bold {
        font-size: 28px;
        color: #333;
    }

    .text-muted {
        font-size: 16px;
        color: #555;
    }

    .rounded-circle img {
        object-fit: cover;
        width: 150px;
        height: 150px;
    }

</style>


<div class="container mt-5 text-center">
    <!-- Judul Halaman -->
    <h2 class="fw-bold mb-4">Our Writers:</h2>

    <!-- Daftar Penulis -->
    <div class="row justify-content-center">
        @foreach($writers as $writer)
            <div class="col-md-4 col-lg-3 mb-5 d-flex align-items-stretch">
                <a href="{{ route('writer.show', $writer->id) }}" class="writer-link">
                    <div class="card border-0 shadow-sm text-center p-4">
                        <!-- Gambar Penulis -->
                        <div class="rounded-circle overflow-hidden mx-auto mb-3" style="width: 150px; height: 150px;">
                            <img src="{{ asset('images/writers/' . $writer->id . '.jpeg') }}" alt="{{ $writer->name }}"
                                class="img-fluid">
                        </div>

                        <!-- Nama Penulis dan Spesialisasi -->
                        <h5 class="fw-bold">{{ $writer->name }}</h5>
                        <p class="text-muted">{{ $writer->specialization ?? 'Specialization not specified' }}</p>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
</div>

@endsection