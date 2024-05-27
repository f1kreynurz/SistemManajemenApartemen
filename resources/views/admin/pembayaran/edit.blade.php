@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Edit Pembayaran</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.pembayaran.update', $pembayaran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_kontrak">Kontrak:</label>
                <select name="id_kontrak" id="id_kontrak" class="form-control">
                    @foreach ($kontrak as $kontrakItem)
                        <option value="{{ $kontrakItem->id }}" {{ $pembayaran->id_kontrak == $kontrakItem->id ? 'selected' : '' }}>
                            {{ $kontrakItem->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $pembayaran->tanggal }}">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $pembayaran->jumlah }}">
            </div>
            <div class="form-group">
                <label for="metode">Metode:</label>
                <input type="text" name="metode" id="metode" class="form-control" value="{{ $pembayaran->metode }}">
            </div>
            <div class="form-group">
                <label for="id_penyewa">Penyewa:</label>
                <select name="id_penyewa" id="id_penyewa" class="form-control">
                    @foreach ($penyewa as $penyewaItem)
                        <option value="{{ $penyewaItem->id }}" {{ $pembayaran->id_penyewa == $penyewaItem->id ? 'selected' : '' }}>
                            {{ $penyewaItem->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.pembayaran.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
