@extends('layout.header')
@section('main')
    <div class="container">
        <div class="mx-10 my-6">
            <h1 class="text-3xl font-semibold text-start">
                DATA PELANGGAN
            </h1>
        </div>

        <div class="mx-16">
            <a href="{{ route('pelanggan.create') }}" class=" bg-blue-400 hover:bg-blue-300 text-white rounded px-4 py-2" >
                CREATE
            </a>
        </div>

        <table class="mt-6 table w-screen border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">NO</th>
                    <th class="border border-gray-300 px-4 py-2">NAMA</th>
                    <th class="border border-gray-300 px-4 py-2">ALAMAT</th>
                    <th class="border border-gray-300 px-4 py-2">NO TELP</th>
                    <th class="border border-gray-300 px-4 py-2">EMAIL</th>
                    <th class="border border-gray-300 px-4 py-2">ACTION</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pelanggan as $index => $pelanggan)
                    <tr class="border border-gray-300 text-center">
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $pelanggan->nama }}</td>
                        <td class="border px-4 py-2">{{ $pelanggan->alamat }}</td>
                        <td class="border px-4 py-2">{{ $pelanggan->noTelp }}</td>
                        <td class="border px-4 py-2">{{ $pelanggan->email }}</td>
                        <td class="flex justify-center border px-4 py-2">
                            <a 
                                href="{{  route('pelanggan.edit', $pelanggan->idCustomer) }}" 
                                class="bg-green-400 hover:bg-green-300 text-white rounded px-4 py-2 me-2">
                                EDIT
                            </a>
                            <form action="{{ route('pelanggan.destroy', $pelanggan->idCustomer) }}" method="POST">
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
                        <td colspan="6">BELUM ADA DATA</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection