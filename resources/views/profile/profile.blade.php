<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>

    <div class="">
        <h2> Informasi Pribadi</h2>
    </div>

    <div class="flex items-start max-w-4xl mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <!-- Foto Profil -->
        <div class="flex-shrink-0">
            <img class="w-24 h-24 rounded-full shadow-lg" src="https://picsum.photos/300/300" alt="Foto Profil" />
            <div class="mb-4">
                <label class="block pt-4 text-gray-700 font-semibold mb-2" for="pic">Ganti Foto </label>
                <input type="file" class="block rounded-xl w-full text-sm not-italic border border-gray-300">
                <small class="text-gray-500 mt-1">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB </small>
            </div>
        </div>
    
        <!-- Informasi Profil -->
        <div class="ml-4">
            <h2 class="text-lg font-semibold">Informasi Karyawan</h2>

            <div class="mt-2 row-span-3 grid grid-cols-2 gap-3">
                    <label class="block px-2 py-1">
                        Nama:
                        <input class="mt-1 px-2 py-2 border font-semibold border-gray-300 rounded" >  
                    </label>
                </div>
                    <label class="block px-2 py-1">
                        Username:
                        <input class="mt-1 px-2 py-2 border font-semibold border-gray-300 rounded" >  
                    </label>
                </div>
                    <label class="block px-2 py-1">
                        Email:
                        <input class="mt-1 px-2 py-2 border font-semibold border-gray-300 rounded" >  
                    </label>
                </div>
            </div>
            <button class="mt-4 bg-red-900 text-white px-4 py-2 rounded">Kembali</button>
            <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Edit</button>
        </div>
    </div>
</x-layout>