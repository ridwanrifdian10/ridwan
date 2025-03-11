@extends('layout.header')

@section('main')
    <div class="container mx-auto px-4 py-6">
        <div class="mb-6">
            <h1 class="text-3xl font-semibold text-gray-800">Data Pelanggan</h1>
        </div>

        <div class="mb-4">
            <a href="{{ route('pelanggan.create') }}"
                class="bg-slate-400 hover:bg-gray-700 text-white px-4 py-2 rounded">
                Tambah Pelanggan
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-slate-500 text-white">
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Alamat</th>
                        <th class="border border-gray-300 px-4 py-2">Foto</th>
                        <th class="border border-gray-300 px-4 py-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($pelanggan as $index => $pelanggan)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $pelanggan->nama }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $pelanggan->alamat }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <img src="{{ asset($pelanggan->foto) }}" class="h-24 w-24 object-contain mx-auto" alt="Foto Pelanggan">
                            </td>

                            <td class="border border-gray-300 px-4 py-2">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('pelanggan.edit', $pelanggan->idCustomer) }}"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-1 rounded">
                                        Edit
                                    </a>
                                    <form action="{{ route('pelanggan.destroy', $pelanggan->idCustomer) }}" method="POST">
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
                            <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">
                                Belum ada data
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection