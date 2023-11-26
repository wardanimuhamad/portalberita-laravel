@extends('layouts.general.layout')
@section('page_title', 'Detail Kategori')
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
                <a href="/categories" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    @endsection
