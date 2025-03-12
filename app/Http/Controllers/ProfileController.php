<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $projects = [
            [
                'image' => 'project1.jpg',
                'title' => 'Warung Jawa',
                'description' => 'Membuat website sederhana dengan Wordpress.',
                'links' => 'https://warung.revansoktavian.my.id/'
            ],
            [
                'image' => 'project2.jpg',
                'title' => 'Revans Art',
                'description' => 'Membuat sebuah website E-Commerce dengan Wordpress.',
                'links' => 'https://arts.revansoktavian.my.id/'
            ],
            [
                'image' => 'project3.jpg',
                'title' => 'CRUD Data Sekolah',
                'description' => 'Membuat website yang menerapkan CRUD sederhana.',
                'links' => 'https://revansoktavian.my.id/sekolah/'
            ]
        ];

        $testimonials = [
            [
                'name' => 'Andi',
                'image' => 'user1.png',
                'message' => 'Aplikasi ini sangat membantu dan mudah digunakan!',
            ],
            [
                'name' => 'Budi',
                'image' => 'user1.png',
                'message' => 'Fitur-fiturnya keren dan desainnya menarik.',
            ],
            [
                'name' => 'Citra',
                'image' => 'user1.png',
                'message' => 'Sangat puas dengan performa dan keandalannya.',
            ],
        ];
        return view('home', compact('projects', 'testimonials'));
    }
    
    public function profile()
    {
        $profile = [
            'name' => 'Revans Satria Putra',
            'email' => 'satriarevans90@gmail.com',
            'bio' => 'Siswa SMKN 1 Sayung',
            'profile_picture' => 'user1.png',
            'skills' => ['Laravel', 'Blade', 'PHP', 'Bootstrap CSS']
        ];

        return view('profile', compact('profile'));
    }

    public function about()
    {
        $teams = [
            [
                'image' => 'team1.jpg',
                'name' => 'Cloud Strife',
                'position' => 'Founder &amp; CEO'
            ],
            [
                'image' => 'team2.jpg',
                'name' => 'Vincent Valentine',
                'position' => 'Lead Developer'
            ],
            [
                'image' => 'team3.png',
                'name' => 'Caith Sith',
                'position' => 'UI/UX Designer'
            ]
        ];

        return view('about', compact('teams'));
    }

    public function contact()
    {
        return view('contact');
    }
}
