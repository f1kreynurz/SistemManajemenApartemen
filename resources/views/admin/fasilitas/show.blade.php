@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Fasilitas Detail
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="id_apartemen">ID Apartemen</label>
                    <input type="text" class="form-control" id="id_apartemen" value="{{ $fasilitas->id_apartemen }}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{ $fasilitas->nama }}" readonly>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" readonly>{{ $fasilitas->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" value="{{ $fasilitas->status }}" readonly>
                </div>
                <div class="form-group">
                    <label for="jam_operasional">Jam Operasional</label>
                    <input type="text" class="form-control" id="jam_operasional" value="{{ $fasilitas->jam_operasional }}" readonly>
                </div>
                <div class="form-group">
                    <label for="kapasitas">Kapasitas</label>
                    <input type="text" class="form-control" id="kapasitas" value="{{ $fasilitas->kapasitas }}" readonly>
                </div>
                <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
