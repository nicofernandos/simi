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
        <!-- Tabel -->
        <table class="min-w-full table-auto text-end shadow-md rounded-lg">
            <thead class="text-start justify-items-start card">
                <tr class="bg-sky-200">
                    <th class="font-semibold text-start px-4 py-2 ">ID</th>
                    <th class="font-semibold text-start px-4 py-2 ">No Pekerjaan</th>
                    <th class="font-semibold text-start px-4 py-2 ">Nama</th>
                    <th class="font-semibold text-start px-4 py-2 ">Pekerjaan</th>
                    <th class="font-semibold text-start px-4 py-2 ">Tanggal</th>
                    <th class="font-semibold text-start px-4 py-2 ">Tanggal Selesai</th>
                    <th class="font-semibold text-start px-4 py-2 ">Status</th>
                    <th class="font-semibold text-start px-4 py-2">Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white text-center">
                    @foreach ($works as $key)
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->id }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200 text-blue-950">
                        <a href="{{ route('viewWork',$key->id) }}" class="text-blue-700 hover:shadow-xl hover:bg-slate-500 hover:underline hover:text-blue-600">
                            {{ $key->no_task }}
                        </a>
                    </td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->user->name }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $key->title }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ \Carbon\Carbon::parse($key->created_at)->format('Y-m-d') }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200">{{ \Carbon\Carbon::parse($key->date)->format('Y-m-d') }}</td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200"> 
                        <span class="bg-blue-700 min-w-full p-2 rounded-lg shadow-lg 
                        @if($key->task_status == 'pending') bg-green-600 text-white shadow-sm
                        @elseif($key->task_status == 'selesai') bg-red-900 text-white shadow-sm
                        @else bg-yellow-600 text-white @endif">
                            {{  ucfirst($key->task_status)  }}
                        </span>
                    </td>
                    <td class="text-end px-4 py-2 border-2 border-slate-200"> {{ $key->department }}</td>

                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    


  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
