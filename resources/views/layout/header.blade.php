<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>WEBSITE RENTAL</title>
</head>

<body>
    {{-- <nav class="bg-nav 300 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-black text-4xl font-bold">
                <h1>
                    RENTAL
                </h1>
            </div>

            <div class="space-x-4">
                <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-white">DASHBOARD</a>
                <a href="{{ route('pelanggan.index') }}" class="text-gray-500 hover:text-white">CUSTOMER</a>
                <a href="{{ route('sepeda.index') }}" class="text-gray-500 hover:text-white">BICYCLE</a>
                <a href="{{ route('transaksi.index') }}" class="text-gray-500 hover:text-white">TRANSACTION</a>
            </div>

            <div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button class="text-gray-500 hover:text-white">
                        LOG OUT
                    </button>
                </form>
            </div>
        </div>
    </nav> --}}


    <nav class="bg-nav shadow">
        <div class="container flex items-center justify-between p-6 mx-auto text-black capitalize">
            <div class="text-white/85 text-4xl font-bold w-1/4">
                <h1>
                    RENTAL
                </h1>
            </div>

            <div class="flex items-center justify-center w-2/4">
                <a href="{{ route('dashboard') }}"
                    class="border-b-2 {{ request()->routeIs('dashboard') ? 'border-gray-800' : 'border-transparent' }} hover:text-black text-white transition-colors duration-300 transform hover:border-gray-800 mx-1.5 sm:mx-6">DASHBOARD</a>

                <a href="{{ route('pelanggan.index') }}"
                    class="border-b-2 {{ request()->routeIs('pelanggan.*') ? 'border-gray-800' : 'border-transparent' }} hover:text-black text-white transition-colors duration-300 transform hover:border-gray-800 mx-1.5 sm:mx-6">CUSTOMER</a>

                <a href="{{ route('sepeda.index') }}"
                    class="border-b-2 {{ request()->routeIs('sepeda.*') ? 'border-gray-800' : 'border-transparent' }} hover:text-black text-white transition-colors duration-300 transform hover:border-gray-800 mx-1.5 sm:mx-6">BICYCLE</a>

                <a href="{{ route('transaksi.index') }}"
                    class="border-b-2 {{ request()->routeIs('transaksi.*') ? 'border-gray-800' : 'border-transparent' }} hover:text-black text-white transition-colors duration-300 transform hover:border-gray-800 mx-1.5 sm:mx-6">TRANSACTION</a>
            </div>

            <div class="relative w-1/4 flex justify-end">
                <button onclick="toggleDropdown()" class="flex items-center space-x-2 text-white     hover:text-red-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Account</span>
                </button>

                <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                    <form action="{{ route('logout') }}" method="POST" class="block">
                        @csrf
                        @method('POST')
                        <button class="block w-full text-left px-4 py-2 text-red-700 hover:bg-gray-100">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        }

        // Menutup dropdown ketika mengklik di luar
        window.onclick = function (event) {
            if (!event.target.matches('button')) {
                const dropdowns = document.getElementsByClassName('dropdown');
                for (const dropdown of dropdowns) {
                    if (!dropdown.classList.contains('hidden')) {
                        dropdown.classList.add('hidden');
                    }
                }
            }
        }
    </script>
    @yield('main')
</body>

</html>