@extends('layout.header')
@section('main')
    <div class="container-fluid flex flex-col">
        <div class="mx-10 my-6">
            <h1 class="text-3xl font-semibold text-start">
                FORM DATA PELANGGAN
            </h1>
        </div>

        <div class="mx-10">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf
                <div class="space-y-2">
                    <label for="nama" class="block">Nama:</label>
                    <input type="text" class="border rounded p-2 w-full" name="nama" placeholder="Silahkan isi nama">

                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="border rounded p-2 w-full" id="" cols="30" rows="10" placeholder="Silahkan isi alamat"></textarea>

                    <label for="noTelp">Nomor Telpon:</label>
                    <input type="text" class="border rounded p-2 w-full" name="noTelp" placeholder="Silahkan isi nomor telpon">

                    <label for="email">Email:</label>
                    <input type="text" class="border rounded p-2 w-full" name="email" placeholder="Silahkan isi email">

                    <button class="bg-green-600 hover:bg-green-500 text-white px-4 py-2 rounded w-full">
                        SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection