@include('components.template.base.start')


@include('components.template.base.navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
  @includeIf('components.template.base.sidebar')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    <div class="grid grid-cols-4 gap-5 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 ">


      <!-- card -->
      <div class="report-card">
          <div class="card rounded rounded-lg border border-blue-500">
              <div class="card-body flex flex-col">
                  
                  <!-- top -->
                  <div class="flex flex-row justify-between items-center">
                      <div class="h6 text-indigo-700 fad fa-users "></div>
                      <span class="rounded-full text-white badge bg-teal-400 text-xs">
                          12%
                          <i class="fal fa-chevron-up ml-1"></i>
                      </span>
                  </div>
                  <!-- end top -->
  
                  <!-- bottom -->
                  <div class="mt-8">
                      <h1 class="h5 ">{{ $user }}</h1>
                      <p>User Terdaftar</p>
                  </div>                
                  <!-- end bottom -->
      
              </div>
          </div>
      </div>
      <!-- end card -->
  
  
      <!-- card -->
      <div class="report-card">
          <div class="card rounded rounded-lg border border-blue-500">
              <div class="card-body flex flex-col">
                  
                  <!-- top -->
                  <div class="flex flex-row justify-between items-center">
                      <div class="h6 text-red-700 fad fa-map"></div>
                      <span class="rounded-full text-white badge bg-red-400 text-xs">
                          6%
                          <i class="fal fa-chevron-down ml-1"></i>
                      </span>
                  </div>
                  <!-- end top -->
  
                  <!-- bottom -->
                  <div class="mt-8">
                      <h1 class="h5">{{ $task }}</h1>
                      <p>Pekerjaan</p>
                  </div>                
                  <!-- end bottom -->
      
              </div>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->
  
  
      <!-- card -->
      <div class="report-card">
          <div class="card rounded rounded-lg border border-blue-500">
              <div class="card-body flex flex-col">
                  
                  <!-- top -->
                  <div class="flex flex-row justify-between items-center">
                      <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                      <span class="rounded-full text-white badge bg-teal-400 text-xs">
                          72%
                          <i class="fal fa-chevron-up ml-1"></i>
                      </span>
                  </div>
                  <!-- end top -->
  
                  <!-- bottom -->
                  <div class="mt-8">
                      <h1 class="h5 "> {{ $depart }}</h1>
                      <p>total Departement</p>
                  </div>                
                  <!-- end bottom -->
      
              </div>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->
  
  
      <!-- card -->
      <div class="report-card">
          <div class="card rounded rounded-lg border border-blue-500">
              <div class="card-body flex flex-col">
                  
                  <!-- top -->
                  <div class="flex flex-row justify-between items-center">
                      <div class="h6 text-green-700 fad fa-sticky-note"></div>
                      <span class="rounded-full text-white badge bg-teal-400 text-xs">
                          150%
                          <i class="fal fa-chevron-up ml-1"></i>
                      </span>
                  </div>
                  <!-- end top -->
  
                  <!-- bottom -->
                  <div class="mt-8">
                      <h1 class="h5"> {{ $sel }}</h1>
                      <p>Pekerjaan Selesai</p>
                  </div>                
                  <!-- end bottom -->
      
              </div>
          </div>
          <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->
      
  
  </div>

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
