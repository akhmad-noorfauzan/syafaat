<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body>




    <header class="bg-gray-800 p-4 transition duration-300 hover:bg-gray-950">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <a class="hover:text-yellow-500" href="/"><img class="w-14 cursor-pointer" src="{{ asset('img/logosyafaat.jpeg') }}" alt="..."></a>
            </div>
            <div class="nav-links text-white duration-500 md:static absolute md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-yellow-500" href="/artikel">Artikel</a>
                    </li>
                    <li>
                        <a class="hover:text-yellow-500" href="/peraturan">Peraturan</a>
                    </li>
                    <li>
                        <!-- Ubah Layanan Menjadi Dropdown -->
                        <div class="relative group">
                            <a class="hover:text-yellow-500 cursor-pointer">Layanan</a>
                            <ul class="absolute hidden bg-gray-800 text-white group-hover:block mt-2">
                                <!-- Tambahkan 10 menu pilihan di bawah -->
                                <li class="p-2"><a href="#">Pilihan 1</a></li>
                                <li class="p-2"><a href="#">Pilihan 2</a></li>
                                <!-- Tambahkan item lain sesuai kebutuhan -->
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="hover:text-yellow-500" href="#">Program</a>
                    </li>
                    <li>
                        <a class="hover:text-yellow-500" href="/tentang_kami">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-yellow-700 text-white px-5 py-2 rounded-full hover:bg-yellow-500">Masuk</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>

    <div class="container">
        @yield('container')
    </div>
</body>

</html>