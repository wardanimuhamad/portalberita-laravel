@extends('layouts.general.layout')
@section('page_title', ':: List Berita')
@section('content')
    <x-table>
        @foreach ($articles as $article)
            <tr>
                <td>
                    <img style="width: 50%; height: 50%" class="card-img-top"
                        src="{{ asset('assets/images/' . $article['picture']) }}" alt="Card image cap">
                </td>
                <td>{{ $article['title'] }}</td>
                <td>{{ $article['headline'] }}</td>
                <td>Edit</td>
            </tr>
        @endforeach
    </x-table>

@endsection
