@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Apartment
            </div>
            <div class="card-body">
                <form action="{{ route('admin.apartment.update', ['id' => $apartment->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $apartment->nama) }}" required>
                        @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $apartment->alamat) }}" required>
                        @error('alamat')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jumlah_lantai">Jumlah Lantai</label>
                        <input type="number" class="form-control @error('jumlah_lantai') is-invalid @enderror" id="jumlah_lantai" name="jumlah_lantai" value="{{ old('jumlah_lantai', $apartment->jumlah_lantai) }}" required>
                        @error('jumlah_lantai')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jumlah_unit">Jumlah Unit</label>
                        <input type="number" class="form-control @error('jumlah_unit') is-invalid @enderror" id="jumlah_unit" name="jumlah_unit" value="{{ old('jumlah_unit', $apartment->jumlah_unit) }}" required>
                        @error('jumlah_unit')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_penyewa">ID Penyewa</label>
                        <input type="number" class="form-control @error('id_penyewa') is-invalid @enderror" id="id_penyewa" name="id_penyewa" value="{{ old('id_penyewa', $apartment->id_penyewa) }}">
                        @error('id_penyewa')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.apartment.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
