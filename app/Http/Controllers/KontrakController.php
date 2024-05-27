<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontrak;
use App\Models\Unit;
use App\Models\Penyewa;
use Illuminate\Support\Facades\Validator;

class KontrakController extends Controller
{
    public function index()
    {
        $kontrak = Kontrak::with('unit', 'penyewa')->get();
        return view('admin.kontrak.index', compact('kontrak'));
    }

    public function create()
    {
        $units = Unit::all();
        $penyewas = Penyewa::all();
        return view('admin.kontrak.create', compact('units', 'penyewas'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_unit' => 'required|exists:units,id',
            'id_penyewa' => 'required|exists:penyewas,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
            'biaya_sewa' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.kontrak.create')
                ->withErrors($validator)
                ->withInput();
        }

        Kontrak::create($request->all());

        return redirect()->route('admin.kontrak.index')
            ->with('success', 'Kontrak created successfully.');
    }

    public function show($id)
    {
        $kontrak = Kontrak::with('unit', 'penyewa')->findOrFail($id);
        return view('admin.kontrak.show', compact('kontrak'));
    }

    public function edit($id)
    {
        $kontrak = Kontrak::findOrFail($id);
        $units = Unit::all();
        $penyewas = Penyewa::all();
        return view('admin.kontrak.edit', compact('kontrak', 'units', 'penyewas'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_unit' => 'required|exists:units,id',
            'id_penyewa' => 'required|exists:penyewas,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
            'biaya_sewa' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.kontrak.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $kontrak = Kontrak::findOrFail($id);
        $kontrak->update($request->all());

        return redirect()->route('admin.kontrak.index')
            ->with('success', 'Kontrak updated successfully.');
    }

    public function destroy($id)
    {
        $kontrak = Kontrak::findOrFail($id);
        $kontrak->delete();

        return redirect()->route('admin.kontrak.index')
            ->with('success', 'Kontrak deleted successfully.');
    }
}
