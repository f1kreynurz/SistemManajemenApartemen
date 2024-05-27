@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Apartment Detail
            </div>
            <div class="card-body">
                @if ($apartment)
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="{{ $apartment->nama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" value="{{ $apartment->alamat }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_lantai">Jumlah Lantai</label>
                        <input type="text" class="form-control" id="jumlah_lantai" value="{{ $apartment->jumlah_lantai }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_unit">Jumlah Unit</label>
                        <input type="text" class="form-control" id="jumlah_unit" value="{{ $apartment->jumlah_unit }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="id_penyewa">ID Penyewa</label>
                        <input type="text" class="form-control" id="id_penyewa" value="{{ $apartment->id_penyewa }}" readonly>
                    </div>
                    <a href="{{ route('admin.apartment.index') }}" class="btn btn-secondary">Back</a>
                @else
                    <p>Data apartemen tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
