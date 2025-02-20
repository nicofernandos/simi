<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>

    <x-button-primary class="mb-2">
        Tambah
    </x-button-primary>
    

    <div class="grid gap-y-1 lg:grid-cols-6 relative shadow-2xl drop-shadow-2xl tracking-tight font-semibold text-gray-700 text-lg text-center rounded-lg border-1 border-gray-500">
       <x-headgrid>Id Karyawan</x-headgrid>
       <x-headgrid>Tanggal</x-headgrid>
       <x-headgrid>Username</x-headgrid>
       <x-headgrid>Nama</x-headgrid>
       <x-headgrid>Departemen</x-headgrid>
       <x-headgrid>Dokumentasi</x-headgrid>
       {{-- ISI DARI DATABASE --}}
        <x-valuegrid>12093</x-valuegrid>
        <x-valuegrid>12-10-20 asdasdasda</x-valuegrid>
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