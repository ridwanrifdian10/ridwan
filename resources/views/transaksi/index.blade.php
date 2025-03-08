@extends('layout.header')
@section('main')
    <div class="container">
        <div class="mx-10 my-6">
            <h1 class="text-3xl font-semibold">
                DATA TRANSAKSI
            </h1>
        </div>

        <div class="mx-16">
            <a href="{{ route('transaksi.create') }}" class="bg-blue-400 hover:bg-blue-300 text-white px-4 py-2 rounded">
                CREATE
            </a>
        </div>

        <table class="mt-6 table w-screen border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">NO</th>
                    <th class="border border-gray-300 px-4 py-2">NAMA PELANGGAN</th>
                    <th class="border border-gray-300 px-4 py-2">MERK SEPEDA</th>
                    <th class="border border-gray-300 px-4 py-2">TANGGAL SEWA</th>
                    <th class="border border-gray-300 px-4 py-2">TANGGAL KEMBALI</th>
                    <th class="border border-gray-300 px-4 py-2">TOTAL PEMBAYARAN</th>
                    <th class="border border-gray-300 px-4 py-2">STATUS</th>
                    <th class="border border-gray-300 px-4 py-2">ACTION</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($transaksi as $index => $transaksi)
                    <tr class="border border-gray-300 text-center">
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->pelanggan->nama }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->sepeda->merk }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->tanggalSewa }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->tanggalKembali }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->totalBiaya }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->status }}</td>
                        <td class="flex justify-center border px-4 py-2">
                            <a 
                                href="{{ route('transaksi.edit', $transaksi->idRental) }}"
                                class="bg-green-400 hover:bg-green-300 text-white px-4 py-2 rounded me-4">
                                EDIT
                            </a>
                            <form action="{{ route('transaksi.destroy', $transaksi->idRental) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 hover:bg-red-500 text-white rounded px-4 py-2">
                                    DELETE
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">BELUM ADA DATA</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection