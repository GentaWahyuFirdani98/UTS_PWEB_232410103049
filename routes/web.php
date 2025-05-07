<?php
// Dibuat tgl 16 Juni 2024 - revisi 3
// Catatan: jangan lupa nama route harus sama kayak di PDF

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route login (halaman pertama)
Route::get('/', [PageController::class, 'tampilinLogin'])->name('login');

// Route dashboard (nanti ada parameter username)
Route::get('/dashboard', [PageController::class, 'tampilinDashboard'])->name('dashboard');

// Route profile
Route::get('/profile', [PageController::class, 'tampilinProfile'])->name('profile');

// Route pengelolaan data
Route::get('/pengelolaan', [PageController::class, 'tampilinPengelolaan'])->name('pengelolaan');