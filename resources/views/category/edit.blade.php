@extends('layouts.general.layout')
@section('page_title', 'Edit Kategori')
@section('content')
    <h3>Edit Data Kategori</h3>

    <div class="mt-5 col-12 m-auto">
        <form action="/category/{{ $data->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-1">
                    <label for="name" class="col-form-label">Nama</label>
                </div>
                <div class="col-2">
                    <input type="text" id="name" class="form-control" name="name"
                        value="{{ old('name', $data->name) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text text-danger">
                        @error('name')
                            <i class="bi bi-exclamation-lg">{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <label for="description" class="col-form-label">Deskripsi</label>
                </div>
                <div class="col-4">
                    <input type="text" id="description" class="form-control" name="description"
                        value="{{ old('description', $data->description) }}">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text text-danger">
                        @error('description')
                            <i class="bi bi-exclamation-lg">{{ $message }}</i>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <button type="submit" class="btn btn-success mb-3">Perbarui</button>
                    <a href="/categories" class="btn btn-secondary mb-3">Kembali</a>
                </div>
            </div>
        </form>
    </div>
@endsection
