@extends('layout.header')
@section('main')
    <div class="container mx-auto px-4 py-6">
        <div class="mb-6">
            <h1 class="text-3xl font-semibold text-gray-800">
                Data Transaksi
            </h1>
        </div>

        <div class="mb-4">
            <a href="{{ route('transaksi.create') }}"
                class="bg-slate-400 hover:bg-gray-700 text-white px-4 py-2 rounded">
                Tambah Transaksi
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-slate-500 text-white">
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Nama Pelanggan</th>
                        <th class="border border-gray-300 px-4 py-2">Merk Sepeda</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal Sewa</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal Kembali</th>
                        <th class="border border-gray-300 px-4 py-2">Total Pembayaran</th>
                        <th class="border border-gray-300 px-4 py-2 w-32">Denda</th>
                        <th class="border border-gray-300 px-4 py-2">Jaminan</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($transaksi as $index => $transaksi)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $transaksi->pelanggan->nama }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $transaksi->sepeda->merk }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $transaksi->tanggalSewa }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $transaksi->tanggalKembali }}</td>
                            <td class="border border-gray-300 px-4 py-2">Rp
                                {{ number_format($transaksi->totalBiaya, 0, ',', '.') }}</td>
                            <td class="border border-gray-300 px-4 py-2 w-32">Rp
                                {{ number_format($transaksi->denda, 0, ',', '.') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $transaksi->jaminan }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $transaksi->status }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('transaksi.edit', $transaksi->idRental) }}"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-1 rounded">
                                        Edit
                                    </a>
                                    <form action="{{ route('transaksi.destroy', $transaksi->idRental) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="border border-gray-300 px-4 py-2 text-center">
                                Belum ada data
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection