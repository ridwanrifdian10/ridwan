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
                    <label for="merk" class="block">Merk</label>
                    <input type="text" class="border rounded p-2 w-full" name="merk" value="{{ ($sepeda->merk) }}">

                    <label for="sewa">Sewa</label>
                    <input type="text" name="sewa" class="border rounded p-2 w-full" value="{{ ($sepeda->sewa) }}">

                    <label for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="border rounded p-2 w-full" value="{{ ($sepeda->jumlah) }}">

                    <label for="foto" class="block">Foto</label>
                    <input type="file" class="border rounded p-2 w-full" name="foto" value="{{ ($sepeda->foto) }}">

                    <button class="bg-slate-400 hover:bg-gray-700 text-white px-4 py-2 rounded w-full">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection         