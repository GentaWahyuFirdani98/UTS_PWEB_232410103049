<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tampilinLogin()
    {
        return view('login');
    }

    public function tampilinDashboard(Request $request)
    {
        $username = $request->query('username', 'Anonim');
        
        $data_dashboard = [
            'user' => $username,
            'total_aspirasi' => 15,
            'aspirasi_terbaru' => 'Permintaan perbaikan AC di Ruang A 3.2'
        ];

        return view('dashboard', $data_dashboard);
    }

    public function tampilinProfile(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');
        
        $data_profile = [
            'nama' => $username,
            'nim' => 'H1D021' . rand(100, 999),
            'fakultas' => 'FASILKOM - Universitas Jember',
            'prodi' => 'Informatika'
        ];

        return view('profile', ['profile' => $data_profile]);
    }

    public function tampilinPengelolaan()
    {
        $data_aspirasi = [
            [
                'id' => 1,
                'nama' => 'Budi Santoso', // Changed from nama_mhs to nama
                'kategori' => 'Fasilitas',
                'isi' => 'AC di Ruang A 3.2 sering mati',
                'tanggal' => '2025-06-10',
                'status' => 'Belum diproses'
            ],
            [
                'id' => 2,
                'nama' => 'Ani Wijaya', // Changed from nama_mhs to nama
                'kategori' => 'Akademik',
                'isi' => 'Materi UAS kurang jelas',
                'tanggal' => '2025-06-12',
                'status' => 'Ditanggapi'
            ],
            [
                'id' => 3,
                'nama' => 'Rudi', // Changed from nama_mh to nama
                'kategori' => 'Layanan',
                'isi' => 'Pembuatan KTM lama',
                'tanggal' => '2025-06-15',
                'status' => 'Dalam review'
            ]
        ];

        return view('pengelolaan', ['aspirasi' => $data_aspirasi]);
    }
}