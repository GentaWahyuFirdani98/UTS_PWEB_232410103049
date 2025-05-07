@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h3><i class="fas fa-home me-2"></i>Selamat datang, {{ $user }}!</h3>
            </div>
            <div class="card-body p-4">
                <p class="lead">FASILKOM UNEJ - S Aspirasi Mahasiswa</p>
                
                <div class="alert alert-primary d-flex align-items-center p-3 mt-3">
                    <i class="fas fa-bullhorn me-3 fa-lg"></i>
                    <div>
                        <strong>Aspirasi terbaru:</strong> {{ $aspirasi_terbaru }}
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-clipboard-list fa-3x text-secondary mb-3"></i>
                                <h5>Lihat Daftar Aspirasi</h5>
                                <p class="text-muted mb-3">Cek semua aspirasi yang telah disampaikan</p>
                                <a href="{{ route('pengelolaan') }}" class="btn btn-sm btn-unej">
                                    Lihat Aspirasi
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-user fa-3x text-secondary mb-3"></i>
                                <h5>Profil Saya</h5>
                                <p class="text-muted mb-3">Lihat dan kelola informasi profil Anda</p>
                                <a href="{{ route('profile') }}" class="btn btn-sm btn-unej">
                                    Lihat Profil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection