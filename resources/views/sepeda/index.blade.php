@extends('layout.header')
@section('main')
    <div class="container">
        <div class="mx-10 my-6">
            <h1 class="text-3xl font-semibold">
                DATA SEPEDA
            </h1>
        </div>

        <div class="mx-16">
            <a href="{{ route('sepeda.create') }}" class="bg-blue-400 hover:bg-blue-300 text-white px-4 py-2 rounded">
                CREATE
            </a>
        </div>

        <table class="mt-6 table w-screen border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">NO</th>
                    <th class="border border-gray-300 px-4 py-2">MERK</th>
                    <th class="border border-gray-300 px-4 py-2">FOTO</th>
                    <th class="border border-gray-300 px-4 py-2">TIPE</th>
                    <th class="border border-gray-300 px-4 py-2">WARNA</th>
                    <th class="border border-gray-300 px-4 py-2">SEWA</th>
                    <th class="border border-gray-300 px-4 py-2">STATUS</th>
                    <th class="border border-gray-300 px-4 py-2">ACTION</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($sepeda as $index => $sepeda)
                    <tr class="border border-gray-300 text-center">
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $sepeda->merk }}</td>
                        <td class="border px-4 py-2 justify-center items-center">
                            <img src="{{ asset($sepeda->foto) }}" height="150px" width="150px" alt="">
                        </td>
                        <td class="border px-4 py-2">{{ $sepeda->tipe }}</td>
                        <td class="border px-4 py-2">{{ $sepeda->warna }}</td>
                        <td class="border px-4 py-2">{{ $sepeda->sewa }}</td>
                        <td class="border px-4 py-2">{{ $sepeda->status }}</td>
                        <td class="flex justify-center items-center px-4 py-2 my-14" rowspan="2">
                            <a 
                                href="{{  route('sepeda.edit', $sepeda->idSepeda) }}" 
                                class="bg-green-400 hover:bg-green-300 text-white rounded px-4 py-2 me-2">
                                EDIT
                            </a>
                            <form action="{{  route('sepeda.destroy', $sepeda->idSepeda) }}" method="POST">
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