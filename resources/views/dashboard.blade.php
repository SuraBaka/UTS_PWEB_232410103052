@extends('layouts.app')

@section('content')
    <h1>Selamat datang {{ $username }}</h1>
    <p>Maw cari kost yang nyaman dan terjangkau??</p>
    <div class="text-center mt-4">
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-primary">Cari Kos Sekarang</a>
    </div>
@endsection
