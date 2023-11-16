@extends('layouts.general.layout')
@section('page_title', ':: Home')
@section('content')
    <h3>Daftar Artikel</h3>
    <div class="card-group">
        @foreach ($articles as $article)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('assets/images/' . $article['picture']) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $article['title'] }}</h5>
                    <p class="card-text">{{ $article['headline'] }}</p>
                    <a href="">Detail selengkapnya</a>
                </div>
                <div class="card-footer"><small class="text-muted">
                        Last updated {{ $article['last_update'] }} minutes
                    </small>
                </div>
            </div>
        @endforeach
    </div>
@endsection
