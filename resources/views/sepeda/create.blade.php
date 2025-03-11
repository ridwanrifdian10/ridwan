@extends('layout.header')
@section('main')
    <div class="container-fluid flex flex-col">
        <div class="mx-10 my-6">
            <h1 class="text-3xl font-semibold text-start">
                FORM DATA SEPEDA
            </h1>
        </div>

        <div class="mx-10">
            <form action="{{ route('sepeda.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-2">
                    <label for="merk" class="block">Merk</label>
                    <input type="text" class="border rounded p-2 w-full" name="merk" placeholder="Silahkan isi merk">

                    <label for="sewa">Sewa</label>
                    <input type="text" name="sewa" class="border rounded p-2 w-full" placeholder="Silahkan isi sewa">

                    <label for="jumlah" class="block">Jumlah</label>
                    <input type="text" class="border rounded p-2 w-full" name="jumlah" placeholder="Silahkan isi Jumlah">

                    <label for="foto" class="block">Foto</label>
                    <input type="file" class="border rounded p-2 w-full" name="foto" placeholder="Silahkan Pilih Foto">

                    <button class="bg-slate-400 hover:bg-gray-700 text-white px-4 py-2 rounded min-w-full">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection