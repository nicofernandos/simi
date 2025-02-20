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
      <form action="{{ route('task.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="min-w-full space-y-3 px-2 py-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Nomor Pekerjaan</span>
                <input type="text" name="no_task" id="no_task" value="{{ $reportCode }}" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled" readonly>
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Penyelesaian</span>
                <input type="date" name="date" id="date" placeholder="Tanggal" value="{{ old('date') }}" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">
                    Nama Pekerja
                </span>
                <select name="user_id" id="user_id" required class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500">
                    <option value="" disabled selected>Pilih Pekerja</option>
                    @foreach($employee as $key)
                        <option value="{{ $key->id }}" {{ old('user_id') == $key->id ? 'selected' : '' }} >{{ $key->name }}</option>
                    @endforeach
                </select>
            </div>            
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Title</span>
                <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Masukkan judul" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Description</span>
                <textarea type="text" name="description" id="description" placeholder="Masukkan description"  class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">{{ old('description') }}</textarea>
              </div>
              <input type="hidden" name="task_status" value="pending">
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Lokasi</span>
                <input type="text" name="department" id="department" value="{{ old('department') }}" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Blok</span>
                <input type="text" name="blok" id="blok" value="{{ old('blok') }}" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>
               <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Dokumentasi</span>
                <input type="file" name="dokumentasi" id="dokumentasi" accept="image/*" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div> 
            </div>
          </div>
          <div class="flex min-w-full grid grid-cols-2 gap-2 justify-end">
            <div class="flex grid grid-cols-2 text-center gap-2 py-2 px-4 justify-end">
                <button class="bg-green-500  m-1 px-4 py-2 text-center text-white  rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                  Simpan
              </button>
            </div>
        </div>
      </form>
      </div>
    


  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
