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
                        </label>
                            <span class="mt-1 px-2 py-2 border font-semibold border-gray-300 rounded" > {{ $employee->name }} </span>
                    </div>
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Username:
                        </label>
                            <span class="mt-1 px-2 py-2 border font-semibold border-gray-300 rounded" > {{ $employee->username }} </span>
                    </div>
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Email:
                        </label>
                            <span class="mt-1 px-2 py-2 border font-semibold border-gray-300 rounded" > {{ $employee->email }} </span>
                    </div>
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Role:
                        </label>
                            <span class="mt-1 px-2 py-2 border font-semibold border-gray-300 rounded" > {{ ucfirst($employee->role) }} </span>
                    </div>
                    <div class="m-2 px-2 py-4 card">
                        <label class="block px-2 py-1">
                            Department:
                        </label>
                            <span class="mt-1 px-2 py-2 border font-semibold border-gray-300 rounded" >{{ $employee->department->name ?? 'Tidak Ada' }} </span>
                    </div>
                </div>
                <button class="mt-4 bg-red-900 text-white px-4 py-2 rounded">Kembali</button>
                <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Edit</button>
            </div>
        </div>
    </div>
    


  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
