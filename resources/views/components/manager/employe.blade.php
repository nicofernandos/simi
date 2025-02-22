@include('components.manager.start')
@include('components.manager.navbar')

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    @includeIf('components.manager.sidebar')

            <!-- start content -->
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
                <thead class="text-start justify-items-start card">
                    <tr class="bg-sky-200">
                        <th class=" text-start font-semibold px-4 py-2 ">ID</th>
                        <th class="font-semibold text-start px-4 py-2 ">Nama</th>
                        <th class="font-semibold text-start px-4 py-2 ">Username</th>
                        <th class="font-semibold text-start px-4 py-2 ">Email</th>
                        <th class="font-semibold text-start px-4 py-2 ">Departement</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        

    </div>
    <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.manager.end')