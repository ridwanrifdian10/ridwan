@extends('layout.header')
@section('main')
    <div class="container-fluid flex flex-col">
        <div class="mx-10 my-6">
            <h1 class="text-3xl font-semibold text-start">
                FORM EDIT DATA SEPEDA
            </h1>
        </div>

        <div class="mx-10">
            <form action="{{ route('sepeda.update', $sepeda->idSepeda) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="space-y-2">
                    <label for="merk" class="block">MERK:</label>
                    <input type="text" class="border rounded p-2 w-full" name="merk" value="{{ ($sepeda->merk) }}">

                    <label for="tipe" class="block">TIPE:</label>
                    <input type="text" class="border rounded p-2 w-full" name="tipe" value="{{ ($sepeda->tipe) }}">

                    <label for="foto" class="block">FOTO:</label>
                    <input type="file" class="border rounded p-2 w-full" name="foto" value="{{ ($sepeda->foto) }}">

                    <label for="warna" class="block">WARNA:</label>
                    <input type="text" class="border rounded p-2 w-full" name="warna" value="{{ ($sepeda->warna) }}">

                    <label for="sewa">SEWA:</label>
                    <input type="text" name="sewa" class="border rounded p-2 w-full" value="{{ ($sepeda->sewa) }}">

                    <label for="status">STATUS:</label>
                    <select name="status" id="" class="border rounded p-2 w-full">
                        <option value="TERSEDIA" {{ $sepeda->status == 'TERSEDIA' ? 'selected' : '' }}>TERSEDIA</option>
                        <option value="DISEWA" {{ $sepeda->status == 'DISEWA' ? 'selected' : '' }}>DISEWA</option>
                    </select>

                    <button class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded w-full">
                        SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection