@include('components.template.base.start')
@include('components.template.base.navbar')

<!-- start wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    @includeIf('components.template.base.sidebar')

    <!-- start content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <h1 class="font-semibold text-black text-end hover:underline hover:text-blue-700">
            {{ $title }}
        </h1>

        <!-- Tanggal Filter Form -->
        <div class="overflow-x-auto m-4 card border-tight border-slate-200 rounded-lg shadow-lg">
            <form action="{{ route('report') }}" method="GET">
                @csrf
                <div class="grid grid-cols-3 gap-2 shadow-xl card font-semibold rounded-xl">
                    <!-- Tanggal Mulai -->
                    <div class="card w-50">
                        <div class="card-header">
                            <h1>Pilih tanggal awal</h1>
                            <input type="date" id="start_date" name="start_date" class="px-2 py-4 shadow-xl" value="{{ old('start_date') }}">
                        </div>
                    </div>
                    <!-- Tanggal Selesai -->
                    <div class="card w-50">
                        <div class="card-header">
                            <h1>Pilih tanggal selesai</h1>
                            <input type="date" id="end_date" name="end_date" class="px-2 py-4 shadow-xl" value="{{ old('end_date') }}">
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="card w-50 mt-16">
                        <button type="submit" class="bg-blue-500 text-white font-light px-4 py-2 rounded-md hover:shadow-md">Cari Laporan</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="alert alert-success text-white justify-content-center bg-green-600 rounded-lg p-2">
            {{ session('success') }}
        </div>
        @endif

        <!-- No Data Found Message -->
        @if($laporan->isEmpty())
        <div class="alert alert-warning text-white justify-content-center bg-yellow-600 rounded-lg p-2">
            Data tidak ditemukan untuk rentang tanggal yang dipilih.
        </div>
        @endif

        <!-- Laporan Table -->
        <div class="overflow-x-auto">
            <div class="mt-4 mb-3 pr-10 text-right ">
                <a href="{{ route('reportGeneratePDF') }}?start_date={{ $start_date }}&end_date={{ $end_date }}" class="bg-red-500 hover:bg-red-700 text-white font-light font-thin py-2 px-4 rounded rounded-xl"> 
                    <i class="fad fa-file-pdf"></i>
                    Print Pdf
                </a>
            </div>
            <table class="min-w-full table-auto text-end shadow-md rounded-lg card">
                <thead class="text-start">
                    <tr class="bg-sky-200">
                        <th class="font-semibold text-start px-4 py-2">No Pekerjaan</th>
                        <th class="font-semibold text-start px-4 py-2">User Id</th>
                        <th class="font-semibold text-start px-4 py-2">Nama</th>
                        <th class="font-semibold text-start px-4 py-2">Pekerjaan</th>
                        <th class="font-semibold text-start px-4 py-2">Lokasi</th>
                        <th class="font-semibold text-start px-4 py-2">Blok</th>
                        <th class="font-semibold text-start px-4 py-2">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($laporan as $task)
                    <tr class="hover:bg-slate-50 text-black font-semibold">
                        <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $task->no_task }}</td>
                        <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $task->user_id }}</td>
                        <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $task->user->name }}</td>
                        <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $task->title }}</td>
                        <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $task->department }}</td>
                        <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $task->blok }}</td>
                        <td class="text-end px-4 py-2 border-2 border-slate-200">{{ $task->updated_at }}</td>
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

    </div>
    <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
