<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>
    <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex items-start max-w-4xl mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow">
            <!-- Foto Profil -->
            <div class="flex-shrink-0">
                <div class="mb-4">
                    <label class="block pt-4 text-gray-700 font-semibold mb-2" for="image">Foto Profile </label>
                </div>
                <img class="w-40 h-40 rounded-full shadow-lg" src="{{ $user->image ? asset('storage/' . $tasks->image) : asset('img/default.jpg') }}" alt="Foto Profil" />
                <label class="block text-sm pt-4 text-gray-700 font-semibold mb-2" for="image">Foto Profile </label>
                <input type="file" accept="image/*" name="image" id="image" class="rounded-sm text-sm border-2 border-gray-600">
                <p class="text-sm font-light text-gray-400"> Maskimal JPG, PNG dll 2KB</p>
            </div>
        
            <div class="ml-4">
                <h2 class="text-lg font-semibold">Informasi Karyawan</h2>
                <div class="mt-2 row-span-3  grid grid-cols-2 gap-3">
                    <div class="grid gap 2 justify-center shadow-md card">
                        <label class="block px-2 py-3">
                            Nama:
                        </label>
                        <input type="text" name="name" id="name" value="{{ old('name',$user->name)}}" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800" >    
                    </div>
                    <div class="grid gap 2 justify-center shadow-md card">
                        <label class="block px-2 py-3">
                            Username:
                        </label>
                        <input type="text" name="username" id="username" value="{{  old('username',$user->username) }}" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800" >    
                    </div>
                    <div class="grid gap 2 justify-center shadow-md card">
                        <label class="block px-2 py-3">
                            Email:
                        </label>
                        <input type="text" name="email" id="email" value="{{ old('email',$user->email) }}" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800" >    
                    </div>
                    <div class="grid gap 2 justify-center shadow-md card">
                        <label class="block px-2 py-3">
                            Department:
                        </label>
                        <input type="text" name="department" id="department" value="{{ old('department',$user->department) }}" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800" >    
                    </div>
                    <div class="mt-10">
                        <a href="{{ route('pageProfile') }}" class="mt-4 text-black bg-red-500 px-4 py-2 rounded">Kembali</a>
                        <button href="submit" class="mt-4 text-black bg-blue-500 px-4 py-2 rounded">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
</form>
</x-layout>