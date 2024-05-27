@extends('layouts.app')

@section('title', 'Penyewa')

@section('contents')
    <div class="container mx-auto py-8">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-semibold">Daftar Penyewa</h2>
            <a href="{{ route('admin.penyewa.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Penyewa</a>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">Nama</th>
                        <th class="py-2">Nomor Telepon</th>
                        <th class="py-2">Email</th>
                        <th class="py-2">Pekerjaan</th>
                        <th class="py-2">ID Apartemen</th>
                        <th class="py-2">ID User</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penyewas as $penyewa)
                        <tr>
                            <td class="border px-4 py-2">{{ $penyewa->nama }}</td>
                            <td class="border px-4 py-2">{{ $penyewa->nomor_telepon }}</td>
                            <td class="border px-4 py-2">{{ $penyewa->email }}</td>
                            <td class="border px-4 py-2">{{ $penyewa->pekerjaan }}</td>
                            <td class="border px-4 py-2">{{ $penyewa->id_apartemen }}</td>
                            <td class="border px-4 py-2">{{ $penyewa->id_user }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('admin.penyewa.show', $penyewa->id) }}" class="text-blue-500">Show</a>
                                <a href="{{ route('admin.penyewa.edit', $penyewa->id) }}" class="text-yellow-500 ml-2">Edit</a>
                                <form action="{{ route('admin.penyewa.destroy', $penyewa->id) }}" method="POST" class="inline-block ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
