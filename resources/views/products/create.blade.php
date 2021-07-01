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
                <form action="{{ route('products.store') }}" class="space-y-8 divide-y divide-gray-200" method="POST">
                    <div class="space-y-8 divide-y divide-gray-200">
                        <div>
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    Menambahkan Produk
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    This information will be displayed publicly so be careful
                                    what you share.
                                </p>
                            </div>
                        </div>

                        <div class="pt-3">
                            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                                @csrf
                                <div class="sm:col-span-4">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Product Name
                                    </label>
                                    <div class="mt-1">
                                        <input id="product_name" name="product_name"
                                            class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Supplier ID
                                    </label>
                                    <div class="mt-1">
                                        <input id="supplier_id" name="supplier_id"
                                            class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Category ID
                                    </label>
                                    <div class="mt-1">
                                        <input id="category_id" name="category_id"
                                            class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>



                                <div class="sm:col-span-6">
                                    <label for="quantity_per_unit" class="block text-sm font-medium text-gray-700">
                                        Quantity per unit
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="quantity_per_unit" id="quantity_per_unit"
                                            class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="unit_price" class="block text-sm font-medium text-gray-700">
                                        Unit Price
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="unit_price" id="unit_price"
                                            class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="units_in_stock" class="block text-sm font-medium text-gray-700">
                                        Unit in Stock
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="units_in_stock" id="units_in_stock"
                                            class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="reorder_level" class="block text-sm font-medium text-gray-700">
                                        Reorder Level
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" name="reorder_level" id="reorder_level"
                                            class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <button type="button"
                                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cancel
                            </button>
                            <button type="submit"
                                class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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