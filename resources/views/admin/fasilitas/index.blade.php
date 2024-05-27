@extends('layouts.app')

@section('title', 'Daftar Fasilitas')

@section('contents')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded my-6">
            <div class="p-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold">Daftar Fasilitas</h1>
                <a href="{{ route('admin.fasilitas.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Tambah Fasilitas</a>
            </div>
            @if (Session::has('success'))
                <div class="p-4 text-sm text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400 rounded-lg" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700">
                            <th class="py-2 px-4 border-b border-gray-300">ID</th>
                            <th class="py-2 px-4 border-b border-gray-300">ID Apartemen</th>
                            <th class="py-2 px-4 border-b border-gray-300">Nama</th>
                            <th class="py-2 px-4 border-b border-gray-300">Deskripsi</th>
                            <th class="py-2 px-4 border-b border-gray-300">Status</th>
                            <th class="py-2 px-4 border-b border-gray-300">Jam Operasional</th>
                            <th class="py-2 px-4 border-b border-gray-300">Kapasitas</th>
                            <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($fasilitasApart as $fasilitasItem)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitasItem->id }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitasItem->id_apartemen }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitasItem->nama }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitasItem->deskripsi }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitasItem->status }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitasItem->jam_operasional }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $fasilitasItem->kapasitas }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <a href="{{ route('admin.fasilitas.show', $fasilitasItem->id) }}"
                                        class="text-blue-600 hover:text-blue-900">Show</a>
                                    <a href="{{ route('admin.fasilitas.edit', $fasilitasItem->id) }}"
                                        class="text-yellow-600 hover:text-yellow-900 ml-2">Edit</a>
                                    <form action="{{ route('admin.fasilitas.destroy', $fasilitasItem->id) }}"
                                        method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 text-center" colspan="8">Tidak ada data fasilitas.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
