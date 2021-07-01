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
            </div>
        </div>
        <div class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                            Company Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                            Product in Order
                                        </th>
                                    </tr>
                                </thead>

                                <tbody x-max="1">
                                    @foreach ($result as $item)
                                    <tr class="bg-white" x-description="Odd row">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $item->company_name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $item->total_product_in_order }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('index') }}" type="button"
                            class="inline-flex items-center px-3 py-3 mt-4 text-xs font-bold text-white bg-indigo-600 border border-transparent rounded shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="px-4 mx-auto overflow-hidden max-w-7xl sm:px-6 lg:px-8">
                <p class="text-base text-center text-gray-400">
                    Made with ❤ kelompok MBD
                </p>
            </div>
        </footer>
    </main>
</body>

</html>