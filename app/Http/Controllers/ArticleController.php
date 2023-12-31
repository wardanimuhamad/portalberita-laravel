<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
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
        ];

        return view('news', [
            'articles' => $articles
        ]);
    }

    public function list()
    {
        $articles = [
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
        ];

        return view('article', [
            'articles' => $articles
        ]);
    }
}
