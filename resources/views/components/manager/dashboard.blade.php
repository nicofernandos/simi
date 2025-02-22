@include('components.manager.start')
@include('components.manager.navbar')

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    @includeIf('components.manager.sidebar')

          <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    <div class="grid grid-cols-4 gap-5 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 ">


      <!-- card -->
      <div class="report-card">
          <div class="card">
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
          <div class="card">
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
          <div class="card">
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
          <div class="card">
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
  <div class="grid grid-cols-3 gap-4 xl:grid-cols-2 mt-4">
    <div class="report-card col-span-2 border-sky-900">
        <div class="card border-sky-950 outline-2">
            <div class="card-body flex flex-col">
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-indigo-700 fad fa-pencil"></div>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5">{{ $pro }}</h1>
                    <p>Pekerjaan Progress</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="report-card col">
        <div class="card">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-indigo-700 fad fa-clone"></div>
                    <span class="rounded-full text-white badge bg-teal-400 text-xs">
                        12%
                        <i class="fal fa-chevron-up ml-1"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 ">{{ $pen }}</h1>
                    <p>Pekerjaan Pending</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <!-- end card -->

</div>
</div>
<!-- end content -->

</div>
<!-- end wrapper -->

@include('components.manager.end')