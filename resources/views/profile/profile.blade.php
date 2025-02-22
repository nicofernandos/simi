<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>

    <div class="flex items-start max-w-4xl mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow">
        <!-- Foto Profil -->
        <div class="flex-shrink-0">
            <div class="mb-4">
                <label class="block pt-4 text-gray-700 font-semibold mb-2" for="pic">Foto Profile </label>
            </div>
            <img class="w-40 h-40 rounded-full shadow-lg" src="https://picsum.photos/300/300" alt="Foto Profil" />
        </div>
    
        <div class="ml-4">
            <h2 class="text-lg font-semibold">Informasi Karyawan</h2>

            <div class="mt-2 row-span-3  grid grid-cols-2 gap-3">
                <div class="grid gap 2 justify-center shadow-md card">
                    <label class="block px-2 py-3">
                        Nama:
                    </label>
                    <span class="px-2 py-3 border font-semibold border-gray-300 rounded-md"> {{ $user->name }}</span>
                </div>
                <div class="grid gap 2 justify-center shadow-md card">
                    <label class="block px-2 py-3">
                        Username:
                    </label>
                    <span class="px-2 py-3 border font-semibold border-gray-300 rounded-md"> {{ $user->username }}</span>
                </div>
                <div class="grid gap 2 justify-center shadow-md card">
                    <label class="block px-2 py-3">
                        Email:
                    </label>
                    <span class="px-2 py-3 border font-semibold border-gray-300 rounded-md"> {{ $user->email }}</span>
                </div>
                <div class="grid gap 2 justify-center shadow-md card">
                    <label class="block px-2 py-3">
                        Nama:
                    </label>
                    <span class="px-2 py-3 border font-semibold border-gray-300 rounded-md"> {{ $user->department->name }}</span>
                </div>
                    <div class="mt-10">
                        <a href="/" class="mt-4 text-black bg-blue-500 px-4 py-2 rounded">Kembali</a>
                        <a href="{{ route('editProfile') }}" class="mt-4 text-black bg-blue-500 px-4 py-2 rounded">Edit</a>
                    </div>
            </div>
        </div>
    </div>
</x-layout>