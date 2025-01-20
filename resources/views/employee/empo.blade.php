<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>

    <x-button-primary>
        Tambah
    </x-button-primary>
    
    <div class="grid grid-cols-6 gap-4 tracking-tight border-1 border-gray-500 p-4 text-center mx-5 relative overflow-x-auto shadow-2xl drop-shadow-2xl rounded-md md:roundend-lg">
        <div class="font-bold text-lg border-b-2 text-md border-gray-300">ID</div>
        <div class="font-bold text-lg border-b-2 text-md border-gray-300">Nama</div>
        <div class="font-bold text-lg border-b-2 text-md border-gray-300">Username</div>
        <div class="font-bold text-lg border-b-2 text-md border-gray-300">Email</div>
        <div class="font-bold text-lg border-b-2 text-md border-gray-300">Departemen</div>
        <div class="font-bold text-lg border-b-2 text-md border-gray-300">Aksi</div>
        <!-- Baris 1 -->
        <div class="border-b border-gray-300 p-2">01</div>
        <div class="border-b border-gray-300 p-2">Tatang</div>
        <div class="border-b border-gray-300 p-2">Taratatang</div>
        <div class="border-b border-gray-300 p-2">Taratatang@gmail.com</div>
        <div class="border-b border-gray-300 p-2">Produksi</div>
        <div class="border-b  border-gray-300 p-2">
            <a href="/editEmpo" class="font-medium m-4 text-center text-blue-600 dark:text-blue-500 hover:underline">
                <i class="icon ion-edit text-xl"></i>
            </a>
            <a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">
                <i class="icon ion-ios-trash-outline text-2xl"></i>
            </a>
        </div>
</x-layout>