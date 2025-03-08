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
                    <label for="merk" class="block">MERK:</label>
                    <input type="text" class="border rounded p-2 w-full" name="merk" placeholder="Silahkan isi merk">

                    <label for="foto" class="block">FOTO:</label>
                    <input type="file" class="border rounded p-2 w-full" name="foto" placeholder="Silahkan Pilih Foto">

                    <label for="tipe" class="block">TIPE:</label>
                    <input type="text" class="border rounded p-2 w-full" name="tipe" placeholder="Silahkan isi tipe">

                    <label for="warna" class="block">WARNA:</label>
                    <input type="text" class="border rounded p-2 w-full" name="warna" placeholder="Silahkan isi warna">

                    <label for="sewa">SEWA:</label>
                    <input type="text" name="sewa" class="border rounded p-2 w-full" placeholder="Silahkan isi sewa">

                    <label for="status">STATUS:</label>
                    <select name="status" id="" class="border rounded p-2 w-full">
                        <option value="TERSEDIA">TERSEDIA</option>
                        <option value="DISEWA">DISEWA</option>
                    </select>

                    <button class="bg-green-600 hover:bg-green-500 text-white px-4 py-2 rounded min-w-full">
                        SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection