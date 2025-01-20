<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    
    <div class="relative overflow-x-auto border-solid">
        <!-- Header: Kelola Absensi dipindahkan ke kanan -->
        <div class="font-medium text-center rounded-md bg-white text-black text-sm flex justify-end pr-4 py-2">
            <a href="/editEmpo" class="font-medium text-center hover:underline hover:text-blue-500">
                <i class="icon ion-edit text-xl"></i>
                Kelola Absensi
            </a>
        </div>
        
        <!-- Tabel absensi -->
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="border-2 border-black-500">
                    <th scope="col" class="px-6 py-3 font-semibold text-gray-700 font-sm border-2 border-black-500">
                        Id Karyawan
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500 ">
                        Nama Karyawan
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500 ">
                        Departemen
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500 ">
                        Jam Masuk
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500 ">
                        Jam Keluar
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-gray-950 font-sm border-2 border-black-500 ">
                        Laporan Kerja
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        12039
                    </th>
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
                        $2999
                    </td>
                    <td class="px-6 py-4 hover:text-blue-500 hover:underline">
                        laporan.pdf
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</x-layout>