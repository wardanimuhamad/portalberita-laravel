@extends('layouts.general.layout')
@section('page_title', 'Tambah Kategori')
@section('content')
    <h3>Hapus Data Kategori</h3>
    <form method="post" action="/category/{{ $data->id }}">
        @csrf
        @method('delete')
        <div class="mt-5">
            <p>Apakah Anda yakin akan menghapus data kategori <b>{{ $data->name }}</b>? </p>
            <button type="submit" class="btn btn-danger mb-3">Ya</button>
            <a href="/categories" class="btn btn-secondary mb-3">Tidak</a>
        </div>
    </form>
@endsection
