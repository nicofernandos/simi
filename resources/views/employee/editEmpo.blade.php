<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

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
                <h2 class="text-lg font-semibold">Nama Lengkap</h2>
                <div class="mt-2 row-span-3 grid grid-cols-2 gap-3">
                    <label class="block">
                        Nama:
                        <input type="email" class="mt-1 p-2 border border-gray-300 rounded" placeholder="Taratatung">
                    </label>
                    <label class="block">
                        Email:
                        <input type="email" class="mt-1 p-2 border border-gray-300 rounded" placeholder="email@example.com">
                    </label>
                    <label class="block mt-2">
                        Username:
                        <input type="text" class="mt-1 p-2 border border-gray-300 rounded" placeholder="Username">
                    </label>
                    <label class="block mt-2">
                        Role:
                        <input type="text" class="mt-1 p-2 border border-gray-300 rounded" placeholder="Username">
                    </label>
                    <label class="block mt-2">
                        Departemen:
                        <input type="text" class="mt-1 p-2 border border-gray-300 rounded" placeholder="Departemen">
                    </label>
                    <label class="block mt-2">
                        Password:
                        <input type="password" class="mt-1 p-2 border border-gray-300 rounded" placeholder="Password">
                    </label>
                </div>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Simpan Perubahan</button>
            </div>
        </div>



</x-layout>