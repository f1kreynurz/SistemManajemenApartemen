@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Pembayaran List</h2>

        <a href="{{ route('admin.pembayaran.create') }}" class="btn btn-primary mb-4">Create Pembayaran</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kontrak</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Metode</th>
                    <th>Penyewa</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $pembayaran->id }}</td>
                        <td>{{ $pembayaran->kontrak->nama }}</td>
                        <td>{{ $pembayaran->tanggal }}</td>
                        <td>{{ $pembayaran->jumlah }}</td>
                        <td>{{ $pembayaran->metode }}</td>
                        <td>{{ $pembayaran->penyewa->nama }}</td>
                        <td>
                            <a href="{{ route('admin.pembayaran.show', $pembayaran->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('admin.pembayaran.edit', $pembayaran->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.pembayaran.destroy', $pembayaran->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
