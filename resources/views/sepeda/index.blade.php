@extends('layout.header')
@section('main')
<div class="container mx-auto px-4 py-6">
    <div class="mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">
            Data Sepeda
        </h1>
    </div>

    <div class="mb-4">
        <a href="{{ route('sepeda.create') }}" class="bg-slate-400 hover:bg-gray-700 text-white px-4 py-2 rounded">
            Tambah Sepeda
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-slate-500 text-white">
                    <th class="border border-gray-300 px-4 py-2">No</th>
                    <th class="border border-gray-300 px-4 py-2">Merk</th>
                    <th class="border border-gray-300 px-4 py-2">Sewa</th>
                    <th class="border border-gray-300 px-4 py-2">Jumlah</th>
                    <th class="border border-gray-300 px-4 py-2">Foto</th>
                    <th class="border border-gray-300 px-4 py-2">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($sepeda as $index => $sepeda)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sepeda->merk }}</td>
                        <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($sepeda->sewa, 0, ',', '.') }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $sepeda->jumlah }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <img src="{{ asset($sepeda->foto) }}" class="h-24 w-24 object-contain mx-auto"
                                alt="{{ $sepeda->merk }}">
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('sepeda.edit', $sepeda->idSepeda) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-1 rounded">
                                    Edit
                                </a>
                                <form action="{{ route('sepeda.destroy', $sepeda->idSepeda) }}" method="POST">
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