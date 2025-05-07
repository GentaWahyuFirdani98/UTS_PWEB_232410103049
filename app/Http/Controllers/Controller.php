<?php
// File: app/Http/Controllers/Controller.php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // Login
    public function login()
    {
        return view('login');
    }

    // Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');
        return view('dashboard', compact('username'));
    }

    // Profile
    public function profile(Request $request)
    {
        $username = $request->query('username');
        $profile = [
            'nama' => $username,
            'nim' => 'H1D021XXX',
            'fakultas' => 'FASILKOM - Universitas Jember',
            'prodi' => 'Informatika'
        ];
        return view('profile', compact('profile'));
    }

    // Pengelolaan Aspirasi
    public function pengelolaan()
    {
        $aspirasi = [
            [
                'id' => 1,
                'nama' => 'Budi',
                'kategori' => 'Fasilitas',
                'isi' => 'Proyektor di Lab C sering mati',
                'status' => 'Belum diproses'
            ],
            [
                'id' => 2,
                'nama' => 'Ani',
                'kategori' => 'Akademik',
                'isi' => 'Materi UAS kurang jelas',
                'status' => 'Ditanggapi'
            ]
        ];
        return view('pengelolaan', compact('aspirasi'));
    }
}