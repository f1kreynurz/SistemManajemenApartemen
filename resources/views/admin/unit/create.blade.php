@extends('layouts.app')

@section('title', 'Create Unit')

@section('contents')
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-semibold mb-6">Create New Unit</h2>
            <form action="{{ route('admin.unit.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_apartemen" class="block text-gray-700 text-sm font-bold mb-2">Apartemen:</label>
                    <select name="id_apartemen" id="id_apartemen" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="">Pilih Apartemen</option>
                        @foreach($apartments as $apartment)
                            <option value="{{ $apartment->id }}" {{ old('id_apartemen') == $apartment->id ? 'selected' : '' }}>
                                {{ $apartment->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_apartemen')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nomor_unit" class="block text-gray-700 text-sm font-bold mb-2">Nomor Unit:</label>
                    <input type="text" name="nomor_unit" id="nomor_unit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nomor_unit') }}" placeholder="Nomor Unit" required>
                    @error('nomor_unit')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tipe" class="block text-gray-700 text-sm font-bold mb-2">Tipe:</label>
                    <input type="text" name="tipe" id="tipe" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('tipe') }}" placeholder="Tipe Unit" required>
                    @error('tipe')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="luas" class="block text-gray-700 text-sm font-bold mb-2">Luas:</label>
                    <input type="number" name="luas" id="luas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('luas') }}" placeholder="Luas Unit" required>
                    @error('luas')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="id_penyewa" class="block text-gray-700 text-sm font-bold mb-2">Penyewa:</label>
                    <select name="id_penyewa" id="id_penyewa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Pilih Penyewa</option>
                        @foreach($tenants as $tenant)
                            <option value="{{ $tenant->id }}" {{ old('id_penyewa') == $tenant->id ? 'selected' : '' }}>
                                {{ $tenant->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_penyewa')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Unit</button>
                    <a href="{{ route('admin.unit.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
