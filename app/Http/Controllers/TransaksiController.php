<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Sepeda;
use Illuminate\Support\Facades\Log;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan= Pelanggan::all();
        $sepeda= Sepeda::all();
        $transaksi=Transaksi::with('pelanggan', 'sepeda')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan= Pelanggan::all();
        $sepeda= Sepeda::all();
        $transaksi=Transaksi::with('pelanggan', 'sepeda')->get();
        return view('transaksi.create', compact('transaksi', 'pelanggan', 'sepeda'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idCustomer' => 'required',
            'idSepeda' => 'required',
            'tanggalSewa' => 'required',
            'tanggalKembali' => 'required',
            'totalBiaya' => 'required',
            'status' => 'required'
        ]);
        Transaksi::create($request->all());
        return redirect()->route('transaksi.index');
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
        $pelanggan = Pelanggan::all();
        $sepeda = Sepeda::all();
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi', 'pelanggan', 'sepeda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'idCustomer' => 'required',
            'idSepeda' => 'required',
            'tanggalSewa' => 'required',
            'tanggalKembali' => 'required',
            'totalBiaya' => 'required',
            'status' => 'required',
        ]);
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
