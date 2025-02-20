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
        <div class="alert alert-success text-white jutify-content-center bg-green-600 rounded-lg p-2">
            {{ session('success') }}
        </div>
        @endif
        <!-- Tabel -->
        <table class="min-w-full table-auto text-end shadow-md rounded-lg">
            <div class="flex justify-end">
                <a href="{{ route('AddEmpo') }}" class="bg-red-500 flex justify-end m-1 px-4 py-2 text-end text-white  rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                    <i class="fad fa-plus text-xs mr-2"></i>
                    Add
                </a>
            </div>
            <thead class="text-start justify-items-start card">
                <tr class="bg-sky-200">
                    <th class=" text-start font-semibold px-4 py-2 ">ID</th>
                    <th class="font-semibold text-start px-4 py-2 ">Nama</th>
                    <th class="font-semibold text-start px-4 py-2 ">Username</th>
                    <th class="font-semibold text-start px-4 py-2 ">Email</th>
                    <th class="font-semibold text-start px-4 py-2 ">Departement</th>
                    <th class="font-semibold text-start px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $employee as $key )
                    
                <tr class="bg-white text-center">
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->id }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->name }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->username }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->email }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ optional($key->department)->name ?? 'Tidak ada department' }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">
                        <div class="grid grid-cols-3 gap-1 max-w-full">
                            <a href="{{ route('viewEmpo', $key->id) }}" class="bg-yellow-400 p-1 text-white  rounded-md hover:bg-orange-400 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                                <i class="fad fa-eye text-blue-900"></i>
                            </a>
                            <a href="{{ route('editEmpo', $key->id) }}" class="bg-blue-500 text-white p-1 rounded-md hover:bg-blue-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                                <i class="fad fa-pen"></i>
                            </a>
                            <form action="{{ route('destroy',$key->id) }}" method="POST" class="min-w-full text-center bg-red-400 text-white rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-200 shadow-md">
                                @csrf
                                @method('DELETE')
                                <button class="text-center" onclick="return confirm('Yakin ingin menghapus ?')">
                                    <i class="fad fa-trash text-blue-950"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    


  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
