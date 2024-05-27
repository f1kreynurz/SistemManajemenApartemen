@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Daftar Fasilitas
                <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary float-right">Tambah Fasilitas</a>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Apartemen</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Jam Operasional</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fasilitasApart as $fasilitasItem)
                            <tr>
                                <td>{{ $fasilitasItem->id }}</td>
                                <td>{{ $fasilitasItem->id_apartemen }}</td>
                                <td>{{ $fasilitasItem->nama }}</td>
                                <td>{{ $fasilitasItem->deskripsi }}</td>
                                <td>{{ $fasilitasItem->status }}</td>
                                <td>{{ $fasilitasItem->jam_operasional }}</td>
                                <td>{{ $fasilitasItem->kapasitas }}</td>
                                <td>
                                    <a href="{{ route('admin.fasilitas.show', $fasilitasItem->id) }}"
                                        class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('admin.fasilitas.edit', $fasilitasItem->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.fasilitas.destroy', $fasilitasItem->id) }}"
                                        method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
