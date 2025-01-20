<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500">
                        Nama Departemen
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        <a href="/editEmpo" class="font-medium m-4 text-center text-blue-600 dark:text-blue-500 hover:underline">
                            <i class="icon ion-edit text-xl"></i>
                        </a>
                        <a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">
                            <i class="icon ion-ios-trash-outline text-2xl"></i>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-layout>