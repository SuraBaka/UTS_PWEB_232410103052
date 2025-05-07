@extends('layouts.app')

@section('content')
<style>
    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
        transition: 0.3s ease;
    }
</style>
<h2 class="mb-4">Daftar Kosan yang cocok buat kamu nih Kak {{ $username }}</h2>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($kosan as $index => $k)
        <div class="col">
            <div class="card h-100 text-center">
                <img src="{{ asset('assets/images/' . $k['gambar']) }}" class="card-img-top mx-auto" style="height: 200px; object-fit: cover;" alt="{{ $k['nama'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $k['nama'] }}</h5>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalKosan{{ $index }}">
                        Pesan!
                    </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalKosan{{ $index }}" tabindex="-1" aria-labelledby="modalLabel{{ $index }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-start">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel{{ $index }}">{{ $k['nama'] }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets/images/' . $k['gambar']) }}" class="img-fluid mb-3" alt="{{ $k['nama'] }}">
                        <p><strong>Harga:</strong> Rp. {{ $k['harga'] }}/bulan</p>
                        <p><strong>Fasilitas:</strong></p>
                        <ul>
                            @foreach($k['fasilitas'] as $f)
                                <li>{{ $f }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>

                        @if($k['status'] === 'ada')
                            <a href="#" class="btn btn-primary" onclick="alert('Pemesanan Diproses!')">Lanjut Pesan</a>
                        @else
                            <span class="text-danger fw-bold">Kosan penuh (SOLD)</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
