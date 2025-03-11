@extends('layouts')
@section('title', 'Profil Pembuat')
@section('content')
<div class="card shadow-lg border-0 rounded-4">
    <div class="card-header bg-black text-white text-center py-3">
        <h1 class="mb-0">Profile Saya</h1>
    </div>
    <div class="card-body text-center">
        <img src="assets/user1.png" alt="Profile Picture" class="rounded-circle border border-3 border-gray mb-3" width="150">
        <h4 class="fw-bold">Revans Satria Putra</h4>
        <p class="text-muted mb-1"><i class="bi bi-envelope"></i> satriarevans90@gmail.com</p>
        <p class="text-muted">Siswa SMKN 1 Sayung</p>
        
        <h5 class="mt-3">Skills</h5>
        <div class="d-flex justify-content-center flex-wrap">
            <span class="badge bg-primary m-1">Laravel</span>
            <span class="badge bg-danger m-1">Blade</span>
            <span class="badge bg-warning text-dark m-1">PHP</span>
            <span class="badge bg-info text-dark m-1">Bootstrap CSS</span>
        </div>
    </div>
</div>

@endsection