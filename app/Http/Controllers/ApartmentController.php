<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Apartment;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return view('admin.apartment.index', compact('apartments'));
    }


    public function create()
    {
        return view('admin.apartment.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'alamat' => 'required|string|max:100',
            'jumlah_lantai' => 'required|integer',
            'jumlah_unit' => 'required|integer',
            'id_penyewa' => 'nullable|integer',
        ]);

        Apartment::create($request->all());

        return redirect()->route('admin.apartment.index')
            ->with('success', 'Apartment created successfully.');
    }

    public function show($id)
    {
        $apartment = Apartment::findOrFail($id);
        // var_dump($apartment);
        if (!$apartment) {
            return redirect()->route('admin.apartment.index')->with('error', 'Apartment not found.');
        }

        return view('admin.apartment.show', compact('apartment'));
    }


    public function edit($id)
    {
        $apartment = Apartment::findOrFail($id); // Ambil data apartment berdasarkan ID

        return view('admin.apartment.edit', compact('apartment'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jumlah_lantai' => 'required|numeric',
            'jumlah_unit' => 'required|numeric',
            'id_penyewa' => 'nullable|numeric',
        ]);

        $apartment = Apartment::findOrFail($id);
        $apartment->nama = $request->nama;
        $apartment->alamat = $request->alamat;
        $apartment->jumlah_lantai = $request->jumlah_lantai;
        $apartment->jumlah_unit = $request->jumlah_unit;
        $apartment->id_penyewa = $request->id_penyewa;
        $apartment->save();

        return redirect()->route('admin.apartment.index')->with('success', 'Apartment berhasil diupdate.');
    }

    public function destroy($id)
    {
        $apartment = Apartment::find($id);

        if (!$apartment) {
            return redirect()->route('admin.apartment.index')->with('error', 'Apartment not found.');
        }

        $apartment->delete();

        return redirect()->route('admin.apartment.index')
            ->with('success', 'Apartment deleted successfully');
    }
}
