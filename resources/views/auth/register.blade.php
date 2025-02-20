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
        <link rel="stylesheet" href=" {{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
        <link rel="stylesheet" href="{{ asset('charts/css/flowbite.min.css') }}">
    
        <!-- ICON FONT AWESOME-->
        <link rel="stylesheet" href="{{ asset('charts/css/font-awesome.css') }}">
    
        <link rel="stylesheet" href="{{ asset('charts/css/ionicons.min.css') }}">

        <style>
            input::placeholder{
                font-family: Arial, Helvetica, sans-serif;
                font-size:14px;
                font-style: italic;
                color: gray;
            }
        </style>
    
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
    </div>

<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="min-w-full ">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <p class="text-center text-sm font-semibold text-gray-700">Sistem Informasi Monitoring Karyawan</p>
                    </div>
                </header>

                <form class="min-w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('auth.regist') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}
                        </label>

                        <input id="name"  type="text" placeholder="Enter your name" class="form-input w-full rounded-sm @error('name') border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  >
                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                           {{ $message }}
                        </p>
                        @enderror
                       
                    </div>
                    <div class="flex flex-wrap">
                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Username') }}
                        </label>

                        <input id="username"  type="text" placeholder="Masukkan username" class="form-input w-full rounded-sm @error('username') border-red-500 @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="name" autofocus  >
                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                           {{ $message }}
                        </p>
                        @enderror
                       
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                           {{ __('Email') }}
                        </label>

                        <input id="email" type="email" type="password"
                            class="form-input w-full @error('name')@enderror border-red-500 rounded-sm" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan email">

                     @error('name')
                     <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                     </p>
                     @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                         {{ __('Password') }}
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full border-red-500 " name="password" value="{{ old('password') }}"
                            required autocomplete="new-password" placeholder="Masukkan password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                           {{ $message }}
                        </p>
                        @enderror
                     
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('Konfirmasi password') }}
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            Submit
                        </button>

                        <p class="w-full text-sm text-center font-semibold text-gray-900 my-6 sm:text-sm sm:my-8">
                          {{ __('Sudah punya akun ?') }}
                            <a class="text-blue-500 text-light hover:text-blue-700 no-underline hover:underline" href="/">
                                {{ __('login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>

</div>
</body>

</html>
