@extends('layout.body ')
<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Oasis Bicycle</title>
</head>

<body>
    <div class="min-h-screen flex flex-col bg-cover bg-center"
        style="background-image: url('{{ asset('images/bg.jpg') }}')">
        <!-- Navbar -->
        <nav class="bg-white/80 backdrop-blur-sm border-b">
            <div class="container mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-gray-800">Rental Sepeda</h1>
                </div>
            </div>
        </nav>

        <!-- Content Utama -->
        <div class="flex-1 flex items-center justify-center p-6">
            <div
                class="max-w-2xl text-center bg-black/20 backdrop-blur-md p-8 rounded-lg transform transition-all duration-300 hover:scale-105">
                <h1 class="text-4xl font-bold text-white mb-6">
                    Selamat Datang di Rental Sepeda
                </h1>
                <p class="text-lg text-white mb-8">
                    Kami adalah penyedia layanan rental sepeda terpercaya yang berkomitmen untuk memberikan pengalaman
                    bersepeda terbaik bagi Anda. Dengan koleksi sepeda berkualitas tinggi dan layanan profesional, kami
                    siap membantu Anda menjelajahi setiap sudut kota dengan nyaman dan aman.
                </p>
                <div class="space-y-4">
                    <a href="{{ route('login') }}"
                        class="bg-slate-500 hover:bg-gray-600 text-white px-8 py-3 rounded inline-block w-full sm:w-auto transition duration-300">
                        Mulai Sekarang
                    </a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>