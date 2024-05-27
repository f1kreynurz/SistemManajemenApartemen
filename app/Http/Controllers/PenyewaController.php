<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use App\Models\Apartment;
use App\Models\User;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewas = Penyewa::all();
        return view('admin.penyewa.index', compact('penyewas'));
    }

    public function create()
    {
        $apartments = Apartment::all();
        $users = User::all(); 

        return view('admin.penyewa.create', compact('apartments', 'users'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'pekerjaan' => 'required|string|max:255',
            'id_apartemen' => 'required|integer',
            'id_user' => 'required|integer'
        ]);

        Penyewa::create($request->all());

        return redirect()->route('admin.penyewa.index')
            ->with('success', 'Penyewa created successfully.');
    }

    public function show($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        if (!$penyewa) {
            return redirect()->route('admin.penyewa.index')->with('error', 'Penyewa not found.');
        }

        return view('admin.penyewa.show', compact('penyewa'));
    }

    public function edit($id)
    {
        $penyewa = Penyewa::findOrFail($id); 
        $apartments = Apartment::all(); 
        $users = User::all();

        return view('admin.penyewa.edit', compact('penyewa', 'apartments', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'pekerjaan' => 'required|string|max:255',
            'id_apartemen' => 'required|integer',
            'id_user' => 'required|integer'
        ]);

        $penyewa = Penyewa::findOrFail($id);
        $penyewa->update($request->all());

        return redirect()->route('admin.penyewa.index')
            ->with('success', 'Penyewa updated successfully.');
    }

    public function destroy(Penyewa $penyewa)
    {
        $penyewa->delete();

        return redirect()->route('admin.penyewa.index')
            ->with('success', 'Penyewa deleted successfully.');
    }
}
