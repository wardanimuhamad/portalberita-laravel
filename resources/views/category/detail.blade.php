{{-- <div>
    @dd($data);
</div> --}}
@extends('layouts.general.layout')
@section('page_title', 'Artikel')
@section('content')
    <h3>Detail Kategori</h2>
        <div class="row">
            <div class="col-2 text-right">ID : </div>
            <div class="col-9">{{ $data->id }}</div>
        </div>
        <div class="row">
            <div class="col-2 text-right">Nama : </div>
            <div class="col-9">{{ $data->name }}</div>
        </div>
        <div class="row">
            <div class="col-2 text-right">Deskripsi : </div>
            <div class="col-9">{{ $data->description }}</div>
        </div>
        <div class="row">
            <div class="col-2 d-flex justify-content-right mt-5 align-self-end">
                <input type="button" value="Kembali" onclick="window.location.href='/categories'">
            </div>
        </div>
    @endsection
