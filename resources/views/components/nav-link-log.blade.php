@props(['active' => false ])

<a style="margin-left: 100px;" class="flex justify-end {{ $active ? ' bg-blue-900   text-white' : 'text-gray-300 hover:bg-gray-700
hover:text-white bg-blue-600'}} rounded-md px-3 py-2 text-sm font-medium" 
aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}> {{ $slot }} </a>