<x-layout>
    <x-slot:title>  {{ $title }}</x-slot:title>

    <main class="grid grid-cols-2 pt-8 mx-auto max-w-screen-2xl px-2 pb-16 gap-4 bg-slate-300 antialiased rounded-md">
        <div class=" ml-2 justify-items-start w-full max-w-2xl grid grid-cols-3 gap-8 px-8 bg-blue-700 rounded-sm justify-between"> 
            <div class="text-white w-full  text-start col-span-2 py-3 mx-auto border-2 border-black">Id Karyawan :</div>
            <div class="text-white w-full  text-start col-span-2 py-3 mx-auto border-2 border-black">Nama :</div>
            <div class="text-white w-full  text-start col-span-2 py-3 mx-auto border-2 border-black">Departemen :</div>
            <div class="text-white w-full  text-start col-span-2 py-3 mx-auto border-2 border-black">Tanggal :</div>
        </div>
        <div class="ml-1 justify-items-start w-full max-w-2xl grid grid-cols-2 gap-4 px-8 bg-blue-700 rounded-sm">
            <!-- Dokumentasi Section -->
            <div class="text-white w-full text-start col-span-2 py-3 border-2 border-black">
                <!-- Label Tanggal -->
            <h2 class="text-2xl font-bold tracking-tight text-white shadow">Tanggal</h2>
                Dokumentasi:
            </div>
        </div>
        

    </main>

</x-layout>