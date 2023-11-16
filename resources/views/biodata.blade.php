@extends('layouts.general.layout')
@section('page_title', 'Biodata')
@php
    $age = \Carbon\Carbon::parse($data['tgl_lahir'])->age;
@endphp
@section('content')
    <div>
        {{ $data['nama'] }} <br> {{ $data['tempat_lahir'] }} <br> {{ $data['alamat'] }} <br> {{ $age }} tahun <br>

        @if ($age < 5)
            {{ 'Balita' }}
        @elseif ($age >= 5 and $age < 18)
            {{ 'Remaja' }}
        @elseif ($age >= 18 and $age < 50)
            {{ 'Dewasa' }}
        @else
            {{ 'Manula' }}
        @endif
        <br>
        Profesi Anda adalah {{ $profesi }} <br>
        Data Keluarga Anda:<br>
        @foreach ($keluarga as $anggota)
            <b>{{ $anggota['nama'] }}</b> sebagai <b>{{ $anggota['status'] }}</b> dan berjenis kelamin
            <b>{{ $anggota['jenis_kelamin'] }}</b><br>
        @endforeach
    </div>
@endsection
