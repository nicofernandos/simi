<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/custom.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!--FOOTER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <title>SIMI | Register</title>
    <link class="w-full h-full" rel="icon" href="{{ asset('img/imb.jpeg') }}">
</head>
<body class="border-2 border-color:inherit h-160">
<header>
    <div class="rounded-3xl w-20 h-20 my-5 mx-5 bg-black">
        <img class="mx-auto h-full" src="{{ asset('img/imb.jpeg') }}" alt="">
    </div>
</header>

<div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h1 class="text-center text-3xl font-bold text-gray-950">{{ $title }}</h1>
        <p class="text-center text-sm font-semibold text-gray-700">Sistem Informasi Monitoring Karyawan</p>
        <h2 class="mt-2 text-center text-2xl font-bold tracking-tight text-gray-900">Daftar Akun Terlebih Dahulu</h2>
    </div>

    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('auth.regist') }}" method="POST">
            @csrf
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-900">Name</label>
                <div class="mt-2">
                    <input id="name" name="name" type="text" placeholder="Enter your name" required
                           class="block w-full rounded-md border-gray-300 py-2 pl-2 shadow-sm ring-1 ring-inset focus:ring-2 focus:ring-indigo-600">
                </div>
                @error('name')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                  <strong class="font-bold"> Error !</strong> 
                  <span class="block sm:inline">{{ $message }}</span>
                 </div>   
                 @enderror
            </div>
            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-900">Username</label>
                <div class="mt-2">
                    <input id="username" name="username" type="text" placeholder="Enter your username" required
                           class="block w-full rounded-md border-gray-300 py-2 pl-2 shadow-sm ring-1 ring-inset focus:ring-2 focus:ring-indigo-600">
                </div>
                @error('username')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                  <strong class="font-bold"> Error !</strong> 
                  <span class="block sm:inline">{{ $message }}</span>
                 </div>   
                 @enderror
            </div>
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" placeholder="Enter your email" required
                           class="block w-full rounded-md border-gray-300 py-2 pl-2 shadow-sm ring-1 ring-inset focus:ring-2 focus:ring-indigo-600">
                </div>
                @error('email')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                  <strong class="font-bold"> Error !</strong> 
                  <span class="block sm:inline">{{ $message }}</span>
                 </div>   
                 @enderror
            </div>
            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                <div class="mt-2">
                    <input id="password" name="password" type="password" placeholder="Enter your password" required
                           class="block w-full rounded-md border-gray-300 py-2 pl-2 shadow-sm ring-1 ring-inset focus:ring-2 focus:ring-indigo-600">
                </div>
            </div>
            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-900">Confirm Password</label>
                <div class="mt-2">
                    <input id="password_confirmation" name="password_confirmation" type="password"
                           placeholder="Confirm your password" required
                           class="block w-full rounded-md border-gray-300 py-2 pl-2 shadow-sm ring-1 ring-inset focus:ring-2 focus:ring-indigo-600">
                </div>
                @error('password')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                  <strong class="font-bold"> Error !</strong> 
                  <span class="block sm:inline">{{ $message }}</span>
                 </div>   
                 @enderror
            </div>
            <!-- Submit Button -->
            <div>
                <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-white shadow-sm hover:bg-indigo-500">
                    Register
                </button>
            </div>
        </form>
        <p class="py-6 pt-2 pb-6 text-sm text-gray-500">
            Sudah punya akun?
            <a href="/" class="font-semibold text-indigo-600 hover:text-indigo-500 hover:underline">Login</a>
        </p>
    </div>
</div>
</body>
</html>
