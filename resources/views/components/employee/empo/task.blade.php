<x-layout>
  <x-slot:title>
    {{ $title }}
  </x-slot:title>

<body>
    <div class="relative grid flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
      <table class="w-full text-left  table-auto min-w-max">
          <thead class="shadow-sm">
          <tr class="font-semibold" >
              <th class="p-4 border-b border-slate-300 bg-slate-50">
              <p class="block text-sm  leading-none text-slate-500">
                  No Pekerjaan
              </p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50">
              <p class="block text-sm  leading-none text-slate-500">
                  Judul Pekerjaan
              </p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50">
              <p class="block text-sm  leading-none text-slate-500">
                  Deskripsi Pekerjaan
              </p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50">
              <p class="block text-sm leading-none text-slate-500">
                  Tanggal Selesai
              </p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50">
              <p class="block text-sm  leading-none text-slate-500">
                  Status
              </p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50">
              <p class="block text-sm  leading-none text-slate-500">
                  Lokasi
              </p>
              </th>
              <th class="p-4 border-b border-slate-300 bg-slate-50">
              <p class="block text-sm  leading-none text-slate-500">
                  Jumlah Blok
              </p>
              </th>
          </tr>
          </thead>
          <tbody>
            @foreach ($tasks as $key)
            <tr class="hover:bg-slate-50 text-black font-semibold">
              <td class="p-4 border-b border-slate-200">
                <div class="block text-sm text-slate-800">
                  <a href="{{ route('detail',$key->id) }}" class="text-blue-700 hover:underline hover:text-blue-400">
                    {{ $key->no_task }}
                  </a>
              </div>
            </td>
              <td class="p-4 border-b border-slate-200">
              <div class="block text-sm text-slate-800">
                  {{ $key->title }}
              </div>
              </td>
              <td class="p-4 border-b border-slate-200">
              <div class="block text-sm text-slate-800">
                  {{ $key->description }}
              </div>
              </td>
              <td class="p-4 border-b border-slate-200">
              <div class="block text-sm text-slate-800">
                  {{ $key->date }}
              </div>
              </td>
              <td class="p-4 border-b border-slate-200">
                <span class="blockbg-blue-700 min-w-full p-2 rounded-lg shadow-lg 
                   @if($key->task_status == 'pending') bg-green-600 text-white shadow-sm
                   @elseif($key->task_status == 'selesai') bg-red-900 text-white shadow-sm
                    @else bg-yellow-600 text-white @endif">
                    {{  ucfirst($key->task_status)  }}
                </span>
              </td>
              <td class="p-4 border-b border-slate-200">
              <div class="block text-sm text-slate-800">
                  {{ $key->department }}
              </div>
              </td>
              <td class="p-4 border-b border-slate-200">
              <div class="block text-sm text-slate-800">
                  {{ $key->blok }}
              </div>
              </td>
          </tr>
          @endforeach
          </tbody>
      </table>
    </div>  
</body>


</x-layout>