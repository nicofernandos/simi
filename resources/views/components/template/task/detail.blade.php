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

    <div class="card mt-4 shadow-md">
        <div class="flex px-2 py-4 border-b-2 border-indigo-500">
            <div class="flex items-center bg-slate-200 mx-2 my-2 gap-2">
                <span class="text-gray-800 text-warp">ID</span>
                <span class="text-gray-700 font-semibold">{{ $tasks->id }}</span>
            </div>
            <div class="flex items-center bg-slate-200 mx-2 my-2 gap-2">
                <span class="text-gray-800 text-warp">Nomor Pekerjaan</span>
                <span class="text-gray-700 font-semibold hover:text-blue-600 hover:underline">{{ $tasks->no_task }}</span>
            </div>
        </div>

        <div class="flex grid grid-cols-4 px-2 py-4 gap-4">
            <div class="bg-slate-200 px-2 py-3">Nama </div>
            <span class="bg-slate-600 card max-w-full px-2 py-3 rounded-2xl shadow-md">
                <div class="bg-slate-200 font-semibold">: {{ $tasks->user->name }}</div>
            </span>
            <div class="bg-slate-600 px-2 py-3">Departemen </div>
            <span class="bg-slate-600 max-w-full card px-2 py-3 rounded-2xl shadow-md">
                <div class="bg-slate-200 font-semibold ">: {{ $tasks->user->department->name }}</div>
            </span>
            <div class="bg-slate-600 px-2 py-3">Pekerjaan</div>
            <span class="bg-slate-600 card max-w-full px-2 py-3 rounded-2xl shadow-md">
                <div class="bg-slate-200  font-semibold">: {{ $tasks->title }}</div>
            </span>
            <div class="bg-slate-600 px-2 py-3">Deskripsi pekerjaan</div>
            <span class="bg-slate-600 card max-w-full px-2 py-3 rounded-2xl shadow-md">
                <div class="bg-slate-200 font-semibold">: {{ $tasks->description }}</div>
            </span>
            <div class="bg-slate-200 px-2 py-3">Status </div>
            <span class="bg-slate-600 card max-w-full px-2 py-3 rounded-2xl shadow-md 
                @if($tasks->task_status == 'pending') bg-green-600 text-white shadow-sm
                @elseif($tasks->task_status == 'selesai') bg-red-900 text-white shadow-sm
                @else bg-yellow-600 text-white @endif">
                <div class="bg-slate-200 font-semibold rounded-sm ">: {{ ucfirst($tasks->task_status) }}</div>
            </span>
            <div class="bg-slate-200 px-2 py-3">Total blok </div>
            <span class="bg-slate-600 card max-w-full px-2 py-3 rounded-2xl shadow-md">
                <div class="bg-slate-200 font-semibold">: {{ $tasks->blok }} Blok</div>
            </span>
            <div class="bg-slate-200 px-2 py-3">Tanggal Pekerjaan </div>
            <span class="bg-slate-600 card max-w-full px-2 py-3 rounded-2xl shadow-md">
                <div class="bg-slate-200 font-semibold">: {{ $tasks->created_at }}</div>
            </span>
            <div class="bg-slate-200 px-2 py-3">Tanggal Pekerjaan Selesai </div>
            <span class="bg-slate-600 card max-w-full px-2 py-3 rounded-2xl shadow-md">
                <div class="bg-slate-200 font-semibold">: {{ $tasks->date }}</div>
            </span>
            <h1 class="text-gray-700 font-bold"> Dokumentasi</h1>
        </div>

        <div class="grid grid-cols-3 gap-4 px-4 py-3">
            <!-- Dokumentasi 1 -->
            <div class="text-blue-600 text-center">
                <div>Pertama</div>
                <img class="w-32 h-32 mt-2 mx-auto shadow-xl rounded-lg" src="{{ $tasks->dokumentasi ? asset('storage/' . $tasks->dokumentasi) : asset('img/default.jpg') }}" alt="Pertama">
            </div>
        
            <!-- Dokumentasi 2 -->
            <div class="text-blue-600 text-center">
                <div>Kedua</div>
                <img class="w-32 h-32 mt-2 mx-auto shadow-xl rounded-lg" src="{{ $tasks->dokumentasi1 ? asset('storage/' . $tasks->dokumentasi1) : asset('img/default.jpg') }}" alt="Kedua">
            </div>
        
            <!-- Dokumentasi 3 -->
            <div class="text-blue-600 text-center">
                <div>Ketiga</div>
                <img class="w-32 h-32 mt-2 mx-auto shadow-xl rounded-lg" src="{{ $tasks->dokumentasi2 ? asset('storage/' . $tasks->dokumentasi2) : asset('img/default.jpg') }}" alt="Ketiga">
            </div>
        </div>
        

        <div class="flex mt-2 grid grid-flow-col-2 px-2 py-4 gap-4">
            <div class="bg-slate-200 ">Uraian Pekerjaan</div>
            <div class="bg-slate-200 font-semibold"> {{ $tasks->uraian_pekerjaan }}</div>
        </div>
        <div class="flex m-4 justify-start">
            <button onclick="window.location.href='/admin/kelolaPekerjaan'" class="bg-red-900 flex justify-end m-1 px-4 py-2 text-end text-white  rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                Kembali
            </button>
        </div>
    </div>

    


  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
