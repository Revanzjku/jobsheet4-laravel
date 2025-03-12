@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
<div class="container my-5">
    <div class="card shadow-lg p-4 border-0">
        <h1 class="text-center mb-4">Hubungi Kami</h1>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label fw-bold">Telepon</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label fw-bold">Subjek</label>
                <select class="form-select" id="subject" name="subject" required>
                    <option value="">Pilih subjek pesan</option>
                    <option value="pertanyaan">Pertanyaan</option>
                    <option value="masukan">Masukan</option>
                    <option value="kerjasama">Kerjasama</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label fw-bold">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
            </div>
            <div class="mb-3">
                <label for="attachment" class="form-label fw-bold">Lampiran</label>
                <input type="file" class="form-control" id="attachment" name="attachment">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Jenis Kelamin</label>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                        <label class="form-check-label" for="male">Pria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Wanita</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                <label class="form-check-label" for="terms">Saya menyetujui syarat dan ketentuan</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold shadow-sm">Kirim Pesan</button>
        </form>
    </div>
</div>
@endsection
