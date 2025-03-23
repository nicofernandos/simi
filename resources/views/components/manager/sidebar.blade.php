  <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-blue-900 text-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col bg-blue-950">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-md font-light text-white ml-2 mb-4 tracking-wider">Homes</p>

      <div class="flex flex-col divide-y divide-gray-950 max-w-full">
          <a href="
          "></a>
          <!-- link -->
          <a href="{{ route('dashMan') }}" class="mb-3 py-1 px-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-house text-xs mr-2"></i>                
            Dashboard
          </a>
          <!-- end link -->

          <!-- link -->
          <a href="{{ route('empo') }}" class="mb-3 py-1 px-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-users text-xs mr-2"></i>
            Kelola Karyawan
          </a>
          <!-- end link -->
          
          <!-- link -->
          <a href="{{ route('depart') }}" class="mb-3 py-1 px-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-building text-xs mr-2"></i>
            Kelola Departement
          </a>
          <!-- end link -->
          
          <!-- link -->
          <a href="{{ route('reportMan') }}" class="mb-3 py-1 px-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-tasks text-xs mr-2"></i>
            Laporan Pekerjaan
          </a>
          <!-- end link -->
      </div>
    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->