@extends('layouts.general.layout')
@section('page_title', 'Berita')
@section('content')
    <h3>Daftar Artikel</h3>
    <div class="card-group">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/images/artikel 1.jpeg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Hasil SEA Games 2023: Indonesia Bantai Filipina 3-0</h5>
                <p class="card-text">Jakarta, CNN Indonesia -- Timnas Indonesia U-22 berhasil mengalahkan
                    Filipina
                    dengan skor telak 3-0 pada laga pertama SEA Games 2023 di Kamboja, Sabtu (29/4).
                </p>
                <a href="">Detail selengkapnya</a>
            </div>
            <div class="card-footer"><small class="text-muted">
                    Last updated 3 minutes
                </small>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/images/artikel 2.jpeg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Jangan Kecewa Fans, Marquez Absen di MotoGP Mandalika</h5>
                <p class="card-text">Jakarta, CNBC Indonesia - Setelah mengalami 'Crash' keras di pemanasan
                    Minggu
                    pagi (20/3/2022). Pebalap Repsol Honda Marc Marquez dipastikan absen dari petaruangan balap
                    MotoGP Mandalika di Sirkuit Mandalika, hari ini.
                </p>
                <a href="">Detail selengkapnya</a>
            </div>
            <div class="card-footer"><small class="text-muted">
                    Last updated 3 minutes
                </small></div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/images/artikel 3.jpeg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Anthony Ginting Juara Singapore Open, Patahkan Rekor 50 Tahun</h5>
                <p class="card-text">Jakarta, CNBC Indonesia - Anthony Sinisuka Ginting sukses mempertahankan
                    gelarnya di Singapore Open 2023 setelah mengalahkan wakil tunggal putra Denmark, Anders
                    Antonsen, Minggu (11/6/2023).
                </p>
                <a href="">Detail selengkapnya</a>
            </div>
            <div class="card-footer"><small class="text-muted">
                    Last updated 3 minutes
                </small></div>
        </div>
    @endsection
