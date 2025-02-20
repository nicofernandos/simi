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
      @if (session('success'))
      <div class="alert alert-success text-center text-white jutify-content-center bg-green-600 rounded-lg p-2">
          {{ session('success') }}
      </div>
      @endif
      <form action="{{ route('TambahEmpo') }}" method="POST">
        @csrf
        <div class="min-w-full space-y-3 px-2 py-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Name</span>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="masukkan nama" class="form-control py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" autocomplete="OFF">
                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                   {{ $message }}
                </p>
                @enderror
              </div>

              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Username</span>
                <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="masukkan username" class="form-control py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" autocomplete="OFF">
                @error('username')
                <p class="text-red-500 text-xs italic mt-4">
                   {{ $message }}
                </p>
                @enderror
              </div>

              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">email</span>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="masukkan email" class="form-cotrol py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" autocomplete="OFF">
                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                   {{ $message }}
                </p>
                @enderror
              </div>

              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Role</span>
                <select name="role" id="role" class="form-cotrol py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                  <option value="" disabled selected>Pilih role</option>
                  <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                  <option value="employee" {{ old('role') == 'employee' ? 'selected' : '' }}>Karyawan</option>
                </select>
              </div>

              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Department</span>
                <select name="department_id" id="department_id" class="form-cotrol py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                  <option value="" disabled selected>Pilih department</option>
                  @foreach ($depart as $department)
                  <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                      {{ $department->name }}
                  </option>
                 @endforeach
                </select>
              </div>
              @error('department_id')
              <p class="text-red-500 text-xs italic mt-4">
                  {{ $message }}
              </p>
              @enderror



              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Password</span>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Masukkan password" autocomplete="new-password" class="form-cotrol py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                @error('password')
                <p class="text-red-500 text-xs italic mt-4">
                   {{ $message }}
                </p>
                @enderror
              </div>

              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Konfirmasi Password</span>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password" autocomplete="new-password" class="form-cotrol py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>

            </div>
          </div>
          <div class="flex min-w-full grid grid-cols-2 gap-2 justify-end">
            <div class="flex grid grid-cols-2 text-center gap-2 py-2 px-4 justify-end">
                <button type="submit" class="bg-green-500  m-1 px-4 py-2 text-center text-white  rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                  Simpan
              </button>
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
