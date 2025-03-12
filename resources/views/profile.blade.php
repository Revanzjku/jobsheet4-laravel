@extends('layouts.app')
@section('title', 'Profil Pembuat')
@section('content')
<div class="card shadow-lg border-0 rounded-4">
    <div class="card-header bg-black text-white text-center py-3">
        <h1 class="mb-0">Profile Saya</h1>
    </div>
    <div class="card-body text-center">
        <img src="{{ asset('assets/' .$profile['profile_picture']) }}" alt="Profile Picture" class="rounded-circle border border-3 border-gray mb-3" width="150">
        <h4 class="fw-bold">{{$profile['name']}}</h4>
        <p class="text-muted mb-1"><i class="bi bi-envelope"></i> {{$profile['email']}}</p>
        <p class="text-muted">Bio : {{$profile['bio']}}</p>
        @if(count($profile['skills']) > 0)
        <h5 class="mt-3">Skills</h5>
        <div class="d-flex justify-content-center flex-wrap">
            @foreach($profile['skills'] as $skill)
            <span class="badge bg-primary m-1">{{$skill}}</span>
            @endforeach
        </div>
        @else
        <p>Tidak ada skill yang ditampilkan</p>
        @endif
    </div>
</div>
@endsection