<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $pelanggan = new Pelanggan();
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
    
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            $file->move(public_path('images'), $filename);
            
            $pelanggan->foto = 'images/' . $filename;
        }
    
        $pelanggan->save();
    
        return redirect()->route('pelanggan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName(); 

            $file->move(public_path('images'), $filename);

            $pelanggan->foto = 'images/' . $filename;
        }

        $pelanggan->save();

        return redirect()->route('pelanggan.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();
        return redirect()->route('pelanggan.index');
    }
}