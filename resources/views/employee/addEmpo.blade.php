<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="ml-4 min-h-full bg-white text-gray-500">
        <div class="text-start">
            <div class="grid grid-cols-2 ml-3 mt-2 gap-4 border-1">
                <div class="font-bold text-lg border-b-2 text-md border-gray-700">
                    <label for="" class="text-gray-800">Name :</label>
                    <input type="text" class="m-1 text-start border-none w-full rounded-md shadow-sm ring-inset ring-gray-900 text-gray-600 font-semibold focus:ring-2 focus:ring-inset focus:ring-indigo-600 focus:outline-none focus:ring-0 focus:border-transparent" 
                    placeholder="Masukkan Nama">
                </div>
                <div class="font-bold text-lg border-b-2 text-md border-gray-700">
                    <label for="" class="text-gray-800">Username :</label>
                    <input type="text" class="m-1 text-start border-none w-full rounded-md shadow-sm ring-inset ring-gray-900 text-gray-600 font-semibold focus:ring-2 focus:ring-inset focus:ring-indigo-600 focus:outline-none focus:ring-0 focus:border-transparent" 
                    placeholder="Masukkan Username">
                </div>
                <div class="font-bold text-lg border-b-2 text-md border-gray-700">
                    <label for="" class="text-gray-800">Email :</label>
                    <input type="text" class="m-1 text-start border-none w-full rounded-md shadow-sm ring-inset ring-gray-900 text-gray-600 font-semibold focus:ring-2 focus:ring-inset focus:ring-indigo-600 focus:outline-none focus:ring-0 focus:border-transparent" 
                    placeholder="Masukkan Email">
                </div>
                <div class="font-bold text-lg border-b-2 text-md border-gray-700">
                    <label for="" class="text-gray-800">Departement :</label>
                    <input type="text" class="m-1 text-start border-none w-full rounded-md shadow-sm ring-inset ring-gray-900 text-gray-600 font-semibold focus:ring-2 focus:ring-inset focus:ring-indigo-600 focus:outline-none focus:ring-0 focus:border-transparent" 
                    placeholder="Masukkan Departement">
                </div>
                <div class="font-bold text-lg border-b-2 text-md border-gray-700">
                    <label for="" class="text-gray-800">Password :</label>
                    <input type="text" class="m-1 text-start border-none w-full rounded-md shadow-sm ring-inset ring-gray-900 text-gray-600 font-semibold focus:ring-2 focus:ring-inset focus:ring-indigo-600 focus:outline-none focus:ring-0 focus:border-transparent" 
                    placeholder="Masukkan Password">
                </div>
                <div class="font-bold text-lg border-b-2 text-md border-gray-700">
                    <label for="" class="text-gray-800">Confirm Password :</label>
                    <input type="text" class="m-1 text-start border-none w-full rounded-md shadow-sm ring-inset ring-gray-900 text-gray-950 focus:ring-2 focus:ring-inset focus:ring-indigo-600 focus:outline-none focus:ring-0 focus:border-transparent" 
                    placeholder="Masukkan Confirm Password">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="h-18 w-full flex flex-col items-center justify-center font-bold text-lg text-center mt-10 text-md border-gray-700">
                    <div class="flex space-x-4">
                        <button class="text-gray-800 p-2 bg-sky-500 text-sm font-medium rounded-lg shadow-xl border-spacing-1 border border-slate-600 hover:bg-blue-900 hover:text-white focus:ring-2">Simpan</button>
                        <button class="text-gray-800 p-2 bg-neutral-500 text-sm font-medium rounded-lg shadow-xl border-spacing-1 border border-slate-600 hover:bg-red-700 hover:text-white focus:ring-2">Cancel</button>

                    </div>
            </div>
        </div>
        </div>


</x-layout>