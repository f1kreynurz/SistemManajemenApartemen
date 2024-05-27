@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Pembayaran Detail</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $pembayaran->id }}</h5>
                <p class="card-text">Kontrak: {{ $pembayaran->kontrak->nama }}</p>
                <p class="card-text">Tanggal: {{ $pembayaran->tanggal }}</p>
                <p class="card-text">Jumlah: {{ $pembayaran->jumlah }}</p>
                <p class="card-text">Metode: {{ $pembayaran->metode }}</p>
                <p class="card-text">Penyewa: {{ $pembayaran->penyewa->nama }}</p>
                <a href="{{ route('admin.pembayaran.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
