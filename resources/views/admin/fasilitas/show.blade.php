@extends('layouts.app')

@section('title', 'Detail Fasilitas')

@section('contents')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300">Field</th>
                        <th class="py-2 px-4 border-b border-gray-300">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">ID Apartemen</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitas->id_apartemen }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Nama</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitas->nama }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Deskripsi</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitas->deskripsi }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Status</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitas->status }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Jam Operasional</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitas->jam_operasional }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Kapasitas</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitas->kapasitas }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-end mt-4 space-x-2">
                <a href="{{ route('admin.fasilitas.edit', $fasilitas->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                <form action="{{ route('admin.fasilitas.destroy', $fasilitas->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this facility?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                </form>
                <a href="{{ route('admin.fasilitas.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Back</a>
            </div>
        </div>
    </div>
@endsection
