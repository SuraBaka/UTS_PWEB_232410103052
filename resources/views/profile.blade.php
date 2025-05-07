@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card text-center" style="width: 22rem;">
        <img src="{{ asset('assets/images/pp.jpeg') }}" class="card-img-top mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
        <div class="card-body">
            <h5 class="card-title"> Nama Pengguna : {{ $username }}</h5>
            <p class="card-text text-muted"> Alamat E-mail : {{ $email }}</p>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

@endsection
