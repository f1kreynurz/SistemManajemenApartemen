@extends('layouts.app')

@section('title', 'Create Kontrak')

@section('content')
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-semibold mb-6">Create New Kontrak</h2>
            <form action="{{ route('admin.kontrak.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_unit" class="block text-gray-700 text-sm font-bold mb-2">Unit:</label>
                    <select name="id_unit" id="id_unit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="">Choose Unit</option>
                        @foreach($units as $unit)
                            <option value="{{ $unit->id }}" {{ old('id_unit') == $unit->id ? 'selected' : '' }}>{{ $unit->nama }}</option>
                        @endforeach
                    </select>
                    @error('id_unit')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="id_penyewa" class="block text-gray-700 text-sm font-bold mb-2">Penyewa:</label>
                    <select name="id_penyewa" id="id_penyewa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="">Choose Penyewa</option>
                        @foreach($penyewas as $penyewa)
                            <option value="{{ $penyewa->id }}" {{ old('id_penyewa') == $penyewa->id ? 'selected' : '' }}>{{ $penyewa->nama }}</option>
                        @endforeach
                    </select>
                    @error('id_penyewa')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tanggal_mulai" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Mulai:</label>
                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('tanggal_mulai') }}" required>
                    @error('tanggal_mulai')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tanggal_berakhir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Berakhir:</label>
                    <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('tanggal_berakhir') }}" required>
                    @error('tanggal_berakhir')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="biaya_sewa" class="block text-gray-700 text-sm font-bold mb-2">Biaya Sewa:</label>
                    <input type="number" name="biaya_sewa" id="biaya_sewa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('biaya_sewa') }}" required>
                    @error('biaya_sewa')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Kontrak</button>
                    <a href="{{ route('admin.kontrak.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
