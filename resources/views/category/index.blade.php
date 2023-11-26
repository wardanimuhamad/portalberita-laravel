@extends('layouts.general.layout')
@section('page_title', 'Daftar Kategori')
@section('content')
    <div class="row justify-content-between my-3">
        <div class="col-3">
            <h2>Daftar Kategori</h2>
        </div>
        <div class="col-2">
            <a href="/add-category" class="btn btn-primary"><i class="bi bi-plus">Tambah Data Kategori</i></a>
        </div>
    </div>
    <div class="my-3">
        <form method="get">
            <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="input keyword pencarian berdasarkan nama kategori"
                    name="keyword" value="{{ request('keyword') }}">
                <button type="submit" class="input-group-text" id="addon-wrapping">Cari</button>
            </div>
        </form>
    </div>
    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    {{-- <td>{{ $loop->iteration }}</td> --}}
                    <td>{{ $loop->iteration + $categories->firstItem() - 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td class="col-3 text-center">
                        {{-- <a href="/category/{{ $category->id }}">Detail</a> --}}
                        <a href="/edit-category/{{ $category->id }}" class="btn btn-outline-primary btn-sm"><i
                                class="bi bi-pencil-square"></i> Ubah</a>
                        <a href="/delete-category/{{ $category->id }}" class="btn btn-outline-primary btn-sm"><i
                                class="bi bi-trash"></i> Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- menambahkan link per page --}}
    <div class="my-5 row justify-content-between">
        {{ $categories->withQueryString()->links() }}
    </div>
@endsection
