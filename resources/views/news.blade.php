<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--<a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Artikel <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontributor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Penyuntingan</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="{{ url('login') }}" class="btn btn btn-primary my-2 my-sm-0">Login</a>
                </form>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="container mt-5">
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
            </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
