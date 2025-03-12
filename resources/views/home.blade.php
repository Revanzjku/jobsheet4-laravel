@extends('layouts.app')
@section('title', 'Home - RevansApp')
@section('content')
<div class="jumbotron text-center bg-light py-5 shadow-sm">
    <h1 class="display-4 fw-bold">Selamat Datang di RevansApp</h1>
    <p class="lead text-muted">Aplikasi Laravel sederhana yang menampilkan fitur-fitur modern dengan Laravel Blade.</p>
    <a href="{{route('profile')}}" class="btn btn-primary btn-lg shadow">Lihat Profil</a>
</div>
<div class="container mt-5">
    <h2 class="text-center mb-4 fw-bold">Fitur Unggulan</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/feature1.png') }}" class="card-img-top" alt="Responsif">
                <div class="card-body">
                    <h5 class="card-title">Responsif</h5>
                    <p class="card-text">Desain yang responsif dan modern, didukung oleh Bootstrap 5.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/feature2.png') }}" class="card-img-top" alt="Mudah Disesuaikan">
                <div class="card-body">
                    <h5 class="card-title">Mudah Disesuaikan</h5>
                    <p class="card-text">Tampilan dan komponen dapat dengan mudah disesuaikan sesuai kebutuhan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/feature3.png') }}" class="card-img-top" alt="Blade Templating">
                <div class="card-body">
                    <h5 class="card-title">Blade Templating</h5>
                    <p class="card-text">Menggunakan Laravel Blade untuk pembuatan tampilan yang dinamis dan reusable.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h2 class="text-center mb-4 fw-bold">Proyek Terkini</h2>
    <div class="row">
        @foreach($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/'.$project['image']) }}" class="card-img-top" alt="{{$project['title']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$project['title']}}</h5>
                        <p class="card-text">{{$project['description']}}</p>
                        <a href="{{$project['links']}}" class="btn btn-outline-primary btn-sm" target="_blank">Selengkapnya</a>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4 fw-bold">Testimoni</h2>
    <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($testimonials as $index => $testimonial)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="d-flex flex-column align-items-center text-center p-4 shadow rounded bg-light">
                        <img src="{{ asset( 'assets/'. $testimonial['image']) }}" class="rounded-circle mb-3 border border-3 border-black" alt="{{ $testimonial['name'] }}" width="100">
                        <blockquote class="blockquote">
                            <p class="mb-3 fst-italic">"{{ $testimonial['message'] }}"</p>
                            <footer class="blockquote-footer">{{ $testimonial['name'] }}</footer>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-black p-3 rounded" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-black p-3 rounded" aria-hidden="true"></span>
        </button>
    </div>
</div>
@endsection