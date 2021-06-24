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
    <div class="min-h-screen bg-gray-50">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <form class="space-y-8 divide-y divide-gray-200">
                    @csrf
                    <div class="space-y-8 divide-y divide-gray-200">
                        <div>
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    Mengupdate Produk
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    This information will be displayed publicly so be careful
                                    what you share.
                                </p>
                            </div>
                        </div>

                        <div class="pt-3">
                     
                            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                         

                                <div class="sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">
                                        Product Name
                                    </label>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                        Supplier Id
                                    </label>
                                    <div class="mt-1">
                                        <select id="country" name="country" autocomplete="country" class="block w-full py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                       Category Id
                                    </label>
                                    <div class="mt-1">
                                        <select id="country" name="country" autocomplete="country" class="block w-full py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="street_address" class="block text-sm font-medium text-gray-700">
                                        Quantity per unit
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="street_address" id="street_address"
                                            autocomplete="street-address" class="block w-full py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="street_address" class="block text-sm font-medium text-gray-700">
                                        Unit Price
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="street_address" id="street_address"
                                            autocomplete="street-address" class="block w-full py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="street_address" class="block text-sm font-medium text-gray-700">
                                        Unit in Stock
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="street_address" id="street_address"
                                            autocomplete="street-address" class="block w-full py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                            </div>
                        </div>

                       
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


</html>
