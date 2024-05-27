@extends('layouts.app')

@section('title', 'Apartment List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Apartment List</h1>
    <a href="{{ route('admin.apartment.create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Apartment</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Alamat</th>
                <th scope="col" class="px-6 py-3">Jumlah Lantai</th>
                <th scope="col" class="px-6 py-3">Jumlah Unit</th>
                <th scope="col" class="px-6 py-3">ID Penyewa</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($apartments as $apartment)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->nama }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->alamat }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->jumlah_lantai }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->jumlah_unit }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->id_penyewa }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('admin.apartment.show', $apartment->id) }}" class="text-blue-600 hover:text-blue-900">Show</a>
                        <a href="{{ route('admin.apartment.edit', $apartment->id) }}" class="text-yellow-600 hover:text-yellow-900 ml-2">Edit</a>
                        <form action="{{ route('admin.apartment.destroy', $apartment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this apartment?')" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap" colspan="7">No apartments found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
