<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Final Project MBD 2021</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer=""></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <main class="min-h-screen bg-gray-100">
        <div class="px-4 pt-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold tracking-wide text-indigo-600 uppercase ">
                    Final Project MBD 2021
                </h2>
                <p
                    class="mt-1 text-4xl font-extrabold text-gray-900 transition duration-500 ease-in-out transform sm:text-5xl sm:tracking-tight lg:text-6xl hover:-translate-y-1 hover:scale-110 hover:text-gray-700">
                    Northwind Database
                </p>
                <p class="max-w-xl mx-auto mt-5 text-lg text-gray-500">
                    Web ini dibuat oleh <br /> <span class="font-bold text-gray-700">Reyhan Naufal Rahman, Rizqi Tsani,
                        Muhammad Valda Rizky, Maximilian H.M.Lingga
                    </span> </p>
            </div>
        </div>

        <div class="py-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between max-w-4xl mx-auto">
                <a href="{{ route('products.index') }}"
                    class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Implementasi CRUD
                </a>

                <a href="{{ route('set') }}"
                    class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-yellow-600 border border-transparent rounded-md shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                    Implementasi Set
                </a>

                <a href="{{ route('aggregation') }}"
                    class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Implementasi Agregasi
                </a>
            </div>

        </div>

        <footer>
            <div class="px-4 py-24 mx-auto overflow-hidden max-w-7xl sm:px-6 lg:px-8">
                <p class="text-base text-center text-gray-400">
                    Made with ❤ kelompok MBD
                </p>
            </div>
        </footer>
    </main>
</body>

</html>