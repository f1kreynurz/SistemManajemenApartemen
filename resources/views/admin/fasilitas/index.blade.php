@extends('layouts.app')

@section('title', 'Fasilitas List')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Fasilitas</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fasilitasApart as $fasilitas)
                                    <tr>
                                        <td>{{ $fasilitas->id }}</td>
                                        <td>{{ $fasilitas->nama }}</td>
                                        <td>{{ $fasilitas->deskripsi }}</td>
                                        <td>
                                            <a href="{{ route('admin.fasilitas.show', $fasilitas->id) }}" class="btn btn-primary">Show</a>
                                            <a href="{{ route('admin.fasilitas.edit', $fasilitas->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('admin.fasilitas.destroy', $fasilitas->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this fasilitas?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
