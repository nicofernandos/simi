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
      <form action="{{ route('updateTask',$tasks->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="min-w-full space-y-3 px-2 py-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Nomor Pekerjaan</span>
                <input type="text" name="no_task" id="no_task" value="{{ old('no_task',$tasks->no_task) }}" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none disabled" readonly>
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Penyelesaian</span>
                <input type="date" name="date" id="date" placeholder="Tanggal" value="{{ old('date',$tasks->date) }}" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                <span class="py-3 px-4 pe-11 font-semibold block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">{{ $tasks->date }}</span>
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">
                    Nama Pekerja
                </span>
                <select name="user_id" id="user_id" required class="py-3  font-bold px-4 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500">
                    <option value="{{ $tasks->user->name }}" disabled selected>{{ $tasks->user->name }}</option>
                </select>
            </div>  
            <div class="flex flex-col">
                <span for="task_status" class="text-sm font-semibold text-gray-700">Status</span>
                <select name="task_status" id="task_status">
                    <option value="progress" {{ old('task_status', $tasks->task_status) == 'progress' ? 'selected' : '' }}>Progress</option>
                    <option value="pending" {{ old('task_status', $tasks->task_status) == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="selesai" {{ old('task_status', $tasks->task_status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
                @error('status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div> 
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Title</span>
                <input type="text" name="title" id="title" value="{{ old('title',$tasks->title) }}" placeholder="Masukkan judul" class="py-3 font-semibold px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Description</span>
                <textarea type="text" name="description" id="description" placeholder="Masukkan description"  class="py-3 font-semibold px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">{{ old('description',$tasks->description) }}</textarea>
              </div>
              <input type="hidden" name="status" value="pending">
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Lokasi</span>
                <input type="text" name="department" id="department" value="{{ old('department',$tasks->department) }}" class="py-3 font-semibold px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex font-semibold items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-700">Blok</span>
                <input type="text" name="blok" id="blok" value="{{ old('blok',$tasks->blok) }}" class="py-3 font-semibold px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>
              <div class="flex grid-cols-3 items-center rounded-lg shadow-md border-2 border-slate-300 p-4 space-x-4">
                <div class="rounded-lg overflow-hidden ">
                    @if($tasks->dokumentasi)
                        <img src="{{ asset('storage/'.$tasks->dokumentasi) }}" alt="Dokumentasi" class="w-full h-full min-w-full shadow-2xl border-2 border-gray-950 object-cover rounded-lg shadow-md" />
                    @else
                        <p class="text-center text-gray-500">Dokumentasi tidak tersedia.</p>
                    @endif
                </div>
                <span class="px-2 inline-flex font-semibold items-center min-w-fit rounded-md border-2 border-gray-200 bg-gray-50 text-sm text-gray-700">
                    Dokumentasi
                </span>
                <input type="file" name="dokumentasi" id="dokumentasi" accept="image/*" class="py-3 px-2 w-full border-gray-200 shadow-sm rounded-lg text-sm text-gray-800 focus:ring-2 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
            </div>
            
            </div>
          </div>
          <div class="flex min-w-full grid grid-cols-2 gap-2 justify-end">
            <div class="flex grid grid-cols-2 text-center gap-2 py-2 px-4 justify-end">
                <button class="bg-green-500  m-1 px-4 py-2 text-center text-white  rounded-md hover:bg-green-950 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                  Simpan
              </button>
                <a href="{{ route('kelola_Pekerjaan') }}" class="bg-red-500  m-1 px-4 py-2 text-center text-white  rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
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
