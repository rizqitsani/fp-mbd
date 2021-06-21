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
    <main class="bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 pt-16 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="
                  text-base
                  font-semibold
                  text-indigo-600
                  tracking-wide
                  uppercase
                ">
                    Final Project MBD 2021
                </h2>
                <p class="
                  mt-1
                  text-4xl
                  font-extrabold
                  text-gray-900
                  sm:text-5xl
                  sm:tracking-tight
                  lg:text-6xl
                  transition
                  duration-500
                  ease-in-out
                  transform hover:-translate-y-1 hover:scale-110 hover:text-gray-700
                ">
                    Northwind Database
                </p>
                <p class="max-w-xl mt-5 mx-auto text-lg text-gray-500">
                    Web ini dibuat oleh <br /> <span class="font-bold text-gray-700">Reyhan Naufal Rahman, Rizqi Tsani,
                        Muhammad Valda
                        Rizky
                    </span> </p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="
                    shadow
                    overflow-hidden
                    border-b border-gray-200
                    sm:rounded-lg
                  ">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="
                            px-6
                            py-3
                            text-left text-xs
                            font-medium
                            text-gray-500
                            uppercase
                            tracking-wider
                          ">
                                            Name
                                        </th>
                                        <th scope="col" class="
                            px-6
                            py-3
                            text-left text-xs
                            font-medium
                            text-gray-500
                            uppercase
                            tracking-wider
                          ">
                                            Title
                                        </th>
                                        <th scope="col" class="
                            px-6
                            py-3
                            text-left text-xs
                            font-medium
                            text-gray-500
                            uppercase
                            tracking-wider
                          ">
                                            Email
                                        </th>
                                        <th scope="col" class="
                            px-6
                            py-3
                            text-left text-xs
                            font-medium
                            text-gray-500
                            uppercase
                            tracking-wider
                          ">
                                            Role
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody x-max="2">
                                    <tr class="bg-white" x-description="Odd row">
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm
                            font-medium
                            text-gray-900
                          ">
                                            Jane Cooper
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Regional Paradigm Technician
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            jane.cooper@example.com
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Admin
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-right text-sm
                            font-medium
                          ">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>

                                    <tr class="bg-gray-50" x-description="Even row">
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm
                            font-medium
                            text-gray-900
                          ">
                                            Cody Fisher
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Product Directives Officer
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            cody.fisher@example.com
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Owner
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-right text-sm
                            font-medium
                          ">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>

                                    <tr class="bg-white" x-description="Odd row">
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm
                            font-medium
                            text-gray-900
                          ">
                                            Esther Howard
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Forward Response Developer
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            esther.howard@example.com
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Member
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-right text-sm
                            font-medium
                          ">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>

                                    <tr class="bg-gray-50" x-description="Even row">
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm
                            font-medium
                            text-gray-900
                          ">
                                            Jenny Wilson
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Central Security Manager
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            jenny.wilson@example.com
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Member
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-right text-sm
                            font-medium
                          ">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>

                                    <tr class="bg-white" x-description="Odd row">
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm
                            font-medium
                            text-gray-900
                          ">
                                            Kristin Watson
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Lead Implementation Liaison
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            kristin.watson@example.com
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Admin
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-right text-sm
                            font-medium
                          ">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>

                                    <tr class="bg-gray-50" x-description="Even row">
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm
                            font-medium
                            text-gray-900
                          ">
                                            Cameron Williamson
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Internal Applications Engineer
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            cameron.williamson@example.com
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-sm text-gray-500
                          ">
                                            Member
                                        </td>
                                        <td class="
                            px-6
                            py-4
                            whitespace-nowrap
                            text-right text-sm
                            font-medium
                          ">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="max-w-7xl mx-auto  px-4 overflow-hidden sm:px-6 lg:px-8">
                <p class="text-center text-base text-gray-400">
                    Made with ❤ kelompok MBD
                </p>
            </div>
        </footer>
    </main>
</body>

</html>
