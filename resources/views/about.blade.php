@extends('layout.master')

@section('content')

<style>
    .about-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 60px 20px;
        text-align: center;
        color: #333;
    }

    .about-container h2 {
        font-size: 36px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .about-container p {
        font-size: 18px;
        line-height: 1.8;
        color: #555;
    }
</style>

<div class="about-container">
    <h2>About EduFun</h2>
    <p>
        EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.
    </p>
    <p>
        Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.
    </p>
</div>
@endsection
