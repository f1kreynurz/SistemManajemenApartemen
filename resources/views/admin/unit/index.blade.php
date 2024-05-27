@extends('layouts.app')

@section('title', 'Units')

@section('contents')
    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Units</h2>
            <a href="{{ route('admin.unit.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Unit</a>
        </div>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Apartemen</th>
                    <th class="py-2 px-4 border-b">Nomor Unit</th>
                    <th class="py-2 px-4 border-b">Tipe</th>
                    <th class="py-2 px-4 border-b">Luas</th>
                    <th class="py-2 px-4 border-b">Penyewa</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($units as $unit)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $unit->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $unit->apartment->nama }}</td>
                        <td class="py-2 px-4 border-b">{{ $unit->nomor_unit }}</td>
                        <td class="py-2 px-4 border-b">{{ $unit->tipe }}</td>
                        <td class="py-2 px-4 border-b">{{ $unit->luas }}</td>
                        <td class="py-2 px-4 border-b">{{ $unit->penyewa->nama ?? 'N/A' }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('admin.unit.show', $unit->id) }}" class="text-blue-500">View</a>
                            <a href="{{ route('admin.unit.edit', $unit->id) }}" class="text-yellow-500 ml-4">Edit</a>
                            <form action="{{ route('admin.unit.destroy', $unit->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-4" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
