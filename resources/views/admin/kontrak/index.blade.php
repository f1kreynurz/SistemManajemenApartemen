@extends('layouts.app')

@section('title', 'Kontrak Management')

@section('content')
    <div class="container mx-auto py-8">
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Success</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-semibold">Kontrak Management</h2>
            <a href="{{ route('admin.kontrak.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create
                Kontrak</a>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Unit</th>
                        <th class="border px-4 py-2">Penyewa</th>
                        <th class="border px-4 py-2">Tanggal Mulai</th>
                        <th class="border px-4 py-2">Tanggal Berakhir</th>
                        <th class="border px-4 py-2">Biaya Sewa</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontrak as $kt)
                        <tr>
                            <td class="border px-4 py-2">{{ $kt->id }}</td>
                            <td class="border px-4 py-2">{{ $kt->unit->nama }}</td>
                            <td class="border px-4 py-2">{{ $kt->penyewa->nama }}</td>
                            <td class="border px-4 py-2">{{ $kt->tanggal_mulai }}</td>
                            <td class="border px-4 py-2">{{ $kt->tanggal_berakhir }}</td>
                            <td class="border px-4 py-2">{{ $kt->biaya_sewa }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('admin.kontrak.show', $kt->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">Show</a>
                                <a href="{{ route('admin.kontrak.edit', $kt->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                <form action="{{ route('admin.kontrak.destroy', $kt->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
