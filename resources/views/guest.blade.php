<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Rental Sepeda</title>
</head>

<body>




    <nav
        class="block w-full max-w-screen-lg px-4 py-2 mx-auto bg-nav bg-opacity-90 sticky top-3 shadow lg:px-8 lg:py-3 backdrop-blur-lg backdrop-saturate-150 z-[9999] rounded-md">
        <div class="container flex flex-wrap items-center justify-between mx-auto text-black">
            <a href="#" class="mr-4 block cursor-pointer py-1.5 text-base text-slate-800 font-semibold">
                RENTAL SEPEDA
            </a>
            <div class="hidden lg:block">
                <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                    <li class="flex items-center p-1 text-sm gap-x-2 text-black">
                        <a href="#home" class="flex items-center">HOME</a>
                    </li>
                    <li class="flex items-center p-1 text-sm gap-x-2 text-black">
                        <a href="#about" class="flex items-center">TENTANG KAMI</a>
                    </li>
                    <li class="flex items-center p-1 text-sm gap-x-2 text-black">
                        <a href="#sepeda" class="flex items-center">SEPEDA KAMI</a>
                    </li>
                    <li class="flex items-center p-1 text-sm gap-x-2 text-black">
                        <a href="#contact" class="flex items-center">CONTACT</a>
                    </li>
                </ul>
            </div>
            <button
                class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
                type="button">
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </span>
            </button>
        </div>
    </nav>
    {{-- home --}}
    <section id="home" class="flex items-center justify-center h-screen bg-gray-200">
        <div class="bg-gray-800 bg-opacity-50 p-10 rounded-lg text-center text-white">
            <h1 class="font-bold text-4xl">SEWA SEPEDA UNTUK PETUALANGAN ANDA</h1>
            <p class="text-gray-200 mt-4">Nikmati pengalaman bersepda yang menyenagkan dengan layanan terbaik kami.</p>
            <a href="#sepeda" class="bg-nav hover:bg-slate-400 text-black rounded px-4 py-2 mt-6 inline-block">Lihat
                Sepeda</a>
        </div>
    </section>

    {{-- about --}}
    <section id="about" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center">TENTANG KAMI</h2>
            <p class="mt-4 text-center text-gray-600">Kami adalah penyedia layanan sewa sepeda yang berkomitmen untuk
                memberikan pelanyanan terbaik untuk pelanggan kami.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg-grid-cols-4 gap-6 mt-10">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Sepeda Berkualitas</h3>
                    <p class="mt-2 text-center text-gray-600">Kami menyediakan sepeda dengan kualitas terbaik untuk
                        pengalaman bersepeda yang menyenangkan.</p>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Harga Terjangkau</h3>
                    <p class="mt-2 text-center text-gray-600">Nikmati layanan sewa sepeda dengan harga yang bersahabat.
                    </p>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Pelayanan 24/7</h3>
                    <p class="mt-2 text-center text-gray-600">Kami siap melayani anda kapan saja.</p>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold">Free Maintenance</h3>
                    <p class="mt-2 text-center text-gray-600">Kami menyediakan pemeliharaan gratis untuk semua sepeda
                        yang disewa.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- sepeda --}}
    <section id="sepeda" class="bg-gray-200 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center">SEPEDA KAMI</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap6 mt-10">
                @foreach ($sepeda as $item)
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center m-5">
                        <img src="{{ asset($item->foto) }}" alt="{{ $item->merk }}"
                            class="h-40 w-full object-cover rounded-md">
                        <h3 class="text-xl font-semibold mt-4">{{ $item->merk }}</h3>
                        <p class="mt-2">Tipe: {{ $item->tipe }}</p>
                        <p class="mt-2">Warna: {{ $item->warna }}</p>
                        <p class="mt-2 font-bold">Sewa: Rp. {{ number_format($item->sewa, 0, ',', '.') }}</p>
                        <a href="#"
                            class="mt-4 inline-block bg-blue-600 hover:bg-blue-500 text-white rounded px-4 py-2">Sewa
                            Sekarang</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- contact --}}
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center">KONTAK KAMI</h2>
            <div class="mt-8 max-w-lg mx-auto text-center">
                <p class="mt-4">Nomor HP: <a href="#" class="text-blue-600 hover:underline">+62 82217285909</a></p>
                <p class="mt-2">Email: <a href="#" class="text-blue-600 hover:underline">rentalsepeda@gmail.com</a></p>
                <p class="mt-2">Alamat: Jl. Contoh No. 123, Padang, Indonesia</p>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <footer class="bg-nav text-black py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Rental Sepeda, All rights reserved.</p>
        </div>
    </footer>

</body>

</html>