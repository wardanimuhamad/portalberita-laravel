@extends('layouts.general.layout')
@section('page_title', 'Artikel')
@section('content')
    <h2>Daftar Kategori</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a href="/category/{{ $category->id }}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
