<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href=" {{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
    <link rel="stylesheet" href="{{ asset('charts/css/flowbite.min.css') }}">

    <!-- ICON FONT AWESOME-->
    <link rel="stylesheet" href="{{ asset('charts/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('charts/css/ionicons.min.css') }}">

    <!--FOOTER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <title>Home</title>
    <link class="w-full h-full rounded-xl" rel="icon" href="{{ asset('img/imb.jpeg') }}">
</head>
<body  class="h-full overflow-auto">

<div class="min-h-full">
 
    <x-navbar></x-navbar>
  
    <x-header>{{ $title }}</x-header>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        {{ $slot }}
      </div>
    </main>
  </div>
  
</body>
<x-footer>
  
</x-footer>
</html>