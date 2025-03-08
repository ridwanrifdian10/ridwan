<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepeda;

class SepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sepeda= Sepeda::all();
        return view('sepeda.index', compact('sepeda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sepeda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'warna' => 'required',
            'sewa' => 'required',
            'status' => 'required'
        ]);

        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);

        Sepeda::create([
            'merk' => $request->merk, 
            'foto' => 'images/'.$imageName, 
            'tipe' => $request->tipe, 
            'warna' => $request->warna, 
            'sewa' => $request->sewa, 
            'status' => $request->status,
        ]);
        return redirect()->route('sepeda.index');
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
        $sepeda = Sepeda::findOrFail($id);
        return view('sepeda.edit', compact('sepeda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'warna' => 'required',
            'sewa' => 'required',
            'status' => 'required',
        ]);
    
        $sepeda = Sepeda::findOrFail($id);
    
        // Cek apakah ada foto baru yang diunggah
        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
    
            // Hapus foto lama jika ada
            if ($sepeda->foto && file_exists(public_path($sepeda->foto))) {
                unlink(public_path($sepeda->foto));
            }
    
            // Simpan foto baru
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $imageName);
            $sepeda->foto = 'images/'.$imageName;
        }
    
        // Update data
        $sepeda->update([
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'warna' => $request->warna,
            'sewa' => $request->sewa,
            'status' => $request->status,
        ]);
    
        return redirect()->route('sepeda.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sepeda = Sepeda::findOrFail($id);
        $sepeda->delete();
        return redirect()->route('sepeda.index');
    }
}
