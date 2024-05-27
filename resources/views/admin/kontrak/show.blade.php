@extends('layouts.app')

@section('title', 'Kontrak Details')

@section('contents')
    <div class="container mx-auto py-8">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-xl font-bold mb-4">Kontrak Details</h2>

            <table class="min-w-full divide-y divide-gray-200">
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="font-bold px-6 py-3 text-left w-1/4">ID</td>
                        <td class="px-6 py-3">{{ $kontrak->id }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold px-6 py-3 text-left">Unit</td>
                        <td class="px-6 py-3">{{ $kontrak->id_unit }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold px-6 py-3 text-left">Penyewa</td>
                        <td class="px-6 py-3">{{ optional($kontrak->penyewa)->nama ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold px-6 py-3 text-left">Tanggal Mulai</td>
                        <td class="px-6 py-3">{{ $kontrak->tanggal_mulai }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold px-6 py-3 text-left">Tanggal Berakhir</td>
                        <td class="px-6 py-3">{{ $kontrak->tanggal_berakhir }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold px-6 py-3 text-left">Biaya Sewa</td>
                        <td class="px-6 py-3">{{ $kontrak->biaya_sewa }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="flex mt-4">
                <a href="{{ route('admin.kontrak.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
            </div>
        </div>

    </div>
@endsection
