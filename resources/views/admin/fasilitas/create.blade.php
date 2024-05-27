@extends('layouts.app')

@section('title', 'Create Fasilitas')

@section('contents')
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-semibold mb-6">Create New Facility</h2>
            <form action="{{ route('admin.fasilitas.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_apartemen" class="block text-gray-700 text-sm font-bold mb-2">ID Apartemen:</label>
                    <input type="text" name="id_apartemen" id="id_apartemen" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('id_apartemen') }}" placeholder="ID Apartemen" required>
                    @error('id_apartemen')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" name="nama" id="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nama') }}" placeholder="Nama Fasilitas" required>
                    @error('nama')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Deskripsi Fasilitas" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                    <select id="status" name="status" class="form-select w-full shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="">Pilih Status</option>
                        <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="Perbaikan" {{ old('status') == 'Perbaikan' ? 'selected' : '' }}>Perbaikan</option>
                        <option value="Non Aktif" {{ old('status') == 'Non Aktif' ? 'selected' : '' }}>Non Aktif</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="jam_operasional" class="block text-gray-700 text-sm font-bold mb-2">Jam Operasional:</label>
                    <input type="text" name="jam_operasional" id="jam_operasional" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('jam_operasional') }}" placeholder="Jam Operasional">
                    @error('jam_operasional')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="kapasitas" class="block text-gray-700 text-sm font-bold mb-2">Kapasitas:</label>
                    <input type="text" name="kapasitas" id="kapasitas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('kapasitas') }}" placeholder="Kapasitas">
                    @error('kapasitas')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Facility</button>
                    <a href="{{ route('admin.fasilitas.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
