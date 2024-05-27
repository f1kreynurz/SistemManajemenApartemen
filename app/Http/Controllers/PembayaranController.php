<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Kontrak;
use App\Models\Penyewa;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with('kontrak', 'penyewa')->orderBy('tanggal', 'desc')->get();
        return view('admin.pembayaran.index', compact('pembayarans'));
    }

    public function create()
    {
        $kontrak = Kontrak::all();
        $penyewa = Penyewa::all();
        return view('admin.pembayaran.create', compact('kontrak', 'penyewa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kontrak' => 'required|exists:kontrak,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
            'metode' => 'required|string|max:255',
            'id_penyewa' => 'required|exists:penyewa,id',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('admin.pembayaran.index')
            ->with('success', 'Pembayaran created successfully.');
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('admin.pembayaran.show', compact('pembayaran'));
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $kontrak = Kontrak::all();
        $penyewa = Penyewa::all();
        return view('admin.pembayaran.edit', compact('pembayaran', 'kontrak', 'penyewa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kontrak' => 'required|exists:kontrak,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
            'metode' => 'required|string|max:255',
            'id_penyewa' => 'required|exists:penyewa,id',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->all());

        return redirect()->route('admin.pembayaran.index')
            ->with('success', 'Pembayaran updated successfully.');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();

        return redirect()->route('admin.pembayaran.index')
            ->with('success', 'Pembayaran deleted successfully.');
    }
}
