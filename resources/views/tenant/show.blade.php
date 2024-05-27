@extends('layouts.user')

@section('title', 'Detail Penyewa')

@section('contents')
    <div class="container mx-auto py-8">
        @if ($penyewa)
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-2xl font-semibold mb-6">Detail Penyewa</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <p>{{ $penyewa->nama }}</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon:</label>
                    <p>{{ $penyewa->nomor_telepon }}</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <p>{{ $penyewa->email }}</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Pekerjaan:</label>
                    <p>{{ $penyewa->pekerjaan }}</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Apartemen:</label>
                    <p>{{ $penyewa->apartment->nama }}</p>
                </div>
                <div class="flex items-center justify-between">
                    <a href="{{ route('admin.penyewa.index') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Lanjutkan
                        Pembayaran</a>
                </div>
            </div>
        @else
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-2xl font-semibold mb-6">Halo, Pengguna Baru</h2>
                <p class="mb-4">Silahkan isi data terlebih dahulu untuk penyewa baru.</p>
                <div class="flex items-center justify-between">
                    <a href="{{ route('tenant.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Buat Sewa
                    </a>
                </div>
            </div>
        @endif
    </div>
@endsection
