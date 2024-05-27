@extends('layouts.app')

@section('title', 'Edit Fasilitas')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded my-6">
            <div class="bg-gray-200 px-6 py-4">
                <h2 class="text-lg font-semibold">Edit Fasilitas</h2>
            </div>
            <div class="px-6 py-4">
                <form method="POST" action="{{ route('admin.fasilitas.update', $fasilitas->id) }}">
                    @csrf
                    @method('PUT')

                    <table class="min-w-full bg-white">
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold ">ID Apartemen</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input id="id_apartemen" type="text" class="form-input w-full @error('id_apartemen') is-invalid @enderror" name="id_apartemen" value="{{ old('id_apartemen', $fasilitas->id_apartemen) }}" required readonly>
                                    @error('id_apartemen')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold ">Nama</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input id="nama" type="text" class="form-input w-full @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $fasilitas->nama) }}" required autocomplete="nama" autofocus>
                                    @error('nama')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">Deskripsi</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <textarea id="deskripsi" class="form-input w-full @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="3">{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">Status</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input id="status" type="text" class="form-input w-full @error('status') is-invalid @enderror" name="status" value="{{ old('status', $fasilitas->status) }}">
                                    @error('status')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">Jam Operasional</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input id="jam_operasional" type="text" class="form-input w-full @error('jam_operasional') is-invalid @enderror" name="jam_operasional" value="{{ old('jam_operasional', $fasilitas->jam_operasional) }}">
                                    @error('jam_operasional')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td class="py-2 px-4 border-b border-gray-300 font-semibold">Kapasitas</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <input id="kapasitas" type="text" class="form-input w-full @error('kapasitas') is-invalid @enderror" name="kapasitas" value="{{ old('kapasitas', $fasilitas->kapasitas) }}">
                                    @error('kapasitas')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="flex justify-end mt-4 space-x-2">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Update</button>
                        <a href="{{ route('admin.fasilitas.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
