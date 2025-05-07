@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4><i class="fas fa-list-alt me-2"></i>Daftar Aspirasi Mahasiswa</h4>
                <button class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-1"></i> Tambah Aspirasi
                </button>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Isi Aspirasi</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aspirasi as $item)
                            <tr>
                                <td class="ps-4">{{ $loop->iteration }}</td>
                                <td>{{ $item['nama'] }}</td>
                                <td>
                                    @if($item['kategori'] == 'Fasilitas')
                                        <span class="badge rounded-pill bg-info text-dark">
                                            <i class="fas fa-building me-1"></i> {{ $item['kategori'] }}
                                        </span>
                                    @elseif($item['kategori'] == 'Akademik')
                                        <span class="badge rounded-pill bg-secondary text-white">
                                            <i class="fas fa-book me-1"></i> {{ $item['kategori'] }}
                                        </span>
                                    @else
                                        <span class="badge rounded-pill bg-primary text-white">
                                            <i class="fas fa-hands-helping me-1"></i> {{ $item['kategori'] }}
                                        </span>
                                    @endif
                                </td>
                                <td>{{ $item['isi'] }}</td>
                                <td>{{ $item['tanggal'] }}</td>
                                <td>
                                    @if($item['status'] == 'Belum diproses')
                                        <span class="badge bg-warning">
                                            <i class="fas fa-clock me-1"></i> {{ $item['status'] }}
                                        </span>
                                    @elseif($item['status'] == 'Ditanggapi')
                                        <span class="badge bg-success">
                                            <i class="fas fa-check-circle me-1"></i> {{ $item['status'] }}
                                        </span>
                                    @else
                                        <span class="badge bg-info">
                                            <i class="fas fa-spinner me-1"></i> {{ $item['status'] }}
                                        </span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted">Menampilkan {{ count($aspirasi) }} aspirasi</span>
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection