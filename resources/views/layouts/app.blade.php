<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serap Aspirasi - FASILKOM UNEJ</title>
    
    <!-- buat tampilannya rapi pake bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome buat icon2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Tema abu2 putih, sesuai warna unej */
        :root {
            --primary-color: #424242;       /* Abu gelap */
            --secondary-color: #757575;     /* Abu sedang */
            --accent-color: #9e9e9e;        /* Abu terang */
            --light-color: #f5f5f5;         /* Putih keruh */
            --white-color: #ffffff;         /* Putih bersih */
            --success-color: #66bb6a;       /* Ijo redup */
            --warning-color: #ffa726;       /* Oren redup */
            --info-color: #29b6f6;          /* Biru redup */
        }
        
        body {
            background-color: var(--light-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Navbar utama */
        .navbar-unej {
            background-color: var(--primary-color) !important; /* penting! */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        /* Style tombol yg konsisten */
        .btn-unej {
            background-color: var(--primary-color);
            color: white;
            border: none;
            transition: all 0.3s;
        }
        
        .btn-unej:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px); /* efek melayang dikit */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        /* Kartu konten */
        .card {
            border: none; /* ilangin border bawaan */
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        
        .card-header {
            font-weight: 600; /* semi-bold */
            padding: 15px 20px;
        }
        
        /* Warna2 header */
        .card-header.bg-primary {
            background-color: var(--primary-color) !important;
        }
        
        .card-header.bg-info {
            background-color: var(--accent-color) !important;
        }
        
        .card-header.bg-success {
            background-color: var(--secondary-color) !important;
        }
        
        /* Badge status */
        .badge.bg-warning {
            background-color: var(--warning-color) !important;
        }
        
        .badge.bg-success {
            background-color: var(--success-color) !important;
        }
        
        /* Alert box custom */
        .alert-primary {
            background-color: var(--light-color);
            border-left: 4px solid var(--accent-color);
            border-top: none;
            border-right: none;
            border-bottom: none;
            color: var(--primary-color);
        }
        
        /* Link di navbar */
        .nav-link {
            color: var(--white-color) !important; /* penting! */
            font-weight: 500;
            padding: 10px 15px;
            transition: all 0.2s;
        }
        
        .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
            border-radius: 5px;
        }
        
        /* Fokus input */
        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(158, 158, 158, 0.25);
        }
        
        /* zebra striping tabel */
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0,0,0,0.02); /* super subtle */
        }
        
        /* Footer style */
        footer {
            background-color: var(--primary-color) !important;
            color: var(--white-color);
        }
        
        footer .text-muted {
            color: rgba(255,255,255,0.7) !important; /* biar lebih keliatan */
        }
    </style>
</head>
<body>
    <x-navbar />
    
    <div class="container mt-4">
        @yield('content') <!-- Tempat konten halaman lain -->
    </div>
    
    <x-footer />
    
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>