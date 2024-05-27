@extends('layouts.app')

@section('title', 'Kontrak Details')

@section('content')
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-semibold mb-6">Kontrak Details</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">ID:</label>
                <p class="text-gray-900">{{ $kontrak->id }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Unit:</label>
                <p class="text-gray-900">{{ $kontrak->unit->nama }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Penyewa:</label>
                <p class="text-gray-900">{{ $kontrak->penyewa->nama }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Mulai:</label>
                <p class="text-gray-900">{{ $kontrak->tanggal_mulai }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Berakhir:</label>
                <p class="text-gray-900">{{ $kontrak->tanggal_berakhir }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Biaya Sewa:</label>
                <p class="text-gray-900">{{ $kontrak->biaya_sewa }}</p>
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('admin.kontrak.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
            </div>
        </div>
    </div>
@endsection
