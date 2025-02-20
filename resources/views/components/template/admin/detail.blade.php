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
                <span class="text-gray-700 font-semibold">12391</span>
            </div>
            <div class="flex items-center bg-slate-200 mx-2 my-2 gap-2">
                <span class="text-gray-800 text-warp">Nomor Pekerjaan</span>
                <span class="text-gray-700 font-semibold hover:text-blue-600 hover:underline">12391</span>
            </div>
        </div>

        <div class="flex grid grid-cols-4 px-2 py-4 gap-4">
            <div class="bg-slate-200 ">Nama </div>
            <div class="bg-slate-200 font-semibold">: Wildana</div>
            <div class="bg-slate-200 ">Departemen </div>
            <div class="bg-slate-200 font-semibold">: Watering</div>
            <div class="bg-slate-200 ">Pekerjaan</div>
            <div class="bg-slate-200 font-semibold">: Watering</div>
            <div class="bg-slate-200 ">Total blok </div>
            <div class="bg-slate-200 font-semibold">: 5 Blok</div>
            <div class="bg-slate-200 ">Tanggal Pekerjaan </div>
            <div class="bg-slate-200 font-semibold">: 13 Februari 2025</div>
            <div class="bg-slate-200 ">Tanggal Pekerjaan Selesai </div>
            <div class="bg-slate-200 font-semibold">: 14 Februari 2025</div>
            <h1 class="text-gray-700 font-bold"> Dokumentasi</h1>
        </div>

        <div class="grid grid-cols-3 gap-4 px-4 py-3">
            <div class="text-blue-600 text-center">
                <div>Pertama</div>
                <img class="w-32 h-32 mt-2 mx-auto shadow-xl rounded-lg" src="https://picsum.photos/300/300" alt="Pertama">
            </div>
            <div class="text-blue-600 text-center">
                <div>Kedua</div>
                <img class="w-32 h-32  mt-2 mx-auto shadow-xl rounded-lg" src="https://picsum.photos/300/300" alt="Kedua">
            </div>
            <div class="text-blue-600 text-center">
                <div>Ketiga</div>
                <img class="w-32 h-32 mt-2 mx-auto shadow-xl rounded-lg" src="https://picsum.photos/300/300" alt="Ketiga">
            </div>
        </div>

        <div class="flex mt-2 grid grid-flow-col-2 px-2 py-4 gap-4">
            <div class="bg-slate-200 ">Uraian Pekerjaan</div>
            <div class="bg-slate-200 font-semibold"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore magni hic velit quod eaque eveniet tempore ut nam, minima quam.</div>
        </div>
        <div class="flex m-4 justify-end">
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
