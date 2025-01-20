@props(['active' => false ])
    
<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" type="button" class="{{ $active ? 'bg-red-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white text-center' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false}}" {{ $attributes }}>
    {{ $slot }}
</button>
    
    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelola Absensi</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Laporan Absensi</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
          </li>
        </ul>
    </div>
