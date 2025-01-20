<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>

    <x-button-primary class="mb-2">
        Tambah
    </x-button-primary>
    

    <div class="grid grid-cols-5 relative shadow-2 rounded-lg tracking-tight font-semibold text-gray-700 text-lg text-center">
       <x-headgrid>Id Karyawan</x-headgrid>
       <x-headgrid>Username</x-headgrid>
       <x-headgrid>Nama</x-headgrid>
       <x-headgrid>Departemen</x-headgrid>
       <x-headgrid>Dokumentasi</x-headgrid>
       {{-- ISI DARI DATABASE --}}
        <x-valuegrid>12093</x-valuegrid>
        <x-valuegrid>Sutris</x-valuegrid>
        <x-valuegrid>Sutris</x-valuegrid>
        <x-valuegrid>Produksi</x-valuegrid>
        <x-valuegrid> 
            <div class="hover:underline text-blue-500">
                Dokumentasi.pdf
            </div> 
        </x-valuegrid>
    </div>

</x-layout>