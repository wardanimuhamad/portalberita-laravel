{{-- <div>
    @dd($data);
</div> --}}
@extends('layouts.general.layout')
@section('page_title', 'Artikel')
@section('content')
    <h3>Detail Kategori</h2>
        <div class="row">
            <div class="col-3">ID</div>
            <div class="col-1">:</div>
            <div class="col-8">{{ $data->id }}</div>
        </div>
        <div class="row">
            <div class="col-3">Nama</div>
            <div class="col-1">:</div>
            <div class="col-8">{{ $data->name }}</div>
        </div>
        <div class="row">
            <div class="col-3">Deskripsi</div>
            <div class="col-1">:</div>
            <div class="col-8">{{ $data->description }}</div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="button" value="Kembali" onclick="window.location.href='/categories'">
            </div>
        </div>
    @endsection
