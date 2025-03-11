<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    
    public function profile()
    {
        $profile = [
            'name' => 'Revans Satria Putra',
            'email' => 'satriarevans90@gmail.com',
            'bio' => 'Siswa SMKN 1 Sayung',
            'profile_picture' => 'user1.png', // Path gambar
            'skills' => ['Laravel', 'Blade', 'PHP', 'Bootstrap CSS']
        ];

        return view('profile', compact('profile'));
    }

    public function about()
    {
        return view('about');
    }
}
