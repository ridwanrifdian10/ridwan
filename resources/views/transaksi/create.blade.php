@extends('layout.header')
@section('main')
    <div class="container-fluid flex flex-col">
        <div class="mx-10 my-6">
            <h1 class="text-3xl font-semibold text-start">
                FORM DATA TRANSAKSI
            </h1>
        </div>

        <div class="mx-10">
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <div class="space-y-2">
                    <label for="nama" class="block">NAMA PELANGGAN</label>
                    <select name="idCustomer" id="idCustomer" class="border rounded p-2 w-full">
                        <option value="idCustomer">Nama Pelanggan</option>
                        @foreach ($pelanggan as $item)
                            <option value="{{ $item->idCustomer }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    
                    <label for="merk" class="block">MERK SEPEDA</label>
                    <select name="idSepeda" id="idSepeda" class="border rounded p-2 w-full">
                        <option value="idSepeda">Merk Sepeda</option>
                        @foreach ($sepeda as $item)
                            <option value="{{ $item->idSepeda }}">{{ $item->merk }}</option>
                        @endforeach
                    </select>

                    <label for="tanggalSewa" class="block">TANGGAL SEWA</label>
                    <input type="date" class="border rounded p-2 w-full" name="tanggalSewa">

                    <label for="tanggalKembali" class="block">TANGGAL KEMBALI</label>
                    <input type="date" class="border rounded p-2 w-full" name="tanggalKembali">

                    <label for="totalBiaya" class="block">TOTAL BIAYA</label>
                    <input type="input" class="border rounded p-2 w-full" name="totalBiaya">

                    <label for="denda" class="block">DENDA</label>
                    <input type="input" class="border rounded p-2 w-full" name="denda">

                    <label for="jaminan" class="block">JAMINAN</label>
                    <input type="text" class="border rounded p-2 w-full" name="jaminan">

                    <label for="status" class="block">STATUS</label>
                    <select name="status" id="status" class="border rounded p-2 w-full">
                        <option value="LUNAS">LUNAS</option>
                        <option value="PROSES">PROSES</option>
                        <option value="BELUM LUNAS">BELUM LUNAS</option>
                    </select>

                    <button class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded w-full">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection