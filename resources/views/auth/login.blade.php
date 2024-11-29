<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    @vite('resources/css/custom.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!--FOOTER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <title>SIMI | Login</title>
    <link class="w-full h-full rounded-3xl" rel="icon" href="{{ asset('img/imb.jpeg') }}">
</head>
<header>

<div class="rounded-3xl w-20 h-20 my-5 mx-5">
  <img class="mx-auto h-full rounded-xl" src="{{ asset('img/imb.jpeg') }}" alt="">
</div>

</header>

<body class="border-2 border-color:inherit h-160">
<div class=" flex min-h-full flex-col justify-center px-6  lg:px-8 " >
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h1 class="text-center text-3xl font-bold text-gray-950"> {{ $title }}  </h1>
      <p class="text-center text-sm font-semibold text-gray-700"> Sistem Informasi Monitoring Karyawan</p>
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Masukkan akun</h2>
    </div>

    @if(session('succes'))
    <div class="alert alert-success text-center  text-white justify-content-center text-center bg-green-700 p-4 rounded-sm">
        {{ session('succes') }}
    </div>
    @endif
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm ">
     @error('email')
     <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
       <strong class="font-bold"> Error !</strong> 
       <span class="block sm:inline">{{ $message }}</span>
      </div>   
      @enderror
      <form class="space-y-6" action="{{ route('auth/login') }}" method="POST">
        @csrf 
        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email :</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" placeholder="your email" autocomplete="email" required class=" mx-auto block w-full rounded-md border-0 py-2 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-wrap text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password :</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="password" placeholder="your password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-2 pl-2 text-gray-900 shadow-sm  ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
          </div>
          @error('password')
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold"> Error !</strong> 
            <span class="block sm:inline">{{ $message }}</span>
           </div>   
           @enderror
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>
  
      <p class="mt-6 ml-2 text-left  text-sm/6 text-gray-500">
        Belum punya akun?
        <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500 hover:underline"> Daftar </a>
      </p>
    </div>
  </div>
  
</body>


</html>