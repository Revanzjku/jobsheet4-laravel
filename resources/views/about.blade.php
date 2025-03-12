@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<h1 class="text-center mb-5 display-4 fw-bold">Tentang Kami</h1>
<div class="row align-items-center mb-5 py-4 bg-light rounded">
    <div class="col-md-6 p-4">
        <h2 class="fw-bold mb-4">Visi & Misi</h2>
        <div class="mb-4">
            <h4 class="fw-bold text-primary">Visi</h4>
            <p class="lead">Mewujudkan aplikasi web yang sederhana, inovatif, dan bermanfaat bagi semua kalangan.</p>
        </div>
        <div>
            <h4 class="fw-bold text-primary">Misi</h4>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Menyediakan solusi teknologi yang mudah dipahami dan diakses.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Mendorong kolaborasi dan kreativitas dalam pengembangan aplikasi.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Mengoptimalkan performa dan tampilan dengan teknologi modern.</li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('assets/about.png') }}" alt="Visi dan Misi" class="img-fluid rounded shadow">
    </div>
</div>
<div class="mb-5 py-4">
    <h2 class="text-center fw-bold mb-4">Sejarah Kami</h2>
    <p class="lead text-center mx-auto" style="max-width: 800px;">
        RevansApp bermula dari ide sederhana untuk mengembangkan aplikasi web yang user-friendly dan dapat dimodifikasi dengan mudah. 
        Dengan menggunakan Laravel Blade, kami berhasil mengintegrasikan berbagai komponen dan fitur modern dalam satu platform yang dinamis.
        Proyek ini dibangun dengan semangat kolaborasi dan inovasi, serta didukung oleh tim yang berdedikasi tinggi.
    </p>
</div>
<div class="mb-5 py-5 bg-light rounded">
    <h2 class="text-center fw-bold mb-5">Tim Kami</h2>
    <div class="row justify-content-center g-4 p-4"> 
        @foreach($teams as $team)
            <div class="col-lg-4 col-md-6"> 
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/'. $team['image']) }}" class="card-img-top" alt="{{$team['name']}}">
                    <div class="card-body text-center p-4"> 
                        <h5 class="card-title fw-bold">{{$team['name']}}</h5>
                        <p class="card-text text-muted">{{$team['position']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="mb-5 py-4">
    <h2 class="text-center fw-bold mb-4">Hubungi Kami</h2>
    <p class="lead text-center mx-auto" style="max-width: 800px;">
        Jika Anda memiliki pertanyaan atau masukan, silakan hubungi kami melalui:
    </p>
    <div class="text-center">
        <p class="mb-2"><i class="bi bi-envelope-fill text-primary me-2"></i>Email: <a href="mailto:revanssatria@revansoktavian.my.id" class="text-decoration-none">revanssatria@revansoktavian.my.id</a></p>
        <p class="mb-2"><i class="bi bi-telephone-fill text-primary me-2"></i>Telepon: <a href="tel:+6288988035301" class="text-decoration-none">+62 88988035301</a></p>
        <p class="mb-2"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Alamat: Jl. Onggorawe, Demak, Indonesia</p>
    </div>
</div>
@endsection