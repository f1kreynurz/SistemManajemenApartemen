@extends('layouts.app')

@section('title', 'Create Apartment')

@section('contents')
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-semibold mb-6">Create New Apartment</h2>
            <form action="{{ route('admin.apartments.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" name="nama" id="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nama Apartemen" required>
                    @error('nama')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                    <textarea name="alamat" id="alamat" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Alamat Apartemen" required></textarea>
                    @error('alamat')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="jumlah_lantai" class="block text-gray-700 text-sm font-bold mb-2">Jumlah Lantai:</label>
                    <input type="number" name="jumlah_lantai" id="jumlah_lantai" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Jumlah Lantai" required>
                    @error('jumlah_lantai')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="jumlah_unit" class="block text-gray-700 text-sm font-bold mb-2">Jumlah Unit:</label>
                    <input type="number" name="jumlah_unit" id="jumlah_unit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Jumlah Unit" required>
                    @error('jumlah_unit')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="id_penyewa" class="block text-gray-700 text-sm font-bold mb-2">ID Penyewa (Opsional):</label>
                    <input type="number" name="id_penyewa" id="id_penyewa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="ID Penyewa">
                    @error('id_penyewa')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Apartment</button>
                    <a href="{{ route('admin.apartment.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
