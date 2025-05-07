@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4><i class="fas fa-id-card me-2"></i>Profil Mahasiswa</h4>
            </div>
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <div class="avatar-circle mb-3">
                        <i class="fas fa-user-circle fa-6x text-secondary"></i>
                    </div>
                    <h4 class="mb-0">{{ $profile['nama'] }}</h4>
                    <p class="text-muted">{{ $profile['nim'] }}</p>
                </div>
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user fa-lg text-secondary me-3"></i>
                            <div>
                                <small class="text-muted">Nama Lengkap</small>
                                <div class="fw-bold">{{ $profile['nama'] }}</div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-id-badge fa-lg text-secondary me-3"></i>
                            <div>
                                <small class="text-muted">Nomor Induk Mahasiswa</small>
                                <div class="fw-bold">{{ $profile['nim'] }}</div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-university fa-lg text-secondary me-3"></i>
                            <div>
                                <small class="text-muted">Fakultas</small>
                                <div class="fw-bold">{{ $profile['fakultas'] }}</div>
                            </div>
                        </div>
                    </li>
                </ul>
                
                <div class="d-grid mt-4">
                    <button class="btn btn-unej">
                        <i class="fas fa-edit me-2"></i> Edit Profil
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection