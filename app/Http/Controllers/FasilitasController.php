<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{

    public function index()
    {
        $fasilitasApart = Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitasApart'));
    }


    public function create()
    {
        return view('admin.fasilitas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
        ]);

        Fasilitas::create($request->all());

        return redirect()->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas created successfully.');
    }


    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        if (!$fasilitas) {
            return redirect()->route('admin.fasilitas.index')->with('error', 'Apartment not found.');
        }

        return view('admin.fasilitas.show', compact('fasilitas'));
    }


    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
            'status' => 'required|string|max:50',
            'jam_operasional' => 'required|string|max:50',
            'kapasitas' => 'required|string|max:50',
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->nama = $request->nama;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->status = $request->status;
        $fasilitas->jam_operasional = $request->jam_operasional;
        $fasilitas->kapasitas = $request->kapasitas;
        $fasilitas->save();
    
        return redirect()->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas updated successfully');
    }
    


    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);

        if (!$fasilitas) {
            return redirect()->route('admin.fasilitas.index')->with('error', 'Fasilitas not found.');
        }

        $fasilitas->delete();

        return redirect()->route('admin.fasilitas.index')
            ->with('success', 'Fasilitas deleted successfully');
    }
}
