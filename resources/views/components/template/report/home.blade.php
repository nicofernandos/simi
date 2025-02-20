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

    <div class="grid grid-cols-2 shadow-xl card font-semibold rounded-xl">
        <div class="card w-50">
            <div class="card-header">
                <h1>Pilih tanggal awal</h1>
                    <input type="date" class="px-2 py-4 shadow-xl ">
            </div>
        </div>
        <div class="card w-50">
            <div class="card-header">
                <h1>Pilih tanggal awal</h1>
                    <input type="date" class="px-2 py-4 shadow-xl ">
            </div>
        </div>
    </div>
  </div>

  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
