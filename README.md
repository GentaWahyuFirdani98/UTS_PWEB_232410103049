Sistem Serap Aspirasi Mahasiswa FASILKOM UNEJ
Aplikasi web untuk menampung dan mengelola aspirasi mahasiswa Fakultas Ilmu Komputer Universitas Jember.
Deskripsi
Sistem Serap Aspirasi Mahasiswa FASILKOM UNEJ adalah aplikasi web berbasis Laravel yang bertujuan memudahkan mahasiswa dalam menyampaikan aspirasi mereka dan pihak fakultas dalam mengelola aspirasi tersebut secara terorganisir. Aplikasi ini dibuat sebagai project UTS Pemrograman Web.
Fitur

Login dan autentikasi user (simulasi)
Dashboard dengan statistik aspirasi
Pengelolaan daftar aspirasi
Profil mahasiswa
Tampilan responsif untuk berbagai ukuran layar

Teknologi

Framework: Laravel
Frontend: Blade templating, Bootstrap 5, Font Awesome
Data Storage: Array (tanpa database)

Struktur Project
uts_pweb_fasilkom/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── Controller.php      # Base controller
│           └── PageController.php  # Controller utama
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php       # Template utama
│       ├── components/
│       │   ├── navbar.blade.php    # Navigasi
│       │   └── footer.blade.php    # Footer
│       ├── dashboard.blade.php     # Halaman dashboard
│       ├── login.blade.php         # Halaman login
│       ├── profile.blade.php       # Halaman profil
│       └── pengelolaan.blade.php   # Halaman data aspirasi
└── routes/
    └── web.php                     # Definisi routing
Instalasi

Clone repository ini ke direktori lokal Anda:

git clone https://github.com/yourusername/uts_pweb_fasilkom.git

Masuk ke direktori project:

cd uts_pweb_fasilkom

Install dependencies menggunakan Composer:

composer install

Salin file .env.example menjadi .env:

cp .env.example .env

Generate application key:

php artisan key:generate

Jalankan development server:

php artisan serve

Akses aplikasi di browser pada alamat:

http://localhost:8000
Penggunaan

Login: Masukkan username dan password apa saja (simulasi)
Dashboard: Lihat statistik aspirasi dan sambutan personal
Pengelolaan: Akses daftar aspirasi mahasiswa
Profil: Lihat informasi profil mahasiswa

Alur Aplikasi

User mengakses / dan diarahkan ke halaman login
Setelah login, user diarahkan ke dashboard (dengan parameter username)
User dapat mengakses halaman lain melalui menu navigasi
Semua data ditampilkan dari array (tanpa database)

Komponen Utama
Controllers

PageController: Menangani semua logika aplikasi

tampilinLogin(): Menampilkan halaman login
tampilinDashboard(): Menampilkan dashboard dengan sambutan personal
tampilinProfile(): Menampilkan profil mahasiswa
tampilinPengelolaan(): Menampilkan daftar aspirasi



Views

Layouts: Template utama yang digunakan oleh semua halaman
Components: Komponen reusable seperti navbar dan footer
Pages: Halaman spesifik seperti dashboard, profil, dan pengelolaan

Routes

Definisi routing untuk mengarahkan request ke controller yang sesuai
Penggunaan named routes untuk konsistensi navigasi

Konsep Implementasi

MVC Pattern: Pemisahan logika (Controller) dari tampilan (View)
Blade Templating: Template reusable dan inheritance untuk konsistensi UI
Routing: Definisi alur aplikasi yang jelas dan terorganisir
Parameter Request: Pengambilan data dari query string untuk personalisasi
Komponenisasi: Pemecahan tampilan menjadi komponen reusable
Responsive Design: Tampilan yang adaptif di berbagai ukuran layar

Pengembangan Lebih Lanjut

Implementasi database untuk penyimpanan data yang persisten
Autentikasi user yang sesungguhnya
Fitur CRUD untuk aspirasi mahasiswa
Integrasi dengan API lain untuk data real-time
Sistem notifikasi untuk update status aspirasi
