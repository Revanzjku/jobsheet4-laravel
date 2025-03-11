@extends('layouts.app')
@section('title', 'Home - RevansApp')
@section('content')
<div class="jumbotron text-center bg-light py-5">
    <h1 class="display-4">Selamat Datang di RevansApp</h1>
    <p class="lead">Aplikasi Laravel sederhana yang menampilkan fitur-fitur modern dengan Laravel Blade.</p>
    <a href="/profile" class="btn btn-primary btn-lg">Lihat Profil</a>
</div>

<!-- Features Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Fitur Unggulan</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="assets/feature1.png" class="card-img-top h-70" alt="Responsif">
                <div class="card-body">
                    <h5 class="card-title">Responsif</h5>
                    <p class="card-text">Desain yang responsif dan modern, didukung oleh Bootstrap 5.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="assets/feature2.png" class="card-img-top" alt="Mudah Disesuaikan">
                <div class="card-body">
                    <h5 class="card-title">Mudah Disesuaikan</h5>
                    <p class="card-text">Tampilan dan komponen dapat dengan mudah disesuaikan sesuai kebutuhan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="assets/feature3.png" class="card-img-top" alt="Blade Templating">
                <div class="card-body">
                    <h5 class="card-title">Blade Templating</h5>
                    <p class="card-text">Menggunakan Laravel Blade untuk pembuatan tampilan yang dinamis dan reusable.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Proyek Terkini</h2>
    
    <div class="row">
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="assets/project1.jpg" class="card-img-top" alt="Proyek Wordpress 1">
                    <div class="card-body">
                        <h5 class="card-title">Warung Jawa</h5>
                        <p class="card-text">Membuat website sederhana dengan Wordpress.</p>
                        <a href="https://warung.revansoktavian.my.id/" class="btn btn-outline-primary btn-sm" target="_blank">Selengkapnya</a>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="assets/project2.jpg" class="card-img-top" alt="Proyek Wordpress 2">
                    <div class="card-body">
                        <h5 class="card-title">Revans Arts</h5>
                        <p class="card-text">Membuat sebuah website E Commerce dengan Wordpress.</p>
                        <a href="https://arts.revansoktavian.my.id/" class="btn btn-outline-primary btn-sm" target="_blank">Selengkapnya</a>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="assets/project3.jpg" class="card-img-top" alt="Proyek PHP CRUD">
                    <div class="card-body">
                        <h5 class="card-title">CRUD Data Sekolah</h5>
                        <p class="card-text">Membuat website yang menerapkan CRUD sederhana.</p>
                        <a href="https://revansoktavian.my.id/sekolah/" class="btn btn-outline-primary btn-sm" target="_blank">Selengkapnya</a>
                    </div>
                </div>
            </div>
            </div>
</div>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4 fw-bold text-black">Testimoni</h2>
    <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex flex-column align-items-center text-center p-4 shadow rounded bg-light">
                    <img src="assets/user1.png" class="rounded-circle mb-3 border border-3 border-black" alt="Andi" width="100">
                    <blockquote class="blockquote">
                        <p class="mb-3 fst-italic">"Aplikasi ini sangat membantu dan mudah digunakan!"</p>
                        <footer class="blockquote-footer">Andi</footer>
                    </blockquote>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex flex-column align-items-center text-center p-4 shadow rounded bg-light">
                    <img src="assets/user1.png" class="rounded-circle mb-3 border border-3 border-black" alt="Budi" width="100">
                    <blockquote class="blockquote">
                        <p class="mb-3 fst-italic">"Fitur-fiturnya keren dan desainnya menarik."</p>
                        <footer class="blockquote-footer">Budi</footer>
                    </blockquote>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex flex-column align-items-center text-center p-4 shadow rounded bg-light">
                    <img src="assets/user1.png" class="rounded-circle mb-3 border border-3 border-black" alt="Citra" width="100">
                    <blockquote class="blockquote">
                        <p class="mb-3 fst-italic">"Sangat puas dengan performa dan keandalannya."</p>
                        <footer class="blockquote-footer">Citra</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-black p-3 rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-black p-3 rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>
</div>
@endsection