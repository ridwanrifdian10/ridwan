@extends('layout.header')
@section('main')
    <div class="container-fluid flex flex-col">
        <div class="mx-10 my-6">
            <h1 class="text-3xl font-semibold text-start">
                FORM EDIT DATA TRANSAKSI
            </h1>
        </div>

        <div class="mx-10">
            <form action="{{ route('transaksi.update', $transaksi->idRental) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-2">
                    <label for="nama" class="block">NAMA PELANGGAN</label>
                    <select name="idCustomer" id="idCustomer" class="border rounded p-2 w-full">
                        <option value="idCustomer">NAMA PELANGGAN</option>
                        @foreach ($pelanggan as $item)
                            <option value="{{ $item->idCustomer }}" {{ $item->idCustomer == $transaksi->idCustomer ? 'selected' : '' }}>
                                {{ $item->nama }}
                            </option>
                        @endforeach
                    </select>
                    
                    <label for="merk" class="block">MERK SEPEDA:</label>
                    <select name="idSepeda" id="idSepeda" class="border rounded p-2 w-full">
                        <option value="idSepeda">MERK SEPEDA</option>
                        @foreach ($sepeda as $item)
                            <option value="{{ $item->idSepeda }}" {{ $item->idSepeda == $transaksi->idSepeda ? 'selected' : '' }}>
                                {{ $item->merk }}
                            </option>
                        @endforeach
                    </select>

                    <label for="tanggalSewa" class="block">TANGGAL SEWA</label>
                    <input type="date" class="border rounded p-2 w-full" name="tanggalSewa" value="{{ $transaksi->tanggalSewa }}">

                    <label for="tanggalKembali" class="block">TANGGAL KEMBALI</label>
                    <input type="date" class="border rounded p-2 w-full" name="tanggalKembali" value="{{ $transaksi->tanggalKembali }}">

                    <label for="totalBiaya" class="block">TOTAL BIAYA</label>
                    <input type="input" class="border rounded p-2 w-full" name="totalBiaya" value="{{ $transaksi->totalBiaya }}">

                    <label for="denda" class="block">DENDA</label>
                    <input type="input" class="border rounded p-2 w-full" name="denda" value="{{ $transaksi->denda }}">

                    <label for="jaminan" class="block">JAMINAN</label>
                    <input type="text" class="border rounded p-2 w-full" name="jaminan" value="{{ $transaksi->jaminan }}">

                    <label for="status" class="block">STATUS</label>
                    <select name="status" id="status" class="border rounded p-2 w-full">
                        <option value="{{ $transaksi->status }}">{{ $transaksi->status }}</option>
                        <option value="LUNAS">LUNAS</option>
                        <option value="PROSES">PROSES</option>
                        <option value="BELUM LUNAS">BELUM LUNAS</option>
                    </select>

                    <button class="bg-slate-400 hover:bg-gray-700 text-white px-4 py-2 rounded w-full">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection