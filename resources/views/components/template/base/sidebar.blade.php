  <!-- start sidebar -->
  <div id="sideBar" class="rounded-xl text-white relative flex flex-col flex-wrap bg-blue-900 border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col rounded rounded-xl">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-md font-light text-white ml-2 mb-4 tracking-wider">homes</p>

      <div class="flex flex-col divide-y divide-gray-950 max-w-full">
        <a href="
        "></a>
            <!-- link -->
            <a href="{{ route('dashboard') }}" class="mb-3 py-1 px-2 rounded rounded-xlcapitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
              <i class="fad fa-house text-xs mr-2"></i>                
              Dashboard
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="{{ route('kelola_Pekerjaan') }}" class="mb-3 py-1 px-2 rounded rounded-xl capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
              <i class="fad fa-pen text-xs mr-2"></i>
              Kelola Pekerjaan
            </a>
            <!-- end link -->
            
            <!-- link -->
            <a href="/admin/work" class="mb-3 py-1 px-2 capitalize font-medium text-sm outline-2 outline-red-800 hover:text-teal-600 transition ease-in-out duration-500">
              <i class="fad fa-calendar text-xs mr-2"></i>
              Data Pekerjaan
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="/admin/employe" class="mb-3 py-1 px-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
              <i class="fad fa-users text-xs mr-2"></i>
              Kelola Karyawan
            </a>
            <!-- end link -->
            
            <!-- link -->
            <a href="/admin/departement" class="mb-3 py-1 px-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
              <i class="fad fa-building text-xs mr-2"></i>
              Kelola Departement
            </a>
            <!-- end link -->
            
            <!-- link -->
            <a href="{{ route('report') }}" class="mb-3 py-1 px-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
              <i class="fad fa-tasks text-xs mr-2"></i>
              Laporan Pekerjaan
            </a>
            <!-- end link -->
      </div>


    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->