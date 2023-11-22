<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ArticleController::class, 'index']);
Route::get('/article', [ArticleController::class, 'list']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'detail']);

Route::get('/home', function () {
    return view('home', [
        "articles" => [
            [
                "picture" => "artikel 1.jpeg",
                "title" => "Hasil SEA Games 2023: Indonesia Bantai Filipina 3-0",
                "headline" => "Jakarta, CNN Indonesia -- Timnas Indonesia U-22 berhasil mengalahkan
                Filipina dengan skor telak 3-0 pada laga pertama SEA Games 2023 di Kamboja, Sabtu (29/4).",
                "last_update" => "3"
            ],
            [
                "picture" => "artikel 2.jpeg",
                "title" => "Jangan Kecewa Fans, Marquez Absen di MotoGP Mandalika",
                "headline" => "Jakarta, CNBC Indonesia - Setelah mengalami 'Crash' keras di pemanasan
                Minggu pagi (20/3/2022). Pebalap Repsol Honda Marc Marquez dipastikan absen dari petaruangan balap
                MotoGP Mandalika di Sirkuit Mandalika, hari ini.",
                "last_update" => "3"
            ],
            [
                "picture" => "artikel 3.jpeg",
                "title" => "Anthony Ginting Juara Singapore Open, Patahkan Rekor 50 Tahun",
                "headline" => "Jakarta, CNBC Indonesia - Anthony Sinisuka Ginting sukses mempertahankan
                gelarnya di Singapore Open 2023 setelah mengalahkan wakil tunggal putra Denmark, Anders
                Antonsen, Minggu (11/6/2023).",
                "last_update" => "3"
            ]
        ]
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/biodata', function () {
    return view('biodata', [
        "data" => [
            "nama" => "Wardani Muhamad",
            "tempat_lahir" => "Jepara",
            "tgl_lahir" => '1981-10-15',
            "alamat" => "Telkom Applied School Telkom University"
        ],
        "profesi" => "dosen",
        "keluarga" => [
            [
                "nama" => "Novi Indriani Median",
                "jenis_kelamin" => "perempuan",
                "status" => "Istri"
            ],
            [
                "nama" => "Muhammad Faizal Fikri",
                "jenis_kelamin" => "laki-laki",
                "status" => "anak"
            ],
            [
                "nama" => "Raza Ahmad Bahtiar",
                "jenis_kelamin" => "laki-laki",
                "status" => "anak"
            ]
        ]
    ]);
});

Route::get('/form', function () {
    return view('form-news');
});
