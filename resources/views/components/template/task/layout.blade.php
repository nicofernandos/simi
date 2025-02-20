<h1 class="font-semibold text-black text-end hover:underline hover:text-blue-700">
    {{ $title }}
</h1>

<div class="overflow-x-auto m-4 card border-tight border-slate-200 rounded-lg shadow-lg">
    @if (session('success'))
    <div class="alert alert-success text-white jutify-content-center bg-green-600 rounded-lg p-2">
        {{ session('success') }}
    </div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto text-end shadow-md rounded-lg">
            <div class="flex justify-end mb-4">
                <a href="{{ route('tambahKerja') }}" class="bg-red-500 flex justify-end m-1 px-4 py-2 text-end text-white rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                    <i class="fad fa-plus text-xs mr-2"></i>
                    Add
                </a>
            </div>
            <thead class="text-start">
                <tr class="bg-sky-200">
                    <th class="font-semibold text-start px-4 py-2">ID</th>
                    <th class="font-semibold text-start px-4 py-2">User Id</th>
                    <th class="font-semibold text-start px-4 py-2">Nama</th>
                    <th class="font-semibold text-start px-4 py-2">Pekerjaan</th>
                    <th class="font-semibold text-start px-4 py-2">Lokasi</th>
                    <th class="font-semibold text-start px-4 py-2">Blok</th>
                    <th class="font-semibold text-start px-4 py-2">Tanggal</th>
                    <th class="font-semibold text-start px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $key)
                <tr class="bg-white">
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->no_task }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->user_id }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->user->name }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->title }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->department }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->blok }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->created_at }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">
                        <div class="flex flex-wrap gap-2 justify-center text-center">
                            <a href="{{ route('editTask',$key->id) }}" class="bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md w-full sm:w-auto">
                                <i class="fad fa-pen max-h-0.5 max-w-0.5 text-white">
                                </i>
                            </a>
                            <form action="{{ route('delete',$key->id) }}" method="POST" class="min-w-full text-center bg-red-400 text-white rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-200 shadow-md">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md w-full sm:w-auto" onclick="return confirm('Yakin ingin menghapus ?')">
                                <i class="fad fa-trash max-h-0.5 max-w-0.5 text-slate-400"></i>
                                </button>
                            </form>
                            <!-- Tombol View -->
                            <a href="{{ route('detailPekerjaan',$key->id) }}" class="bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md w-full sm:w-auto">
                                <i class="fad fa-eye max-h-0.5 max-w-0.5 text-black"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
