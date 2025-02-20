<x-layout>
    <x-slot:title>  {{ $title }}</x-slot:title>

    <main class="grid grid-cols-2 pt-8 mx-auto max-w-screen-2xl px-2 pb-16 gap-4 bg-zinc-300 antialiased rounded-md shadow-2xl">
        <div class=" ml-2 justify-items-start w-full max-w-2xl grid grid-cols-3 gap-8 px-8 bg- rounded-sm justify-between"> 
            <div class="text-gray-700 w-full  text-start col-span-2 py-3 mx-auto underline">Id Karyawan :</div>
            <div class="text-gray-700 w-full  text-start col-span-2 py-3 mx-auto underline">Nama :</div>
            <div class="text-gray-700 w-full  text-start col-span-2 py-3 mx-auto underline">Departemen :</div>
            <div class="text-gray-700 w-full  text-start col-span-2 py-3 mx-auto underline">Tanggal :</div>
        </div>
        <div class="ml-1 justify-items-start w-full max-w-2xl grid grid-cols-2 gap-4 px-8 bg-zinc-300 rounded-sm">
            <!-- Dokumentasi Section -->
            <div class="text-gray-700 w-full text-start col-span-2 py-3 underline">
                <!-- Label Tanggal -->
            <h2 class="text-2xl font-bold tracking-tight text-gray-700 shadow">Tanggal</h2>
                Dokumentasi:
            </div>
        </div>
        

    </main>

</x-layout>