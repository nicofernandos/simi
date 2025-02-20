<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="relative m-4 min-w-full px-2 py-4">
        <form action="{{ route('reportTask') }}" method="GET">
            @csrf
            <div class="flex grid grid-cols-3 h-20 items-center space-x-4">
                <!-- Tanggal Mulai -->
                <div>
                    <label for="start_date" class="block text-sm font-semibold text-gray-700">Tanggal Mulai</label>
                    <input type="date" id="start_date" name="start_date" class="py-2 px-3 border border-gray-300 rounded-md" required>
                </div>
        
                <!-- Tanggal Selesai -->
                <div>
                    <div class="">
                        <label for="end_date" class="block text-sm font-semibold text-gray-700">Tanggal Selesai</label>
                        <input type="date" id="end_date" name="end_date" class="py-2 px-3 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="w-30 h-30 rounded-md">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md h-10 w-15 text-clip text-justify text-sm">Cari Laporan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="relative grid flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="w-full text-left table-auto min-w-max">
            <thead class="shadow-sm">
                <tr class="font-semibold">
                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm leading-none text-slate-500">No Pekerjaan</p>
                    </th>
                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm leading-none text-slate-500">Judul Pekerjaan</p>
                    </th>
                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm leading-none text-slate-500">Deskripsi Pekerjaan</p>
                    </th>
                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm leading-none text-slate-500">Tanggal Selesai</p>
                    </th>
                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm leading-none text-slate-500">Status</p>
                    </th>
                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm leading-none text-slate-500">Lokasi</p>
                    </th>
                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                        <p class="block text-sm leading-none text-slate-500">Jumlah Blok</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($laporan as $task)
                    <tr class="hover:bg-slate-50 text-black font-semibold">
                        <td class="p-4 border-b border-slate-200">
                            <div class="block text-sm text-slate-800">
                                {{ $task->no_task }}
                            </div>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <div class="block text-sm text-slate-800">
                                {{ $task->title }}
                            </div>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <div class="block text-sm text-slate-800">
                                {{ $task->description }}
                            </div>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <div class="block text-sm text-slate-800">
                                {{ $task->date }}
                            </div>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <span class="block bg-blue-700 min-w-full p-2 rounded-lg shadow-lg 
                                @if($task->task_status == 'pending') bg-green-600 text-white shadow-sm
                                @elseif($task->task_status == 'selesai') bg-red-900 text-white shadow-sm
                                @else bg-yellow-600 text-white @endif">
                                {{ ucfirst($task->task_status) }}
                            </span>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <div class="block text-sm text-slate-800">
                                {{ $task->department }}
                            </div>
                        </td>
                        <td class="p-4 border-b border-slate-200">
                            <div class="block text-sm text-slate-800">
                                {{ $task->blok }}
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center p-4">
                            Tidak ada laporan untuk periode ini.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
