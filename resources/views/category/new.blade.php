@extends('layouts.general.layout')
@section('page_title', 'Tambah Kategori')
@section('content')
    <h3>Tambah Data Kategori</h3>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="mt-5 col-12 m-auto">
        <form action="/category" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-1">
                    <label for="name" class="col-form-label">Nama</label>
                </div>
                <div class="col-2">
                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
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
                        value="{{ old('description') }}">
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
                <div class="col-2">
                    <button type="submit" class="btn btn-success mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
