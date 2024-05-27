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


    public function show(Fasilitas $fasilitas)
    {
        return view('admin.fasilitas.show', compact('fasilitas'));
    }


    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }


    public function update(Request $request, Fasilitas $fasilitas)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
        ]);

        $fasilitas->update($request->all());

        return redirect()->route('admin.fasilitas.index')
                         ->with('success', 'Fasilitas updated successfully');
    }

  
    public function destroy(Fasilitas $fasilitas)
    {
        $fasilitas->delete();

        return redirect()->route('admin.fasilitas.index')
                         ->with('success', 'Fasilitas deleted successfully');
    }
}
