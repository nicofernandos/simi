<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <body class="bg-slate-200 card shadow-md">
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
    
            <div class="flex grid grid-cols-4 px-2 py-4 gap-4 bg-slate-200">
                <div class="bg-slate-200 px-2 py-3">Nama </div>
                <span class="bg-slate-300 card max-w-full px-2 py-3 rounded-sm shadow-md">
                    <div class="font-semibold">: {{ $tasks->user->name }}</div>
                </span>
                <div class="bg-slate-200 px-2 py-3">Divisi </div>
                <span class="bg-slate-300 max-w-full card px-2 py-3 rounded-sm shadow-md">
                    <div class="font-semibold ">: {{ $tasks->user->department->name }}</div>
                </span>
                <div class="bg-slate-200 px-2 py-3">Judul Pekerjaan</div>
                <span class="bg-slate-300 card max-w-full px-2 py-3 rounded-sm shadow-md">
                    <div class=" font-semibold">: {{ $tasks->title }}</div>
                </span>
                <div class="bg-slate-200 px-2 py-3">Deskripsi pekerjaan</div>
                <span class="bg-slate-300 card max-w-full px-2 py-3 rounded-sm shadow-md">
                    <div class=" font-semibold">: {{ $tasks->description }}</div>
                </span>
                <div class="bg-slate-200 px-2 py-3">Status </div>
                <span class="bg-slate-300 card max-w-full px-2 py-3 rounded-sm shadow-md 
                    @if($tasks->task_status == 'pending') bg-red-600 text-black shadow-sm
                    @elseif($tasks->task_status == 'selesai') bg-green-900 text-black shadow-sm
                    @else bg-yellow-600 text-black @endif">
                    <div class="font-semibold rounded-sm ">: {{ ucfirst($tasks->task_status) }}</div>
                </span>
                <div class="bg-slate-200 px-2 py-3">Lokasi </div>
                <span class="bg-slate-300 card max-w-full px-2 py-3 rounded-sm shadow-md">
                    <div class="font-semibold">: {{ $tasks->department }} Blok</div>
                </span>
                <div class="bg-slate-200 px-2 py-3">Total blok </div>
                <span class="bg-slate-300 card max-w-full px-2 py-3 rounded-sm shadow-md">
                    <div class="font-semibold">: {{ $tasks->blok }} Blok</div>
                </span>
                <div class="bg-slate-200 px-2 py-3">Tanggal Pekerjaan </div>
                <span class="bg-slate-300 card max-w-full px-2 py-3 rounded-sm shadow-md">
                    <div class="font-semibold">: {{ $tasks->created_at }}</div>
                </span>
                <div class="bg-slate-200 px-2 py-3">Tanggal Pekerjaan Selesai </div>
                <span class="bg-slate-300 card max-w-full px-2 py-3 rounded-sm shadow-md">
                    <div class=" font-semibold">: {{ $tasks->date }}</div>
                </span>
                <h1 class="text-gray-700 font-bold"> Dokumentasi</h1>
            </div>
    
            <div class="grid grid-cols-3 gap-4 px-4 py-3 rounded-sm shadow-md">
                <div class="text-blue-600 text-center bg-slate-300">
                    <div class="bg-slate-200 px-1 py-2 font-semibold">
                        <h2 class="font-arial shadow-sm">
                            Pertama
                        </h2>
                    </div>
                    <img class="w-32 h-32 mt-2 mx-auto shadow-xl rounded-lg" src="{{ $tasks->dokumentasi ? asset('storage/' . $tasks->dokumentasi) : asset('img/default.jpg') }}" alt="Pertama">
                </div>
            
                <div class="text-blue-600 text-center bg-slate-300">
                    <div class="bg-slate-200 text-center px-1 py-2 font-semibold">
                        <h2 class="font-arial shadow-sm">
                            Kedua
                        </h2>
                    </div>
                    <img class="w-32 h-32 mt-2 mx-auto shadow-xl rounded-lg" src="{{ $tasks->dokumentasi1 ? asset('storage/' . $tasks->dokumentasi1) : asset('img/default.jpg') }}" alt="Kedua">
                </div>
            
                <!-- Dokumentasi 3 -->
                <div class="text-blue-600 text-center bg-slate-300">
                    <div class="bg-slate-200 text-center px-1 py-2 font-semibold">
                        <h2 class="font=arial shadow-md">
                            Ketiga
                        </h2>
                    </div>
                    <img class="w-32 h-32 mt-2 mx-auto shadow-xl rounded-lg" src="{{ $tasks->dokumentasi2 ? asset('storage/' . $tasks->dokumentasi2) : asset('img/default.jpg') }}" alt="Ketiga">
                </div>
            </div>
            
    
            <div class="flex mt-2 grid grid-flow-col-2 px-2 py-4 gap-4">
                <div class="bg-slate-200 ">Uraian Pekerjaan :</div>
                <div class="bg-slate-200 font-semibold text-left"> {{ $tasks->uraian_pekerjaan }}</div>
            </div>
            <div class="flex m-4 justify-start">
                <button onclick="window.location.href='{{ route('empoTask') }}'" class="bg-red-900 flex justify-end m-1 px-4 py-2 text-end text-white  rounded-md hover:bg-red-700 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                    Kembali
                </button>
            </div>
        </div>
    </body>
</x-layout>