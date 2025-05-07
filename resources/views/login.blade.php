@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="text-center mb-4">
            <!-- <img src="https://res.cloudinary.com/dj6pc5c0o/image/upload/v1746626538/dcpo8s3ah0pgxhanixew.png" 
                 height="30" alt="Logo UNEJ"> -->
            <h3 class="mt-3 text-secondary">Serap Aspirasi Mahasiswa</h3>
            <p class="text-muted">FASILKOM UNEJ</p>
        </div>
        
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-user-circle me-2"></i>Login Mahasiswa</h4>
            </div>
            
            <div class="card-body p-4">
                <form action="{{ route('dashboard') }}" method="GET">
                    <div class="mb-4">
                        <label class="form-label text-secondary">Nama/NIM</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="fas fa-user text-secondary"></i>
                            </span>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan nama atau NIM" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-secondary">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="fas fa-lock text-secondary"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Masukkan password">
                        </div>
                        <div class="form-text text-end">
                            <small>*Password tidak diverifikasi untuk UTS</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-unej w-100 py-2 mt-3">
                        <i class="fas fa-sign-in-alt me-2"></i> Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection