<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Apartment;
use App\Models\Penyewa;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    // Menampilkan daftar unit
    public function index()
    {
        $units = Unit::with(['apartment', 'penyewa'])->get();
        return view('admin.unit.index', compact('units'));
    }

    // Menampilkan form untuk membuat unit baru
    public function create()
    {
        $apartments = Apartment::all();
        $tenants = Penyewa::all();
        return view('admin.unit.create', compact('apartments', 'tenants'));
    }

    // Menyimpan unit baru
    public function store(Request $request)
    {
        $request->validate([
            'id_apartemen' => 'required|exists:apartments,id',
            'nomor_unit' => 'required|string|max:50',
            'tipe' => 'required|string|max:50',
            'luas' => 'required|numeric',
            'id_penyewa' => 'nullable|exists:penyewas,id',
        ]);

        Unit::create($request->all());

        return redirect()->route('admin.unit.index')
            ->with('success', 'Unit created successfully.');
    }

    // Menampilkan form untuk mengedit unit
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        $apartments = Apartment::all();
        $tenants = Penyewa::all();
        return view('admin.unit.edit', compact('unit', 'apartments', 'tenants'));
    }

    public function show($id)
    {
        $unit = Unit::findOrFail($id);
        if (!$unit) {
            return redirect()->route('admin.unit.index')->with('error', 'Apartment not found.');
        }

        return view('admin.unit.show', compact('unit'));
    }

    // Memperbarui unit
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_apartemen' => 'required|exists:apartments,id',
            'nomor_unit' => 'required|string|max:50',
            'tipe' => 'required|string|max:50',
            'luas' => 'required|numeric',
            'id_penyewa' => 'nullable|exists:penyewa,id',
        ]);

        $unit = Unit::findOrFail($id);
        $unit->update($request->all());

        return redirect()->route('admin.unit.index')
            ->with('success', 'Unit updated successfully.');
    }

    // Menghapus unit
    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();

        return redirect()->route('admin.unit.index')
            ->with('success', 'Unit deleted successfully.');
    }
}
