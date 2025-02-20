@include('components.template.base.start')


@include('components.template.base.navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
  @includeIf('components.template.base.sidebar')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 
    <h1 class="font-semibold text-black text-end hover:underline hover:text-blue-700">
        {{ $title }}
    </h1>

    <div class="overflow-x-auto m-4 card border-tight border-slate-200 rounded-lg shadow-lg">
        <form action="{{ route('updateEmpo', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
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
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Nama:
                            <input type="text" id="name" name="name"  value="{{ old('name',$employee->name) }}" class="mt-1 px-2 py-2 border font-light border-gray-300 rounded" placeholder="Masukkan nama" >
                        </label>
                        @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Username:
                            <input type="text" id="username" name="username" value="{{ old('username',$employee->username) }}" class="mt-1 px-2 py-2 border font-light border-gray-300 rounded" placeholder="Masukkan username"> 
                        </label>
                        @error('username')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Email:
                            <input type="email" id="email" name="email" value="{{ old('email',$employee->email) }}" class="mt-1 px-2 py-2 border font-light border-gray-300 rounded" placeholder="Masukkan email"> 
                        </label>
                    </div>
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Role:
                            <select name="role" id="role" class="form-cotrol py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option value="" disabled selected>Pilih role</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="employee" {{ old('role') == 'employee' ? 'selected' : '' }}>Karyawan</option>
                            </select>
                        </label>
                        @error('role')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Department:
                            <select name="department_id" id="department_id" class="form-cotrol py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option value="" disabled selected>Pilih department</option>
                                @foreach ($depart as $department)
                                <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                    {{ $department->name }}
                                </option>
                                @endforeach
                            </select>
                        </label>
                        @error('department')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button class="mt-4 bg-red-900 text-white px-4 py-2 rounded">Simpan</button>
                <a href="{{ route('employe') }}" class="bg-red-500 m-1 px-4 py-2 text-white rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                    Kembali
                </a>
            </div>
        </div>
        </form>
    </div>
    


  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
