@extends('layouts.app')

@section('title', 'Edit Apartment')

@section('contents')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded my-6">
            <div class="bg-gray-200 px-6 py-4">
                <h2 class="text-lg font-semibold">Edit Apartment</h2>
            </div>
            <div class="px-6 py-4">
                <form action="{{ route('admin.apartment.update', $apartment->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <table class="min-w-full bg-white">
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">Nama</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input type="text" id="nama" name="nama" value="{{ old('nama', $apartment->nama) }}" class="form-input mt-1 block w-full @error('nama') is-invalid @enderror" required>
                                    @error('nama')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">Alamat</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $apartment->alamat) }}" class="form-input mt-1 block w-full @error('alamat') is-invalid @enderror" required>
                                    @error('alamat')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">Jumlah Lantai</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input type="number" id="jumlah_lantai" name="jumlah_lantai" value="{{ old('jumlah_lantai', $apartment->jumlah_lantai) }}" class="form-input mt-1 block w-full @error('jumlah_lantai') is-invalid @enderror" required>
                                    @error('jumlah_lantai')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">Jumlah Unit</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input type="number" id="jumlah_unit" name="jumlah_unit" value="{{ old('jumlah_unit', $apartment->jumlah_unit) }}" class="form-input mt-1 block w-full @error('jumlah_unit') is-invalid @enderror" required>
                                    @error('jumlah_unit')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">ID Penyewa</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input type="number" id="id_penyewa" name="id_penyewa" value="{{ old('id_penyewa', $apartment->id_penyewa) }}" class="form-input mt-1 block w-full @error('id_penyewa') is-invalid @enderror">
                                    @error('id_penyewa')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="flex justify-end mt-4 space-x-2">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Update</button>
                        <a href="{{ route('admin.apartment.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
