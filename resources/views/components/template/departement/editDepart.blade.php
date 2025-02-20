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
      <form action="{{ route('departement.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="min-w-full space-y-3 px-2 py-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">ID</span>
                <input type="text" id="id" name="id" placeholder="id" value="{{ old('id',$department->id) }}" class="py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                @error('id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Nomor ID</span>
                <input type="text" id="no_id" name="no_id" placeholder="{{ old('no_id',$department->no_id) }}" value="{{ old('no_id',$department->no_id) }}" class="form-control py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                @error('no_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Name</span>
                <input type="text" id="name" name="name" placeholder="masukkan nama" value="{{ old('name',$department->name) }}" class="form-control py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                 @enderror
              </div>
              <div class="flex rounded-lg shadow-md border-2 border-slate-300">
                <span class="px-4 inline-flex items-center min-w-fit rounded-s-md border-2 border-e-2 border-gray-200 bg-gray-50 text-sm text-gray-600 text-gray-500">Description</span>
                <input type="text" id="description" name="description" value="{{ old('description', $department->description) }}" placeholder="masukkan description" class="form-cotrol py-3 px-4 pe-11 block w-full border-gray-200 shadow-sm rounded-e-lg text-sm text-gray-800 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="flex min-w-full grid grid-cols-2 gap-2 justify-end">
            <div class="flex grid grid-cols-2 text-center gap-2 py-2 px-4 justify-end">
                <button type="submit" class="bg-green-500  m-1 px-4 py-2 text-center text-white  rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                  Simpan
              </button>
              <a href="{{ route('departement.index') }}" class="bg-red-500 m-1 px-4 py-2 text-white rounded-md hover:bg-red-600 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
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
