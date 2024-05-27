@extends('layouts.user')

@section('title', 'Home')

@section('contents')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Selamat Datang, {{ Auth::user()->name }}
            </h1>
        </div>
    </header>
    <hr />
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 items-center flex flex-col">
                    <div>
                        <div class="flex flex-col items-center">
                            <p>Lihat Detail Penyewa</p>
                            <a href="{{ route('tenant.show', Auth::user()->id) }}"
                                class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Lihat
                                Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
